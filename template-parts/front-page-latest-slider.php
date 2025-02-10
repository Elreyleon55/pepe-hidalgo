<div class="front-page-leatest-image">
  <section class="inner-png-left">
    <?php
    if (have_rows('left_images_for_latest_works')):
      while (have_rows('left_images_for_latest_works')) : the_row();
    ?>
        <div class="container-for-left-side-images">
          <?php $image = get_sub_field('left_side_image'); ?>
          <?php echo wp_get_attachment_image($image, 'medium'); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <section class="banner-image">
    <div class="inner-banner-image">
      <?php
      $image = get_field('image_header_for_present');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if ($image) {
        echo wp_get_attachment_image($image, $size);
      }
      ?>
    </div>
  </section>
  <section class="inner-png-right">
    <?php
    if (have_rows('right_images_for_latest_works')):
      while (have_rows('right_images_for_latest_works')) : the_row();
    ?>
        <div class="container-for-right-side-images">
          <?php $image = get_sub_field('right_images'); ?>
          <?php echo wp_get_attachment_image($image, 'medium'); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</div>