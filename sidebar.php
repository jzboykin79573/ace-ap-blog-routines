<?php
/**
 * sidebar.php — Right-hand Sidebar
 *
 * Called by get_sidebar() in index.php and single.php.
 * Renders inside the right column of .content-grid.
 * Sticky on desktop (position: sticky; top: 80px in style.css).
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * WIDGET ORDER (top to bottom):
 * ─────────────────────────────────────────────────────────────────────────────
 *  1. Search
 *  2. Course Platform CTA   (navy background, .widget--cta)
 *  3. Review Sheets CTA     (gold-tinted border-top)
 *  4. Topics list           (auto-populates from WP categories; shows placeholder if none)
 *  5. Recent articles       (thumbnails + title + date)
 *  6. Dynamic widget area   (WP Admin → Appearance → Widgets → Main Sidebar)
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * TO ADD A NEW WIDGET: Add a new <div class="widget"> block anywhere below.
 * TO CHANGE WIDGET ORDER: Reorder the <div class="widget"> blocks.
 * TO REMOVE A WIDGET: Delete its <div class="widget"> block.
 * TO EDIT CTA LINKS: Find the <a href="..."> inside each widget and update the URL.
 *
 * @package ace-ap
 */
?>

<aside class="sidebar" role="complementary"
       aria-label="<?php esc_attr_e( 'Sidebar', 'ace-ap' ); ?>">


    <!-- ============================================================
         WIDGET 1: SEARCH
    ============================================================ -->
    <div class="widget">
        <h3 class="widget-title"><?php esc_html_e( 'Search', 'ace-ap' ); ?></h3>
        <!-- Native HTML search form — submits to the WP search results (index.php with is_search()) -->
        <form class="search-form" role="search" method="get"
              action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input
                type="search"
                name="s"  <?php /* WP search uses the "s" query parameter */ ?>
                value="<?php echo esc_attr( get_search_query() ); ?>"
                placeholder="<?php esc_attr_e( 'Search articles…', 'ace-ap' ); ?>"
                aria-label="<?php esc_attr_e( 'Search', 'ace-ap' ); ?>"
            >
            <button type="submit" class="btn btn-primary btn-sm">
                <?php esc_html_e( 'Go', 'ace-ap' ); ?>
            </button>
        </form>
    </div><!-- Search widget -->


    <!-- ============================================================
         WIDGET 2: COURSE PLATFORM CTA
         ─────────────────────────────────────────────────────────
         Navy background (.widget--cta), promotes the course platform.
         TO CHANGE THE LINK: Update href="https://course.enginearu.com"
         TO CHANGE THE TEXT: Update the h3 and p text below.
    ============================================================ -->
    <div class="widget widget--cta">
        <h3 class="widget-title"><?php esc_html_e( 'Go deeper', 'ace-ap' ); ?></h3>
        <h3><?php esc_html_e( 'Ready to score a 5?', 'ace-ap' ); ?></h3>
        <p><?php esc_html_e(
            'Access structured AP Calculus courses and study materials on the EngiNearU course platform.',
            'ace-ap'
        ); ?></p>
        <a href="https://course.enginearu.com" class="btn btn-secondary btn-full"
           target="_blank" rel="noopener noreferrer">
            <?php esc_html_e( 'Access Course Platform', 'ace-ap' ); ?>
        </a>
    </div><!-- Course Platform CTA widget -->


    <!-- ============================================================
         WIDGET 3: REVIEW SHEETS CTA
         ─────────────────────────────────────────────────────────
         Light navy tint background with a gold top accent border.
         TO CHANGE THE LINK: Update href="https://www.aceapcalculus.com/reviewsheet50"
    ============================================================ -->
    <div class="widget"
         style="background: var(--navy-50); border: 1px solid var(--border-1);
                border-top: 3px solid var(--gold-500); border-radius: var(--r-md);
                padding: var(--s-5);">
        <span style="font-family: var(--font-display); font-size: 10px; font-weight: 700;
                     letter-spacing: 0.12em; text-transform: uppercase; color: var(--gold-600);">
            <?php esc_html_e( 'Study Resource', 'ace-ap' ); ?>
        </span>
        <h4 style="margin: var(--s-2) 0 var(--s-2); font-size: 15px;">
            <?php esc_html_e( 'AP Calculus Review Sheets', 'ace-ap' ); ?>
        </h4>
        <p style="font-size: 13px; color: var(--fg-2); margin-bottom: var(--s-4);">
            <?php esc_html_e(
                'Topic-by-topic review sheets covering every major AP Calculus AB and BC concept.',
                'ace-ap'
            ); ?>
        </p>
        <a href="https://www.aceapcalculus.com/reviewsheet50"
           class="btn btn-primary btn-full"
           target="_blank" rel="noopener noreferrer">
            <?php esc_html_e( 'Get the Review Sheets', 'ace-ap' ); ?>
        </a>
    </div><!-- Review Sheets widget -->


    <!-- ============================================================
         WIDGET 4: TOPICS (categories list)
         ─────────────────────────────────────────────────────────
         Auto-populates from WP categories (sorted by post count, top 10).
         Shows a hardcoded placeholder list when no categories exist yet.

         TO CREATE REAL CATEGORIES: WP Admin → Posts → Categories
         Required slugs: limits, derivatives, integrals, series, exam-prep, calc-ab, calc-bc
         (These slugs are also used in footer.php links.)

         TO CHANGE HOW MANY TOPICS SHOW: Update 'number' => 10 below.
    ============================================================ -->
    <div class="widget">
        <h3 class="widget-title"><?php esc_html_e( 'Topics', 'ace-ap' ); ?></h3>

        <?php
        // Get all WP categories, sorted by post count (most popular first)
        $cats = get_categories( array(
            'orderby' => 'count',
            'order'   => 'DESC',
            'number'  => 10,
        ) );

        if ( ! empty( $cats ) ) :
        ?>
            <!-- Real categories from WP Admin → Posts → Categories -->
            <ul class="category-list">
                <?php foreach ( $cats as $cat ) : ?>
                    <li>
                        <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">
                            <?php echo esc_html( $cat->name ); ?>
                            <!-- Post count badge (e.g., "12") -->
                            <span class="cat-count"><?php echo esc_html( $cat->count ); ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php else : ?>

            <!-- Placeholder list — shown when no WP categories have been created yet.
                 This mirrors the AP Calculus curriculum structure.
                 REMOVE THIS BLOCK once real categories are set up in WP Admin. -->
            <ul class="category-list">
                <?php
                $placeholder_cats = array(
                    'Unit 1: Limits &amp; Continuity',
                    'Unit 2: Differentiation — Basics',
                    'Unit 3: Differentiation — Composite &amp; Implicit',
                    'Unit 4: Contextual Applications',
                    'Unit 5: Analytical Applications',
                    'Unit 6: Integration &amp; Accumulation',
                    'Unit 7: Differential Equations',
                    'Unit 8: Applications of Integration',
                    'Unit 9: Parametric, Polar &amp; Vectors',
                    'Unit 10: Infinite Sequences &amp; Series',
                    'Exam Prep',
                    'Study Tips',
                );
                foreach ( $placeholder_cats as $name ) :
                ?>
                    <li>
                        <a href="#">
                            <?php echo wp_kses_post( $name ); ?>
                            <span class="cat-count">—</span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>

    </div><!-- Topics widget -->


    <!-- ============================================================
         WIDGET 5: RECENT ARTICLES
         ─────────────────────────────────────────────────────────
         Shows the 5 most recently published posts with thumbnail + title + date.
         TO CHANGE HOW MANY SHOW: Update 'posts_per_page' => 5 below.
    ============================================================ -->
    <div class="widget">
        <h3 class="widget-title"><?php esc_html_e( 'Recent articles', 'ace-ap' ); ?></h3>

        <?php
        $recent = new WP_Query( array(
            'posts_per_page' => 5,
            'post_status'    => 'publish',
        ) );

        if ( $recent->have_posts() ) :
        ?>
            <ul style="display: flex; flex-direction: column; gap: var(--s-4);">
                <?php while ( $recent->have_posts() ) : $recent->the_post(); ?>
                    <li style="display: flex; gap: var(--s-3); align-items: flex-start;">

                        <!-- Thumbnail (54×54 square) or placeholder icon -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" style="flex-shrink: 0;">
                                <?php the_post_thumbnail( array( 54, 54 ), array(
                                    'style' => 'width:54px;height:54px;object-fit:cover;border-radius:var(--r-sm);',
                                    'alt'   => esc_attr( get_the_title() ),
                                ) ); ?>
                            </a>
                        <?php else : ?>
                            <div style="width:54px;height:54px;border-radius:var(--r-sm);
                                        background:var(--navy-50);display:flex;align-items:center;
                                        justify-content:center;flex-shrink:0;" aria-hidden="true">
                                <?php echo ace_icon_grad_cap( 22, 'var(--navy-300)' ); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Title + date -->
                        <div>
                            <a href="<?php the_permalink(); ?>"
                               style="font-family:var(--font-display);font-size:13px;
                                      font-weight:700;color:var(--navy-700);text-decoration:none;
                                      line-height:var(--lh-snug);display:block;">
                                <?php the_title(); ?>
                            </a>
                            <span style="font-size:12px;color:var(--fg-3);font-family:var(--font-display);">
                                <?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
                            </span>
                        </div>

                    </li>
                <?php endwhile; wp_reset_postdata(); // Always reset after a custom WP_Query ?>
            </ul>

        <?php else : ?>
            <p style="font-size:var(--fs-small);color:var(--fg-3);">
                <?php esc_html_e( 'Articles coming soon.', 'ace-ap' ); ?>
            </p>
        <?php endif; ?>

    </div><!-- Recent articles widget -->


    <!-- ============================================================
         WIDGET 6: DYNAMIC WP WIDGET AREA
         ─────────────────────────────────────────────────────────
         Allows widgets added via WP Admin → Appearance → Widgets
         to appear at the bottom of the sidebar.
         The widget area "Main Sidebar" is registered in functions.php.
         This is where you'd add an email signup embed, an ad unit, etc.
    ============================================================ -->
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php endif; ?>

</aside><!-- .sidebar -->
