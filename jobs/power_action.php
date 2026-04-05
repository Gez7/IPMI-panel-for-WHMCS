<?php
// /var/www/html/jobs/power_action.php
// Runs a single queued IPMI power action in background.

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../lib/ipmi_service.php';

if (php_sapi_name() !== 'cli') {
  exit(1);
}

set_time_limit(0);
ini_set('max_execution_time', 0);

$serverId = 0;
$action = '';
foreach ($_SERVER['argv'] ?? [] as $arg) {
  $arg = (string)$arg;
  if (strpos($arg, '--id=') === 0) {
    $serverId = (int)substr($arg, 5);
  } elseif (strpos($arg, '--action=') === 0) {
    $action = trim((string)substr($arg, 9), "\"' ");
  }
}

if ($serverId <= 0 || !in_array($action, ['off', 'on', 'reset'], true)) {
  exit(1);
}

// Per-server lock (not per action) to avoid conflicting queued commands.
$lockFile = sys_get_temp_dir() . '/ipmi_power_' . $serverId . '.lock';
$lockFp = fopen($lockFile, 'c');
if (!$lockFp || !flock($lockFp, LOCK_EX | LOCK_NB)) {
  exit(0);
}

$ipmiService = new IPMIService($mysqli);

try {
  if ($action === 'off') {
    $ipmiService->powerOff($serverId, null);
  } elseif ($action === 'on') {
    $ipmiService->powerOn($serverId, null);
  } else {
    $ipmiService->reboot($serverId, null);
  }

  // Refresh cache right after command execution so panel/WHMCS can reflect new state faster.
  try {
    $ipmiService->checkStatus($serverId);
  } catch (Exception $e) {
    error_log("Queued power action status refresh failed (server {$serverId}): " . $e->getMessage());
  }
} catch (Exception $e) {
  error_log("Queued power action failed (server {$serverId}, action {$action}): " . $e->getMessage());
}

flock($lockFp, LOCK_UN);
fclose($lockFp);
