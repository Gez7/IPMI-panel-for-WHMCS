<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id']) || !in_array($_SESSION['role'], ['admin', 'reseller'], true)) {
  header('Location: login.php');
  exit();
}

$user_id = (int)$_SESSION['user_id'];
$is_admin = ($_SESSION['role'] === 'admin');
$is_reseller = ($_SESSION['role'] === 'reseller');

function setFlash($message, $type = 'success')
{
  $_SESSION['message'] = $message;
  $_SESSION['messageType'] = $type;
}

function canManageClient(mysqli $mysqli, $clientId, $isAdmin, $resellerId)
{
  $clientId = (int)$clientId;
  if ($clientId <= 0) {
    return false;
  }
  if ($isAdmin) {
    $stmt = $mysqli->prepare("SELECT id FROM users WHERE id = ? AND role = 'user' LIMIT 1");
    if (!$stmt) {
      return false;
    }
    $stmt->bind_param("i", $clientId);
    $stmt->execute();
    $ok = ($stmt->get_result()->num_rows > 0);
    $stmt->close();
    return $ok;
  }

  $stmt = $mysqli->prepare("SELECT id FROM users WHERE id = ? AND role = 'user' AND created_by = ? LIMIT 1");
  if (!$stmt) {
    return false;
  }
  $stmt->bind_param("ii", $clientId, $resellerId);
  $stmt->execute();
  $ok = ($stmt->get_result()->num_rows > 0);
  $stmt->close();
  return $ok;
}

function getClientLabel(mysqli $mysqli, $clientId)
{
  $clientId = (int)$clientId;
  if ($clientId <= 0) {
    return '';
  }
  $stmt = $mysqli->prepare("SELECT username, email FROM users WHERE id = ? LIMIT 1");
  if (!$stmt) {
    return '';
  }
  $stmt->bind_param("i", $clientId);
  $stmt->execute();
  $res = $stmt->get_result();
  $row = $res ? $res->fetch_assoc() : null;
  $stmt->close();
  if (!$row) {
    return '';
  }
  $email = trim((string)($row['email'] ?? ''));
  return (string)$row['username'] . ($email !== '' ? " ({$email})" : '');
}

