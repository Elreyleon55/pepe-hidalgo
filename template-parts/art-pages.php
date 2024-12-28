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

  <div class="mansory-container">
    <!-- array_gallery_art -->
    <?php
      $images = get_field('array_gallery_art');
      if ($images): ?>
      <div class="grid" id="images-loaded-gallery">
        <?php foreach ($images as $image):
          $image_url = wp_get_attachment_url($image);
        ?>
          <div class="grid-sizer"></div>
          <div class="grid-item">
            <div id="lightgallery">
              <div class="item" data-lg-size="1600-2400">
                <img src="<?php
                          echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?> " loading="lazy" />
              </div>
              <p><?php echo esc_html($image['caption']); ?></p>
            </div>
          </div>
          <div class="grid-item grid-item--width2"></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  <?php

      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;

    endwhile; // End of the loop.
  ?>
  </div>
</div>