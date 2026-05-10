    </main><!-- #site-content — opened in header.php -->

<!-- ============================================================
     SITE FOOTER
     ─────────────────────────────────────────────────────────
     Four-column grid layout (collapses on mobile — see style.css):
       Col 1: Brand identity + tagline (2/5 width)
       Col 2: AP Calculus topic links
       Col 3: AP CS Prep links
       Col 4: EngiNearU company links

     TO ADD A FOOTER LINK: Find the relevant <ul> below and add a <li>.
     TO CHANGE THE TAGLINE: Edit the <p> inside .footer-brand.
     TO CHANGE COPYRIGHT: Edit the .footer-bottom section at the bottom.
============================================================ -->
<footer class="site-footer" id="site-footer">

    <!-- ─── FOUR-COLUMN FOOTER GRID ────────────────────────── -->
    <div class="footer-grid">

        <!-- Col 1: Brand ─────────────────────────────────────── -->
        <div class="footer-brand">

            <!-- Logo (same markup as header.php but white text) -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
               class="site-logo" rel="home" style="margin-bottom: 0;">
                <div class="logo-mark" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                         viewBox="0 0 24 24" fill="none" stroke="#ffffff"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                </div>
                <!-- TO CHANGE BRAND NAME: Edit both here and in header.php -->
                <div class="logo-wordmark" style="color: var(--white);">
                    EngiNearU <span>AP Prep</span>
                </div>
            </a>

            <!-- TO EDIT THE FOOTER TAGLINE: Change the text below -->
            <p>
                <?php esc_html_e(
                    'Free study guides, practice resources, and expert prep for AP Calculus and AP Computer Science. There is always an Engineer Near U.',
                    'ace-ap'
                ); ?>
            </p>

        </div><!-- .footer-brand -->


        <!-- Col 2: AP Calculus topic links ───────────────────── -->
        <div class="footer-col">
            <h4><?php esc_html_e( 'AP Calculus', 'ace-ap' ); ?></h4>
            <ul>
                <!-- "All Resources" links to the main AP Calculus archive page -->
                <li>
                    <a href="<?php echo esc_url( home_url( '/ap-calculus-prep' ) ); ?>">
                        <?php esc_html_e( 'All Resources', 'ace-ap' ); ?>
                    </a>
                </li>
                <!-- Topic links go to WP category archive pages.
                     These slugs must match the category slugs created in WP Admin → Posts → Categories.
                     TO ADD A TOPIC: Duplicate a <li> and update the slug and label. -->
                <li>
                    <a href="<?php echo esc_url( home_url( '/category/limits' ) ); ?>">
                        <?php esc_html_e( 'Limits &amp; Continuity', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/category/derivatives' ) ); ?>">
                        <?php esc_html_e( 'Derivatives', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/category/integrals' ) ); ?>">
                        <?php esc_html_e( 'Integrals', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/category/series' ) ); ?>">
                        <?php esc_html_e( 'Series &amp; Sequences', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/category/exam-prep' ) ); ?>">
                        <?php esc_html_e( 'Exam Prep', 'ace-ap' ); ?>
                    </a>
                </li>
            </ul>
        </div><!-- AP Calculus col -->


        <!-- Col 3: AP Computer Science Prep links ────────────── -->
        <div class="footer-col">
            <h4><?php esc_html_e( 'AP CS Prep', 'ace-ap' ); ?></h4>
            <ul>
                <!-- These all point to the CS prep page until individual topic pages exist -->
                <li>
                    <a href="<?php echo esc_url( home_url( '/ap-computer-science-prep' ) ); ?>">
                        <?php esc_html_e( 'Overview', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/ap-computer-science-prep' ) ); ?>">
                        <?php esc_html_e( 'AP CS A', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/ap-computer-science-prep' ) ); ?>">
                        <?php esc_html_e( 'AP CSP', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <!-- "Coming Soon" badge — remove the badge and update the link when content launches -->
                    <a href="<?php echo esc_url( home_url( '/ap-computer-science-prep' ) ); ?>"
                       style="display: inline-flex; align-items: center; gap: 5px;">
                        <?php esc_html_e( 'Coming Soon', 'ace-ap' ); ?>
                        <span style="background: var(--gold-600); color: var(--white);
                                     font-size: 9px; font-weight: 700; letter-spacing: 0.08em;
                                     text-transform: uppercase; padding: 2px 6px;
                                     border-radius: 3px;">New</span>
                    </a>
                </li>
            </ul>
        </div><!-- AP CS col -->


        <!-- Col 4: EngiNearU company links ───────────────────── -->
        <div class="footer-col">
            <h4><?php esc_html_e( 'EngiNearU', 'ace-ap' ); ?></h4>
            <ul>
                <!-- External: Course Platform -->
                <li>
                    <a href="https://course.enginearu.com" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e( 'Course Platform', 'ace-ap' ); ?>
                    </a>
                </li>
                <!-- Internal pages — create these as WP Pages with matching slugs -->
                <li>
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">
                        <?php esc_html_e( 'About', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                        <?php esc_html_e( 'Contact', 'ace-ap' ); ?>
                    </a>
                </li>
                <li>
                    <!-- WP auto-creates a Privacy Policy page — set its URL at WP Admin → Settings → Privacy -->
                    <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">
                        <?php esc_html_e( 'Privacy Policy', 'ace-ap' ); ?>
                    </a>
                </li>
            </ul>
        </div><!-- EngiNearU col -->

    </div><!-- .footer-grid -->


    <!-- ─── FOOTER BOTTOM BAR ───────────────────────────────── -->
    <!-- Copyright year auto-updates via PHP date() — no manual updates needed. -->
    <div class="footer-bottom">
        <span>
            &copy; <?php echo esc_html( date( 'Y' ) ); ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">EngiNearU LLC</a>.
            <?php esc_html_e( 'All rights reserved.', 'ace-ap' ); ?>
        </span>
        <!-- TO CHANGE THE TAGLINE: Edit the text below -->
        <span><?php esc_html_e( 'There is always an Engineer Near U.', 'ace-ap' ); ?></span>
    </div><!-- .footer-bottom -->

</footer><!-- .site-footer -->

</div><!-- .site-wrapper — opened in header.php -->

<?php
/**
 * wp_footer() — Required WordPress hook.
 * Outputs: deferred scripts (including assets/js/main.js),
 * plugin-injected scripts, and admin bar (when logged in).
 * Always keep this just before </body> — removing it will break JS.
 */
wp_footer();
?>
</body>
</html>