// Bulk assignment with optional move confirmation.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bulk_assign'])) {
  $targetUserId = (int)($_POST['user_id'] ?? 0);
  $confirmMove = isset($_POST['confirm_move']) && (string)$_POST['confirm_move'] === '1';
  $serverIdsRaw = is_array($_POST['server_ids'] ?? null) ? $_POST['server_ids'] : [];
  $serverIds = array_values(array_unique(array_filter(array_map('intval', $serverIdsRaw), function ($v) {
    return $v > 0;
  })));

  if ($targetUserId <= 0) {
    setFlash('Please select a target client.', 'error');
    header('Location: admin_assign.php');
    exit();
  }

  if (empty($serverIds)) {
    setFlash('Please select at least one server.', 'error');
    header('Location: admin_assign.php?client_id=' . $targetUserId);
    exit();
  }

  if (!canManageClient($mysqli, $targetUserId, $is_admin, $user_id)) {
    setFlash('Permission denied for selected client.', 'error');
    header('Location: admin_assign.php');
    exit();
  }

  $placeholders = implode(',', array_fill(0, count($serverIds), '?'));
  $types = str_repeat('i', count($serverIds));

  $ownerSql = "
    SELECT us.server_id, us.user_id, COALESCE(u.created_by, 0) AS created_by, u.username
    FROM user_servers us
    INNER JOIN users u ON u.id = us.user_id
    WHERE us.server_id IN ($placeholders)
  ";
  $ownerStmt = $mysqli->prepare($ownerSql);
  if (!$ownerStmt) {
    setFlash('Database prepare error while checking assignments.', 'error');
    header('Location: admin_assign.php?client_id=' . $targetUserId);
    exit();
  }
  $ownerStmt->bind_param($types, ...$serverIds);
  $ownerStmt->execute();
  $ownerRes = $ownerStmt->get_result();

  $ownersByServer = [];
  while ($row = $ownerRes->fetch_assoc()) {
    $sid = (int)$row['server_id'];
    if (!isset($ownersByServer[$sid])) {
      $ownersByServer[$sid] = [];
    }
    $ownersByServer[$sid][] = [
      'user_id' => (int)$row['user_id'],
      'created_by' => (int)$row['created_by'],
      'username' => (string)$row['username'],
    ];
  }
  $ownerStmt->close();

  $missingConfirm = [];
  $forbiddenForReseller = [];
  foreach ($serverIds as $sid) {
    $owners = $ownersByServer[$sid] ?? [];
    $differentOwners = array_values(array_filter($owners, function ($o) use ($targetUserId) {
      return (int)$o['user_id'] !== $targetUserId;
    }));

    if (!empty($differentOwners) && !$confirmMove) {
      $missingConfirm[] = $sid;
      continue;
    }

    if ($is_reseller && !empty($differentOwners)) {
      foreach ($differentOwners as $owner) {
        if ((int)$owner['created_by'] !== $user_id) {
          $forbiddenForReseller[] = $sid;
          break;
        }
      }
    }
  }

  if (!empty($missingConfirm)) {
    setFlash(
      'Some selected servers are already assigned to another client. Enable "Move assignments" and submit again.',
      'error'
    );
    header('Location: admin_assign.php?client_id=' . $targetUserId);
    exit();
  }

  if (!empty($forbiddenForReseller)) {
    setFlash(
      'Permission denied: one or more selected servers are assigned to clients outside your reseller scope.',
      'error'
    );
    header('Location: admin_assign.php?client_id=' . $targetUserId);
    exit();
  }

  $assignedCount = 0;
  $movedCount = 0;
  $skippedCount = 0;

  $mysqli->begin_transaction();
  try {
    $deleteAllStmt = $mysqli->prepare("DELETE FROM user_servers WHERE server_id = ?");
    $deleteResellerStmt = $mysqli->prepare("
      DELETE us
      FROM user_servers us
      INNER JOIN users u ON u.id = us.user_id
      WHERE us.server_id = ? AND (u.created_by = ? OR us.user_id = ?)
    ");
    $insertStmt = $mysqli->prepare("INSERT IGNORE INTO user_servers (user_id, server_id) VALUES (?, ?)");
    if (!$deleteAllStmt || !$deleteResellerStmt || !$insertStmt) {
      throw new Exception('SQL prepare error');
    }

    foreach ($serverIds as $sid) {
      $owners = $ownersByServer[$sid] ?? [];
      $differentOwners = array_values(array_filter($owners, function ($o) use ($targetUserId) {
        return (int)$o['user_id'] !== $targetUserId;
      }));
      $alreadyAssignedToTarget = false;
      foreach ($owners as $owner) {
        if ((int)$owner['user_id'] === $targetUserId) {
          $alreadyAssignedToTarget = true;
          break;
        }
      }

      if (!empty($differentOwners) && $confirmMove) {
        if ($is_admin) {
          $deleteAllStmt->bind_param("i", $sid);
          $deleteAllStmt->execute();
        } else {
          $deleteResellerStmt->bind_param("iii", $sid, $user_id, $targetUserId);
          $deleteResellerStmt->execute();
        }
        $movedCount++;
      } elseif ($alreadyAssignedToTarget) {
        $skippedCount++;
        continue;
      }

      $insertStmt->bind_param("ii", $targetUserId, $sid);
      $insertStmt->execute();
      if ($insertStmt->affected_rows > 0) {
        $assignedCount++;
      }
    }

    $deleteAllStmt->close();
    $deleteResellerStmt->close();
    $insertStmt->close();
    $mysqli->commit();
  } catch (Throwable $e) {
    $mysqli->rollback();
    setFlash('Bulk assignment failed: ' . $e->getMessage(), 'error');
    header('Location: admin_assign.php?client_id=' . $targetUserId);
    exit();
  }

  setFlash(
    "Bulk assignment complete. Assigned: {$assignedCount}, Moved: {$movedCount}, Skipped: {$skippedCount}",
    'success'
  );
  header('Location: admin_assign.php?client_id=' . $targetUserId);
  exit();
}

