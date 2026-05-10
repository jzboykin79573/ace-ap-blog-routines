<?php
/**
 * Template Name: AP Computer Science Prep — Coming Soon
 *
 * This line above is what WordPress reads to make this a selectable
 * page template. When you create a WordPress Page with the slug
 * "ap-computer-science-prep", go to:
 *   WP Admin → Edit Page → Page Attributes → Template → "AP Computer Science Prep — Coming Soon"
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * PURPOSE:
 * ─────────────────────────────────────────────────────────────────────────────
 * Holds the place for the AP CS section until content is ready.
 * Displays a "Content Coming Soon" banner and a preview of what's planned.
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * WHEN AP CS LAUNCHES:
 * ─────────────────────────────────────────────────────────────────────────────
 * 1. Create a proper archive page template (e.g., page-ap-cs-prep.php)
 *    that shows a blog grid similar to index.php.
 * 2. Remove or archive this file.
 * 3. Update the nav links in header.php and footer.php to the new archive URL.
 * 4. Update the "Coming Soon" subject card on front-page.php:
 *    - Remove the corner ribbon
 *    - Change btn-outline to btn-primary
 *    - Update the button href
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * TO EDIT THIS PAGE:
 * ─────────────────────────────────────────────────────────────────────────────
 *  - "What's Coming" items → Find the $coming PHP array below and update the items
 *  - Course platform CTA → Find the .cta-navy-block div at the bottom
 *  - Hero headline → Find the .post-hero section
 *
 * @package ace-ap
 */

get_header(); // Renders header.php
?>


<!-- ============================================================
     HERO — Coming Soon
     ─────────────────────────────────────────────────────────
     Uses .post-hero (same as other pages — navy, grid pattern).
     TO CHANGE HEADLINE: Edit the <h1> text below.
============================================================ -->
<div class="post-hero">
    <div class="post-hero-inner">
        <span class="eyebrow eyebrow--light"><?php esc_html_e( 'AP CS Prep', 'ace-ap' ); ?></span>
        <h1><?php esc_html_e( 'AP Computer Science Prep', 'ace-ap' ); ?></h1>
        <p style="color: rgba(255,255,255,0.8); margin-top: var(--s-3); font-size: 17px;">
            <?php esc_html_e(
                'Study guides, practice problems, and exam strategies for AP Computer Science A and AP CSP — launching soon.',
                'ace-ap'
            ); ?>
        </p>
    </div>
</div><!-- .post-hero -->

<?php ace_breadcrumbs(); // "Home / AP Computer Science Prep" trail ?>


<!-- ============================================================
     MAIN CONTENT
     ─────────────────────────────────────────────────────────
     Narrow container (max-width: 760px) — no sidebar on this page.
