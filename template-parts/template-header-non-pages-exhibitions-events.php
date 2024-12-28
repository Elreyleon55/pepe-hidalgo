<div class="header-non-pages">
  <?php
  if (have_rows('intro_to_content_exhibitions_page')):
    while (have_rows('intro_to_content_exhibitions_page')) : the_row();
  ?>

      <div class="title-info">
        <h2><?php echo get_sub_field('title_text_events'); ?></h2>
        <div class="info">
          <p><?php echo get_sub_field('content_text_events') ?></p>
        </div>
      </div>
      <div class="image-header">
        <?php $image = get_sub_field('image_intro_events'); ?>
        <?php echo wp_get_attachment_image($image, 'full'); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>