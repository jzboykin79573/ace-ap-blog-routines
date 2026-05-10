<?php
/**
 * front-page.php — Homepage Template
 *
 * WordPress loads this file when displaying the site homepage,
 * whether it's set to "Your latest posts" or a static front page
 * (WP Admin → Settings → Reading).
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * PAGE SECTIONS (top to bottom):
 * ─────────────────────────────────────────────────────────────────────────────
 *  1. HERO              — Navy section: headline, CTAs, stats, floating card
 *  2. SUBJECT CARDS     — AP Calculus card + AP CS "Coming Soon" card
 *  3. FREE RESOURCES    — 3 lead magnet cards (guide, diagnostic, review sheets)
 *  4. LATEST BLOG POSTS — Dynamic: pulls the 3 most recent published posts
 *  5. PLATFORM CTA BAND — Full-width "Go deeper with our course platform" strip
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * HOW TO EDIT COMMON THINGS:
 * ─────────────────────────────────────────────────────────────────────────────
 *  - Hero headline          → Find <h1> in the HERO section below
 *  - Hero stats (87%, 500+) → Find .hero-stats div below
 *  - Free guide card        → Find "hero-card" div below
 *  - Subject card content   → Find SUBJECT CARDS section
 *  - Lead magnet URLs       → Search for aceapcalculus.com links
 *  - Latest posts count     → Change 'posts_per_page' => 3 in the WP_Query
 *  - CTA band headline      → Find .cta-band section at the bottom
 *
 * @package ace-ap
 */

get_header(); // Renders header.php (DOCTYPE, <head>, <header>, <nav>)
?>


<!-- ============================================================
     SECTION 1: HERO
     ─────────────────────────────────────────────────────────
     Full-width navy surface with grid pattern.
     Left column: eyebrow + headline + description + CTA buttons + stats.
     Right column: floating white card (free guide promo).
     The hero card is hidden on tablets (see style.css responsive).

     TO EDIT HEADLINE: Update the <h1> text below.
     TO EDIT STATS: Update the .hero-stat-num / .hero-stat-label pairs.
     TO CHANGE THE HERO CARD: Edit the .hero-card div.
     Styling is in style.css → HERO section.
============================================================ -->
<section class="site-hero">
    <div class="hero-inner">

        <!-- ─── LEFT: Headline + CTAs + Stats ─── -->
        <div class="hero-content">
            <span class="eyebrow eyebrow--light"><?php esc_html_e( 'AP Exam Prep', 'ace-ap' ); ?></span>

            <!-- Main headline — <span> wraps the gold-colored portion -->
            <h1>Ace Your AP Exams.<br><span>We'll show you how.</span></h1>

            <p><?php esc_html_e(
                'Free study guides, practice resources, and expert prep for AP Calculus and AP Computer Science — built by tutors who\'ve aced every exam.',
                'ace-ap'
            ); ?></p>

            <!-- Hero CTA buttons -->
            <div class="hero-actions">
                <!-- Primary CTA → AP Calculus archive -->
                <a href="<?php echo esc_url( home_url( '/ap-calculus-prep' ) ); ?>"
                   class="btn btn-secondary">
                    <?php esc_html_e( 'Browse AP Calculus', 'ace-ap' ); ?>
                </a>
                <!-- Secondary CTA → External course platform -->
                <a href="https://course.enginearu.com" class="btn btn-outline-light"
                   target="_blank" rel="noopener noreferrer">
                    <?php esc_html_e( 'Access Course Platform', 'ace-ap' ); ?>
                </a>
            </div><!-- .hero-actions -->

            <!-- ─── Hero stats ───
                 Three social-proof numbers below the CTAs.
                 TO UPDATE: Change the .hero-stat-num values. -->
            <div class="hero-stats">
                <div>
                    <span class="hero-stat-num">87%</span>
                    <span class="hero-stat-label"><?php esc_html_e( 'score 4 or 5', 'ace-ap' ); ?></span>
                </div>
                <div>
                    <span class="hero-stat-num">500+</span>
                    <span class="hero-stat-label"><?php esc_html_e( 'students helped', 'ace-ap' ); ?></span>
                </div>
                <div>
                    <span class="hero-stat-num">2</span>
                    <span class="hero-stat-label"><?php esc_html_e( 'AP subjects covered', 'ace-ap' ); ?></span>
                </div>
            </div><!-- .hero-stats -->

        </div><!-- .hero-content -->


        <!-- ─── RIGHT: Floating Hero Card ───
             White card on navy background. Promotes the free guide.
             Hidden on tablet/mobile (display: none in style.css).
             TO CHANGE FEATURED RESOURCE: Update the title, label, and href below. -->
        <div class="hero-card">
            <span class="eyebrow"><?php esc_html_e( 'Free this week', 'ace-ap' ); ?></span>
            <h3><?php esc_html_e( 'What to Know Before Taking AP Calculus', 'ace-ap' ); ?></h3>
            <p class="card-topic-label">
                <?php esc_html_e( 'Free guide — AP Calculus AB &amp; BC', 'ace-ap' ); ?>
            </p>
            <!-- TO CHANGE THE LINK: Update href to the new lead magnet URL -->
            <a href="https://www.aceapcalculus.com/before-apcalc"
               class="btn btn-primary"
               style="margin-top: var(--s-4); width: 100%; text-align: center;"
               target="_blank" rel="noopener noreferrer">
                <?php esc_html_e( 'Get the Free Guide', 'ace-ap' ); ?>
            </a>
        </div><!-- .hero-card -->

    </div><!-- .hero-inner -->
