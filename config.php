<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('IPMI_USER', 'bthoster');
define('IPMI_PASS', 'PhVbWJkMbntDZ7aM'); // <- o pui TU
$host = 'localhost';
$db   = 'ipmi_panel';
$user = 'root';  // schimba cu userul tau MySQL
$pass = 'Bthoster12!@';      // parola MySQL

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}


if (!defined('ENCRYPTION_KEY')) {
  define('ENCRYPTION_KEY', 'YOUR_GENERATED_64_CHARACTER_HEX_STRING_HERE');
}

/** Set true (or env IPMI_PROXY_DEBUG=1) to log proxy decisions; tokens/cookies redacted in logs. */
if (!defined('IPMI_PROXY_DEBUG')) {
    define('IPMI_PROXY_DEBUG', false);
}

/**
 * After each IPMI status check (CLI cron), probe BMC web auto-login + iLO session_info.
 * Disable: define('IPMI_WEB_PROBE_AUTO', false); or env IPMI_WEB_PROBE=0
 */
if (!defined('IPMI_WEB_PROBE_AUTO')) {
    define('IPMI_WEB_PROBE_AUTO', true);
}

require_once __DIR__ . '/lib/encryption.php';

?>
