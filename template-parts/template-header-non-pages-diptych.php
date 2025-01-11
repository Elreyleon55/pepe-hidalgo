<div class="header-non-pages">
  <?php
  $page_id = 1862;
  // Do something for the page with ID 42
  if (have_rows('intro_to_content_diptych', $page_id)):
    while (have_rows('intro_to_content_diptych', $page_id)) : the_row();
  ?>

      <div class="title-info">
        <h1><?php echo get_sub_field('tititle_diptych_'); ?></h1>
        <div class="info">
          <p><?php echo get_sub_field('content_diptych') ?></p>
        </div>
      </div>
      <div data-aos="zoom-in">
        <div class="image-header">
          <?php $image = get_sub_field('image_diptych'); ?>
          <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>