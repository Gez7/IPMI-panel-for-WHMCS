/**
 * Three-dot row action menus (.ipmi-row-actions).
 * Menus are moved to document.body while open so position:fixed matches the viewport
 * (ancestor transforms on .ipmi-main / .container would otherwise break fixed positioning).
 */
(function () {
  function initRowActionMenus() {
    var openMenu = null;
    var openBtn = null;

    function rememberMenuSlot(menu) {
      if (menu._ipmiSlot) return;
      menu._ipmiSlot = {
        parent: menu.parentNode,
        next: menu.nextSibling
      };
    }

    function restoreMenuToDom(menu) {
      if (!menu || !menu._ipmiSlot) return;
      if (menu.parentNode !== document.body) return;
      var s = menu._ipmiSlot;
      if (!s.parent) return;
      try {
        if (s.next && s.next.parentNode === s.parent) {
          s.parent.insertBefore(menu, s.next);
        } else {
          s.parent.appendChild(menu);
        }
      } catch (e) {}
    }

    function closeAny() {
      if (!openMenu || !openBtn) return;
      openBtn.setAttribute("aria-expanded", "false");
      openMenu.setAttribute("hidden", "");
      openMenu.classList.remove("is-open");
      openMenu.style.top = "";
      openMenu.style.left = "";
      openMenu.style.right = "";
      openMenu.style.position = "";
      openMenu.style.zIndex = "";
      restoreMenuToDom(openMenu);
      document.removeEventListener("keydown", onDocKey);
      window.removeEventListener("resize", onRepos);
      window.removeEventListener("scroll", onRepos, true);
      openBtn = null;
      openMenu = null;
    }

    function positionMenu(btn, menu) {
      var r = btn.getBoundingClientRect();
      var mw = menu.offsetWidth || 200;
      var mh = menu.offsetHeight || 1;
      var gap = 6;
      var top = r.bottom + gap;
      var left = r.right - mw;
      if (left < 8) left = 8;
      if (left + mw > window.innerWidth - 8) left = Math.max(8, window.innerWidth - mw - 8);
      if (top + mh > window.innerHeight - 8) {
        top = r.top - mh - gap;
        if (top < 8) top = 8;
      }
      menu.style.position = "fixed";
      menu.style.zIndex = "10050";
      menu.style.top = top + "px";
      menu.style.left = left + "px";
    }

    function onRepos() {
      if (openBtn && openMenu) positionMenu(openBtn, openMenu);
    }

    function onDocKey(e) {
      if (!openMenu) return;
      var items = Array.prototype.slice.call(openMenu.querySelectorAll('[role="menuitem"]'));
      var ix = items.indexOf(document.activeElement);
      if (e.key === "Escape") {
        e.preventDefault();
        var b = openBtn;
        closeAny();
        if (b) b.focus();
        return;
      }
      if (e.key === "ArrowDown") {
        e.preventDefault();
        var next = items[(ix < 0 ? -1 : ix) + 1] || items[0];
        if (next) next.focus();
        return;
      }
      if (e.key === "ArrowUp") {
        e.preventDefault();
        var prev = items[(ix < 0 ? items.length : ix) - 1] || items[items.length - 1];
        if (prev) prev.focus();
        return;
      }
    }

    function open(btn, menu) {
      closeAny();
      rememberMenuSlot(menu);
      document.body.appendChild(menu);

      btn.setAttribute("aria-expanded", "true");
      menu.removeAttribute("hidden");
      menu.classList.add("is-open");
      openBtn = btn;
      openMenu = menu;
      void menu.offsetWidth;
      positionMenu(btn, menu);

      document.addEventListener("keydown", onDocKey);
      window.addEventListener("resize", onRepos);
      window.addEventListener("scroll", onRepos, true);

      requestAnimationFrame(function () {
        requestAnimationFrame(function () {
          if (openMenu !== menu || openBtn !== btn) return;
          positionMenu(btn, menu);
          var first = menu.querySelector('[role="menuitem"]');
          if (first) first.focus();
        });
      });
    }

    document.querySelectorAll(".ipmi-row-actions").forEach(function (wrap) {
      var btn = wrap.querySelector(".ipmi-actions-trigger");
      var menu = wrap.querySelector(".ipmi-actions-menu");
      if (!btn || !menu) return;
      btn.addEventListener("click", function (e) {
        e.stopPropagation();
        if (openMenu === menu && menu.classList.contains("is-open")) {
          closeAny();
          btn.focus();
          return;
        }
        open(btn, menu);
      });
    });

    document.addEventListener(
      "click",
      function (e) {
        if (!openMenu || !openBtn) return;
        if (openBtn.contains(e.target) || openMenu.contains(e.target)) return;
        closeAny();
      },
      false
    );
  }

  function boot() {
    initRowActionMenus();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", boot);
  } else {
    boot();
  }
})();