// Unassign one row.
if (isset($_GET['unassign'], $_GET['user_id'], $_GET['server_id'])) {
  $unassignUserId = (int)$_GET['user_id'];
  $serverId = (int)$_GET['server_id'];

  if ($unassignUserId <= 0 || $serverId <= 0) {
    setFlash('Invalid unassign request.', 'error');
    header('Location: admin_assign.php');
    exit();
  }

  if (!$is_admin && !canManageClient($mysqli, $unassignUserId, false, $user_id)) {
    setFlash('Permission denied.', 'error');
    header('Location: admin_assign.php');
    exit();
  }

  $stmt = $mysqli->prepare("DELETE FROM user_servers WHERE user_id = ? AND server_id = ?");
  $stmt->bind_param("ii", $unassignUserId, $serverId);
  $stmt->execute();
  $stmt->close();

  setFlash('Server unassigned successfully.', 'success');
  header('Location: admin_assign.php' . (isset($_GET['client_id']) ? ('?client_id=' . (int)$_GET['client_id']) : ''));
  exit();
}

$message = '';
$messageType = '';
if (isset($_SESSION['message'])) {
  $message = (string)$_SESSION['message'];
  $messageType = (string)($_SESSION['messageType'] ?? 'success');
  unset($_SESSION['message'], $_SESSION['messageType']);
}

$selectedClientId = isset($_GET['client_id']) ? (int)$_GET['client_id'] : 0;
if ($selectedClientId > 0 && !$is_admin && !canManageClient($mysqli, $selectedClientId, false, $user_id)) {
  $selectedClientId = 0;
  $message = 'Permission denied for selected client.';
  $messageType = 'error';
}

if ($is_admin) {
  $clients = $mysqli->query("SELECT id, username, email FROM users WHERE role = 'user' ORDER BY username");
} else {
  $clients = $mysqli->query("SELECT id, username, email FROM users WHERE role = 'user' AND created_by = {$user_id} ORDER BY username");
}

