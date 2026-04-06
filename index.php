<?php
session_start();

include 'config.php';
require_once __DIR__ . '/lib/ipmi_service.php';

/**
 * Recover accidental redirect from proxied BMC pages back to "/"
 * by returning user to active ipmi_proxy token.
 */
$requestPath = (string) parse_url((string) ($_SERVER['REQUEST_URI'] ?? ''), PHP_URL_PATH);
if ($requestPath === '/' && strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET')) === 'GET') {
    $ref = trim((string) ($_SERVER['HTTP_REFERER'] ?? ''));
    if ($ref !== '' && preg_match('#/ipmi_proxy\.php/([a-f0-9]{64})(?:/|$)#i', $ref, $m)) {
        $token = strtolower((string) $m[1]);
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('Referrer-Policy: same-origin');
        header('Location: /ipmi_proxy.php/' . rawurlencode($token) . '/cgi/url_redirect.cgi?url_name=topmenu');
        exit();
    }
}

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}

$userId = (int) $_SESSION['user_id'];
$role = (string) ($_SESSION['role'] ?? 'user');
$isAdmin = ($role === 'admin');
$isReseller = ($role === 'reseller');

$ipmiService = new IPMIService($mysqli);

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = (string) $_SESSION['csrf_token'];

/**
 * AJAX handler for status / power actions
 */
$reqAction = $_POST['action'] ?? $_GET['action'] ?? null;
$reqId = $_POST['id'] ?? $_GET['id'] ?? null;

