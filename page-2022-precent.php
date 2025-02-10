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
<!-- 2022_to_precent_art -->

<main id="primary" class="site-main">
	<div class="container-layout">
		<div class="page-title">
			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', 'page');
			?>
				<article class="promotion-name">
					<p>BY PEPE HIDALGO</p>
				</article>
		</div>
		<div class="container-sidebar">
			<?php
				get_sidebar();
			?>
		</div>

		<div class="intro-container">
			<!-- Intro content to paintings -->
			<div class="intro-content-precent">
				<?php get_template_part('/template-parts/front-page-latest-slider') ?>
			</div>
			<?php

				$horizontal_images = [];
				$vertical_images = [];

				$images = get_field('array_gallery_art');
				if ($images): ?>

				<?php foreach ($images as $image):
						$image_id = $image['ID'];
						$image_meta = wp_get_attachment_metadata($image_id);
						$width = $image_meta['width'] ?? 0;
						$height = $image_meta['height'] ?? 0;

						if ($width > $height) {
							$horizontal_images[] = $image_id;
						} else {
							$vertical_images[] = $image_id;
						}

						$image_url = wp_get_attachment_url($image_id);
				?>
				<?php endforeach; ?>

				<div class="grid-precent" id="images-loaded-gallery">
					<section class="horizontal-paintings">
						<div>
							<h2>Horizontal Paintings</h2>
						</div>
						<div class="grid-item-precent-horizontal">
							<article class="inner-item-precent-horizontal">
								<div class="images">
									<div class="inner-images-grid art-2020-precent" id="lightgallery-vertical">
										<?php foreach ($horizontal_images as $horizontal_id):
											$image_caption_horizontal = wp_get_attachment_caption($horizontal_id);
											$attachment_url = wp_get_attachment_url($horizontal_id);
										?>

											<a href="<?php echo esc_url($attachment_url) ?>" data-lg-size="1600-2400" data-sub-html="<?php echo '<p>' . nl2br(esc_html($image_caption_horizontal)) . '</p>' ?>">
												<?php echo wp_get_attachment_image($horizontal_id, 'medium'); ?>

												<?php if ($image_caption_horizontal) {
													echo '<p>' . nl2br(esc_html($image_caption_horizontal)) . '</p>';
												}
												?>
											</a>

										<?php endforeach; ?>
									</div>
								</div>
							</article>
						</div>

					</section>

					<section class="vertical-paintings">
						<div>
							<h2>Vertical Paintings</h2>
						</div>
						<div class="grid-item-precent-vertial">
							<div class="inner-item-precent-vertical" data-lg-size="1600-2400">
								<div class="images">
									<div class="inner-images-grid art-2020-precent-vertical" id="lightgallery">
										<?php foreach ($vertical_images as $vertical_id):
											$image_caption_vertical = wp_get_attachment_caption($vertical_id);
											$attachment_url_vertical = wp_get_attachment_url($vertical_id);
										?>

											<a href="<?php echo esc_url($attachment_url_vertical) ?>" data-lg-size="1600-2400" data-sub-html="<?php echo '<p>' . nl2br(esc_html($image_caption_vertical)) . '</p>' ?>">
												<?php echo wp_get_attachment_image($vertical_id, 'medium'); ?>
												<?php if ($image_caption_vertical) {
													echo '<p>' . nl2br(esc_html($image_caption_vertical)) . '</p>';
												}
												?>
											</a>
										<?php endforeach; ?>
									</div>
								</div>

							<?php endif; ?>

							</div>
						</div>
					</section>
				</div>
			<?php

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
