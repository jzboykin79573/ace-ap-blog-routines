<!DOCTYPE html>
<html <?php language_attributes(); /* Outputs lang="en" (or current locale) */ ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php
    /**
     * wp_head() — Required WordPress hook.
     * Outputs: <title>, stylesheet links, script tags, Open Graph tags,
     * and anything else registered via add_action('wp_head', ...).
     * Always keep this here — removing it will break the site.
     */
    wp_head();
    ?>
</head>

<body <?php body_class(); /* Adds context classes like "single-post home blog" */ ?>>
<?php wp_body_open(); /* Required hook — used by plugins like Google Tag Manager */ ?>

<!-- ============================================================
     SITE WRAPPER
     min-height: 100vh flex column — ensures footer stays at bottom
     even on short pages. Paired with .site-content { flex: 1 } below.
     See style.css → LAYOUT section.
============================================================ -->
<div class="site-wrapper">

<header class="site-header" id="site-header">
    <!--
        Sticky header: backdrop-filter blur + border-bottom.
        Scroll shadow is added/removed by JS in assets/js/main.js.
        TO CHANGE THE HEADER HEIGHT: update height: 64px in style.css → HEADER & NAV.
    -->
    <div class="header-inner">

        <!-- ─── LOGO ──────────────────────────────────────────────────
             Logo mark: navy square with grad cap SVG icon.
             Logo wordmark: "EngiNearU" in navy + "AP Prep" in gold.
             TO UPDATE LOGO TEXT: Edit the .logo-wordmark div below.
             TO REPLACE WITH AN IMAGE LOGO: Use the_custom_logo() here
             and configure it at WP Admin → Appearance → Customize → Site Identity.
        ─────────────────────────────────────────────────────────────── -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">

            <!-- Grad cap SVG icon — inline so no extra HTTP request -->
            <div class="logo-mark" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                     viewBox="0 0 24 24" fill="none" stroke="#ffffff"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
            </div>

            <!-- TO CHANGE THE BRAND NAME: Edit the text below -->
            <div class="logo-wordmark">
                EngiNearU <span>AP Prep</span>
            </div>

        </a><!-- .site-logo -->


        <!-- ─── PRIMARY NAVIGATION ──────────────────────────────────
             Two paths:
             1. If a menu is assigned in WP Admin → Appearance → Menus,
                wp_nav_menu() renders it with your custom links.
             2. If no menu is assigned, the fallback <ul> is shown.

             TO ADD OR CHANGE NAV LINKS (quick way): Edit the fallback <ul> below.
             TO MANAGE NAV VIA WP ADMIN: Appearance → Menus → assign to "Primary Navigation".

             The last item (.btn-nav-cta) is always the CTA button.
             Styled in style.css → HEADER & NAV → .btn-nav-cta.
        ─────────────────────────────────────────────────────────────── -->
        <nav class="main-nav" id="main-nav"
             aria-label="<?php esc_attr_e( 'Primary Navigation', 'ace-ap' ); ?>">

            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                // Render the WP-managed menu (Appearance → Menus)
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,   // No wrapper <div>
                    'fallback_cb'    => false,   // Don't show fallback if no menu
                ) );
                ?>
            <?php else : ?>
                <!-- Fallback nav — shown when no WP menu is assigned.
                     TO EDIT LINKS: Update the href values and link text below. -->
                <ul id="primary-menu">

                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                           <?php echo is_front_page() ? 'class="current"' : ''; ?>>
                            <?php esc_html_e( 'Home', 'ace-ap' ); ?>
                        </a>
                    </li>

                    <li>
                        <!-- AP Calculus archive page — set permalink in WP Admin → Settings → Reading -->
                        <a href="<?php echo esc_url( home_url( '/ap-calculus-prep' ) ); ?>">
                            <?php esc_html_e( 'AP Calculus', 'ace-ap' ); ?>
                        </a>
                    </li>

                    <li>
                        <!-- AP CS page — uses the template in templates/page-ap-computer-science-prep.php -->
                        <a href="<?php echo esc_url( home_url( '/ap-computer-science-prep' ) ); ?>">
                            <?php esc_html_e( 'AP CS Prep', 'ace-ap' ); ?>
                        </a>
                    </li>

                    <li>
                        <!-- External CTA — Course Platform link -->
                        <a href="https://course.enginearu.com" class="btn-nav-cta"
                           target="_blank" rel="noopener noreferrer">
                            <?php esc_html_e( 'Course Platform', 'ace-ap' ); ?>
                        </a>
                    </li>

                </ul>
            <?php endif; ?>

        </nav><!-- .main-nav -->


        <!-- ─── MOBILE HAMBURGER TOGGLE ─────────────────────────────
             Hidden on desktop (display: none in style.css).
             Shown on screens ≤ 768px (see responsive section in style.css).
             Click behavior: adds/removes .open class to .main-nav via main.js.
             The three <span> elements are the hamburger lines.
        ─────────────────────────────────────────────────────────────── -->
        <button class="menu-toggle" id="menu-toggle"
                aria-controls="main-nav"
                aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation', 'ace-ap' ); ?>">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div><!-- .header-inner -->
</header><!-- .site-header -->


<!-- ============================================================
     MAIN CONTENT AREA
     Everything between header and footer goes here.
     Closed by </main> in footer.php.
     flex: 1 on .site-content pushes footer to the bottom.
============================================================ -->
<main class="site-content" id="site-content">
