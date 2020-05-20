<?php


require_once get_theme_file_path( "inc/tgm.php" );


/**
 * verum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package verum
 */

define('VERSION','1.0.0');

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'theme_slug_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_slug_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on verum, use a find and replace
		 * to change 'theme-slug' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theme-slug', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'theme-slug' ),
			)
		);
		register_nav_menus(
			array(
				'footer-menu' => esc_html__( 'Footer Menu', 'theme-slug' ),
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
				'theme_slug_custom_background_args',
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

		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'audio', 'video', 'quote', 'link' ) );

		add_image_size('verum_posts',1400,99999);
	}
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_slug_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'theme_slug_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_slug_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_slug_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'theme-slug' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Blog Sidebar', 'theme-slug' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Left', 'theme-slug' ),
			'id'            => 'header-left',
			'description'   => esc_html__( 'Header Left Section', 'theme-slug' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Top', 'theme-slug' ),
			'id'            => 'footer-top',
			'description'   => esc_html__( 'Footer Top Area', 'theme-slug' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Top', 'theme-slug' ),
			'id'            => 'footer-top',
			'description'   => esc_html__( 'Footer Top Area', 'theme-slug' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Left', 'theme-slug' ),
			'id'            => 'footer-left',
			'description'   => esc_html__( 'Footer Left Area', 'theme-slug' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_slug_scripts() {
	wp_enqueue_style( 'theme-slug-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'theme-slug-style', 'rtl', 'replace' );

	wp_enqueue_script( 'theme-slug-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'theme-slug-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	wp_enqueue_style('verum-google-fonts','//fonts.googleapis.com/css?family=Lora:400,400i,700|Playfair+Display:700');

	wp_enqueue_style('bootstrap-css',get_theme_file_uri( 'assets/vendor/bootstrap/css/bootstrap.min.css' ));
	wp_enqueue_style('font-awesome-css',get_theme_file_uri( 'assets/vendor/font-awesome/css/font-awesome.min.css' ));
	wp_enqueue_style('slicknav-css',get_theme_file_uri( 'assets/vendor/slicknav/slicknav.css' ));
	wp_enqueue_style('owlcarousel-css',get_theme_file_uri( 'assets/vendor/owl/assets/owl.carousel.min.css' ));
	wp_enqueue_style('owl.theme-css',get_theme_file_uri( 'assets/vendor/owl/assets/owl.theme.default.min.css' ));
	wp_enqueue_style('magnific-popup-css',get_theme_file_uri( 'assets/vendor/magnific-popup/magnific-popup.css' ));
	wp_enqueue_style('animate-css',get_theme_file_uri( 'assets/vendor/animate.css' ));
	wp_enqueue_style('justifiedGallery-css',get_theme_file_uri( 'assets/vendor/justifiedGallery/css/justifiedGallery.min.css' ));
	wp_enqueue_style('verum-main-css',get_theme_file_uri( 'assets/css/main.css' ));
	// wp_enqueue_style('verum-main-css',get_stylesheet_uri());






	wp_enqueue_script('popper-js', get_theme_file_uri('assets/vendor/popper.min.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('imagesloaded-js', get_theme_file_uri('assets/vendor/imagesloaded.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('jquery-slicknav-js', get_theme_file_uri('assets/vendor/slicknav/jquery.slicknav.min.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('owlcarousel-js', get_theme_file_uri('assets/vendor/owl/owl.carousel.min.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('owlcarouse-thumbs-js', get_theme_file_uri('assets/vendor/owl/owl.carousel2.thumbs.min.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('magnific-popup-js', get_theme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('justifiedGallery-js', get_theme_file_uri('assets/vendor/justifiedGallery/js/jquery.justifiedGallery.min.js'),array('jquery'), VERSION, true);
	wp_enqueue_script('verum-main-js', get_theme_file_uri('assets/js/scripts.js'),array('jquery'), VERSION, true);



	
}
add_action( 'wp_enqueue_scripts', 'theme_slug_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/*
 * KIrki customizer install
*/
require get_template_directory() . '/customizer/class-kirki-installer-section.php';

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Blog column setting
function blog_sidebar_check(){
	if (is_active_sidebar( 'blog-sidebar' )) {
		echo "col-lg-9 col-md-8 side-border";
	}else {
		echo "col-lg-12 col-md-12";
	}
}


// Piklist post dependecies
function verum_piklist_part_process($part){
	global $post;
	if ($post && 'post'==$post->post_type && 'audio-video.php'==$part['part']) {
		if (in_array(get_post_format(),array('audio','video'))) {
			return $part;
		}
	}

	if ($post && 'post'==$post->post_type && 'gallery.php'==$part['part']) {
		if (in_array(get_post_format(),array('gallery'))) {
			return $part;
		}
	}
	return false;
}
add_filter('piklist_part_process','verum_piklist_part_process',10,2);


add_filter('wp_calculate_image_srcset','__return_false');


function verum_remover_thumbnail_dimensions($html){
	$html = preg_replace('/(width|height)=\"\d*\"\s/',"", $html);
	return $html;
}
add_filter('post_thumbnail_html','verum_remover_thumbnail_dimensions');



function verum_user_contactmethods($cm){
	$cm['facebook'] = __('Facebook','verum');
	$cm['pinterest'] = __('Pinterest','verum');
	$cm['twitter'] = __('Twitter','verum');
	$cm['Dribbble'] = __('Dribbble','verum');
	$cm['google-plus'] = __('Google Plus','verum');

	return $cm;
}
add_filter('user_contactmethods','verum_user_contactmethods');


function verum_comment_form_fields($fields){

	$comment_field = $fields['comment'];
	unset($fields['comment']);
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields','verum_comment_form_fields' );