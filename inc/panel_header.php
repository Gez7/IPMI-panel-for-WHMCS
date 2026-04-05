<?php
/**
 * Shared app header — expects $is_admin, $is_reseller (bool),
 * $ipmiActiveNav ('dashboard'|'servers'|'clients'|'assign'|'api_keys'|'profile'),
 * optional $ipmiPageTitle, $ipmiPageDescription (short line under breadcrumbs),
 * optional $ipmiBreadcrumbs: [['label' => '…', 'href' => 'file.php'|null], …] to override auto crumbs,
 * optional $ipmiLogoutHref (default index.php?logout=1).
 */
$ipmiActiveNav = $ipmiActiveNav ?? 'dashboard';
$is_admin = (bool) ($is_admin ?? $isAdmin ?? false);
$is_reseller = (bool) ($is_reseller ?? $isReseller ?? false);
$ipmiPageTitle = isset($ipmiPageTitle) ? (string) $ipmiPageTitle : '';
$ipmiPageDescription = isset($ipmiPageDescription) ? (string) $ipmiPageDescription : '';
$ipmiLogoutHref = isset($ipmiLogoutHref) ? (string) $ipmiLogoutHref : 'index.php?logout=1';
$ipmiUname = htmlspecialchars((string) ($_SESSION['username'] ?? ''), ENT_QUOTES, 'UTF-8');
$nav = $ipmiActiveNav;
$lo = htmlspecialchars($ipmiLogoutHref, ENT_QUOTES, 'UTF-8');

if (isset($ipmiBreadcrumbs) && is_array($ipmiBreadcrumbs)) {
  $ipmiCrumbs = $ipmiBreadcrumbs;
} else {
  $ipmiCrumbs = [];
  if ($nav !== 'dashboard') {
    $ipmiCrumbs[] = ['label' => 'Dashboard', 'href' => 'index.php'];
    switch ($nav) {
      case 'servers':
        $ipmiCrumbs[] = ['label' => 'Servers', 'href' => null];
        break;
      case 'clients':
        $ipmiCrumbs[] = ['label' => $is_reseller ? 'My clients' : 'Users & resellers', 'href' => null];
        break;
      case 'assign':
        $ipmiCrumbs[] = ['label' => $is_reseller ? 'Assign servers' : 'Assignment', 'href' => null];
        break;
      case 'api_keys':
        $ipmiCrumbs[] = ['label' => 'API keys', 'href' => null];
        break;
      case 'profile':
        $ipmiCrumbs[] = ['label' => 'Account', 'href' => null];
        break;
    }
  }
}

