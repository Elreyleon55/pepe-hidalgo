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

			<?php get_template_part('/template-parts/template-header-non-pages') ?>

			<div class="container-content-continue">
				<section class="work-process">
					<?php
					if (have_rows('section_title')):
						while (have_rows('section_title')) : the_row();
					?>
							<div class="title-info-work-process">
								<h2><?php echo get_sub_field('section_title') ?></h2>
								<p><?php echo get_sub_field('section_content') ?></p>
							</div>
							<div class="news-work-process-images">
								<?php
								if (have_rows('news_info')):
									while (have_rows('news_info')) : the_row();
								?>
										<article class="title-news">
											<h3><?php echo get_sub_field('news_title') ?></h3>
											<p><?php echo get_sub_field('news_content') ?></p>
											<a href="<?php echo esc_attr(get_field('instagram_icon')); ?>"><?php get_template_part('/media/icon-instagram') ?></a>
											<a href="<?php echo esc_attr(get_field('titok_icon')); ?>"><?php get_template_part('/media/icon-tik-tok') ?></a>
										<?php endwhile; ?>
									<?php endif; ?>
										</article>
										<div class="container-image-gallery">
											<?php $image = get_sub_field('gallery_img');
											echo wp_get_attachment_image($image, 'full'); ?>
										</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

				</section>

				<section class="awards-section">
					<?php
					if (have_rows('award_section')):
						while (have_rows('award_section')) : the_row();
					?>
							<div class="title-info-awards">
								<h2><?php echo get_sub_field('section_title') ?></h2>
								<p><?php echo get_sub_field('section_content') ?></p>
							</div>
							<div class="image-gallery-awards">
								<?php $image = get_sub_field('gallery_image');
								echo wp_get_attachment_image($image, 'full'); ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</section>

				<section class="newsletter-section">

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