</section><!-- .site-hero -->


<!-- ============================================================
     SECTION 2: SUBJECT CARDS
     ─────────────────────────────────────────────────────────
     Two cards: one for AP Calculus, one for AP CS (coming soon).
     The "Coming Soon" ribbon is a CSS-rotated absolute div.
     When AP CS launches: remove the ribbon and update the button href.

     TO ADD A NEW SUBJECT CARD: Duplicate one of the subject <div> blocks below.
============================================================ -->
<section class="section section--light">
    <div class="container">

        <div class="section-header">
            <span class="eyebrow"><?php esc_html_e( 'Choose your subject', 'ace-ap' ); ?></span>
            <h2><?php esc_html_e( 'What Are You Studying?', 'ace-ap' ); ?></h2>
            <p><?php esc_html_e( 'Select a subject to access free resources, study guides, and practice materials.', 'ace-ap' ); ?></p>
        </div>

        <!-- Two-column auto-fit grid. Columns collapse to 1 on mobile. -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: var(--s-6); margin-top: var(--s-6);">

            <!-- ─── AP Calculus Card ─── -->
            <div style="background: var(--white); border: 1px solid var(--border-1);
                        border-radius: var(--r-lg); padding: var(--s-7);
                        box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">

                <!-- Card header: icon + eyebrow + heading -->
                <div style="display: flex; align-items: center; gap: var(--s-3); margin-bottom: var(--s-4);">
                    <div style="width: 48px; height: 48px; background: var(--navy-100);
                                border-radius: var(--r-md); display: flex; align-items: center;
                                justify-content: center; flex-shrink: 0;">
                        <!-- Line chart icon = math/calculus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="var(--navy-700)"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <div>
                        <span style="font-family: var(--font-display); font-size: 11px;
                                     font-weight: 700; letter-spacing: 0.12em;
                                     text-transform: uppercase; color: var(--gold-600);">
                            AP Calculus Prep
                        </span>
                        <h3 style="margin: 0; font-size: 22px; line-height: 1.2;">
                            <?php esc_html_e( 'AP Calculus', 'ace-ap' ); ?>
                        </h3>
                    </div>
                </div><!-- card header -->

                <p style="color: var(--fg-2); font-size: 15px; line-height: 1.65; margin-bottom: var(--s-4);">
                    <?php esc_html_e(
                        'Free study guides, practice problems, and exam strategies for AP Calculus AB and BC. From limits and derivatives to series and FRQ prep.',
                        'ace-ap'
                    ); ?>
                </p>

                <!-- Topic badges -->
                <div style="display: flex; flex-wrap: wrap; gap: var(--s-2); margin-bottom: var(--s-5);">
                    <span style="background: var(--navy-50); color: var(--navy-700);
                                 font-size: 12px; font-weight: 600; padding: 4px 10px;
                                 border-radius: 99px;">Calc AB</span>
                    <span style="background: var(--navy-50); color: var(--navy-700);
                                 font-size: 12px; font-weight: 600; padding: 4px 10px;
                                 border-radius: 99px;">Calc BC</span>
                    <span style="background: var(--navy-50); color: var(--navy-700);
                                 font-size: 12px; font-weight: 600; padding: 4px 10px;
                                 border-radius: 99px;">FRQ &amp; MCQ Prep</span>
                </div>

                <!-- CTA button pushed to bottom with margin-top: auto -->
                <a href="<?php echo esc_url( home_url( '/ap-calculus-prep' ) ); ?>"
                   class="btn btn-primary" style="margin-top: auto;">
                    <?php esc_html_e( 'Start Studying', 'ace-ap' ); ?> &rarr;
                </a>
            </div><!-- AP Calculus card -->


            <!-- ─── AP Computer Science Card ─── (Coming Soon)
                 The ribbon is an absolutely-positioned rotated div.
                 position: relative + overflow: hidden on the parent clips the ribbon.
                 WHEN AP CS LAUNCHES: Remove the ribbon div, change btn-outline to btn-primary,
                 and update the href to the actual AP CS archive page. -->
            <div style="background: var(--white); border: 1px solid var(--border-1);
                        border-radius: var(--r-lg); padding: var(--s-7);
                        box-shadow: var(--shadow-sm); display: flex; flex-direction: column;
                        position: relative; overflow: hidden;">

                <!-- Coming Soon corner ribbon — rotate 35deg, positioned top-right -->
                <div style="position: absolute; top: 18px; right: -28px;
                            background: var(--gold-600); color: var(--white);
                            font-family: var(--font-display); font-size: 10px;
                            font-weight: 700; letter-spacing: 0.1em;
                            text-transform: uppercase; padding: 5px 40px;
                            transform: rotate(35deg);">
                    <?php esc_html_e( 'Coming Soon', 'ace-ap' ); ?>
                </div>

                <!-- Card header: icon + eyebrow + heading -->
                <div style="display: flex; align-items: center; gap: var(--s-3); margin-bottom: var(--s-4);">
                    <div style="width: 48px; height: 48px; background: var(--navy-100);
                                border-radius: var(--r-md); display: flex; align-items: center;
                                justify-content: center; flex-shrink: 0;">
                        <!-- Code brackets icon = computer science -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="var(--navy-700)"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <polyline points="16 18 22 12 16 6"/>
                            <polyline points="8 6 2 12 8 18"/>
                        </svg>
                    </div>
                    <div>
                        <span style="font-family: var(--font-display); font-size: 11px;
                                     font-weight: 700; letter-spacing: 0.12em;
                                     text-transform: uppercase; color: var(--gold-600);">
                            AP CS Prep
                        </span>
                        <h3 style="margin: 0; font-size: 22px; line-height: 1.2;">
                            <?php esc_html_e( 'AP Computer Science', 'ace-ap' ); ?>
                        </h3>
                    </div>
                </div><!-- card header -->

                <p style="color: var(--fg-2); font-size: 15px; line-height: 1.65; margin-bottom: var(--s-4);">
                    <?php esc_html_e(
                        'Study guides, practice problems, and exam strategies for AP Computer Science A and AP Computer Science Principles. Content launching soon.',
                        'ace-ap'
                    ); ?>
                </p>

                <!-- Topic badges -->
                <div style="display: flex; flex-wrap: wrap; gap: var(--s-2); margin-bottom: var(--s-5);">
                    <span style="background: var(--navy-50); color: var(--navy-700);
                                 font-size: 12px; font-weight: 600; padding: 4px 10px;
                                 border-radius: 99px;">AP CS A</span>
                    <span style="background: var(--navy-50); color: var(--navy-700);
                                 font-size: 12px; font-weight: 600; padding: 4px 10px;
                                 border-radius: 99px;">AP CSP</span>
                    <span style="background: var(--navy-50); color: var(--navy-700);
                                 font-size: 12px; font-weight: 600; padding: 4px 10px;
                                 border-radius: 99px;">Java &amp; Python</span>
                </div>

                <!-- Slightly muted button until the section launches -->
                <a href="<?php echo esc_url( home_url( '/ap-computer-science-prep' ) ); ?>"
                   class="btn btn-outline" style="margin-top: auto; opacity: 0.85;">
                    <?php esc_html_e( "View What's Coming", 'ace-ap' ); ?> &rarr;
                </a>

            </div><!-- AP CS card -->

        </div><!-- two-col grid -->
    </div><!-- .container -->
