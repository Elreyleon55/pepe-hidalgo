<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pepe-hidalgo-art
 */

get_header();
?>

<main id="primary" class="site-main">
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

				<?php get_template_part('/template-parts/template-header-non-pages-news') ?>

				<div class="container-content-continue">
					<section class="work-process-news">
						<?php
						if (have_rows('news_content_repeater_field')):
							while (have_rows('news_content_repeater_field')) : the_row();
						?>

								<div class="title-info-work-process">
									<div class="images-news-page">
										<div class="container-image-gallery">
											<?php $image = get_sub_field('image_for_content_box_news');
											echo wp_get_attachment_image($image, 'full'); ?>
										</div>
									</div>
									<h2><?php echo get_sub_field('title_for_content_box_news') ?></h2>
									<p><?php echo get_sub_field('text_area_for_content_box_news') ?></p>
									<?php
									$link = get_sub_field('link_for_content_box_news');
									if ($link):
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>
										<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
									<?php endif; ?>
								</div>

							<?php endwhile; ?>
						<?php endif; ?>

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
	get_sidebar();
	get_footer();
