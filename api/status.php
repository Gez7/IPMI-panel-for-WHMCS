<?php
session_start();
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../lib/ipmi_service.php';
header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

if (!isset($_SESSION['user_id'])) {
  http_response_code(401);
  echo json_encode(['error' => 'Authentication required']);
  exit;
}

$userId = (int)($_SESSION['user_id'] ?? 0);
$role = (string)($_SESSION['role'] ?? '');
$isAdmin = ($role === 'admin');
$isReseller = ($role === 'reseller');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$full = isset($_GET['full']) && $_GET['full'] == '1';
$live = isset($_GET['live']) && $_GET['live'] == '1';

/**
 * Queue background status check so API response stays fast.
 * Uses a small cooldown for full refresh to avoid process floods.
 */
function queueBackgroundStatusCheck($serverId = 0)
{
  $phpBin = 'php';
  if (php_sapi_name() === 'cli' && defined('PHP_BINARY') && PHP_BINARY) {
    $binName = strtolower(basename((string)PHP_BINARY));
    if (strpos($binName, 'php') !== false) {
      $phpBin = (string)PHP_BINARY;
    }
  }

  $script = __DIR__ . '/../jobs/check_status.php';
  if (!is_file($script)) {
    return;
  }

  if ((int)$serverId <= 0) {
    $cooldownFile = sys_get_temp_dir() . '/ipmi_status_bg_lastkick';
    $lastKick = 0;
    if (is_file($cooldownFile)) {
      $lastKick = (int)@file_get_contents($cooldownFile);
    }
    // Prevent starting too many background checks from frequent dashboard polls.
    if (time() - $lastKick < 20) {
      return;
    }
    @file_put_contents($cooldownFile, (string)time(), LOCK_EX);
    $cmd = escapeshellarg($phpBin) . ' ' . escapeshellarg($script) . ' --limit=60 > /dev/null 2>&1 &';
    @shell_exec($cmd);
    return;
  }

  $sid = (int)$serverId;
  $cmd = escapeshellarg($phpBin) . ' ' . escapeshellarg($script) . ' --id=' . $sid . ' > /dev/null 2>&1 &';
  @shell_exec($cmd);
}

if ($live) {
  $ipmiService = new IPMIService($mysqli);
}

if ($id > 0) {
  // Enforce server-level access scope first.
  if ($full) {
    if ($isAdmin || $isReseller) {
      $stmt = $mysqli->prepare("
        SELECT s.id as server_id, st.power_state, st.reachable, st.last_checked, st.last_error,
               COALESCE(ss.suspended, 0) as suspended
        FROM servers s
        LEFT JOIN server_status st ON s.id = st.server_id
        LEFT JOIN server_suspension ss ON s.id = ss.server_id
        WHERE s.id = ?
      ");
      $stmt->bind_param("i", $id);
    } else {
      $stmt = $mysqli->prepare("
        SELECT s.id as server_id, st.power_state, st.reachable, st.last_checked, st.last_error,
               COALESCE(ss.suspended, 0) as suspended
        FROM servers s
        JOIN user_servers us ON us.server_id = s.id
        LEFT JOIN server_status st ON s.id = st.server_id
        LEFT JOIN server_suspension ss ON s.id = ss.server_id
        WHERE s.id = ? AND us.user_id = ?
      ");
      $stmt->bind_param("ii", $id, $userId);
    }
  } else {
    if ($isAdmin || $isReseller) {
      $stmt = $mysqli->prepare("
        SELECT s.id as server_id, st.power_state, st.reachable, st.last_checked
        FROM servers s
        LEFT JOIN server_status st ON s.id = st.server_id
        WHERE s.id = ?
      ");
      $stmt->bind_param("i", $id);
    } else {
      $stmt = $mysqli->prepare("
        SELECT s.id as server_id, st.power_state, st.reachable, st.last_checked
        FROM servers s
        JOIN user_servers us ON us.server_id = s.id
        LEFT JOIN server_status st ON s.id = st.server_id
        WHERE s.id = ? AND us.user_id = ?
      ");
      $stmt->bind_param("ii", $id, $userId);
    }
  }
  $stmt->execute();
  $res = $stmt->get_result();
  $row = $res->fetch_assoc();
  if (!$row) {
    http_response_code(403);
    echo json_encode(['error' => 'No permission']);
    exit;
  }

  if ($live) {
    try {
      $ipmiService->checkStatus($id);
    } catch (Exception $e) {
      // Keep endpoint resilient: return latest cached row even if live check fails.
    }

    // Re-read after live check.
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc() ?: $row;
  }
  $stmt->close();

  echo json_encode($row ?: []);
  exit;
}

// All servers - start from servers table to include all servers
if ($live) {
  // Non-blocking: queue background refresh and return cached data immediately.
  queueBackgroundStatusCheck(0);
}

if ($full) {
  if ($isAdmin || $isReseller) {
    $res = $mysqli->query("
      SELECT s.id as server_id, 
             st.power_state, st.reachable, st.last_checked, st.last_error,
             COALESCE(ss.suspended, 0) as suspended
      FROM servers s
      LEFT JOIN server_status st ON s.id = st.server_id
      LEFT JOIN server_suspension ss ON s.id = ss.server_id
    ");
  } else {
    $stmt = $mysqli->prepare("
      SELECT s.id as server_id, 
             st.power_state, st.reachable, st.last_checked, st.last_error,
             COALESCE(ss.suspended, 0) as suspended
      FROM servers s
      JOIN user_servers us ON us.server_id = s.id
      LEFT JOIN server_status st ON s.id = st.server_id
      LEFT JOIN server_suspension ss ON s.id = ss.server_id
      WHERE us.user_id = ?
    ");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $res = $stmt->get_result();
  }
} else {
  if ($isAdmin || $isReseller) {
    $res = $mysqli->query("
      SELECT s.id as server_id, st.power_state, st.reachable, st.last_checked 
      FROM servers s
      LEFT JOIN server_status st ON s.id = st.server_id
    ");
  } else {
    $stmt = $mysqli->prepare("
      SELECT s.id as server_id, st.power_state, st.reachable, st.last_checked 
      FROM servers s
      JOIN user_servers us ON us.server_id = s.id
      LEFT JOIN server_status st ON s.id = st.server_id
      WHERE us.user_id = ?
    ");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $res = $stmt->get_result();
  }
}
$out = [];
while ($row = $res->fetch_assoc()) $out[] = $row;
echo json_encode($out);