============================================================ -->
<div class="section section--tint">
    <div class="container" style="max-width: 760px;">


        <!-- ─── COMING SOON BANNER ───────────────────────────── -->
        <div style="background: var(--white); border: 1px solid var(--border-1);
                    border-top: 4px solid var(--gold-500); border-radius: var(--r-lg);
                    padding: var(--s-8); text-align: center; margin-bottom: var(--s-8);">

            <!-- Icon circle: code brackets (computer science visual) -->
            <div style="width: 64px; height: 64px; background: var(--navy-50);
                        border-radius: 50%; display: flex; align-items: center;
                        justify-content: center; margin: 0 auto var(--s-5);">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                     viewBox="0 0 24 24" fill="none" stroke="var(--navy-700)"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true">
                    <polyline points="16 18 22 12 16 6"/>
                    <polyline points="8 6 2 12 8 18"/>
                </svg>
            </div>

            <h2 style="margin-bottom: var(--s-3);">
                <?php esc_html_e( 'Content Coming Soon', 'ace-ap' ); ?>
            </h2>
            <p style="color: var(--fg-2); font-size: 16px; max-width: 520px;
                      margin: 0 auto var(--s-6);">
                <?php esc_html_e(
                    "We're building out AP Computer Science A and AP CSP study guides, practice problems, and exam strategies. Check back soon — or start with AP Calculus now.",
                    'ace-ap'
                ); ?>
            </p>

            <!-- CTA: redirects to AP Calculus while CS content is being built -->
            <a href="<?php echo esc_url( home_url( '/ap-calculus-prep' ) ); ?>"
               class="btn btn-primary">
                <?php esc_html_e( 'Browse AP Calculus resources', 'ace-ap' ); ?>
            </a>
        </div><!-- Coming soon banner -->


        <!-- ─── WHAT'S COMING GRID ────────────────────────────
             Two cards: one for AP CS A, one for AP CSP.
             Uses a PHP array for content so it's easy to update.
             TO ADD A TOPIC: Add a new string to the relevant $items array.
             TO ADD A SUBJECT: Add a new array entry to $coming. -->
        <h2 style="margin-bottom: var(--s-5);">
            <?php esc_html_e( "What's Coming", 'ace-ap' ); ?>
        </h2>

        <!-- Two-column grid (collapses to 1 col on mobile) -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--s-4);">

            <?php
            // Content roadmap for each AP CS subject.
            // TO EDIT: Update the 'title' and 'items' arrays below.
            $coming = array(
                array(
                    'title' => 'AP Computer Science A',
                    'items' => array(
                        'Java fundamentals',
                        'Object-oriented programming',
                        'Arrays & ArrayLists',
                        'Recursion & algorithms',
                        'FRQ strategies',
                    ),
                ),
                array(
                    'title' => 'AP Computer Science Principles',
                    'items' => array(
                        'Big Ideas & Enduring Understandings',
                        'Algorithms & programming',
                        'Data & analysis',
                        'Internet & cybersecurity',
                        'Create Performance Task',
                    ),
                ),
            );

            foreach ( $coming as $section ) : ?>
                <div style="background: var(--white); border: 1px solid var(--border-1);
                            border-radius: var(--r-md); padding: var(--s-5);">

                    <h4 style="margin-bottom: var(--s-4); color: var(--navy-800);">
                        <?php echo esc_html( $section['title'] ); ?>
                    </h4>

                    <ul style="list-style: none; margin: 0; padding: 0;
                               display: flex; flex-direction: column; gap: var(--s-2);">
                        <?php foreach ( $section['items'] as $item ) : ?>
                            <li style="display: flex; align-items: center; gap: var(--s-2);
                                       font-size: 14px; color: var(--fg-2);">
                                <!-- Gold checkmark icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                     viewBox="0 0 24 24" fill="none" stroke="var(--gold-600)"
                                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                     aria-hidden="true" style="flex-shrink:0;">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <?php echo esc_html( $item ); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div><!-- subject card -->
            <?php endforeach; ?>

        </div><!-- two-col grid -->


        <!-- ─── COURSE PLATFORM CTA ──────────────────────────
             Deep navy block at the bottom pointing to the course platform.
             TO CHANGE LINK: Update href="https://course.enginearu.com"
             TO CHANGE TEXT: Update the h3 and p text below. -->
        <div style="background: var(--navy-800); border-radius: var(--r-lg);
                    padding: var(--s-7); margin-top: var(--s-8); text-align: center;">
            <span style="font-family: var(--font-display); font-size: 11px; font-weight: 700;
                         letter-spacing: 0.12em; text-transform: uppercase; color: var(--gold-400);">
                <?php esc_html_e( 'Available now', 'ace-ap' ); ?>
            </span>
            <h3 style="color: var(--white); margin: var(--s-2) 0 var(--s-3);">
                <?php esc_html_e( 'Access the Course Platform', 'ace-ap' ); ?>
            </h3>
            <p style="color: rgba(255,255,255,0.75); font-size: 15px;
                      max-width: 460px; margin: 0 auto var(--s-5);">
                <?php esc_html_e(
                    'Structured AP prep courses and study materials are available now through our course platform.',
                    'ace-ap'
                ); ?>
            </p>
            <a href="https://course.enginearu.com" class="btn btn-secondary"
               target="_blank" rel="noopener noreferrer">
                <?php esc_html_e( 'Go to Course Platform', 'ace-ap' ); ?>
            </a>
        </div><!-- course platform CTA -->

    </div><!-- .container -->
</div><!-- section -->

<?php get_footer(); // Renders footer.php ?>
