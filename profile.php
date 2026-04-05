<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit();
}

$user_id = $_SESSION['user_id'];
$is_admin = ($_SESSION['role'] === 'admin');
$is_reseller = ($_SESSION['role'] === 'reseller');
$message = '';
$messageType = '';

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = $_SESSION['csrf_token'];

// Get current user data
$stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result ? $result->fetch_assoc() : null;
$stmt->close();
if (!$user) {
  session_destroy();
  header('Location: login.php');
  exit();
}

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
  $token = $_POST['csrf_token'] ?? '';
  if (!is_string($token) || !hash_equals($csrfToken, $token)) {
    $message = "Invalid CSRF token";
    $messageType = "error";
  } else {
  $username = trim((string)($_POST['username'] ?? ''));
  $email = trim((string)($_POST['email'] ?? ''));

  // Check if username is already taken by another user
  $check = $mysqli->prepare("SELECT id FROM users WHERE username = ? AND id != ? LIMIT 1");
  $check->bind_param("si", $username, $user_id);
  $check->execute();
  $checkResult = $check->get_result();
  $isTaken = $checkResult && $checkResult->num_rows > 0;
  $check->close();

    if ($isTaken) {
      $message = "Username already taken";
      $messageType = "error";
    } elseif ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $message = "Invalid email format";
      $messageType = "error";
    } else {
      $stmt = $mysqli->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
      $stmt->bind_param("ssi", $username, $email, $user_id);
      $stmt->execute();
      $stmt->close();

      $_SESSION['username'] = $username;
      $message = "Profile updated successfully";
      $messageType = "success";

      // Refresh user data
      $stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
      $stmt->bind_param("i", $user_id);
      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result ? $result->fetch_assoc() : $user;
      $stmt->close();
    }
  }
}

// Handle password change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
  $token = $_POST['csrf_token'] ?? '';
  if (!is_string($token) || !hash_equals($csrfToken, $token)) {
    $message = "Invalid CSRF token";
    $messageType = "error";
  } else {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (!password_verify($current_password, $user['password'])) {
      $message = "Current password is incorrect";
      $messageType = "error";
    } elseif ($new_password !== $confirm_password) {
      $message = "New passwords do not match";
      $messageType = "error";
    } elseif (strlen($new_password) < 6) {
      $message = "Password must be at least 6 characters";
      $messageType = "error";
    } else {
      $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
      $stmt = $mysqli->prepare("UPDATE users SET password = ? WHERE id = ?");
      $stmt->bind_param("si", $password_hash, $user_id);
      $stmt->execute();
      $stmt->close();

      $message = "Password changed successfully";
      $messageType = "success";
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - IPMI Panel</title>
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
  </script>
</head>

<body>
  <?php
  $ipmiActiveNav = 'profile';
  $ipmiPageTitle = 'Account settings';
  $ipmiPageDescription = 'Update your username, contact email, and password used to sign in to this panel.';
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

    <div class="info-box">
      <h2>Account Information</h2>
      <p><strong>User ID:</strong> <?= $user['id'] ?></p>
      <p><strong>Role:</strong> <?= ucfirst($user['role']) ?></p>
      <p><strong>Created:</strong> <?= $user['created_at'] ?></p>
    </div>

    <h2>Update Profile</h2>
    <form method="POST">
      <input type="hidden" name="update_profile" value="1">
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8') ?>">
      <label>Username:</label>
      <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>

      <label>Email:</label>
      <input type="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>">

      <button type="submit">Update Profile</button>
    </form>

    <h2>Change Password</h2>
    <form method="POST">
      <input type="hidden" name="change_password" value="1">
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8') ?>">
      <label>Current Password:</label>
      <input type="password" name="current_password" required>

      <label>New Password:</label>
      <input type="password" name="new_password" required minlength="6">

      <label>Confirm New Password:</label>
      <input type="password" name="confirm_password" required minlength="6">

      <button type="submit">Change Password</button>
    </form>
  </div>
</body>

</html>
