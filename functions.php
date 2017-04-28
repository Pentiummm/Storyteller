<?php
/**
 * Storryteller functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Storryteller
 */

if ( ! function_exists( 'storyteller_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function storyteller_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Storryteller, use a find and replace
	 * to change 'storyteller' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'storyteller', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'storyteller' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'storyteller_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'storyteller_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function storyteller_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'storyteller_content_width', 640 );
}
add_action( 'after_setup_theme', 'storyteller_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function storyteller_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'storyteller' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'storyteller' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'storyteller_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function storyteller_scripts() {

	wp_enqueue_style( 'storyteller-source-sans-font', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900', array(), '1.0', 'all' );
	wp_enqueue_style( 'storyteller-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', array(), '3.2.0', 'all' );
	wp_enqueue_style( 'storyteller-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0', 'all' );
	wp_enqueue_style( 'storyteller-animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'storyteller-linecon', get_template_directory_uri() . '/css/linecons.css', array());
	wp_enqueue_style( 'storyteller-strip', get_template_directory_uri() . '/inc/strip/css/strip.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'storyteller-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'storyteller-storyteller-style', get_stylesheet_uri() );
	wp_enqueue_style( 'storyteller-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'storyteller-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js' , array(), '20151215', true );
	wp_enqueue_script( 'storyteller-waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js' , array(), '20151215', true );
	wp_enqueue_script( 'storyteller-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'storyteller-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );
	wp_enqueue_script( 'storyteller-strip', get_template_directory_uri() . '/inc/strip/js/strip.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'storyteller-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array(), '20151215', true );
	wp_enqueue_script( 'storyteller-tweet', get_template_directory_uri() . '/js/jquery.tweet.min.js', array(), '20151215', true );
	wp_enqueue_script( 'storyteller-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'storyteller-isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'storyteller-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '20151215', false );
	wp_enqueue_script( 'storyteller-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'storyteller_scripts' );

if( ! function_exists('storyteller_theme_ie_elements') ) :
function storyteller_theme_ie_elements(){
	?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php
}
add_action('wp_head', 'storyteller_theme_ie_elements');
endif;

if( ! function_exists('storyteller_theme_wow_and_ie_footer') ) :
function storyteller_theme_wow_and_ie_footer(){
	?>
	<!--Activating WOW Animation only for modern browser-->
	<!--[if !IE]><!-->
		<script type="text/javascript">new WOW().init();</script>
	<!--<![endif]-->		
	
	<!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
	<!--[if gte IE 9]>
		<script type="text/javascript">new WOW().init();</script>
	<![endif]-->		 	    
	<?php
}
add_action('wp_footer', 'storyteller_theme_wow_and_ie_footer');
endif;

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Activate Redux Framework
 */
if( !class_exists('ReduxFrameworkPlugin') ) {
	require_once( get_template_directory(). '/libs/redux-framework/redux-framework.php' );
	require_once( get_template_directory(). '/inc/storyteller-options.php' );
}
