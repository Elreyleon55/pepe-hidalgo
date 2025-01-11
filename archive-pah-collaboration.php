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
				<?php
				$args = array(
					'post_type'      => 'pah-collaboration',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC',
				);
				$student_query = new WP_Query($args);

				if ($student_query->have_posts()) : ?>

					<div class="collaboration-list">
						<?php while ($student_query->have_posts()) : $student_query->the_post(); ?>
							<div class="name-of-collaborator">
								<h2><?php the_title() ?></h2>
							</div>
							<div class="repeater-field-inside-collaborations">
								<?php if (have_rows('the_year_of_the_colloboration')):
									while (have_rows('the_year_of_the_colloboration')) : the_row(); ?>
										<div class="title-info">
											<h3><?php echo get_sub_field('name_of_painting_collaboration') ?></h3>
											<h4><?php echo get_sub_field('the_year_of_the_colloboration'); ?></h4>
										</div>
										<div data-aos="fade-left">
											<div class="image-header">
												<?php $image = get_sub_field('the_image_of_the_colloboration'); ?>
												<?php echo wp_get_attachment_image($image, 'full'); ?>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>

				<?php else : ?>
					<p>No collaborations found</p>
				<?php endif; ?>

			</div>


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



</main>
<?php
get_footer();
get_sidebar();
