<?php
/**
 * functions.php — ACE AP Theme Engine
 *
 * This is the brain of the WordPress theme. Everything that doesn't belong
 * in a template file lives here: theme registration, font/script loading,
 * widget areas, and reusable helper functions called from templates.
 *
 * ─────────────────────────────────────────────────────────────────────────────
 * TABLE OF CONTENTS
 * ─────────────────────────────────────────────────────────────────────────────
 *  1. THEME SETUP          — image sizes, nav menus, HTML5 support, block editor
 *  2. CONTENT WIDTH        — max width hint for WP embeds
 *  3. ENQUEUE SCRIPTS & STYLES — load Google Fonts, style.css, and main.js
 *  4. WIDGET AREAS         — register the sidebar widget area
 *  5. HELPER: READ TIME    — estimate article read time from word count
 *  6. HELPER: AUTHOR INITIALS — extract initials for the avatar circle
 *  7. HELPER: SUBJECT BADGE   — auto-label posts AP Calc AB / BC / CS
 *  8. HELPER: GRAD CAP ICON   — inline SVG grad cap (no emoji)
 *  9. BREADCRUMBS          — Home / Category / Post trail
 * 10. EXCERPT              — custom length and "…" more text
 * 11. OPEN GRAPH           — og: meta tags for social sharing
 * 12. WP_HEAD CLEANUP      — remove unnecessary WP default tags
 * ─────────────────────────────────────────────────────────────────────────────
 *
 * @package ace-ap
 */

// Safety check — prevents direct file access outside WordPress
if ( ! defined( 'ABSPATH' ) ) exit;


/* ============================================================
   1. THEME SETUP
   ─────────────────────────────────────────────────────────
   Registers all WordPress theme features.
   TO ADD A NEW IMAGE SIZE: copy the add_image_size() pattern below.
   TO ADD A NAV MENU LOCATION: add an entry to register_nav_menus().
   ============================================================ */
function ace_theme_setup() {

    // Load translations (for future multilingual support)
    load_theme_textdomain( 'ace-ap', get_template_directory() . '/languages' );

    // Automatically add RSS feed links in <head>
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the <title> tag
    add_theme_support( 'title-tag' );

    // Enable featured images on posts and pages
    add_theme_support( 'post-thumbnails' );

    // ─── Image Sizes ───────────────────────────────────────────
    // Default thumbnail: 800×450 (16:9) — used as fallback
    set_post_thumbnail_size( 800, 450, true );

    // ace-card: post card thumbnails in the blog grid (index.php, front-page.php)
    add_image_size( 'ace-card', 600, 338, true );

    // ace-hero: full-width hero image at top of single posts (single.php)
    add_image_size( 'ace-hero', 1200, 630, true );
    // ───────────────────────────────────────────────────────────

    // ─── Navigation Menus ──────────────────────────────────────
    // After activating the theme, go to WP Admin → Appearance → Menus
    // to assign menus to these locations.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Navigation', 'ace-ap' ),  // Top nav bar (header.php)
        'footer'  => esc_html__( 'Footer Navigation', 'ace-ap' ),   // Footer links (reserved for future use)
    ) );
    // ───────────────────────────────────────────────────────────

    // HTML5 markup support for WP-generated elements
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ) );

    // Custom logo support (WP Admin → Appearance → Customize → Site Identity)
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Block editor features
    add_theme_support( 'wp-block-styles' );    // Load default WP block styles
    add_theme_support( 'align-wide' );          // Allow wide/full-width blocks
    add_theme_support( 'responsive-embeds' );   // Make iframes/videos responsive
}
add_action( 'after_setup_theme', 'ace_theme_setup' );


/* ============================================================
   2. CONTENT WIDTH
   ─────────────────────────────────────────────────────────
   Sets the maximum width of embedded content (videos, iframes).
   Should match the max-width of .post-content in style.css.
   ============================================================ */
function ace_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'ace_content_width', 760 );
}
add_action( 'after_setup_theme', 'ace_content_width', 0 );


/* ============================================================
   3. ENQUEUE SCRIPTS & STYLES
   ─────────────────────────────────────────────────────────
   Loads fonts, the main stylesheet, and JavaScript.
   WordPress caches these with a version string — when you update
   the theme version in style.css, the browser re-fetches the files.

   TO ADD A NEW SCRIPT: copy the wp_enqueue_script() pattern below.
   TO ADD A NEW STYLESHEET: copy the wp_enqueue_style() pattern below.
   ============================================================ */
