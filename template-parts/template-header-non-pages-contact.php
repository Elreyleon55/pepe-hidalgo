<!-- intro_to_content_contact -->

<div class="header-non-pages">
  <?php
  if (have_rows('intro_to_content_contact')):
    while (have_rows('intro_to_content_contact')) : the_row();
  ?>

      <div class="title-info">
        <h1><?php echo get_sub_field('content_title'); ?></h1>
        <div class="info">
          <p><?php echo get_sub_field('content_info') ?></p>
        </div>
      </div>
      <div class="container-for-center-images">
        <div data-aos="zoom-in">
          <div class="image-header">
            <?php $image = get_sub_field('image_want_to_contact'); ?>
            <?php echo wp_get_attachment_image($image, 'full'); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>