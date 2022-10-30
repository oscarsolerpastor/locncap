<?php
/**
 * locncapture functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package locncapture
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'locncapture_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function locncapture_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on locncapture, use a find and replace
		 * to change 'locncapture' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'locncapture', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'locncapture' ),
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
				'locncapture_custom_background_args',
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
	}
endif;
add_action( 'after_setup_theme', 'locncapture_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function locncapture_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'locncapture_content_width', 640 );
}
add_action( 'after_setup_theme', 'locncapture_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function locncapture_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'locncapture' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'locncapture' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'locncapture_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'locncapture_scripts' );
function locncapture_scripts() {
	wp_enqueue_style( 'locncapture-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'locncapture-custom', get_template_directory_uri() . '/css/custom.css', array(), _S_VERSION );
	// wp_style_add_data( 'locncapture-style', 'rtl', 'replace' );

	wp_enqueue_script( 'locncapture-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'locncapture-video', get_template_directory_uri() . '/js/video.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'locncapture-header', get_template_directory_uri() . '/js/header.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'locncapture-animation', get_template_directory_uri() . '/js/animation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'locncapture-manifesto', get_template_directory_uri() . '/js/manifesto.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'locncapture-toggle', get_template_directory_uri() . '/js/toggle.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'locncapture-videogame', get_template_directory_uri() . '/js/videogame.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'locncapture_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// Intro Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Intros', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Intro', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'What We Offer', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category' ),
		'public'                => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
	);
	register_post_type( 'intro', $args );

}
add_action( 'init', 'custom_post_type', 0 );
// About Custom Post Type
function add_about() {

	$labels = array(
		'name'                  => _x( 'Abouts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'About', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'About us', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category' ),
		'public'                => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
	);
	register_post_type( 'about', $args );

}
add_action( 'init', 'add_about', 0 );
// Requirements Custom Post Type
function add_requirement() {

	$labels = array(
		'name'                  => _x( 'Requirements', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Requirement', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Needs', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category' ),
		'public'                => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
	);
	register_post_type( 'requirement', $args );

}
add_action( 'init', 'add_requirement', 0 );

//Strings translations
add_action('init', function() {
	pll_register_string('ask_reel', 'Ask for the reel!');
	pll_register_string('in', 'In');
	pll_register_string('localization_services', 'we offer integral multimedia localization services in any language');
	pll_register_string('choose_your', 'Choose your');
	pll_register_string('player', 'player');
	pll_register_string('what_we', 'What we');
	pll_register_string('offer', 'offer');
	pll_register_string('send_message', 'Send us a message to');
	pll_register_string('what_you_need', 'and tell us what you need');
	pll_register_string('visit_us', 'Visit us at');
	pll_register_string('rights', 'All rights reserved');
	pll_register_string('terms', 'Terms and conditions');
	pll_register_string('not_found', 'Oops! That page can&rsquo;t be found');
  });

