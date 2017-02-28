<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="main-header">
		<div class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?= get_template_directory_uri() ?>/images/logo.png" alt="">
			</a>
			<?php wp_nav_menu(['theme_location' => 'menu-1', 'menu_class' => 'nav nav-pills']); ?>
		</div>
	</header>

	<div class="blog-bg">
		<div class="container">
			<div class="text-blog-bg">
				<p>blog</p>
			</div>
		</div>
	</div>

	<div id="content" class="site-content">