</section><!-- Subject cards section -->


<!-- ============================================================
     SECTION 3: FREE RESOURCES
     ─────────────────────────────────────────────────────────
     Three lead magnet resource cards with gold top borders.
     Each card links out to the aceapcalculus.com lead magnet landing pages.

     TO UPDATE A RESOURCE LINK: Find the <a href="..."> for that card
     and update the URL.
     TO ADD A FOURTH CARD: Duplicate a card <a> block below and add it to the grid.
============================================================ -->
<section class="section section--tint">
    <div class="container">

        <div class="section-header">
            <span class="eyebrow"><?php esc_html_e( 'Free resources', 'ace-ap' ); ?></span>
            <h2><?php esc_html_e( 'Resources to Get You Started', 'ace-ap' ); ?></h2>
            <p><?php esc_html_e( 'Free guides, assessments, and study materials to help you (or your student) hit the ground running in AP Calculus.', 'ace-ap' ); ?></p>
        </div>

        <!-- Three-column auto-fit grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                    gap: var(--s-5); margin-top: var(--s-6);">

            <!-- ─── Resource 1: Free Guide ─── -->
            <a href="https://www.aceapcalculus.com/before-apcalc"
               target="_blank" rel="noopener noreferrer"
               style="background: var(--white); border: 1px solid var(--border-1);
                      border-top: 3px solid var(--gold-500); border-radius: var(--r-md);
                      padding: var(--s-6); text-decoration: none; display: flex;
                      flex-direction: column; gap: var(--s-3); transition: box-shadow 0.15s;">
                <span style="font-family: var(--font-display); font-size: 10px;
                             font-weight: 700; letter-spacing: 0.12em;
                             text-transform: uppercase; color: var(--gold-600);">
                    Free Guide
                </span>
                <h3 style="margin: 0; font-size: 17px; color: var(--navy-900); line-height: 1.4;">
                    <?php esc_html_e( 'What to Know Before Taking AP Calculus', 'ace-ap' ); ?>
                </h3>
                <p style="margin: 0; font-size: 14px; color: var(--fg-2); line-height: 1.6;">
                    <?php esc_html_e( 'Everything parents and students should know before the course begins — prerequisites, common mistakes, and how to prepare.', 'ace-ap' ); ?>
                </p>
                <span style="font-family: var(--font-display); font-size: 13px;
                             font-weight: 700; color: var(--navy-600); margin-top: auto;">
                    <?php esc_html_e( 'Download Free', 'ace-ap' ); ?> &rarr;
                </span>
            </a>

            <!-- ─── Resource 2: Summer Diagnostic Assessment ─── -->
            <a href="https://www.aceapcalculus.com/summer-diagnostic-page"
               target="_blank" rel="noopener noreferrer"
               style="background: var(--white); border: 1px solid var(--border-1);
                      border-top: 3px solid var(--gold-500); border-radius: var(--r-md);
                      padding: var(--s-6); text-decoration: none; display: flex;
                      flex-direction: column; gap: var(--s-3); transition: box-shadow 0.15s;">
                <span style="font-family: var(--font-display); font-size: 10px;
                             font-weight: 700; letter-spacing: 0.12em;
                             text-transform: uppercase; color: var(--gold-600);">
                    Free Assessment
                </span>
                <h3 style="margin: 0; font-size: 17px; color: var(--navy-900); line-height: 1.4;">
                    <?php esc_html_e( 'Is Your Teen Ready for AP Calculus?', 'ace-ap' ); ?>
                </h3>
                <p style="margin: 0; font-size: 14px; color: var(--fg-2); line-height: 1.6;">
                    <?php esc_html_e( 'Our summer diagnostic helps you find out exactly where your student stands before the course starts.', 'ace-ap' ); ?>
                </p>
                <span style="font-family: var(--font-display); font-size: 13px;
                             font-weight: 700; color: var(--navy-600); margin-top: auto;">
                    <?php esc_html_e( 'Take the Diagnostic', 'ace-ap' ); ?> &rarr;
                </span>
            </a>

            <!-- ─── Resource 3: AP Calculus Review Sheets ─── -->
            <!-- Note: navy border-top instead of gold — visually differentiates this resource type -->
            <a href="https://www.aceapcalculus.com/reviewsheet50"
               target="_blank" rel="noopener noreferrer"
               style="background: var(--white); border: 1px solid var(--border-1);
                      border-top: 3px solid var(--navy-600); border-radius: var(--r-md);
                      padding: var(--s-6); text-decoration: none; display: flex;
                      flex-direction: column; gap: var(--s-3); transition: box-shadow 0.15s;">
                <span style="font-family: var(--font-display); font-size: 10px;
                             font-weight: 700; letter-spacing: 0.12em;
                             text-transform: uppercase; color: var(--navy-600);">
                    Study Resource
                </span>
                <h3 style="margin: 0; font-size: 17px; color: var(--navy-900); line-height: 1.4;">
                    <?php esc_html_e( 'AP Calculus Review Sheets', 'ace-ap' ); ?>
                </h3>
                <p style="margin: 0; font-size: 14px; color: var(--fg-2); line-height: 1.6;">
                    <?php esc_html_e( 'Topic-by-topic review sheets covering every major AP Calculus AB and BC concept. Print them, use them, score higher.', 'ace-ap' ); ?>
                </p>
                <span style="font-family: var(--font-display); font-size: 13px;
                             font-weight: 700; color: var(--navy-600); margin-top: auto;">
                    <?php esc_html_e( 'Get the Review Sheets', 'ace-ap' ); ?> &rarr;
                </span>
            </a>

        </div><!-- three-col grid -->
    </div><!-- .container -->
