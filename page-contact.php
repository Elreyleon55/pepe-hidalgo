<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

			<?php get_template_part('/template-parts/template-header-non-pages-contact') ?>

			<div class="container-content-continue-contact">

				<?php if (have_rows('contact_information')) :
					while (have_rows('contact_information')) : the_row();
				?>

						<div class="contact-info">
							<h2><?php echo get_sub_field('contact_information_fase_one'); ?></h2>
							<div class="info-contact-second">
								<p><?php echo get_sub_field('contact_information_fase_two') ?></p>
							</div>
						</div>


				<?php endwhile;
				endif; ?>



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
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
