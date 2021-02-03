<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Traveler
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="theme-color" content="#F8F9FA">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?>">
    <meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?>">
    <meta property="og:url" content="<?php bloginfo('url'); ?>">
    <meta property="og:image" content="<?php get_template_directory_uri() ?>/images/curacao.jpg">
	<!-- Prelaod -->
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/js/jquery-3.5.1.min.js" as="script">
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/js/bootstrap.bundle.min.js" as="script">
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" as="style">
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/css/normalize.css" as="style">
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/css/main.css" as="style">
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/font/HankenGrotesk-Light.otf" as="font" crossorigin="anonymous">
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/font/Poppins-Regular.ttf" as="font" crossorigin="anonymous">
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/font/Oswald-Regular.ttf" as="font" crossorigin="anonymous">
	<!-- Favicon & CSS --> 
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href='<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href='<?php echo get_template_directory_uri() ?>/css/main.css'>
	<?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- Navbar -->
	<nav id="masthead" class="navbar navbar-expand-md navbar-light bg-light shadow-sm p-3 rounded fixed-top">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand text-uppercase"><?php bloginfo( 'name' ); ?></a>

		<button class="navbar-toggler" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse collapse" id="bs-navbar-collapse-1">
			<?php
			wp_nav_menu( array(
			    'theme_location'  => 'menu-1',
			    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
			    'container'       => false,
			    'menu_class'      => 'navbar-nav mr-auto',
			    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			    'walker'          => new WP_Bootstrap_Navwalker(),
			) );

			wp_nav_menu(
			    array(
			        'theme_location' => 'menu-2',
			        'depth'          => 2,
			        'container'      => false,
			        'menu_class'     => 'nav navbar-nav navbar-right',
			        'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
			        'walker'         => new wp_bootstrap_navwalker()
			    )
			);
			?>
		</div>
	</nav>

	<div id="page" class="site p-navbar">
