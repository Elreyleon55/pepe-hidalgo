<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pepe-hidalgo-art
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="container-layout-non-pages">

		<div class="container-sidebar">
			<?php
			get_sidebar();
			?>
		</div>

		<div class="container-content">

			<?php get_template_part('/template-parts/template-header-non-pages-collaborations') ?>

			<div class="container-content-continue">




			</div>







			<?php
			while (have_posts()) :
				the_post();

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>

	</div>

	<?php
	get_sidebar();
	get_footer();
