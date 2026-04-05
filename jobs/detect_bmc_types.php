<?php
// /var/www/html/jobs/detect_bmc_types.php
// Background job: detect BMC type for provided server IDs.

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../lib/encryption.php';

if (php_sapi_name() === 'cli') {
  set_time_limit(0);
  ini_set('max_execution_time', 0);
}

function detectBmcTypeForServer($ip, $user, $pass)
{
  $ip = trim((string)$ip);
  $user = trim((string)$user);
  $pass = (string)$pass;

  if ($ip === '' || $user === '' || $pass === '') {
    return 'generic';
  }

  $timeoutCmd = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') ? '' : 'timeout 6 ';
  $attempts = [];
  $attempts[] = ['interface' => 'lanplus', 'cipher' => null];
  foreach ([17, 3, 8] as $cipher) {
    $attempts[] = ['interface' => 'lanplus', 'cipher' => $cipher];
  }
  $attempts[] = ['interface' => 'lan', 'cipher' => null];
  $privilegeLevels = ['ADMINISTRATOR', 'OPERATOR', 'USER'];

  $output = '';
  $success = false;
  foreach ($attempts as $attempt) {
    $iface = $attempt['interface'];
    $cipher = $attempt['cipher'];
    foreach ($privilegeLevels as $privilege) {
      $cmd = $timeoutCmd
        . "ipmitool -I " . $iface
        . " -L " . $privilege
        . " -H " . escapeshellarg($ip)
        . " -U " . escapeshellarg($user)
        . " -P " . escapeshellarg($pass);

      if ($iface === 'lanplus' && $cipher !== null) {
        $cmd .= " -C " . (int)$cipher;
      }

      $cmd .= " mc info 2>&1";
      $output = (string)shell_exec($cmd);
      $normalized = strtolower(trim($output));

      $isFailure = (
        $normalized === '' ||
        strpos($normalized, 'error') !== false ||
        strpos($normalized, 'unable') !== false ||
        strpos($normalized, 'invalid') !== false
      );

      if (!$isFailure) {
        $success = true;
        break;
      }
    }
    if ($success) {
      break;
    }
  }

  if (!$success) {
    foreach ($attempts as $attempt) {
      $iface = $attempt['interface'];
      $cipher = $attempt['cipher'];
      foreach ($privilegeLevels as $privilege) {
        $cmd = $timeoutCmd
          . "ipmitool -I " . $iface
          . " -L " . $privilege
          . " -H " . escapeshellarg($ip)
          . " -U " . escapeshellarg($user)
          . " -P " . escapeshellarg($pass);

        if ($iface === 'lanplus' && $cipher !== null) {
          $cmd .= " -C " . (int)$cipher;
        }

        $cmd .= " fru print 0 2>&1";
        $fallbackOutput = (string)shell_exec($cmd);
        $fallbackNormalized = strtolower(trim($fallbackOutput));
        $isFailure = (
          $fallbackNormalized === '' ||
          strpos($fallbackNormalized, 'error') !== false ||
          strpos($fallbackNormalized, 'unable') !== false ||
          strpos($fallbackNormalized, 'invalid') !== false
        );
        if (!$isFailure) {
          $output = $fallbackOutput;
          $success = true;
          break;
        }
      }
      if ($success) {
        break;
      }
    }
  }

  $normalized = strtolower((string)$output);

  if (
    strpos($normalized, 'integrated lights-out') !== false ||
    strpos($normalized, 'hewlett') !== false ||
    strpos($normalized, 'hpe') !== false ||
    strpos($normalized, ' ilo') !== false
  ) {
    return 'ilo4';
  }

  if (
    strpos($normalized, 'idrac') !== false ||
    strpos($normalized, 'dell') !== false
  ) {
    return 'idrac';
  }

  if (strpos($normalized, 'supermicro') !== false) {
    return 'supermicro';
  }

  if (strpos($normalized, 'asrockrack') !== false || strpos($normalized, 'asrock') !== false) {
    return 'supermicro';
  }

  return 'generic';
}

$idsArg = '';
foreach ($_SERVER['argv'] ?? [] as $arg) {
  if (strpos((string)$arg, '--ids=') === 0) {
    $idsArg = (string)substr((string)$arg, 6);
    break;
  }
}

if ($idsArg === '') {
  exit(0);
}

$ids = [];
foreach (explode(',', $idsArg) as $part) {
  $id = (int)trim((string)$part);
  if ($id > 0) {
    $ids[] = $id;
  }
}

$ids = array_values(array_unique($ids));
if (empty($ids)) {
  exit(0);
}

$in = implode(',', array_fill(0, count($ids), '?'));
$types = str_repeat('i', count($ids));

$stmt = $mysqli->prepare("SELECT id, ipmi_ip, ipmi_user, ipmi_pass FROM servers WHERE id IN ($in)");
if (!$stmt) {
  exit(1);
}
$stmt->bind_param($types, ...$ids);
$stmt->execute();
$res = $stmt->get_result();
$rows = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
$stmt->close();

$updateStmt = $mysqli->prepare("UPDATE servers SET bmc_type = ? WHERE id = ?");
if (!$updateStmt) {
  exit(1);
}

foreach ($rows as $row) {
  $serverId = (int)$row['id'];
  $ip = (string)$row['ipmi_ip'];
  $encUser = (string)$row['ipmi_user'];
  $encPass = (string)$row['ipmi_pass'];

  try {
    $user = Encryption::decrypt($encUser);
    $pass = Encryption::decrypt($encPass);
  } catch (Throwable $e) {
    $user = $encUser;
    $pass = $encPass;
  }

  $detected = detectBmcTypeForServer($ip, $user, $pass);

  try {
    $updateStmt->bind_param("si", $detected, $serverId);
    $updateStmt->execute();
  } catch (Throwable $e) {
    // keep loop alive
    error_log("BMC detect update failed for server {$serverId}: " . $e->getMessage());
  }
}

$updateStmt->close();

exit(0);
