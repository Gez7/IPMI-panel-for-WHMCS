<?php
session_start();
include 'config.php';

// Check permissions: admin or reseller can access
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['role'], ['admin', 'reseller'])) {
  header('Location: login.php');
  exit();
}

$user_id = (int)$_SESSION['user_id'];
$is_admin = ($_SESSION['role'] === 'admin');
$is_reseller = ($_SESSION['role'] === 'reseller');

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = (string)$_SESSION['csrf_token'];

// Handle delete
if (isset($_GET['delete'])) {
  $csrf = (string)($_GET['csrf'] ?? '');
  if ($csrfToken === '' || $csrf === '' || !hash_equals($csrfToken, $csrf)) {
    $_SESSION['message'] = "Invalid CSRF token";
    $_SESSION['messageType'] = "error";
    header('Location: admin_clients.php');
    exit();
  }
  $id = intval($_GET['delete']);
  if ($id !== $user_id) {
    if ($is_reseller) {
      $check = $mysqli->prepare("SELECT id FROM users WHERE id = ? AND created_by = ?");
      $check->bind_param("ii", $id, $user_id);
      $check->execute();
      $checkRes = $check->get_result();
      if ($checkRes->num_rows === 0) {
        $_SESSION['message'] = "Permission denied";
        $_SESSION['messageType'] = "error";
      } else {
        $del = $mysqli->prepare("DELETE FROM users WHERE id = ?");
        $del->bind_param("i", $id);
        $del->execute();
        $del->close();
        $_SESSION['message'] = "User deleted successfully";
        $_SESSION['messageType'] = "success";
      }
      $check->close();
    } else {
      $del = $mysqli->prepare("DELETE FROM users WHERE id = ?");
      $del->bind_param("i", $id);
      $del->execute();
      $del->close();
      $_SESSION['message'] = "User deleted successfully";
      $_SESSION['messageType'] = "success";
    }
  } else {
    $_SESSION['message'] = "Cannot delete your own account";
    $_SESSION['messageType'] = "error";
  }
  header('Location: admin_clients.php');
  exit();
}

// Handle form submission (add/edit)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
  $username = trim((string)($_POST['username'] ?? ''));
  $email = trim((string)($_POST['email'] ?? ''));
  $password = (string)($_POST['password'] ?? '');
  $role = trim((string)($_POST['role'] ?? 'user'));
  $messageType = '';

  // Permission checks
  if ($is_reseller) {
    if ($role !== 'user') {
      $_SESSION['message'] = "Resellers can only create users";
      $_SESSION['messageType'] = "error";
    } else {
      if ($id > 0) {
        $checkStmt = $mysqli->prepare("SELECT id FROM users WHERE id = ? AND created_by = ?");
        $checkStmt->bind_param("ii", $id, $user_id);
        $checkStmt->execute();
        $checkRes = $checkStmt->get_result();
        if ($checkRes->num_rows === 0) {
          $_SESSION['message'] = "Permission denied";
          $_SESSION['messageType'] = "error";
        }
        $checkStmt->close();
      }
    }
  }

  if (empty($_SESSION['messageType']) || $_SESSION['messageType'] !== 'error') {
    if ($id > 0) {
      if (!empty($password)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $mysqli->prepare("UPDATE users SET username = ?, email = ?, password = ?, role = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $username, $email, $password_hash, $role, $id);
      } else {
        $stmt = $mysqli->prepare("UPDATE users SET username = ?, email = ?, role = ? WHERE id = ?");
        $stmt->bind_param("sssi", $username, $email, $role, $id);
      }
      $stmt->execute();
      $stmt->close();
      $_SESSION['message'] = "User updated successfully";
    } else {
      // Insert
      if (empty($password)) {
        $_SESSION['message'] = "Password is required for new users";
        $_SESSION['messageType'] = "error";
      } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $created_by = $is_admin ? null : $user_id; // Track who created the user
        if ($created_by === null) {
          $stmt = $mysqli->prepare("INSERT INTO users (username, email, password, role, created_by) VALUES (?, ?, ?, ?, NULL)");
          $stmt->bind_param("ssss", $username, $email, $password_hash, $role);
        } else {
          $stmt = $mysqli->prepare("INSERT INTO users (username, email, password, role, created_by) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssi", $username, $email, $password_hash, $role, $created_by);
        }
        $stmt->execute();
        $stmt->close();
        $_SESSION['message'] = "User added successfully";
      }
    }
    if (empty($_SESSION['messageType']) || $_SESSION['messageType'] !== 'error') {
      $_SESSION['messageType'] = "success";
    }
  }
  
  header('Location: admin_clients.php');
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