function ace_scripts() {

    // ─── Google Fonts ──────────────────────────────────────────
    // Montserrat = display/headings (weights 600–900)
    // Nunito Sans = body text (weights 400–800)
    // JetBrains Mono = code blocks (weights 400, 600)
    wp_enqueue_style(
        'ace-google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Nunito+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap',
        array(),
        null  // No version — Google Fonts manages its own cache
    );

    // ─── Main Stylesheet ───────────────────────────────────────
    // style.css in the theme root — contains ALL site styles
    wp_enqueue_style(
        'ace-style',
        get_stylesheet_uri(),
        array( 'ace-google-fonts' ),         // Depends on fonts loading first
        wp_get_theme()->get( 'Version' )     // Cache-bust on theme version change
    );

    // ─── Main JavaScript ───────────────────────────────────────
    // assets/js/main.js — mobile nav, scroll effects, smooth anchor scroll
    wp_enqueue_script(
        'ace-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),                             // No jQuery dependency
        wp_get_theme()->get( 'Version' ),
        true                                 // Load in footer (after DOM is ready)
    );

    // WordPress comment reply script (only on posts with threaded comments open)
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'ace_scripts' );


/* ============================================================
   4. WIDGET AREAS
   ─────────────────────────────────────────────────────────
   Registers "Main Sidebar" — used in sidebar.php.
   To add widgets: WP Admin → Appearance → Widgets.
   ============================================================ */
function ace_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Main Sidebar', 'ace-ap' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Blog sidebar widgets — appears on archive and post pages.', 'ace-ap' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ace_widgets_init' );


/* ============================================================
   5. HELPER: ESTIMATED READ TIME
   ─────────────────────────────────────────────────────────
   Calculates estimated reading time based on word count.
   Assumes 200 words per minute (typical reading speed).
   Returns a string like "4 min read".

   USAGE in templates:
     echo esc_html( ace_read_time() );          // current post
     echo esc_html( ace_read_time( $post_id ) ); // specific post
   ============================================================ */
function ace_read_time( $post_id = null ) {
    $content    = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( strip_tags( $content ) );
    $minutes    = max( 1, ceil( $word_count / 200 ) );  // Minimum 1 min
    return $minutes . ' min read';
}


/* ============================================================
   6. HELPER: AUTHOR INITIALS
   ─────────────────────────────────────────────────────────
   Extracts up to 2 initials from the author's display name.
   Used for the navy avatar circles in post cards and single posts.

   Examples:
     "Zach Boykin"    → "ZB"
     "Alex"           → "A"
     "Jane D. Smith"  → "JD"

   USAGE in templates:
     echo esc_html( ace_author_initials() );           // current post author
     echo esc_html( ace_author_initials( 'Zach B.' ) ); // custom name
   ============================================================ */
function ace_author_initials( $name = '' ) {
    if ( empty( $name ) ) {
        $name = get_the_author();
    }
    $parts    = explode( ' ', trim( $name ) );
    $initials = '';
    foreach ( $parts as $part ) {
        $initials .= strtoupper( substr( $part, 0, 1 ) );
    }
    return substr( $initials, 0, 2 );  // Cap at 2 characters
}


/* ============================================================
   7. HELPER: SUBJECT BADGE
   ─────────────────────────────────────────────────────────
   Reads the post's categories and returns an HTML badge span
   indicating which subject the post belongs to.
   Displayed in the top-left corner of post card thumbnails.

   Detection logic:
     - Category slug contains "bc"  → "AP Calc BC" badge
     - Category slug contains "ab"  → "AP Calc AB" badge
     - Otherwise                    → "AP Calculus" badge

   TO ADD A NEW SUBJECT (e.g., AP CS):
     Add an elseif block checking for a "cs" or "computer-science" slug.
     Add a corresponding .post-subject-badge--cs rule in style.css.

   USAGE in templates:
     <?php echo ace_subject_badge(); ?>
   ============================================================ */
function ace_subject_badge() {
    $cats = get_the_category();
    if ( empty( $cats ) ) return '';  // No badge if no categories assigned

    // Combine all category slugs into one string for substring matching
    $slugs = array_map( function( $c ) { return strtolower( $c->slug ); }, $cats );
    $all   = implode( ' ', $slugs );

    if ( strpos( $all, 'bc' ) !== false ) {
        return '<span class="post-subject-badge post-subject-badge--calc">AP Calc BC</span>';
    }
    if ( strpos( $all, 'ab' ) !== false ) {
        return '<span class="post-subject-badge post-subject-badge--calc">AP Calc AB</span>';
    }
    return '<span class="post-subject-badge post-subject-badge--calc">AP Calculus</span>';
}


/* ============================================================
   8. HELPER: GRAD CAP ICON (SVG)
   ─────────────────────────────────────────────────────────
   Returns an inline SVG of a graduation cap icon.
   Used as the thumbnail placeholder when a post has no featured image.
   Inline SVG avoids an extra HTTP request for the icon.
   aria-hidden="true" because it's decorative, not meaningful content.

   USAGE in templates:
     echo ace_icon_grad_cap( 48, 'var(--navy-300)' );   // 48px, light navy
     echo ace_icon_grad_cap( 24 );                       // 24px, currentColor
   ============================================================ */