$ipmiShowPageBar = ($ipmiPageDescription !== '') || (!empty($ipmiCrumbs));
?>
<header class="ipmi-app-header">
  <div class="ipmi-header-top">
    <div class="ipmi-header-brand">
      <span class="ipmi-header-logo" aria-hidden="true">
        <svg width="36" height="36" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="48" height="48" rx="12" fill="url(#ipmiGrad)"/>
          <path d="M24 14v8m0 4v8M18 22h12" stroke="#0f172a" stroke-width="2.5" stroke-linecap="round"/>
          <defs>
            <linearGradient id="ipmiGrad" x1="8" y1="4" x2="44" y2="44" gradientUnits="userSpaceOnUse">
              <stop stop-color="#38bdf8"/>
              <stop offset="1" stop-color="#6366f1"/>
            </linearGradient>
          </defs>
        </svg>
      </span>
      <div class="ipmi-header-titles">
        <h1 class="ipmi-header-title">
          <span class="ipmi-brand-text">IPMI Panel</span>
          <span class="ipmi-header-sub"><?= $ipmiUname ?></span>
        </h1>
        <?php if ($ipmiPageTitle !== ''): ?>
          <p class="ipmi-header-page"><?= htmlspecialchars($ipmiPageTitle, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
      </div>
    </div>
    <button type="button" class="mobile-menu-toggle" onclick="toggleMobileMenu()" aria-label="Open menu">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>
    <a href="<?= $lo ?>" class="logout">Logout</a>
  </div>
  <nav class="desktop-nav ipmi-header-nav" aria-label="Main">
    <a href="index.php" class="<?= $nav === 'dashboard' ? 'ipmi-nav-active' : '' ?>">Dashboard</a>
    <?php if ($is_admin): ?>
      <a href="admin_servers.php" class="<?= $nav === 'servers' ? 'ipmi-nav-active' : '' ?>">Servers</a>
      <a href="admin_clients.php" class="<?= $nav === 'clients' ? 'ipmi-nav-active' : '' ?>">Users &amp; Resellers</a>
      <a href="admin_assign.php" class="<?= $nav === 'assign' ? 'ipmi-nav-active' : '' ?>">Assign</a>
      <a href="admin_api_keys.php" class="<?= $nav === 'api_keys' ? 'ipmi-nav-active' : '' ?>">API Keys</a>
    <?php elseif ($is_reseller): ?>
      <a href="admin_clients.php" class="<?= $nav === 'clients' ? 'ipmi-nav-active' : '' ?>">My Clients</a>
      <a href="admin_assign.php" class="<?= $nav === 'assign' ? 'ipmi-nav-active' : '' ?>">Assign Servers</a>
    <?php endif; ?>
    <a href="profile.php" class="<?= $nav === 'profile' ? 'ipmi-nav-active' : '' ?>">Profile</a>
  </nav>
  <nav class="mobile-nav" id="mobileNav" aria-label="Mobile main">
    <div class="mobile-nav-inner">
      <a href="index.php" onclick="closeMobileMenu()" class="<?= $nav === 'dashboard' ? 'ipmi-nav-active' : '' ?>">Dashboard</a>
      <?php if ($is_admin): ?>
        <a href="admin_servers.php" onclick="closeMobileMenu()" class="<?= $nav === 'servers' ? 'ipmi-nav-active' : '' ?>">Servers</a>
        <a href="admin_clients.php" onclick="closeMobileMenu()" class="<?= $nav === 'clients' ? 'ipmi-nav-active' : '' ?>">Users &amp; Resellers</a>
        <a href="admin_assign.php" onclick="closeMobileMenu()" class="<?= $nav === 'assign' ? 'ipmi-nav-active' : '' ?>">Assign</a>
        <a href="admin_api_keys.php" onclick="closeMobileMenu()" class="<?= $nav === 'api_keys' ? 'ipmi-nav-active' : '' ?>">API Keys</a>
      <?php elseif ($is_reseller): ?>
        <a href="admin_clients.php" onclick="closeMobileMenu()" class="<?= $nav === 'clients' ? 'ipmi-nav-active' : '' ?>">My Clients</a>
        <a href="admin_assign.php" onclick="closeMobileMenu()" class="<?= $nav === 'assign' ? 'ipmi-nav-active' : '' ?>">Assign Servers</a>
      <?php endif; ?>
      <a href="profile.php" onclick="closeMobileMenu()" class="<?= $nav === 'profile' ? 'ipmi-nav-active' : '' ?>">Profile</a>
      <a href="<?= $lo ?>" onclick="closeMobileMenu()" class="ipmi-nav-danger">Logout</a>
    </div>
  </nav>
</header>
<?php if ($ipmiShowPageBar): ?>
  <div class="ipmi-page-bar">
    <div class="ipmi-page-bar-inner">
      <?php if (!empty($ipmiCrumbs)): ?>
        <nav class="ipmi-breadcrumb" aria-label="Breadcrumb">
          <?php foreach ($ipmiCrumbs as $i => $c):
            $cl = htmlspecialchars((string) ($c['label'] ?? ''), ENT_QUOTES, 'UTF-8');
            $ch = isset($c['href']) && $c['href'] !== null && $c['href'] !== ''
              ? htmlspecialchars((string) $c['href'], ENT_QUOTES, 'UTF-8')
              : '';
            ?>
            <?php if ($i > 0): ?>
              <span class="ipmi-bc-sep" aria-hidden="true">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            <?php endif; ?>
            <?php if ($ch !== ''): ?>
              <a href="<?= $ch ?>"><?= $cl ?></a>
            <?php else: ?>
              <span class="ipmi-bc-current"><?= $cl ?></span>
            <?php endif; ?>
          <?php endforeach; ?>
        </nav>
      <?php endif; ?>
      <?php if ($ipmiPageDescription !== ''): ?>
        <p class="ipmi-page-desc"><?= htmlspecialchars($ipmiPageDescription, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