$servers = $mysqli->query("
  SELECT
    s.id,
    s.server_name,
    s.ipmi_ip,
    GROUP_CONCAT(u.id ORDER BY u.id) AS assigned_user_ids,
    GROUP_CONCAT(u.username ORDER BY u.username SEPARATOR ', ') AS assigned_usernames
  FROM servers s
  LEFT JOIN user_servers us ON us.server_id = s.id
  LEFT JOIN users u ON u.id = us.user_id
  GROUP BY s.id
  ORDER BY s.server_name ASC
");

if ($selectedClientId > 0) {
  $assignments = $mysqli->query("
    SELECT us.user_id, us.server_id, u.username, s.server_name, s.ipmi_ip
    FROM user_servers us
    INNER JOIN users u ON u.id = us.user_id
    INNER JOIN servers s ON s.id = us.server_id
    WHERE us.user_id = {$selectedClientId}
    ORDER BY s.server_name
  ");
} elseif ($is_admin) {
  $assignments = $mysqli->query("
    SELECT us.user_id, us.server_id, u.username, s.server_name, s.ipmi_ip
    FROM user_servers us
    INNER JOIN users u ON u.id = us.user_id
    INNER JOIN servers s ON s.id = us.server_id
    ORDER BY u.username, s.server_name
  ");
} else {
  $assignments = $mysqli->query("
    SELECT us.user_id, us.server_id, u.username, s.server_name, s.ipmi_ip
    FROM user_servers us
    INNER JOIN users u ON u.id = us.user_id
    INNER JOIN servers s ON s.id = us.server_id
    WHERE u.created_by = {$user_id}
    ORDER BY u.username, s.server_name
  ");
}

$selectedClientLabel = $selectedClientId > 0 ? getClientLabel($mysqli, $selectedClientId) : '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Server Assignment - IPMI Panel</title>
  <link rel="stylesheet" href="assets/panel.css">
</head>
<body>
  <?php
  $ipmiActiveNav = 'assign';
  $ipmiPageTitle = $is_admin ? 'Server assignment' : 'Assign servers';
  $ipmiPageDescription = 'Search and multi-select servers, then assign or move them between clients in one action.';
  require __DIR__ . '/inc/panel_header.php';
  ?>

  <div class="container">
    <?php if ($message !== ''): ?>
      <div class="message <?= $messageType === 'error' ? 'error' : 'success' ?>" id="alertMessage" onclick="this.remove()">
        <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
      </div>
    <?php endif; ?>

    <div class="card">
      <h2>Bulk Assign Servers</h2>
      <p class="muted">Search by server name or IPMI IP, select multiple servers, and assign in one action.</p>
      <?php if ($selectedClientId > 0): ?>
        <p>
          Viewing client servers for:
          <strong><?= htmlspecialchars($selectedClientLabel, ENT_QUOTES, 'UTF-8') ?></strong>
          <a href="admin_assign.php" class="btn btn-secondary">Clear Filter</a>
        </p>
      <?php endif; ?>
      <form method="POST" id="bulkAssignForm">
        <input type="hidden" name="bulk_assign" value="1">
        <div class="toolbar">
          <div>
            <label>Target Client</label>
            <select name="user_id" id="targetUserId" required>
              <option value="">Select Client</option>
              <?php
              $clients->data_seek(0);
              while ($c = $clients->fetch_assoc()):
                $cid = (int)$c['id'];
                $selectedAttr = ($selectedClientId === $cid) ? 'selected' : '';
              ?>
                <option value="<?= $cid ?>" <?= $selectedAttr ?>>
                  <?= htmlspecialchars((string)$c['username'], ENT_QUOTES, 'UTF-8') ?>
                  (<?= htmlspecialchars((string)($c['email'] ?: 'no email'), ENT_QUOTES, 'UTF-8') ?>)
                </option>
              <?php endwhile; ?>
            </select>
          </div>
          <div>
            <label>Search Server</label>
            <input type="text" id="serverSearch" placeholder="Type server name or IPMI IP">
          </div>
        </div>

        <div class="inline">
          <label style="margin:0;">
            <input type="checkbox" id="selectAllVisible"> Select all visible
          </label>
          <label style="margin:0;">
            <input type="checkbox" name="confirm_move" id="confirm_move" value="1">
            Move assignments if server is already assigned to another client
          </label>
        </div>

        <div class="table-container">
          <table>
            <tr>
              <th style="width:40px;">#</th>
              <th>Server Name</th>
              <th>IPMI IP</th>
              <th>Current Assignment</th>
            </tr>
            <?php
            if ($servers && $servers->num_rows > 0):
              while ($s = $servers->fetch_assoc()):
                $sid = (int)$s['id'];
                $name = (string)($s['server_name'] ?? '');
                $ipmi = (string)($s['ipmi_ip'] ?? '');
                $assignedIds = trim((string)($s['assigned_user_ids'] ?? ''));
                $assignedNames = trim((string)($s['assigned_usernames'] ?? ''));
                $searchBlob = strtolower($name . ' ' . $ipmi);
            ?>
              <tr class="server-row" data-search="<?= htmlspecialchars($searchBlob, ENT_QUOTES, 'UTF-8') ?>">
                <td>
                  <input
                    type="checkbox"
                    class="server-checkbox"
                    name="server_ids[]"
                    value="<?= $sid ?>"
                    data-assigned-ids="<?= htmlspecialchars($assignedIds, ENT_QUOTES, 'UTF-8') ?>"
                  >
                </td>
                <td><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($ipmi, ENT_QUOTES, 'UTF-8') ?></td>
                <td>
                  <?php if ($assignedNames !== ''): ?>
                    <span class="assigned"><?= htmlspecialchars($assignedNames, ENT_QUOTES, 'UTF-8') ?></span>
                  <?php else: ?>
                    <span class="unassigned">Unassigned</span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php
              endwhile;
            else:
            ?>
              <tr><td colspan="4">No servers found.</td></tr>
            <?php endif; ?>
          </table>
        </div>
        <button type="submit" class="btn">Assign Selected Servers</button>
      </form>
    </div>

    <div class="card">
      <h2><?= $selectedClientId > 0 ? 'Selected Client Assignments' : 'Current Assignments' ?></h2>
      <div class="table-container">
        <table>
          <tr>
            <th>Client</th>
            <th>Server</th>
            <th>IPMI IP</th>
            <th>Action</th>
          </tr>
          <?php if ($assignments && $assignments->num_rows > 0): ?>
            <?php while ($a = $assignments->fetch_assoc()): ?>
              <tr>
                <td><?= htmlspecialchars((string)$a['username'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars((string)$a['server_name'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars((string)$a['ipmi_ip'], ENT_QUOTES, 'UTF-8') ?></td>
                <td>
                  <a
                    href="?unassign=1&user_id=<?= (int)$a['user_id'] ?>&server_id=<?= (int)$a['server_id'] ?><?= $selectedClientId > 0 ? ('&client_id=' . $selectedClientId) : '' ?>"
                    onclick="return confirm('Unassign server?')"
                    class="ipmi-link-danger"
                  >Unassign</a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr><td colspan="4">No assignments found.</td></tr>
          <?php endif; ?>
        </table>
      </div>
    </div>
  </div>

  <script>
    function toggleMobileMenu() {
      const nav = document.getElementById('mobileNav');
      nav.classList.toggle('active');
    }

    function closeMobileMenu() {
      const nav = document.getElementById('mobileNav');
      nav.classList.remove('active');
    }

    document.addEventListener('click', function(event) {
      const mobileNav = document.getElementById('mobileNav');
      const menuToggle = document.querySelector('.mobile-menu-toggle');
      if (!mobileNav || !menuToggle) return;
      if (!mobileNav.contains(event.target) && !menuToggle.contains(event.target) && mobileNav.classList.contains('active')) {
        mobileNav.classList.remove('active');
      }
    });

    const searchInput = document.getElementById('serverSearch');
    const rows = Array.from(document.querySelectorAll('.server-row'));
    const selectAllVisible = document.getElementById('selectAllVisible');
    const form = document.getElementById('bulkAssignForm');
    const confirmMove = document.getElementById('confirm_move');
    const targetUser = document.getElementById('targetUserId');

    function applySearch() {
      const term = (searchInput.value || '').toLowerCase().trim();
      rows.forEach(row => {
        const blob = row.getAttribute('data-search') || '';
        const match = term === '' || blob.indexOf(term) !== -1;
        row.style.display = match ? '' : 'none';
      });
      selectAllVisible.checked = false;
    }

    if (searchInput) {
      searchInput.addEventListener('input', applySearch);
    }

    if (selectAllVisible) {
      selectAllVisible.addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.server-row .server-checkbox');
        checkboxes.forEach(cb => {
          const row = cb.closest('.server-row');
          if (row && row.style.display !== 'none') {
            cb.checked = selectAllVisible.checked;
          }
        });
      });
    }

    if (form) {
      form.addEventListener('submit', function(e) {
        const selected = Array.from(document.querySelectorAll('.server-checkbox:checked'));
        if (selected.length === 0) {
          e.preventDefault();
          alert('Select at least one server.');
          return;
        }
        const target = parseInt(targetUser.value || '0', 10);
        if (!target) {
          e.preventDefault();
          alert('Select a target client.');
          return;
        }

        let conflictCount = 0;
        selected.forEach(cb => {
          const assigned = (cb.getAttribute('data-assigned-ids') || '').split(',').map(v => parseInt(v, 10)).filter(v => v > 0);
          if (assigned.length > 0 && assigned.some(v => v !== target)) {
            conflictCount++;
          }
        });

        if (conflictCount > 0 && !confirmMove.checked) {
          const ok = confirm(conflictCount + ' selected server(s) are assigned to another client. Move them to selected client?');
          if (!ok) {
            e.preventDefault();
            return;
          }
          confirmMove.checked = true;
        }
      });
    }
  </script>
</body>
</html>