function ace_icon_grad_cap( $size = 24, $color = 'currentColor' ) {
    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" width="%d" height="%d"
              viewBox="0 0 24 24" fill="none" stroke="%s"
              stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
              aria-hidden="true">
            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
        </svg>',
        $size,
        $size,
        esc_attr( $color )
    );
}


/* ============================================================
   9. BREADCRUMBS
   ─────────────────────────────────────────────────────────
   Outputs a semantic breadcrumb <nav> element.
   Automatically detects the page type and builds the correct trail.

   Page type → Breadcrumb trail:
     Single post    → Home / Category Name / Post Title
     Category page  → Home / Category Name
     Static page    → Home / Page Title
     Blog index     → Home / Blog
     Search results → Home / Search: "query"
     Front page     → (nothing — no breadcrumbs on homepage)

   Styled by .breadcrumbs in style.css.
   USAGE in templates:  <?php ace_breadcrumbs(); ?>
   ============================================================ */
function ace_breadcrumbs() {
    // Skip breadcrumbs on the homepage
    if ( is_front_page() ) return;

    echo '<nav class="breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'ace-ap' ) . '">'
       . '<div class="container"><ol class="breadcrumb-list">';

    // Home is always the first crumb
    echo '<li><a href="' . esc_url( home_url() ) . '">'
       . esc_html__( 'Home', 'ace-ap' ) . '</a></li>';

    if ( is_single() ) {
        // Single post: Home / Category / Post Title
        $cats = get_the_category();
        if ( ! empty( $cats ) ) {
            echo '<li><a href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">'
               . esc_html( $cats[0]->name ) . '</a></li>';
        }
        echo '<li aria-current="page">' . esc_html( get_the_title() ) . '</li>';

    } elseif ( is_category() ) {
        // Category archive: Home / Category Name
        echo '<li aria-current="page">' . esc_html( single_cat_title( '', false ) ) . '</li>';

    } elseif ( is_page() ) {
        // Static page: Home / Page Title
        echo '<li aria-current="page">' . esc_html( get_the_title() ) . '</li>';

    } elseif ( is_home() ) {
        // Blog index: Home / Blog
        echo '<li aria-current="page">' . esc_html__( 'Blog', 'ace-ap' ) . '</li>';

    } elseif ( is_search() ) {
        // Search results: Home / Search: "query"
        echo '<li aria-current="page">'
           . sprintf( esc_html__( 'Search: %s', 'ace-ap' ), esc_html( get_search_query() ) )
           . '</li>';
    }

    echo '</ol></div></nav>';
}


/* ============================================================
   10. EXCERPT
   ─────────────────────────────────────────────────────────
   Customizes the automatic excerpt that WordPress generates.
   - Length: 24 words (short enough for card layouts)
   - More text: "…" (replaces the default "[...]")
   ============================================================ */
function ace_excerpt_length( $length ) {
    return 24;  // TO CHANGE: increase this number for longer excerpts
}
add_filter( 'excerpt_length', 'ace_excerpt_length' );

function ace_excerpt_more( $more ) {
    return '&hellip;';  // "…" — no clickable [Read more] link
}
add_filter( 'excerpt_more', 'ace_excerpt_more' );


/* ============================================================
   11. OPEN GRAPH META TAGS
   ─────────────────────────────────────────────────────────
   Outputs og: meta tags in <head> for link previews when posts
   are shared on Facebook, LinkedIn, Slack, iMessage, etc.

   Only outputs on singular (single post/page) views.
   For full SEO control, install Yoast SEO or Rank Math — they
   override these with more complete data.

   Tags output:
     og:title       — Post title
     og:description — Post excerpt (or first 30 words)
     og:url         — Canonical URL of the post
     og:type        — "article"
     og:image       — Featured image (ace-hero size: 1200×630)
   ============================================================ */
function ace_open_graph() {
    if ( ! is_singular() ) return;  // Only on single posts/pages
    global $post;

    // Use the manual excerpt if set; otherwise trim the content
    $desc = has_excerpt( $post->ID )
        ? get_the_excerpt( $post->ID )
        : wp_trim_words( $post->post_content, 30 );

    echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url( get_permalink() ) . '">' . "\n";
    echo '<meta property="og:type" content="article">' . "\n";

    // Only include og:image if a featured image is set
    if ( has_post_thumbnail( $post->ID ) ) {
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'ace-hero' );
        if ( $thumb ) {
            echo '<meta property="og:image" content="' . esc_url( $thumb[0] ) . '">' . "\n";
        }
    }
}
add_action( 'wp_head', 'ace_open_graph' );


/* ============================================================
   12. WP_HEAD CLEANUP
   ─────────────────────────────────────────────────────────
   Removes some WordPress-default <head> tags that we don't use.
   This keeps the HTML clean and prevents minor security info leaks.

   Removed:
     wlwmanifest_link — Windows Live Writer manifest (not used)
     rsd_link         — Really Simple Discovery (not used)
     wp_generator     — Outputs the WP version (security concern)
   ============================================================ */
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
