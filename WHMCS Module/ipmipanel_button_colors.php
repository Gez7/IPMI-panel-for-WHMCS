<?php
/**
 * WHMCS hook: colorize IPMI module command buttons in Admin service page.
 *
 * Upload to: WHMCS_ROOT/includes/hooks/ipmipanel_button_colors.php
 */

if (!defined('WHMCS')) {
  die('This file cannot be accessed directly');
}

add_hook('AdminAreaFooterOutput', 1, function ($vars) {
  $self = basename((string)($_SERVER['PHP_SELF'] ?? ''));
  if ($self !== 'clientsservices.php') {
    return '';
  }

  return <<<HTML
<script>
(function () {
  function ensureStyle() {
    if (document.getElementById('ipmipanel-admin-btn-colors-style')) {
      return;
    }
    var style = document.createElement('style');
    style.id = 'ipmipanel-admin-btn-colors-style';
    style.textContent = ""
      + ".ipmi-btn-poweron{background:#28a745 !important;border-color:#28a745 !important;color:#fff !important;}"
      + ".ipmi-btn-poweroff{background:#dc3545 !important;border-color:#dc3545 !important;color:#fff !important;}"
      + ".ipmi-btn-reboot{background:#fd7e14 !important;border-color:#fd7e14 !important;color:#fff !important;}"
      + ".ipmi-btn-getstatus{background:#17a2b8 !important;border-color:#17a2b8 !important;color:#fff !important;}";
    document.head.appendChild(style);
  }

  function normalizeText(text) {
    return String(text || '')
      .replace(/\\s+/g, ' ')
      .trim()
      .toLowerCase();
  }

  function paintIpmiButtons() {
    ensureStyle();

    var nodes = document.querySelectorAll('input[type="submit"], button, a.btn');
    for (var i = 0; i < nodes.length; i++) {
      var el = nodes[i];
      var text = normalizeText(el.value || el.textContent || '');

      // Reset our module classes first so repaint is deterministic.
      el.classList.remove('ipmi-btn-poweron', 'ipmi-btn-poweroff', 'ipmi-btn-reboot', 'ipmi-btn-getstatus');

      if (text === 'power on') {
        el.classList.add('ipmi-btn-poweron');
      } else if (text === 'power off') {
        el.classList.add('ipmi-btn-poweroff');
      } else if (text === 'reboot') {
        el.classList.add('ipmi-btn-reboot');
      } else if (text === 'get status') {
        el.classList.add('ipmi-btn-getstatus');
      }
    }
  }

  var paintTimer = null;
  function schedulePaint() {
    if (paintTimer) {
      clearTimeout(paintTimer);
    }
    paintTimer = setTimeout(function () {
      paintTimer = null;
      paintIpmiButtons();
    }, 80);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      paintIpmiButtons();
    });
  } else {
    paintIpmiButtons();
  }

  // Re-apply after dynamic updates (WHMCS can redraw module command area).
  if (typeof MutationObserver !== 'undefined') {
    var observer = new MutationObserver(function () {
      schedulePaint();
    });
    observer.observe(document.body, {
      childList: true,
      subtree: true
    });
  }

  // Safety repaint for delayed async rendering.
  setTimeout(paintIpmiButtons, 300);
  setTimeout(paintIpmiButtons, 1000);
  setInterval(paintIpmiButtons, 2500);
})();
</script>
HTML;
});
