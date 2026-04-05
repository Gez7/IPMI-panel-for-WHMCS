<?php
// /var/www/html/jobs/check_status.php
// Background job: updates server_status table using ipmitool so UI loads fast.

require_once __DIR__ . '/../config.php'; // must create $mysqli
require_once __DIR__ . '/../lib/ipmi_service.php';
require_once __DIR__ . '/../lib/ipmi_web_probe.php';

// Disable execution time limit for CLI continuous mode
if (php_sapi_name() === 'cli') {
  set_time_limit(0);
  ini_set('max_execution_time', 0);
}

// Optional CLI args:
// --id=123   => check one server only
// --limit=40 => max stale servers per run (full mode)
$argvList = $_SERVER['argv'] ?? [];
$targetServerId = 0;
$limit = 40;
foreach ($argvList as $arg) {
  $arg = (string)$arg;
  if (strpos($arg, '--id=') === 0) {
    $targetServerId = (int)substr($arg, 5);
  } elseif (strpos($arg, '--limit=') === 0) {
    $parsedLimit = (int)substr($arg, 8);
    if ($parsedLimit > 0) {
      $limit = $parsedLimit;
    }
  }
}

// Lock strategy:
// - full sweep uses one global lock
// - single-server refresh uses per-server lock, so manual refresh is not blocked by full sweep
$lockFile = ($targetServerId > 0)
  ? (sys_get_temp_dir() . '/ipmi_status_checker_' . $targetServerId . '.lock')
  : (sys_get_temp_dir() . '/ipmi_status_checker.lock');
$lockFp = fopen($lockFile, 'c');
if (!$lockFp || !flock($lockFp, LOCK_EX | LOCK_NB)) {
  exit; // already running
}

// Use IPMI service for status checks
$ipmiService = new IPMIService($mysqli);

// Cleanup orphan rows from previous manual deletions/migrations.
$mysqli->query("DELETE ss FROM server_status ss LEFT JOIN servers s ON s.id = ss.server_id WHERE s.id IS NULL");
$mysqli->query("DELETE sp FROM server_suspension sp LEFT JOIN servers s ON s.id = sp.server_id WHERE s.id IS NULL");
$mysqli->query("DELETE us FROM user_servers us LEFT JOIN servers s ON s.id = us.server_id WHERE s.id IS NULL");

if ($targetServerId > 0) {
  // Single-server check (used by manual refresh paths)
  try {
    $ipmiService->checkStatus($targetServerId);
  } catch (Exception $e) {
    error_log("Status check failed for server $targetServerId: " . $e->getMessage());
  }
  if (ipmiWebProbeShouldRun()) {
    $probe = ipmiWebProbeServerWebUi($mysqli, $targetServerId);
    ipmiWebProbeLogResult($targetServerId, $probe);
  }
} else {
  // Stale-only batch check to keep runtime small.
  $stmt = $mysqli->prepare("
    SELECT s.id
    FROM servers s
    LEFT JOIN server_suspension ss ON s.id = ss.server_id
    LEFT JOIN server_status st ON st.server_id = s.id
    WHERE COALESCE(ss.suspended, 0) = 0
      AND (st.last_checked IS NULL OR st.last_checked < (NOW() - INTERVAL 45 SECOND))
    ORDER BY COALESCE(st.last_checked, '1970-01-01 00:00:00') ASC
    LIMIT ?
  ");
  if (!$stmt) {
    exit("DB error: " . $mysqli->error);
  }
  $stmt->bind_param("i", $limit);
  $stmt->execute();
  $res = $stmt->get_result();
  if (!$res) {
    $stmt->close();
    exit("DB error: " . $mysqli->error);
  }

  while ($row = $res->fetch_assoc()) {
    $serverId = (int)$row['id'];
    try {
      $ipmiService->checkStatus($serverId);
    } catch (Exception $e) {
      error_log("Status check failed for server $serverId: " . $e->getMessage());
    }
    if (ipmiWebProbeShouldRun()) {
      $probe = ipmiWebProbeServerWebUi($mysqli, $serverId);
      ipmiWebProbeLogResult($serverId, $probe);
    }
  }
  $stmt->close();
}

flock($lockFp, LOCK_UN);
fclose($lockFp);

// Continuous loop only when explicitly requested with --loop.
// This prevents cron-invoked CLI runs from staying alive forever.
$runContinuous = (php_sapi_name() === 'cli') && in_array('--loop', $argvList, true);
if ($runContinuous) {
  echo "Running in continuous mode (--loop). Press Ctrl+C to stop.\n";

  while (true) {
    echo "[" . date('Y-m-d H:i:s') . "] Waiting 30 seconds before next check...\n";
    sleep(30);

    // Re-acquire lock for next iteration
    $lockFp = fopen($lockFile, 'c');
    if (!$lockFp || !flock($lockFp, LOCK_EX | LOCK_NB)) {
      echo "[" . date('Y-m-d H:i:s') . "] Another instance is running, waiting...\n";
      continue;
    }

    if (!$mysqli->ping()) {
      echo "[" . date('Y-m-d H:i:s') . "] Database connection lost, reconnecting...\n";
      @$mysqli->close();
      $mysqli = new mysqli('localhost', 'root', 'Bthoster12!@', 'ipmi_panel');
      if ($mysqli->connect_error) {
        echo "[" . date('Y-m-d H:i:s') . "] Reconnect failed: " . $mysqli->connect_error . "\n";
        flock($lockFp, LOCK_UN);
        fclose($lockFp);
        continue;
      }
    }

    // Re-initialize IPMI service
    $ipmiService = new IPMIService($mysqli);

    // Re-run stale-only logic in loop mode
    $stmt = $mysqli->prepare("
      SELECT s.id
      FROM servers s
      LEFT JOIN server_suspension ss ON s.id = ss.server_id
      LEFT JOIN server_status st ON st.server_id = s.id
      WHERE COALESCE(ss.suspended, 0) = 0
        AND (st.last_checked IS NULL OR st.last_checked < (NOW() - INTERVAL 45 SECOND))
      ORDER BY COALESCE(st.last_checked, '1970-01-01 00:00:00') ASC
      LIMIT ?
    ");
    if (!$stmt) {
      echo "[" . date('Y-m-d H:i:s') . "] DB prepare error: " . $mysqli->error . "\n";
      flock($lockFp, LOCK_UN);
      fclose($lockFp);
      continue;
    }
    $stmt->bind_param("i", $limit);
    $stmt->execute();
    $res = $stmt->get_result();
    $count = $res ? $res->num_rows : 0;

    echo "[" . date('Y-m-d H:i:s') . "] Checking " . $count . " stale server(s)...\n";

    while ($res && ($row = $res->fetch_assoc())) {
      $serverId = (int)$row['id'];
      try {
        $ipmiService->checkStatus($serverId);
      } catch (Exception $e) {
        error_log("Status check failed for server $serverId: " . $e->getMessage());
      }
      if (ipmiWebProbeShouldRun()) {
        $probe = ipmiWebProbeServerWebUi($mysqli, $serverId);
        ipmiWebProbeLogResult($serverId, $probe);
      }
    }
    $stmt->close();

    echo "[" . date('Y-m-d H:i:s') . "] Status check completed.\n";

    // Release lock before next sleep
    flock($lockFp, LOCK_UN);
    fclose($lockFp);
  }
}