if ($reqAction !== null && $reqId !== null) {
    header('Content-Type: application/json; charset=utf-8');

    $action = (string) $reqAction;
    $serverId = (int) $reqId;
    $mutating = ['on', 'off', 'reset', 'suspend', 'unsuspend'];

    if (in_array($action, $mutating, true)) {
        if (strtoupper((string) ($_SERVER['REQUEST_METHOD'] ?? 'GET')) !== 'POST') {
            echo json_encode(['error' => 'Invalid request method']);
            exit;
        }
        $reqCsrf = (string) ($_POST['csrf_token'] ?? '');
        if ($reqCsrf === '' || !hash_equals($csrfToken, $reqCsrf)) {
            echo json_encode(['error' => 'Invalid CSRF token']);
            exit;
        }
    }

    // Only admin can do power/suspend actions
    if (($isReseller || !$isAdmin) && in_array($action, $mutating, true)) {
        echo json_encode(['error' => 'You do not have permission to control servers.']);
        exit;
    }

    if ($isAdmin || $isReseller) {
        $stmt = $mysqli->prepare("
            SELECT s.id, COALESCE(ss.suspended, 0) AS suspended
            FROM servers s
            LEFT JOIN server_suspension ss ON ss.server_id = s.id
            WHERE s.id = ?
            LIMIT 1
        ");
        $stmt->bind_param("i", $serverId);
    } else {
        $stmt = $mysqli->prepare("
            SELECT s.id, COALESCE(ss.suspended, 0) AS suspended
            FROM servers s
            INNER JOIN user_servers us ON us.server_id = s.id
            LEFT JOIN server_suspension ss ON ss.server_id = s.id
            WHERE s.id = ? AND us.user_id = ?
            LIMIT 1
        ");
        $stmt->bind_param("ii", $serverId, $userId);
    }

    $stmt->execute();
    $res = $stmt->get_result();
    $srv = $res ? $res->fetch_assoc() : null;
    $stmt->close();

    if (!$srv) {
        echo json_encode(['error' => 'No permission']);
        exit;
    }

    $isSuspended = ((int) ($srv['suspended'] ?? 0) === 1);

    try {
        if ($action === 'status') {
            $status = $ipmiService->checkStatus($serverId);
            $power = strtolower((string) ($status['power_state'] ?? 'unknown'));

            if ($isSuspended) {
                echo json_encode([
                    'status' => 'suspended',
                    'color' => '#ffc107',
                    'power_state' => $status['power_state'] ?? 'unknown',
                    'reachable' => (int) ($status['reachable'] ?? 0),
                    'suspended' => 1,
                    'last_error' => $status['last_error'] ?? ''
                ]);
            } else {
                $uiStatus = 'error';
                $uiColor = '#6c757d';
                if ($power === 'on') {
                    $uiStatus = 'online';
                    $uiColor = '#28a745';
                } elseif ($power === 'off') {
                    $uiStatus = 'offline';
                    $uiColor = '#dc3545';
                }

                echo json_encode([
                    'status' => $uiStatus,
                    'color' => $uiColor,
                    'power_state' => $status['power_state'] ?? 'unknown',
                    'reachable' => (int) ($status['reachable'] ?? 0),
                    'suspended' => 0,
                    'last_error' => $status['last_error'] ?? ''
                ]);
            }
            exit;
        }

        if ($action === 'on') {
            $result = $ipmiService->powerOn($serverId, $userId);
            echo json_encode(['result' => $result, 'action' => 'on']);
            exit;
        }

        if ($action === 'off') {
            $result = $ipmiService->powerOff($serverId, $userId);
            echo json_encode(['result' => $result, 'action' => 'off']);
            exit;
        }

        if ($action === 'reset') {
            $result = $ipmiService->reboot($serverId, $userId);
            echo json_encode(['result' => $result, 'action' => 'reset']);
            exit;
        }

        if ($action === 'suspend') {
            $reason = 'Suspended by admin';
            $stmt = $mysqli->prepare("
                INSERT INTO server_suspension (server_id, suspended, suspended_at, suspended_by, suspension_reason)
                VALUES (?, 1, NOW(), ?, ?)
                ON DUPLICATE KEY UPDATE
                    suspended = 1,
                    suspended_at = NOW(),
                    suspended_by = VALUES(suspended_by),
                    suspension_reason = VALUES(suspension_reason),
                    unsuspended_at = NULL,
                    unsuspended_by = NULL
            ");
            $stmt->bind_param("iis", $serverId, $userId, $reason);
            $stmt->execute();
            $stmt->close();

            try {
                $ipmiService->powerOff($serverId, $userId);
            } catch (Throwable $e) {
                // continue even if power off fails
            }

            echo json_encode(['result' => 'Server suspended successfully', 'suspended' => true]);
            exit;
        }

        if ($action === 'unsuspend') {
            $stmt = $mysqli->prepare("
                INSERT INTO server_suspension (server_id, suspended, unsuspended_at, unsuspended_by)
                VALUES (?, 0, NOW(), ?)
                ON DUPLICATE KEY UPDATE
                    suspended = 0,
                    unsuspended_at = NOW(),
                    unsuspended_by = VALUES(unsuspended_by)
            ");
            $stmt->bind_param("ii", $serverId, $userId);
            $stmt->execute();
            $stmt->close();

            echo json_encode(['result' => 'Server unsuspended successfully', 'suspended' => false]);
            exit;
        }

        echo json_encode(['error' => 'Unknown action']);
    } catch (Throwable $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
    exit;
}

/**
 * Load servers list
 */
if ($isAdmin || $isReseller) {
    $sql = "
        SELECT s.*,
               st.power_state, st.reachable, st.last_checked, st.last_error,
               COALESCE(ss.suspended, 0) AS suspended
        FROM servers s
        LEFT JOIN server_status st ON st.server_id = s.id
        LEFT JOIN server_suspension ss ON ss.server_id = s.id
        ORDER BY s.id ASC
    ";
    $result = $mysqli->query($sql);
} else {
    $stmt = $mysqli->prepare("
        SELECT s.*,
               st.power_state, st.reachable, st.last_checked, st.last_error,
               COALESCE(ss.suspended, 0) AS suspended
        FROM servers s
        INNER JOIN user_servers us ON us.server_id = s.id
        LEFT JOIN server_status st ON st.server_id = s.id
        LEFT JOIN server_suspension ss ON ss.server_id = s.id
        WHERE us.user_id = ?
        ORDER BY s.id ASC
    ");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>IPMI Panel</title>
  <link rel="stylesheet" href="/assets/panel.css">
  <script>
    const csrfToken = <?= json_encode($csrfToken, JSON_UNESCAPED_SLASHES) ?>;

    function doAction(id, action) {
      const body = new URLSearchParams();
      body.set('action', action);
      body.set('id', String(id));
      body.set('csrf_token', csrfToken);

      fetch(window.location.pathname, {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'},
        body: body.toString()
      })
      .then(r => r.json())
      .then(data => {
        if (data.error) {
          alert(data.error);
          return;
        }
        refreshOne(id);
      })
      .catch(() => alert('Action request failed'));
    }

    function refreshOne(id) {
      fetch('/api/status.php?full=1&id=' + id + '&live=1&_t=' + Date.now())
        .then(r => r.json())
        .then(data => renderStatus(id, data))
        .catch(() => {});
    }

    function refreshAll() {
      fetch('/api/status.php?full=1&_t=' + Date.now())
        .then(r => r.json())
        .then(list => (list || []).forEach(row => renderStatus(row.server_id, row)))
        .catch(() => {});
    }

    function renderStatus(id, data) {
      const el = document.getElementById('status-output-' + id);
      if (!el) return;

      const td = el.closest('td');
      const suspended = parseInt(data.suspended || 0) === 1;
      let label = 'UNKNOWN';
      let cls = 'error';

      if (suspended) {
        label = 'SUSPENDED';
        cls = 'suspended';
      } else if (parseInt(data.reachable || 0) === 0) {
        label = 'UNREACHABLE';
        cls = 'error';
      } else {
        const p = String(data.power_state || 'unknown').toLowerCase();
        label = p.toUpperCase();
        if (p === 'on') cls = 'online';
        else if (p === 'off') cls = 'offline';
        else cls = 'error';
      }

      el.innerHTML = label + "<div class='ipmi-status-meta'>" + (data.last_checked || '') + "</div>";
      if (td) td.className = cls;
    }

    function doSuspendAction(id, action) {
      if (action === 'suspend' && !confirm('Suspend server?')) return;
      doAction(id, action);
      setTimeout(() => location.reload(), 1000);
    }

    window.onload = function() {
      refreshAll();
      setInterval(refreshAll, 30000);
      document.querySelectorAll('a[data-debug-link]').forEach(function (link) {
        link.addEventListener('click', function (e) {
          e.preventDefault();
          var url = link.getAttribute('href');
          if (url) {
            window.open(url, '_blank', 'noopener');
          }
          var banner = document.getElementById('ipmi-debug-banner');
          if (banner) {
            var name = link.getAttribute('data-server-name') || 'this server';
            var title = banner.querySelector('[data-debug-title]');
            if (title) {
              title.textContent = 'Debug mode opened for ' + name + '.';
            }
            banner.removeAttribute('hidden');
            banner.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      });
    };
  </script>
  <script src="/assets/ipmi-row-actions.js" defer></script>
</head>
<body>
<?php
$ipmiActiveNav = 'dashboard';
$ipmiPageTitle = 'Overview';
$ipmiPageDescription = 'Live power state, reachability, and controls for servers assigned to you.';
$ipmiLogoutHref = '?logout=1';
require __DIR__ . '/inc/panel_header.php';
?>
<main class="ipmi-main">
  <section id="ipmi-debug-banner" class="ipmi-card" hidden style="margin-bottom:16px;">
    <h3 data-debug-title style="margin:0 0 6px;">Debug mode opened.</h3>
    <p style="margin:0 0 8px;opacity:.85;">
      In the new tab, open DevTools → Console and copy the object called <strong>IPMI Proxy debug</strong>.
      You can also run <code>copy(window.IPMI_PROXY_DEBUG)</code>.
    </p>
  </section>
  <div class="table-container ipmi-data-table">
    <table>
      <thead>
      <tr>
        <th>Name</th>
        <th>IPMI</th>
        <th>Status</th>
        <th>Actions</th>
        <th>IPMI Session</th>
        <th>KVM Console</th>
        <?php if ($isAdmin): ?><th>More</th><?php endif; ?>
      </tr>
      </thead>
      <tbody>
      <?php while ($s = $result->fetch_assoc()): ?>
        <?php
          $isSuspended = ((int) ($s['suspended'] ?? 0) === 1);
          $label = 'PENDING';
          $class = 'error';
          if (!empty($s['last_checked'])) {
              if ($isSuspended) {
                  $label = 'SUSPENDED'; $class = 'suspended';
              } elseif ((int) ($s['reachable'] ?? 0) === 0) {
                  $label = 'UNREACHABLE'; $class = 'error';
              } else {
                  $ps = strtolower((string) ($s['power_state'] ?? 'unknown'));
                  $label = strtoupper($ps);
                  if ($ps === 'on') $class = 'online';
                  elseif ($ps === 'off') $class = 'offline';
                  else $class = 'error';
              }
          } elseif ($isSuspended) {
              $label = 'SUSPENDED'; $class = 'suspended';
          }

          $id = (int) $s['id'];
          $sessionHref = '/ipmi_session.php?id=' . $id . '&csrf_token=' . rawurlencode($csrfToken);
          $sessionDebugHref = $sessionHref . '&debug=1';
          $kvmHref = '/ipmi_kvm.php?id=' . $id . '&csrf_token=' . rawurlencode($csrfToken);
        ?>
        <tr>
          <td><?= htmlspecialchars((string) ($s['server_name'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars((string) ($s['ipmi_ip'] ?? ''), ENT_QUOTES, 'UTF-8') ?></td>
          <td class="<?= $class ?>">
            <div id="status-output-<?= $id ?>">
              <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
              <div class="ipmi-status-meta"><?= htmlspecialchars((string) ($s['last_checked'] ?? ''), ENT_QUOTES, 'UTF-8') ?></div>
            </div>
          </td>
          <td>
            <?php if ($isSuspended && !$isAdmin): ?>
              <span style="color:var(--ipmi-warn);font-weight:600;font-size:.85rem;">Suspended</span>
            <?php elseif ($isAdmin): ?>
              <button type="button" class="ipmi-btn ipmi-btn-on" onclick="doAction(<?= $id ?>,'on')">ON</button>
              <button type="button" class="ipmi-btn ipmi-btn-off" onclick="doAction(<?= $id ?>,'off')">OFF</button>
              <button type="button" class="ipmi-btn ipmi-btn-reset" onclick="doAction(<?= $id ?>,'reset')">RESET</button>
              <button type="button" class="ipmi-btn ipmi-btn-refresh" onclick="refreshOne(<?= $id ?>)">REFRESH</button>
            <?php else: ?>
              <button type="button" class="ipmi-btn ipmi-btn-refresh" onclick="refreshOne(<?= $id ?>)">REFRESH</button>
            <?php endif; ?>
          </td>
          <td>
            <?php if ($isSuspended && !$isAdmin): ?>
              <span class="btn-kvm" style="opacity:.55;cursor:not-allowed;">Blocked</span>
            <?php else: ?>
              <a href="<?= htmlspecialchars($sessionHref, ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="btn-kvm">Open</a>
              <a href="<?= htmlspecialchars($sessionDebugHref, ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="btn-kvm" style="margin-left:6px;" data-debug-link data-server-name="<?= htmlspecialchars((string) ($s['server_name'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">Debug</a>
            <?php endif; ?>
          </td>
          <td>
            <?php if ($isSuspended && !$isAdmin): ?>
              <span class="btn-kvm" style="opacity:.55;cursor:not-allowed;">Blocked</span>
            <?php else: ?>
              <a href="<?= htmlspecialchars($kvmHref, ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="btn-kvm">KVM</a>
            <?php endif; ?>
          </td>
          <?php if ($isAdmin): ?>
            <td class="ipmi-actions-cell">
              <?php if ($isSuspended): ?>
                <button type="button" class="ipmi-btn ipmi-btn-on" onclick="doSuspendAction(<?= $id ?>,'unsuspend')">Unsuspend</button>
              <?php else: ?>
                <button type="button" class="ipmi-btn ipmi-btn-off" onclick="doSuspendAction(<?= $id ?>,'suspend')">Suspend</button>
              <?php endif; ?>
            </td>
          <?php endif; ?>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</main>
</body>
</html>
