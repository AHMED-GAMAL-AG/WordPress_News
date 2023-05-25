<?php

/**
 * news_app functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package news_app
 */

if (!defined('_S_VERSION')) {
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
function news_app_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on news_app, use a find and replace
		* to change 'news_app' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('news_app', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'news_app'),
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
			'news_app_custom_background_args',
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
add_action('after_setup_theme', 'news_app_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function news_app_content_width()
{
	$GLOBALS['content_width'] = apply_filters('news_app_content_width', 640);
}
add_action('after_setup_theme', 'news_app_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function news_app_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'news_app'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'news_app'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'news_app_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function news_app_scripts()
{
	wp_enqueue_style('news_app-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('news_app-style', 'rtl', 'replace');

	wp_enqueue_script('news_app-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'news_app_scripts');

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

// ---------------------------------------- Custom Functions ---------------------------------------- //

function news_css_enqueue()
{
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css');
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), null);
	wp_enqueue_style('fontawesome-v5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), null);
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), rand(111, 9999)); // empty array for no dependencies , rand for version so it will not cache only for development
	wp_enqueue_style('article_style', get_template_directory_uri() . '/css/article.css', array(), rand(111, 9999));
	wp_enqueue_style('search_style', get_template_directory_uri() . '/css/search.css', array(), rand(111, 9999));
}

add_action('wp_enqueue_scripts', 'news_css_enqueue'); // wp_enqueue_scripts is a hook 



function news_script_enqueue()
{
	wp_enqueue_script('swiper.js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), 1.0, true);
	wp_enqueue_script('popperjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), 1.0, true);
	wp_enqueue_script('bootstrap.js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), 1.0, true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/index.js', array(), rand(111, 9999), true);
}
add_action('wp_enqueue_scripts', 'news_script_enqueue');

function insert_category()
{
	$category = ['رياضة', 'أقتصاد', 'تكنولوجيا', 'أخبار'];
	$slug = ['sport', 'economy', 'technology', 'news'];

	for ($i = 0; $i < count($category); $i++) {
		wp_insert_term($category[$i], 'category', ['description' => ' ', 'slug' => $slug[$i]]);
	}
}
add_action('after_setup_theme', 'insert_category');

function set_default_category($post_id, $post)
{
	if ('publish' === $post->post_status) {
		$defaults = ['category' => ['sport']];

		$taxonomies = get_object_taxonomies($post->post_type);

		foreach ((array) $taxonomies as $taxonomy) { // can select more than one category
			$terms = wp_get_post_terms($post_id, $taxonomy);
			if (empty($terms) && array_key_exists($taxonomy, $defaults)) {
				wp_set_object_terms($post_id, $defaults[$taxonomy], $taxonomy);
			}
		}
	}
}
add_action('save_post', 'set_default_category', 10, 2);
