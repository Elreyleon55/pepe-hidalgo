<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pepe-hidalgo-art
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'pepe-hidalgo'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container-menu-mobile">
				<a href="http://localhost:8888/pepe-hidalgo-website/2022-precent/">
					<div class="logo">
						<?php get_template_part('/media/signiture') ?>
					</div>
				</a>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<?php get_template_part('/media/custom-hamburger'); ?>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'mobile-view',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<div>

					</div>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->