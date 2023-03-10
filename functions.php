<?php
/**
 * accounting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package accounting
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function accounting_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on accounting, use a find and replace
		* to change 'accounting' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'accounting', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'accounting' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'accounting_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	//Remove block widget
//	remove_theme_support( 'widgets-block-editor' );
}

add_action( 'after_setup_theme', 'accounting_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function accounting_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'accounting_theme_content_width', 640 );
}

add_action( 'after_setup_theme', 'accounting_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function accounting_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'accounting' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'accounting' ),
			'before_widget' => '<div id="%1$s" class="sidebar-box widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'accounting' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer widgets here.', 'accounting' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-heading">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'accounting' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer widgets here.', 'accounting' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-heading">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'accounting' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add footer widgets here.', 'accounting' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title footer-heading">',
			'after_title'   => '</h2>',
		)
	);

}

add_action( 'widgets_init', 'accounting_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function accounting_theme_scripts() {

	//css
	wp_enqueue_style( 'accounting-montserrat', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap' );
	wp_enqueue_style( 'accounting-all-awesomesix', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'accounting-style', get_stylesheet_uri(), array(), _S_VERSION );

	//js
	wp_enqueue_script( 'accounting-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-magnific-popu', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'accounting-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'accounting_theme_scripts' );

// Acf setting
function my_acf_json_save_point( $path ) {

	// update path
	$path = get_stylesheet_directory() . '/acf-json';


	// return
	return $path;

}

add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );


/**
 * file init
 */
require get_template_directory() . '/inc/tgm/tgm-active.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/demo-import.php';
