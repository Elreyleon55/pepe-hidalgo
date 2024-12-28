<div class="header-non-pages">
  <?php
  if (have_rows('intro_content')):
    while (have_rows('intro_content')) : the_row();
  ?>

      <div class="title-info">
        <h2><?php echo get_sub_field('content_title'); ?></h2>
        <div class="info">
          <p><?php echo get_sub_field('content_content') ?></p>
        </div>
      </div>
      <div class="image-header">
        <?php $image = get_sub_field('content_image'); ?>
        <?php echo wp_get_attachment_image($image, 'full'); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>