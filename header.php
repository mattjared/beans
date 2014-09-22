<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package beans
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-brand full" id="masthead" role="banner">
		<div class="container">
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="site-sub-title"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
			<div class="container">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</div>
		</nav>
	</header>