</section><!-- Free Resources section -->


<!-- ============================================================
     SECTION 4: LATEST BLOG POSTS
     ─────────────────────────────────────────────────────────
     Dynamically queries the 3 most recent published posts.
     Uses the reusable .post-card component (styled in style.css).

     TO CHANGE HOW MANY POSTS SHOW: Update 'posts_per_page' => 3
     TO FILTER BY CATEGORY: Add 'category_name' => 'calc-ab' to the WP_Query args
     TO LINK TO A DIFFERENT ARCHIVE: Update the "View all" href below.

     Post card structure: post-card > post-card-thumb + post-card-body
     Helper functions (ace_subject_badge, ace_author_initials, ace_read_time)
     are defined in functions.php.
============================================================ -->
<section class="section section--light">
    <div class="container">

        <div class="section-header">
            <span class="eyebrow"><?php esc_html_e( 'AP Calculus blog', 'ace-ap' ); ?></span>
            <h2><?php esc_html_e( 'Latest Study Guides', 'ace-ap' ); ?></h2>
            <p><?php esc_html_e( 'New guides and practice resources added regularly. All free.', 'ace-ap' ); ?></p>
        </div>

        <?php
        // Query for the 3 most recent posts.
        // 'ignore_sticky_posts' => true means sticky posts don't jump to the top here.
        $recent = new WP_Query( array(
            'post_type'           => 'post',
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
        ) );
        ?>

        <?php if ( $recent->have_posts() ) : ?>

            <div class="blog-grid">
                <?php while ( $recent->have_posts() ) : $recent->the_post(); ?>

                    <article class="post-card">

                        <!-- Thumbnail (or grad cap placeholder if no featured image) -->
                        <div class="post-card-thumb">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'ace-card', array(
                                        'alt' => esc_attr( get_the_title() ),
                                    ) ); ?>
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink(); ?>" class="thumb-placeholder">
                                    <?php echo ace_icon_grad_cap( 48, 'var(--navy-300)' ); ?>
                                </a>
                            <?php endif; ?>
                            <!-- Subject badge: AP Calc AB / AP Calc BC (from functions.php) -->
                            <?php echo ace_subject_badge(); ?>
                        </div><!-- .post-card-thumb -->

                        <!-- Card body: category, title, excerpt, meta -->
                        <div class="post-card-body">
                            <?php $cats = get_the_category(); if ( ! empty( $cats ) ) : ?>
                                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"
                                   class="post-card-cat">
                                    <?php echo esc_html( $cats[0]->name ); ?>
                                </a>
                            <?php endif; ?>

                            <h3 class="post-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <p class="post-card-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>

                            <!-- Post meta: avatar / author / date / read time -->
                            <div class="post-meta">
                                <div class="author-avatar" aria-hidden="true">
                                    <?php echo esc_html( ace_author_initials() ); ?>
                                </div>
                                <span><?php the_author(); ?></span>
                                <span class="sep">/</span>
                                <span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
                                <span class="read-time"><?php echo esc_html( ace_read_time() ); ?></span>
                            </div><!-- .post-meta -->

                        </div><!-- .post-card-body -->
                    </article><!-- .post-card -->

                <?php endwhile; wp_reset_postdata(); // Always reset after a custom WP_Query ?>
            </div><!-- .blog-grid -->

            <!-- "View all" link -->
            <div class="text-center" style="margin-top: var(--s-8);">
                <a href="<?php echo esc_url( home_url( '/ap-calculus-prep' ) ); ?>"
                   class="btn btn-primary">
                    <?php esc_html_e( 'View all AP Calculus articles', 'ace-ap' ); ?>
                </a>
            </div>

        <?php else : ?>
            <!-- Empty state — shown before any posts are published -->
            <div class="no-posts">
                <h3><?php esc_html_e( 'Articles on the way', 'ace-ap' ); ?></h3>
                <p><?php esc_html_e( 'The first posts are being written now. Check back soon.', 'ace-ap' ); ?></p>
            </div>
        <?php endif; ?>

    </div><!-- .container -->
