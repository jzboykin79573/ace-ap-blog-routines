/**
 * main.js — ACE AP Calculus Blog — Client-side JavaScript
 *
 * Loaded in the footer (after the DOM is ready) via wp_enqueue_script() in functions.php.
 * All code is wrapped in DOMContentLoaded to guarantee elements exist before we touch them.
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * FEATURES IN THIS FILE:
 * ─────────────────────────────────────────────────────────────────────────────
 *  1. MOBILE MENU TOGGLE    — opens/closes the nav on small screens
 *  2. STICKY HEADER SHADOW  — adds a scroll shadow when the page is scrolled
 *  3. SMOOTH ANCHOR SCROLL  — offset-corrected smooth scroll for in-page anchors
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * HOW TO ADD A NEW FEATURE:
 * ─────────────────────────────────────────────────────────────────────────────
 * 1. Add a clearly labeled section block (like the ones below).
 * 2. Wrap it in a null-check on the element(s) it targets so it fails silently
 *    on pages where those elements don't exist.
 * 3. Add an entry to CHANGELOG.md.
 *
 * NO jQuery — vanilla JavaScript only.
 * NO ES6 modules — plain script that runs inline.
 *
 * @package ace-ap
 * @version 2.0.0
 */

document.addEventListener('DOMContentLoaded', function () {


  // ============================================================
  // 1. MOBILE MENU TOGGLE
  // ─────────────────────────────────────────────────────────
  // Toggles the .open class on .main-nav when the hamburger
  // button (#menu-toggle) is clicked.
  //
  // Elements involved:
  //   #menu-toggle  — the hamburger button (header.php)
  //   #main-nav     — the <nav> element (header.php)
  //
  // CSS:
  //   .main-nav.open { display: block; } — style.css → RESPONSIVE 768px
  //
  // Accessibility:
  //   aria-expanded on the button is toggled true/false so screen
  //   readers announce whether the menu is open or closed.
  // ============================================================
  const toggle = document.getElementById('menu-toggle');
  const nav    = document.getElementById('main-nav');

  if (toggle && nav) {

    // Click the hamburger: toggle menu open/closed
    toggle.addEventListener('click', function () {
      const isOpen = nav.classList.toggle('open');   // Returns true if .open was added
      toggle.setAttribute('aria-expanded', isOpen);  // Update screen reader state
    });

    // Click anywhere outside the nav or toggle: close the menu
    // This prevents the menu from staying open when the user clicks away.
    document.addEventListener('click', function (e) {
      if (!nav.contains(e.target) && !toggle.contains(e.target)) {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });

  }


  // ============================================================
  // 2. STICKY HEADER SCROLL SHADOW
  // ─────────────────────────────────────────────────────────
  // Adds a subtle drop shadow to the site header when the page
  // is scrolled more than 10px. Removes it when back at the top.
  //
  // Why 10px? — Small threshold prevents a flicker on page load
  // when the browser hasn't quite settled scroll position.
  //
  // { passive: true } — tells the browser this listener won't call
  // e.preventDefault(), enabling scroll performance optimizations.
  //
  // TO CHANGE THE SHADOW VALUE: Update the rgba() strings below.
  // Shadow token reference: see style.css → DESIGN SYSTEM TOKENS → Shadows.
  // ============================================================
  const header = document.getElementById('site-header');

  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 10) {
        // Scroll: stronger shadow (matches --shadow-md intensity)
        header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.12)';
      } else {
        // Top of page: very subtle shadow
        header.style.boxShadow = '0 1px 3px rgba(0,0,0,0.08)';
      }
    }, { passive: true });
  }


  // ============================================================
  // 3. SMOOTH ANCHOR SCROLL (with header offset)
  // ─────────────────────────────────────────────────────────
  // Intercepts clicks on in-page anchor links (href="#section-id")
  // and scrolls smoothly to the target, accounting for the sticky
  // header height so the target isn't hidden underneath it.
  //
  // How the offset works:
  //   header.offsetHeight = 64px (defined in style.css → HEADER)
  //   + 16px breathing room
  //   = 80px total scroll offset
  //
  // Example usage in PHP templates:
  //   <a href="#key-concepts">Jump to Key Concepts</a>
  //   <section id="key-concepts">...</section>
  //
  // TO CHANGE THE BREATHING ROOM: Update the + 16 value below.
  // ============================================================
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');

      // Skip lone "#" links (used as placeholder hrefs)
      if (targetId === '#') return;

      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        // Calculate offset: header height (64px) + 16px margin
        const offset = header ? header.offsetHeight + 16 : 80;
        const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });


  // ============================================================
  // ADD NEW FEATURES BELOW THIS LINE
  // ─────────────────────────────────────────────────────────
  // Use this pattern:
  //
  //   // ============================================================
  //   // N. FEATURE NAME
  //   // ─────────────────────────────────────────────────────────
  //   // Description of what this does and why.
  //   // ============================================================
  //   const myElement = document.getElementById('my-element');
  //   if (myElement) {
  //     // Your code here
  //   }
  // ============================================================


}); // End DOMContentLoaded
