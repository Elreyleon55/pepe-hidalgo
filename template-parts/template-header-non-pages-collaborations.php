<div class="header-non-pages-collaborations">
  <?php
  if (have_rows('intro_to_content_collaborations')):
    while (have_rows('intro_to_content_collaborations')) : the_row();
  ?>

      <div class="title-info-collaborations">
        <h2><?php echo get_sub_field('text_to_title'); ?></h2>
        <div class="info">
          <p><?php echo get_sub_field('text_to_content') ?></p>
        </div>
      </div>
      <div class="image-header-collaborations">
        <?php $image = get_sub_field('image_for_content'); ?>
        <?php echo wp_get_attachment_image($image, 'full'); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>