</section><!-- Latest blog posts section -->


<!-- ============================================================
     SECTION 5: PLATFORM CTA BAND
     ─────────────────────────────────────────────────────────
     Full-width deep navy strip promoting the course platform.
     Styled by .cta-band in style.css.
     TO EDIT: Change the headline, paragraph, or button links below.
============================================================ -->
<div class="cta-band">
    <div class="container">
        <span class="eyebrow eyebrow--light">
            <?php esc_html_e( 'EngiNearU Course Platform', 'ace-ap' ); ?>
        </span>
        <!-- <span> inside h2 gets gold color from style.css → .cta-band h2 span -->
        <h2>
            <?php esc_html_e( 'Go deeper with our ', 'ace-ap' ); ?>
            <span><?php esc_html_e( 'course platform', 'ace-ap' ); ?></span>.
        </h2>
        <p><?php esc_html_e(
            'Access structured AP prep courses, study materials, and practice content — all in one place. Built for students who want to go beyond the free resources.',
            'ace-ap'
        ); ?></p>
        <div class="cta-band-actions">
            <!-- Primary CTA → External course platform -->
            <a href="https://course.enginearu.com" class="btn btn-secondary"
               target="_blank" rel="noopener noreferrer">
                <?php esc_html_e( 'Access Course Platform', 'ace-ap' ); ?>
            </a>
            <!-- Secondary CTA → Internal AP Calculus archive -->
            <a href="<?php echo esc_url( home_url( '/ap-calculus-prep' ) ); ?>"
               class="btn btn-outline-light">
                <?php esc_html_e( 'Browse free resources', 'ace-ap' ); ?>
            </a>
        </div><!-- .cta-band-actions -->
    </div><!-- .container -->
</div><!-- .cta-band -->

<?php get_footer(); // Renders footer.php (footer links, copyright, wp_footer()) ?>
