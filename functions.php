<?php
/**
	* Elements functions and definitions
	*
	* @package Elements
    *
*/

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 655; /* pixels */

function elements_adjust_content_width() {
    global $content_width;

    if ( is_page_template( 'full-width.php' ) )
        $content_width = 1138; /* pixels */
}
add_action( 'template_redirect', 'elements_adjust_content_width' );


if ( !function_exists( 'elements_setup' ) ) :
/**
	* Sets up theme defaults and registers support for various WordPress features.
	* Note that this function is hooked into the after_setup_theme hook, which runs
	* before the init hook. The init hook is too late for some features, such as indicating
	* support post thumbnails.
*/
function elements_setup() {

/**
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on Elements, use a find and replace
	* to change 'elements' to the name of your theme in all the template files
*/
	load_theme_textdomain( 'elements', get_template_directory() . '/languages' );

/**
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
*/
	add_editor_style( 'css/editor-style.css' );
	add_editor_style( array( 'css/editor-style.css', 'fonts/genericons/genericons.css' ) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );


	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 649, 9999 ); // Unlimited height, soft crop

    // Generate a Featured Large Format Image for posts and pages.
	add_image_size( 'large-feature', 1130, 9999 );


	update_option( 'thumbnail_size_w', 300 );
	update_option( 'thumbnail_size_h', 9999 );
	update_option( 'thumbnail_crop', 0 );

	update_option( 'medium_size_w', 600 );
	update_option( 'medium_size_h', 9999 );
	update_option( 'medium_crop', 0 );

	update_option( 'large_size_w', 1200 );
	update_option( 'large_size_h', 9999 );
	update_option( 'large_crop', 0 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'elements' ),
		'footer' => __( 'Footer Menu - One Level', 'elements' ),
		'top' => __( 'Top Menu - One Level', 'elements' ),
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'elements_custom_background_args', array(
		'default-color' => '',
		'default-image' => 'images/headers/1162x250.png',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );

	// This theme supports all available post formats by default.
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
}
endif; // elements_setup
add_action( 'after_setup_theme', 'elements_setup' );

// Register widgetized area and update sidebar with default widgets.
function elements_widgets_init() {
     register_sidebar( array(
        'name' => __( 'Sidebar Right', 'elements' ),
        'id' => 'sidebar-right',
        'description' => __( 'Main sidebar that appears on the Right.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Below Header', 'elements' ),
        'id' => 'below-header',
        'description' => __( 'Additional sidebar that appears Below Header.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
    ) );
    register_sidebar( array(
        'name' => __( 'Above Main Content', 'elements' ),
        'id' => 'above-main',
        'description' => __( 'Additional sidebar that appears Above Main Content.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
    ) );
    register_sidebar( array(
        'name' => __( 'Below Main Content', 'elements' ),
        'id' => 'below-main',
        'description' => __( 'Additional sidebar that appears Below Main Content.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Area One', 'elements' ),
        'id' => 'footer-1',
        'description' => __( 'An optional widget area for your site footer.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Area Two', 'elements' ),
        'id' => 'footer-2',
        'description' => __( 'An optional widget area for your site footer.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Area Three', 'elements' ),
        'id' => 'footer-3',
        'description' => __( 'An optional widget area for your site footer.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Area Four', 'elements' ),
        'id' => 'footer-4',
        'description' => __( 'An optional widget area for your site footer.', 'elements' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'elements_widgets_init' );

// Count the number of footer sidebars to enable dynamic classes for the footer.
function elements_footer_sidebar_class() {
    $count = 0;

    if ( is_active_sidebar( 'footer-1' ) )
        $count++;

    if ( is_active_sidebar( 'footer-2' ) )
        $count++;

    if ( is_active_sidebar( 'footer-3' ) )
        $count++;

    if ( is_active_sidebar( 'footer-4' ) )
        $count++;

    $class = '';

    switch ( $count ) {
        case '1':
            $class = 'one';
            break;
        case '2':
            $class = 'two';
            break;
        case '3':
            $class = 'three';
            break;
        case '4':
            $class = 'four';
            break;
    }

    if ( $class )
        echo 'class="' . $class . '"';
}

// Enqueue scripts and styles.
function elements_scripts() {
		wp_enqueue_style( 'Elements-style', get_stylesheet_uri() );
		// Add Genericons font, used in the main stylesheet.
		wp_enqueue_style( 'Elements-genericons', get_template_directory_uri() . '/fonts/genericons/genericons.css', array(), '3.0.3' );
		wp_enqueue_script( 'Elements-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20131205', true );
        wp_enqueue_script( 'Elements-functions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20131205', true );
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
}
add_action( 'wp_enqueue_scripts', 'elements_scripts' );

// Replace the Default Smilies.
// Thank to Otto at http://ottopress.com/
function elements_smilies_src($img_src, $img, $siteurl){
    $img = rtrim($img, 'gif');
    return get_bloginfo('template_url').'/images/smilies/'.$img.'svg';
}
add_filter('smilies_src','elements_smilies_src', 1, 10);

// Custom Chat script.
require get_template_directory() . '/inc/formats.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Custom Header for this theme.
require get_template_directory() . '/inc/custom-header.php';

// Custom functions that act independently of the theme templates.
require get_template_directory() . '/inc/extras.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// JetPack Features.
//require get_template_directory() . '/inc/jetpack.php';

