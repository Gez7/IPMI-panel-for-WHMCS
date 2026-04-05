<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
  header('Location: login.php');
  exit();
}

$user_id = $_SESSION['user_id'];
$is_admin = ($_SESSION['role'] === 'admin');
$is_reseller = ($_SESSION['role'] === 'reseller');

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = $_SESSION['csrf_token'];

function isValidCsrfToken($token)
{
  return isset($_SESSION['csrf_token']) && is_string($token) && hash_equals($_SESSION['csrf_token'], $token);
}

// Handle delete
if (isset($_GET['delete'])) {
  $id = intval($_GET['delete']);
  $token = $_GET['csrf'] ?? '';
  if (!isValidCsrfToken($token)) {
    $_SESSION['message'] = "Invalid CSRF token";
    $_SESSION['messageType'] = "error";
  } else {
    $stmt = $mysqli->prepare("DELETE FROM api_keys WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $_SESSION['message'] = "API key deleted successfully";
    $_SESSION['messageType'] = "success";
  }
  header('Location: admin_api_keys.php');
  exit();
}

// Handle toggle active
if (isset($_GET['toggle'])) {
  $id = intval($_GET['toggle']);
  $token = $_GET['csrf'] ?? '';
  if (!isValidCsrfToken($token)) {
    $_SESSION['message'] = "Invalid CSRF token";
    $_SESSION['messageType'] = "error";
  } else {
    $stmt = $mysqli->prepare("UPDATE api_keys SET active = NOT active WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $_SESSION['message'] = "API key status updated";
    $_SESSION['messageType'] = "success";
  }
  header('Location: admin_api_keys.php');
  exit();
}

// Handle form submission (add)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $token = $_POST['csrf_token'] ?? '';
  if (!isValidCsrfToken($token)) {
    $_SESSION['message'] = "Invalid CSRF token";
    $_SESSION['messageType'] = "error";
    header('Location: admin_api_keys.php');
    exit();
  }

  $key_name = trim((string)($_POST['key_name'] ?? ''));
  $allowed_ips = trim((string)($_POST['allowed_ips'] ?? ''));
  if ($key_name === '') {
    $_SESSION['message'] = "Key name is required";
    $_SESSION['messageType'] = "error";
    header('Location: admin_api_keys.php');
    exit();
  }

  // Generate API key
  $api_key = bin2hex(random_bytes(32));

  $stmt = $mysqli->prepare("INSERT INTO api_keys (key_name, api_key, allowed_ips) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $key_name, $api_key, $allowed_ips);
  $stmt->execute();
  $stmt->close();

  $_SESSION['message'] = "API key created: " . $api_key;
  $_SESSION['messageType'] = "success";
  header('Location: admin_api_keys.php');
  exit();
}

// Get message from session and clear it
$message = '';
$messageType = '';
if (isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
  $messageType = $_SESSION['messageType'];
  unset($_SESSION['message']);
  unset($_SESSION['messageType']);
}

// Get API keys
$keys = $mysqli->query("SELECT * FROM api_keys ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>API Keys - IPMI Panel</title>
  <link rel="stylesheet" href="assets/panel.css">
  <script>
    function toggleMobileMenu() {
      const mobileNav = document.getElementById('mobileNav');
      mobileNav.classList.toggle('active');
    }

    function closeMobileMenu() {
      const mobileNav = document.getElementById('mobileNav');
      mobileNav.classList.remove('active');
    }

    document.addEventListener('click', function(event) {
      const mobileNav = document.getElementById('mobileNav');
      const menuToggle = document.querySelector('.mobile-menu-toggle');
      
      if (mobileNav && menuToggle && 
          !mobileNav.contains(event.target) && 
          !menuToggle.contains(event.target) &&
          mobileNav.classList.contains('active')) {
        mobileNav.classList.remove('active');
      }
    });

    // Preserve scroll position on form submission and link clicks
    document.addEventListener('DOMContentLoaded', function() {
      // Restore scroll position if available
      const savedScroll = sessionStorage.getItem('scrollPos_admin_api_keys');
      if (savedScroll !== null) {
        window.scrollTo(0, parseInt(savedScroll));
        sessionStorage.removeItem('scrollPos_admin_api_keys');
      }

      // Save scroll position before form submission
      const form = document.querySelector('form[method="POST"]');
      if (form) {
        form.addEventListener('submit', function() {
          sessionStorage.setItem('scrollPos_admin_api_keys', window.pageYOffset || document.documentElement.scrollTop);
        });
      }

      // Save scroll position before clicking redirect links
      document.querySelectorAll('a[href*="?delete="], a[href*="?toggle="]').forEach(function(link) {
        link.addEventListener('click', function() {
          sessionStorage.setItem('scrollPos_admin_api_keys', window.pageYOffset || document.documentElement.scrollTop);
        });
      });
    });
  </script>
  <script src="assets/ipmi-row-actions.js" defer></script>
</head>

<body>
  <?php
  $ipmiActiveNav = 'api_keys';
  $ipmiPageTitle = 'API keys';
  $ipmiPageDescription = 'Generate keys, optionally restrict by IP, and authenticate automation or WHMCS against the panel API.';
  require __DIR__ . '/inc/panel_header.php';
  ?>

  <div class="container">
    <?php if ($message): ?>
      <div class="message <?= $messageType ?>" id="alertMessage" onclick="this.remove()"><?= htmlspecialchars($message) ?></div>
      <script>
        document.addEventListener('click', function(e) {
          const alert = document.getElementById('alertMessage');
          if (alert && !alert.contains(e.target)) {
            alert.remove();
          }
        });
        setTimeout(function() {
          const alert = document.getElementById('alertMessage');
          if (alert) alert.remove();
        }, 5000);
      </script>
    <?php endif; ?>

    <h2>Create New API Key</h2>
    <form method="POST">
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8') ?>">
      <label>Key Name:</label>
      <input type="text" name="key_name" required placeholder="e.g., WHMCS Integration">

      <label>Allowed IPs (comma-separated, leave empty for all):</label>
      <textarea name="allowed_ips" rows="3" placeholder="192.168.1.1, 10.0.0.1"></textarea>

      <button type="submit">Generate API Key</button>
    </form>

    <h2>API Keys List</h2>
    <div class="table-container">
    <table>
      <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>API Key</th>
        <th>Allowed IPs</th>
        <th>Status</th>
        <th>Last Used</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      <?php while ($k = $keys->fetch_assoc()): ?>
        <tr class="<?= (int)$k['active'] === 0 ? 'inactive' : '' ?>">
          <td><?= $k['id'] ?></td>
          <td><?= htmlspecialchars($k['key_name']) ?></td>
          <td><span class="api-key"><?= htmlspecialchars($k['api_key']) ?></span></td>
          <td><?= htmlspecialchars($k['allowed_ips'] ?: 'All IPs') ?></td>
          <td><?= (int)$k['active'] === 1 ? 'Active' : 'Inactive' ?></td>
          <td><?= $k['last_used'] ?: 'Never' ?></td>
          <td><?= $k['created_at'] ?></td>
          <?php
            $apiKid = (int) $k['id'];
            $apiKname = htmlspecialchars($k['key_name'], ENT_QUOTES, 'UTF-8');
            $apiToggleLabel = (int) $k['active'] === 1 ? 'Deactivate' : 'Activate';
            $apiMenuId = 'ipmi-apikey-actions-' . $apiKid;
            $apiBtnId = 'ipmi-apikey-actions-btn-' . $apiKid;
            $apiCsrf = urlencode($csrfToken);
          ?>
          <td class="ipmi-actions-cell">
            <div class="ipmi-row-actions">
              <button type="button" class="ipmi-actions-trigger" id="<?= $apiBtnId ?>"
                aria-haspopup="true" aria-expanded="false" aria-controls="<?= $apiMenuId ?>">
                <span class="ipmi-sr-only">Actions for key <?= $apiKname ?></span>
                <svg class="ipmi-actions-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <circle cx="12" cy="5" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="12" cy="19" r="2"/>
                </svg>
              </button>
              <div class="ipmi-actions-menu" id="<?= $apiMenuId ?>" role="menu" aria-labelledby="<?= $apiBtnId ?>" hidden>
                <a href="?toggle=<?= $apiKid ?>&csrf=<?= $apiCsrf ?>" role="menuitem" class="ipmi-actions-menu-link"><?= htmlspecialchars($apiToggleLabel) ?></a>
                <a href="?delete=<?= $apiKid ?>&csrf=<?= $apiCsrf ?>" role="menuitem" class="ipmi-actions-menu-link ipmi-actions-menu-link--danger"
                  onclick="return confirm('Delete API key?')">Delete</a>
              </div>
            </div>
          </td>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>
    </div>

    <div class="ipmi-info-box" style="margin-top: 1.5rem;">
      <h3>API Usage</h3>
      <p>Use the API key in the <code>X-API-Key</code> header (recommended).</p>
      <p><strong>Example endpoints:</strong></p>
      <ul>
        <li><code>GET /api/api.php?action=status&server_id={id}</code> with header <code>X-API-Key: YOUR_KEY</code></li>
        <li><code>POST /api/api.php?action=suspend&server_id={id}</code> with header <code>X-API-Key: YOUR_KEY</code></li>
        <li><code>POST /api/api.php?action=unsuspend&server_id={id}&power_on=1</code> with header <code>X-API-Key: YOUR_KEY</code></li>
        <li><code>POST /api/api.php?action=poweron&server_id={id}</code> with header <code>X-API-Key: YOUR_KEY</code></li>
      </ul>
    </div>
  </div>
</body>

</html>
