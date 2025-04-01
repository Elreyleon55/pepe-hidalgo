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

      <?php get_template_part('/template-parts/template-header-non-pages-diptych') ?>

      <div class="container-content-continue">
        <?php
        $args = array(
          'post_type'      => 'pah-diptych',
          'posts_per_page' => -1,
          'orderby'        => 'title',
          'order'          => 'ASC',
        );
        $student_query = new WP_Query($args);

        if ($student_query->have_posts()) : ?>

          <div class="collaboration-list">
            <?php while ($student_query->have_posts()) : $student_query->the_post(); ?>
              <div class="title-of-section">
                <h2><?php the_title() ?></h2>
              </div>
              <div class="repeater-field-inside-collaborations">
                <?php if (have_rows('repeater_field_for_diptych_type')):
                  while (have_rows('repeater_field_for_diptych_type')) : the_row(); ?>
                    <div class="title-info">
                      <h2><?php echo get_sub_field('name_of_the_panting_diptych') ?></h2>
                      <h3><?php echo get_sub_field('the_year_of_the_painting_diptych'); ?></h3>
                    </div>
                    <div>
                      <div class="image-header">
                        <?php $image = get_sub_field('image_of_the_diptych'); ?>
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
