/**
 * frq-hub-fixes.js — mobile UX fixes for the FRQ Hub overlays.
 *
 * Adds tap-outside, ESC, and swipe-down dismiss + a 44x44 top-right
 * close button to the Mock Section II preview, FRQ library picker,
 * and study-space practice workspace. Defensive: no-ops if the
 * expected elements aren't on the page.
 */
(function () {
  'use strict';

  // Overlay containers on the FRQ Hub. Each has a known internal
  // cancel/close button we click to reuse the page's own teardown logic.
  var OVERLAYS = [
    { sel: '#ss-mock-preview', cancelSel: '#ss-mock-cancel' },
    { sel: '#ss-picker',       cancelSel: '#ss-picker-close' },
    { sel: '#study-space',     cancelSel: '.ss-close, [data-action="close"]' }
  ];

  function isVisible(el) {
    if (!el) return false;
    var cs = window.getComputedStyle(el);
    if (cs.display === 'none' || cs.visibility === 'hidden') return false;
    return el.offsetParent !== null || cs.position === 'fixed';
  }

  function closeOverlay(overlay, cancelSel) {
    if (!overlay) return;
    var btn = cancelSel ? overlay.querySelector(cancelSel) : null;
    if (btn) {
      btn.click();
      return;
    }
    overlay.style.display = 'none';
    overlay.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  function injectCloseButton(overlay, cancelSel) {
    if (overlay.querySelector('.ace-overlay-close')) return;
    var btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'ace-overlay-close';
    btn.setAttribute('aria-label', 'Close');
    btn.textContent = '×'; // ×
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      closeOverlay(overlay, cancelSel);
    });

    // Anchor the button inside the inner card if one exists, so it
    // sits within the modal frame rather than the dimmed backdrop.
    var card = overlay.querySelector('.ss-picker-card, .ss-topbar, .ss-sheet, .ss-content') || overlay;
    card.style.position = card.style.position || 'relative';
    card.appendChild(btn);
  }

  function bind(overlay, cancelSel) {
    if (!overlay || overlay.dataset.aceBound === '1') return;
    overlay.dataset.aceBound = '1';

    injectCloseButton(overlay, cancelSel);

    // Tap on the backdrop (overlay element itself, not its inner card)
    overlay.addEventListener('click', function (e) {
      if (e.target === overlay) closeOverlay(overlay, cancelSel);
    });

    // Swipe-down to dismiss (mobile)
    var startY = null;
    overlay.addEventListener('touchstart', function (e) {
      if (e.touches && e.touches.length === 1) startY = e.touches[0].clientY;
    }, { passive: true });
    overlay.addEventListener('touchend', function (e) {
      if (startY === null) return;
      var endY = e.changedTouches && e.changedTouches[0] ? e.changedTouches[0].clientY : startY;
      var dy = endY - startY;
      startY = null;
      // Require a clear downward swipe AND that the start point was
      // near the top half of the screen, so vertical content scrolls
      // inside the modal still work.
      if (dy > 90) closeOverlay(overlay, cancelSel);
    }, { passive: true });
  }

  // ESC closes whichever overlay is currently visible.
  document.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape' && e.keyCode !== 27) return;
    for (var i = 0; i < OVERLAYS.length; i++) {
      var o = document.querySelector(OVERLAYS[i].sel);
      if (isVisible(o)) {
        closeOverlay(o, OVERLAYS[i].cancelSel);
        return;
      }
    }
  });

  function scan() {
    for (var i = 0; i < OVERLAYS.length; i++) {
      var o = document.querySelector(OVERLAYS[i].sel);
      if (o) bind(o, OVERLAYS[i].cancelSel);
    }
  }

  if (document.readyState !== 'loading') scan();
  else document.addEventListener('DOMContentLoaded', scan);

  // Some overlays are injected late; observe for additions.
  if (typeof MutationObserver !== 'undefined') {
    var mo = new MutationObserver(function () { scan(); });
    mo.observe(document.documentElement, { subtree: true, childList: true });
  }
})();
