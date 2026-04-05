<?php
/**
 * KVM Console launcher.
 * Creates an IPMI web session and redirects to the vendor-specific
 * KVM console path through the reverse proxy.
 */
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib/login_redirect.php';
require_once __DIR__ . '/lib/ipmi_web_session.php';

if (!isset($_SESSION['user_id'])) {
    ipmiRedirectUnauthenticatedToLogin();
}

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Referrer-Policy: same-origin');

$userId = (int)($_SESSION['user_id'] ?? 0);
$role = (string)($_SESSION['role'] ?? 'user');
$serverId = (int)($_GET['id'] ?? 0);
$requestCsrf = (string)($_GET['csrf_token'] ?? '');
$sessionCsrf = (string)($_SESSION['csrf_token'] ?? '');
$error = '';

try {
    if ($serverId <= 0) {
        throw new Exception('Missing server ID');
    }
    if ($requestCsrf !== '' && $sessionCsrf !== '' && !hash_equals($sessionCsrf, $requestCsrf)) {
        throw new Exception('Invalid session request token');
    }

    ipmiWebCleanupExpiredSessions($mysqli);
    $sessionData = ipmiWebCreateSession($mysqli, $serverId, $userId, $role, 7200);

    $launchUrl = ipmiWebKvmConsoleUrl($sessionData);
    header('Location: ' . $launchUrl, true, 302);
    exit();
} catch (Throwable $e) {
    $error = $e->getMessage();
}

$title = 'KVM Console';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="stylesheet" href="assets/panel.css">
</head>
<body class="ipmi-login">
  <main class="ipmi-login-main" style="max-width:780px;margin:40px auto;">
    <section class="ipmi-card" style="padding:28px;">
      <h1 class="ipmi-login-form-title" style="margin-bottom:12px;">KVM Console</h1>
      <p class="ipmi-login-error" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
      <p><a href="index.php" class="ipmi-btn ipmi-btn-refresh">Back to panel</a></p>
    </section>
  </main>
</body>
</html>
