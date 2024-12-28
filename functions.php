<?php

/**
 * pepe-hidalgo-art functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pepe-hidalgo-art
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pepe_hidalgo_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on pepe-hidalgo-art, use a find and replace
		* to change 'pepe-hidalgo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('pepe-hidalgo', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'pepe-hidalgo'),
			'mobile-view' => esc_html__('Mobile', 'pepe-hidalgo'),
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
			'pepe_hidalgo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'pepe_hidalgo_setup');


//calling custom inc folder for taxonomies and custompost types
require_once get_template_directory() . '/inc/cpt-taxonomy.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pepe_hidalgo_content_width()
{
	$GLOBALS['content_width'] = apply_filters('pepe_hidalgo_content_width', 640);
}
add_action('after_setup_theme', 'pepe_hidalgo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pepe_hidalgo_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Pepes-side-bar', 'pepe-hidalgo'),
			'id'            => 'sidebar-2',
			'description'   => esc_html__('Add widgets here.', 'pepe-hidalgo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'pepe_hidalgo_widgets_init');

/**
 * Enqueue scripts and styles.
 */

//adding custom styles
function custom_inline_styles()
{
	if (is_front_page()) { // Replace 'about' with your page slug or ID
		echo '<style>
					body {
						display: block;
							
					}
					.site{
						margin-top: 0;
					}	
			</style>';
	}
}
add_action('wp_head', 'custom_inline_styles');

function custom_styles_for_about_page()
{
	if (is_page(1864)) { // Replace 'about' with your page slug or ID
		echo '<style>
					.site-header{
					display: block;
			}

			@media (min-width: 50rem) {
    .site-header {
        display: none;
    }
			</style>';
	}
}
add_action('wp_head', 'custom_styles_for_about_page');

function custom_styles_for_contact_page()
{
	if (is_page(12)) { // Replace 'about' with your page slug or ID
		echo '<style>
					.site-header{
					display: block;
			}

			@media (min-width: 50rem) {
    .site-header {
        display: none;
    }
			</style>';
	}
}
add_action('wp_head', 'custom_styles_for_contact_page');

function custom_styles_for_video_works_page()
{
	if (is_page(1860)) { // Replace 'about' with your page slug or ID
		echo '<style>
					.site-header{
					display: block;
			}

			@media (min-width: 50rem) {
    .site-header {
        display: none;
    }
			</style>';
	}
}
add_action('wp_head', 'custom_styles_for_video_works_page');

function custom_styles_for_news_page()
{
	if (is_home()) { // Replace 'about' with your page slug or ID
		echo '<style>
					.site-header{
					display: block;
			}

			@media (min-width: 50rem) {
    .site-header {
        display: none;
    }
			</style>';
	}
}
add_action('wp_head', 'custom_styles_for_news_page');

function custom_styles_for_exhibition_page()
{
	if (is_page(1870)) { // Replace 'about' with your page slug or ID
		echo '<style>
					.site-header{
					display: block;
			}

			@media (min-width: 50rem) {
    .site-header {
        display: none;
    }
			</style>';
	}
}
add_action('wp_head', 'custom_styles_for_exhibition_page');




function pepe_hidalgo_scripts()
{
	wp_enqueue_style('pepe-hidalgo-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('pepe-hidalgo-style', 'rtl', 'replace');

	wp_enqueue_script('pepe-hidalgo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	if (is_front_page()) {
		wp_enqueue_style('hero-page', get_template_directory_uri() . '/sass/pages/_hero-page.scss');
		wp_enqueue_style('swiper-styles', get_template_directory_uri() . '/css/swiper-bundle.css', array(), '7.4.1');
		wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '7.4.1', array('strategy' => 'defer'));
		wp_enqueue_script('swiper-settings', get_template_directory_uri() . '/js/swiper-settings.js', array('swiper-scripts'), _S_VERSION, array('strategy' => 'defer'));
		wp_dequeue_style('/sass/layouts/_grid-layout.scss');
	}
	//continue 

	if ('pepe-hidalgo-website') {
		wp_dequeue_style('/sass/layouts/_grid-layout.scss');
	}


	if (is_page('2022-precent')) {
		//this controls the gridlayout for most pages
		wp_enqueue_style('2022-precent', get_template_directory_uri() . '/sass/layouts/_before-new-sidebar.scss');
		//this is for the imagesloaded pkg
		wp_enqueue_script('imagesloaded', '/js/imagesloaded.pkgd.min.js', array('jquery'), null, true, array('strategy' => 'defer'));
		wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/imagesloaded.settings.js', array('imagesloaded'), null, true, array('strategy' => 'defer'));
		//this is for the mansonry library that is supposed to work
		wp_enqueue_style('mansonry-styles', get_template_directory_uri() . '/css/mansonry.css', array(), '1.1.1');
		wp_enqueue_script('masonry-scripts', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '4.2.2', array('strategy' => 'defer'));
		wp_enqueue_script('masonry-settings', get_template_directory_uri() . '/js/masonry.settings.js', array('masonry-scripts'), array('jquery'), _S_VERSION, array('strategy' => 'defer'));
		//this is for the light house library
		wp_enqueue_style('lighthouse-styles', get_template_directory_uri() . '/css/light-house.css', array(), '1.1.1');
		wp_enqueue_script('lighthouse-scripts', get_template_directory_uri() . '/js/lightgallery.min.js', array('jquery'), '4.2.2', array('strategy' => 'defer'));
		wp_enqueue_script('lighthouse-settings', get_template_directory_uri() . '/js/lighthouse-settings.js', array('lighthouse-scripts'), array('jquery'), '4.2.2', array('strategy' => 'defer'));
	}
}
add_action('wp_enqueue_scripts', 'pepe_hidalgo_scripts');


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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}