// Get users list - filter based on role
if ($is_admin) {
  // Admin sees all users and resellers
  $users = $mysqli->query("
    SELECT u.*, COUNT(us.server_id) as server_count,
           creator.username as created_by_username
    FROM users u
    LEFT JOIN user_servers us ON u.id = us.user_id
    LEFT JOIN users creator ON u.created_by = creator.id
    WHERE u.role IN ('user', 'reseller')
    GROUP BY u.id
    ORDER BY u.role DESC, u.id DESC
  ");
} else {
  // Reseller sees only their users
$users = $mysqli->query("
  SELECT u.*, COUNT(us.server_id) as server_count
  FROM users u
  LEFT JOIN user_servers us ON u.id = us.user_id
    WHERE u.role = 'user' AND u.created_by = $user_id
  GROUP BY u.id
  ORDER BY u.id DESC
");
}

// Get user for editing
$editUser = null;
if (isset($_GET['edit'])) {
  $editId = intval($_GET['edit']);
  if ($is_admin) {
    $result = $mysqli->query("SELECT * FROM users WHERE id=$editId AND role IN ('user', 'reseller')");
  } else {
    $result = $mysqli->query("SELECT * FROM users WHERE id=$editId AND role='user' AND created_by=$user_id");
  }
  if ($result && $result->num_rows > 0) {
    $editUser = $result->fetch_assoc();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $is_admin ? 'User Management' : 'My Clients' ?> - IPMI Panel</title>
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
      const savedScroll = sessionStorage.getItem('scrollPos_admin_clients');
      if (savedScroll !== null) {
        window.scrollTo(0, parseInt(savedScroll));
        sessionStorage.removeItem('scrollPos_admin_clients');
      }

      // Save scroll position before form submission
      const form = document.querySelector('form[method="POST"]');
      if (form) {
        form.addEventListener('submit', function() {
          sessionStorage.setItem('scrollPos_admin_clients', window.pageYOffset || document.documentElement.scrollTop);
        });
      }

      // Save scroll position before clicking redirect links
      document.querySelectorAll('a[href*="?delete="]').forEach(function(link) {
        link.addEventListener('click', function() {
          sessionStorage.setItem('scrollPos_admin_clients', window.pageYOffset || document.documentElement.scrollTop);
        });
      });
    });
  </script>
  <script src="assets/ipmi-row-actions.js" defer></script>
</head>

<body>
  <?php
  $ipmiActiveNav = 'clients';
  $ipmiPageTitle = $is_admin ? 'Users & resellers' : 'My clients';
  $ipmiPageDescription = $is_admin
    ? 'Create panel users and resellers, assign roles, and audit who created each account.'
    : 'Create and manage end-user accounts that belong to your reseller scope.';
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

    <h2><?= $editUser ? 'Edit ' . ($is_admin && $editUser['role'] === 'reseller' ? 'Reseller' : 'User') : ($is_admin ? 'Add New User/Reseller' : 'Add New Client') ?></h2>
    <form method="POST">
      <?php if ($editUser): ?>
        <input type="hidden" name="id" value="<?= $editUser['id'] ?>">
      <?php endif; ?>
      <label>Username:</label>
      <input type="text" name="username" value="<?= htmlspecialchars($editUser['username'] ?? '') ?>" required>

      <label>Email:</label>
      <input type="email" name="email" value="<?= htmlspecialchars($editUser['email'] ?? '') ?>">

      <label>Password:</label>
      <input type="password" name="password" <?= $editUser ? '' : 'required' ?> placeholder="<?= $editUser ? 'Leave blank to keep current password' : '' ?>">

      <?php if ($is_admin): ?>
      <label>Role:</label>
      <select name="role">
          <option value="user" <?= ($editUser['role'] ?? 'user') === 'user' ? 'selected' : '' ?>>User</option>
          <option value="reseller" <?= ($editUser['role'] ?? '') === 'reseller' ? 'selected' : '' ?>>Reseller</option>
      </select>
      <?php else: ?>
        <input type="hidden" name="role" value="user">
      <?php endif; ?>

      <button type="submit"><?= $editUser ? 'Update' : 'Add' ?></button>
      <?php if ($editUser): ?>
        <a href="admin_clients.php" class="ipmi-link-action">Cancel</a>
      <?php endif; ?>
    </form>

    <h2><?= $is_admin ? 'Users & Resellers List' : 'My Clients List' ?></h2>
    <div class="table-container">
    <table>
      <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <?php if ($is_admin): ?>
          <th>Created By</th>
        <?php endif; ?>
        <th>Servers</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      <?php while ($u = $users->fetch_assoc()): ?>
        <tr>
          <td><?= $u['id'] ?></td>
          <td><?= htmlspecialchars($u['username']) ?></td>
          <td><?= htmlspecialchars($u['email'] ?? '-') ?></td>
          <td>
            <span class="badge badge-<?= $u['role'] ?>"><?= ucfirst($u['role']) ?></span>
          </td>
          <?php if ($is_admin): ?>
            <td><?= htmlspecialchars($u['created_by_username'] ?? 'Admin') ?></td>
          <?php endif; ?>
          <td>
            <a href="admin_assign.php?client_id=<?= (int)$u['id'] ?>" style="color:#17a2b8; text-decoration:none;">
              <?= (int)$u['server_count'] ?>
            </a>
          </td>
          <td><?= $u['created_at'] ?></td>
          <?php
            $cuid = (int) $u['id'];
            $cuname = htmlspecialchars($u['username'], ENT_QUOTES, 'UTF-8');
            $cmenuId = 'ipmi-clients-actions-' . $cuid;
            $cbtnId = 'ipmi-clients-actions-btn-' . $cuid;
          ?>
          <td class="ipmi-actions-cell">
            <div class="ipmi-row-actions">
              <button type="button" class="ipmi-actions-trigger" id="<?= $cbtnId ?>"
                aria-haspopup="true" aria-expanded="false" aria-controls="<?= $cmenuId ?>">
                <span class="ipmi-sr-only">Actions for <?= $cuname ?></span>
                <svg class="ipmi-actions-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <circle cx="12" cy="5" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="12" cy="19" r="2"/>
                </svg>
              </button>
              <div class="ipmi-actions-menu" id="<?= $cmenuId ?>" role="menu" aria-labelledby="<?= $cbtnId ?>" hidden>
                <a href="?edit=<?= $cuid ?>" role="menuitem" class="ipmi-actions-menu-link">Edit</a>
                <a href="?delete=<?= $cuid ?>&csrf=<?= urlencode($csrfToken) ?>" role="menuitem" class="ipmi-actions-menu-link ipmi-actions-menu-link--danger"
                  onclick="return confirm('Delete?')">Delete</a>
              </div>
            </div>
          </td>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>
    </div>
  </div>
</body>

</html>
