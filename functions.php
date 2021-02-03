<?php
/**
 * Traveler functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Traveler
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'traveler_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function traveler_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Traveler, use a find and replace
		 * to change 'traveler' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'traveler', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'traveler' ),
				'menu-2' => esc_html__( 'Right Menu', 'traveler' )
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
				'traveler_custom_background_args',
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
add_action( 'after_setup_theme', 'traveler_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function traveler_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'traveler_content_width', 640 );
}
add_action( 'after_setup_theme', 'traveler_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function traveler_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'traveler' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'traveler' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'traveler_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function traveler_scripts() {
	wp_enqueue_style( 'traveler-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'traveler-style', 'rtl', 'replace' );

	wp_enqueue_script( 'traveler-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'traveler_scripts' );

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

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
/* 
add_action('phpmailer_init', 'custom_mailer');
function custom_mailer(PHPMailer $mail) {
	$name = "Douglas Pinheiro Goulart";

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Username = SMTP_EMAIL;
	$mail->Password = SMTP_PASSWORD;
	$mail->Port = 587;

	$mail->setFrom($email);
	$mail->addReplyTo($email);
	$mail->addAddress('dodgegamer12@gmail.com', 'Dodge');

	$mail->isHTML(true);
	$mail->Subject = 'Traveler | Obrigado por entrar em contato :D';
	$mail->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>';
	$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';

	die("SOCORRO ACCAAR EU N AGUENTO AMIS");
}

add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
function log_mailer_errors( $wp_error ){
    $fn = ABSPATH . '/mail.log'; // say you've got a mail.log file in your server root
    $fp = fopen($fn, 'a');
    fputs($fp, "Mailer Error: " . $wp_error->get_error_message() ."\n");
    fclose($fp);
}
 */