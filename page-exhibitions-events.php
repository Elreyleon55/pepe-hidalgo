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

			<?php get_template_part('/template-parts/template-header-non-pages-exhibitions-events') ?>

			<div class="container-content-continue">

				<section class="work-process-exhibitions">
					<?php
					if (have_rows('repeater_for_exhibitions_page')):
						while (have_rows('repeater_for_exhibitions_page')) : the_row();
					?>
							<div class="title-info-work-process">
								<h2><?php echo get_sub_field('title_exhibitions') ?></h2>
								<p><?php echo get_sub_field('content_exhibitions') ?></p>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>


				</section>
				<section class="exhibition-images">
					<div class="news-work-process-images-exhibitions">
						<?php
						if (have_rows('repeater_for_gallery_images_exhibition_page')):
							while (have_rows('repeater_for_gallery_images_exhibition_page')) : the_row();
						?>
								<div class="container-image-gallery">
									<?php $image = get_sub_field('inner_images_exhibitons');
									echo wp_get_attachment_image($image, 'full'); ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section>

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
get_footer();
