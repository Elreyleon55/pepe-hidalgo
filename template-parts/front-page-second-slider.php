<div class="front-page-leatest-image">
  <section class="inner-png-left">
    <?php
    if (have_rows('left_images_second_place')):
      while (have_rows('left_images_second_place')) : the_row();
    ?>
        <div class="container-for-left-side-images">
          <?php $image = get_sub_field('charectors_on_the_left'); ?>
          <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <section class="banner-image">
    <div class="inner-banner-image">
      <?php
      $image = get_field('center_image_intro');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if ($image) {
        echo wp_get_attachment_image($image, $size);
      }
      ?>
    </div>
  </section>
  <section class="inner-png-right">
    <?php
    if (have_rows('right_images_second_place')):
      while (have_rows('right_images_second_place')) : the_row();
    ?>
        <div class="container-for-right-side-images">
          <?php $image = get_sub_field('charectors_on_the_right'); ?>
          <?php echo wp_get_attachment_image($image, 'large'); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</div>