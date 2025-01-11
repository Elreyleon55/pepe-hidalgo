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

			<?php get_template_part('/template-parts/template-header-non-pages-video') ?>

			<div class="container-content-continue">
				<section class="work-process-video-works">
					<?php
					if (have_rows('repeater_field_for_video_works')):
						while (have_rows('repeater_field_for_video_works')) : the_row();
					?>
							<div data-aos="fade-left">
								<div class="title-info-work-process-video-works">
									<h2><?php echo get_sub_field('title_to_content_video_works') ?></h2>
									<p><?php echo get_sub_field('content_to_content_video_works') ?></p>
								</div>
							</div>
							<div class="news-work-process-videos-works">
								<?php echo get_sub_field('video_for_content_for_video_works'); ?>
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
