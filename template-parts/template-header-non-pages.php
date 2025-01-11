<div class="header-non-pages">
  <?php
  if (have_rows('intro_to_content')):
    while (have_rows('intro_to_content')) : the_row();
  ?>

      <div class="title-info">
        <h1><?php echo get_sub_field('header_subject'); ?></h1>
        <div class="info">
          <p><?php echo get_sub_field('content_description_') ?></p>
        </div>
      </div>
      <div class="container-for-center-images">
        <div data-aos="zoom-in">
          <div class="image-header">
            <?php $image = get_sub_field('image_regarding_content'); ?>
            <?php echo wp_get_attachment_image($image, 'full'); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>