<?php
/**
 * single.php — Individual Post Template
 *
 * WordPress loads this file when a reader opens a single blog post.
 * URL example: yoursite.com/2026/04/ap-calculus-limits-explained
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * PAGE SECTIONS (top to bottom):
 * ─────────────────────────────────────────────────────────────────────────────
 *  1. POST HERO       — Navy header: category link + post title + meta (author/date/read time)
 *  2. BREADCRUMBS     — Home / Category / Post Title trail
 *  3. POST BODY       — Two-column: (featured image + content + tags + author box + nav + related) + sidebar
 *  4. RELATED POSTS   — 3 posts from the same category
 *  5. COMMENTS        — WordPress comment form (if comments are enabled)
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * HOW TO EDIT COMMON THINGS:
 * ─────────────────────────────────────────────────────────────────────────────
 *  - Author bio text    → WP Admin → Users → Edit user → Biographical Info
 *    (the fallback bio in the author box below is shown when no bio is set)
 *  - Related posts count → Change 'posts_per_page' => 3 in the WP_Query below
 *  - Comments on/off    → WP Admin → Settings → Discussion OR per-post settings
 *  - Layout width       → .post-content max-width: 720px in style.css
 *
 * @package ace-ap
 */

get_header(); // Renders header.php

// WordPress "The Loop" — for single posts, this loops exactly once.
while ( have_posts() ) : the_post();
?>


<!-- ============================================================
     1. POST HERO
     ─────────────────────────────────────────────────────────
     Navy header with the post title and meta.
     Category link appears above the title as a gold uppercase label.
     Styled by .post-hero in style.css.
============================================================ -->
<div class="post-hero">
    <div class="post-hero-inner">

        <!-- Category label — gold, uppercase, links to category archive -->
        <?php $cats = get_the_category(); if ( ! empty( $cats ) ) : ?>
            <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"
               style="font-family: var(--font-display); font-size: 11px; font-weight: 700;
                      letter-spacing: 0.14em; text-transform: uppercase;
                      color: var(--gold-600); text-decoration: none;">
                <?php echo esc_html( $cats[0]->name ); ?>
            </a>
        <?php endif; ?>

        <!-- Post title — output by the_title() which escapes HTML automatically -->
        <h1><?php the_title(); ?></h1>

        <!-- Post meta: author avatar / author name / date / read time
             All helper functions are defined in functions.php. -->
        <div class="post-meta">
            <div class="author-avatar" aria-hidden="true">
                <?php echo esc_html( ace_author_initials() ); ?>
            </div>
            <span><?php the_author(); ?></span>
            <span class="sep">/</span>
            <!-- <time> with machine-readable datetime for SEO and assistive tech -->
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                <?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
            </time>
            <span class="sep">/</span>
            <span><?php echo esc_html( ace_read_time() ); ?></span>
        </div><!-- .post-meta -->

    </div><!-- .post-hero-inner -->
</div><!-- .post-hero -->

<?php ace_breadcrumbs(); // "Home / Category / Post Title" trail — from functions.php ?>


<!-- ============================================================
     2. POST BODY
     ─────────────────────────────────────────────────────────
     Two-column grid: main content left, sidebar right.
     Sidebar collapses below content on tablet.
============================================================ -->
<div class="post-body-wrapper">
    <div class="container">
        <div class="content-grid">

            <!-- ─── MAIN CONTENT (left column) ─── -->
            <div>

                <!-- Featured image — shown full-width above the post text.
                     Uses 'ace-hero' image size (1200×630). Set via WP Admin → Edit Post → Featured Image. -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="margin-bottom: var(--s-7); border-radius: var(--r-md);
                                overflow: hidden; box-shadow: var(--shadow-md);">
                        <?php the_post_thumbnail( 'ace-hero', array(
                            'alt' => esc_attr( get_the_title() ),
                        ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- ─── Post content ───
                     the_content() outputs the full WordPress block editor content.
                     Styles for headings, lists, images inside the post
                     are in style.css → POST HERO → .post-content. -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div><!-- .post-content -->

                <?php
                // ─── Paginated posts ───
                // Appears only if the post uses the <!--nextpage--> block in the editor.
                // Creates numbered links to split long posts across multiple pages.
                wp_link_pages( array(
                    'before'      => '<div class="page-links" style="margin: var(--s-6) 0;">',
                    'after'       => '</div>',
                    'link_before' => '<span style="display:inline-flex;align-items:center;justify-content:center;min-width:36px;height:36px;border:1px solid var(--border-1);border-radius:var(--r-sm);font-family:var(--font-display);font-size:13px;font-weight:600;color:var(--fg-2);text-decoration:none;padding:0 8px;">',
                    'link_after'  => '</span>',
                ) );
                ?>

                <!-- ─── Post tags ───
                     Only shown if tags are assigned in WP Admin → Edit Post → Tags.
                     Tag archive pages use the index.php template. -->
                <?php if ( has_tag() ) : ?>
                    <div class="post-tags">
                        <span class="tag-label"><?php esc_html_e( 'Tags:', 'ace-ap' ); ?></span>
                        <?php the_tags( '', ' ', '' ); // Output: "limits  derivatives  frq-prep" ?>
                    </div>
                <?php endif; ?>


                <!-- ─── AUTHOR BOX ───
                     Shows author avatar initials + display name + bio.
                     Bio text is pulled from WP Admin → Users → Edit user → Biographical Info.
                     If no bio is set, the fallback text below is shown.
                     TO CHANGE THE FALLBACK BIO: Edit the esc_html__() string below. -->
                <div class="author-box">
                    <div class="author-box-avatar" aria-hidden="true">
                        <?php echo esc_html( ace_author_initials() ); ?>
                    </div>
                    <div>
                        <h4><?php the_author(); ?></h4>
                        <p>
                            <?php
                            $bio = get_the_author_meta( 'description' );
                            // Use the WP bio if set; otherwise show the default
                            echo $bio
                                ? esc_html( $bio )
                                : esc_html__(
                                    'AP Calculus AB and BC tutor at EngiNearU. Helping students understand the concepts and score a 5 on their AP exam.',
                                    'ace-ap'
                                );
                            ?>
                        </p>
                    </div>
                </div><!-- .author-box -->


                <!-- ─── PREVIOUS / NEXT POST NAVIGATION ───
                     Appears only when there are adjacent posts.
                     "Previous" = older post, "Next" = newer post.
                     Styled by .post-nav in style.css. -->
                <?php
                $prev = get_previous_post();  // Older post
                $next = get_next_post();      // Newer post
                if ( $prev || $next ) :
                ?>
                    <nav class="post-nav"
                         aria-label="<?php esc_attr_e( 'Post navigation', 'ace-ap' ); ?>">

                        <?php if ( $prev ) : ?>
                            <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>"
                               class="post-nav-link">
                                <span class="post-nav-dir">
                                    &larr; <?php esc_html_e( 'Previous', 'ace-ap' ); ?>
                                </span>
                                <span class="post-nav-title">
                                    <?php echo esc_html( get_the_title( $prev ) ); ?>
                                </span>
                            </a>
                        <?php else : ?>
                            <div></div> <!-- Empty div maintains the two-column grid -->
                        <?php endif; ?>

                        <?php if ( $next ) : ?>
                            <a href="<?php echo esc_url( get_permalink( $next ) ); ?>"
                               class="post-nav-link post-nav-link--next">
                                <span class="post-nav-dir">
                                    <?php esc_html_e( 'Next', 'ace-ap' ); ?> &rarr;
                                </span>
                                <span class="post-nav-title">
                                    <?php echo esc_html( get_the_title( $next ) ); ?>
                                </span>
                            </a>
                        <?php endif; ?>

                    </nav><!-- .post-nav -->
                <?php endif; ?>


                <!-- ─── RELATED POSTS ───
                     Queries up to 3 posts from the same category, excluding the current post.
                     Only appears when:
                       (a) the current post has at least one category, AND
                       (b) there are other published posts in that category.
                     TO CHANGE HOW MANY SHOW: Update 'posts_per_page' => 3 below. -->
                <?php
                $curr_cats = wp_get_post_categories( get_the_ID() );
                if ( ! empty( $curr_cats ) ) :
                    $related = new WP_Query( array(
                        'category__in'        => $curr_cats,      // Same categories
                        'posts_per_page'      => 3,
                        'post__not_in'        => array( get_the_ID() ),  // Exclude current
                        'ignore_sticky_posts' => true,
                    ) );
                    if ( $related->have_posts() ) :
                ?>
                    <div style="padding: var(--s-7) 0; border-top: 1px solid var(--border-1);">
                        <h3 style="margin-bottom: var(--s-6);">
                            <?php esc_html_e( 'Related Articles', 'ace-ap' ); ?>
                        </h3>
                        <!-- Smaller cards: minmax(220px, 1fr) instead of 300px -->
                        <div style="display: grid;
                                    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                                    gap: var(--s-5);">
                            <?php while ( $related->have_posts() ) : $related->the_post(); ?>
                                <article class="post-card">
                                    <div class="post-card-thumb">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'ace-card', array(
                                                    'alt' => esc_attr( get_the_title() ),
                                                ) ); ?>
                                            </a>
                                        <?php else : ?>
                                            <a href="<?php the_permalink(); ?>" class="thumb-placeholder">
                                                <?php echo ace_icon_grad_cap( 40, 'var(--navy-300)' ); ?>
                                            </a>
                                        <?php endif; ?>
                                        <?php echo ace_subject_badge(); ?>
                                    </div>
                                    <div class="post-card-body">
                                        <!-- Smaller title font for compact related cards -->
                                        <h3 class="post-card-title" style="font-size: 15px;">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="post-meta">
                                            <span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
                                            <span class="read-time">
                                                <?php echo esc_html( ace_read_time() ); ?>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; wp_reset_postdata(); // Required after custom WP_Query ?>
                        </div><!-- related posts grid -->
                    </div>
                <?php endif; endif; ?>


                <!-- ─── COMMENTS ───
                     Rendered by WordPress using the default comment template.
                     Only shown if comments are open OR there are existing comments.
                     Enable/disable comments: WP Admin → Settings → Discussion,
                     or per-post: Edit Post → Discussion panel. -->
                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <?php comments_template(); ?>
                <?php endif; ?>

            </div><!-- main content column -->


            <!-- ─── SIDEBAR (right column) ───
                 Rendered from sidebar.php.
                 Sticky on desktop, static below content on tablet. -->
            <?php get_sidebar(); ?>

        </div><!-- .content-grid -->
    </div><!-- .container -->
</div><!-- .post-body-wrapper -->

<?php
endwhile; // End of "The Loop"
get_footer(); // Renders footer.php
?>
