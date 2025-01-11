<div class="header-non-pages">
  <?php
  $page_id = 1868;
  // Do something for the page with ID 42
  if (have_rows('repeater_for_intro_content_collobaoration', $page_id)):
    while (have_rows('repeater_for_intro_content_collobaoration', $page_id)) : the_row();
  ?>

      <div class="title-info">
        <h1><?php echo get_sub_field('intro_title_colloboration'); ?></h1>
        <div class="info">
          <p><?php echo get_sub_field('intro_content_collaborations') ?></p>
        </div>
      </div>
      <div data-aos="zoom-in">
        <div class="image-header">
          <?php $image = get_sub_field('intro_image_collaboration'); ?>
          <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>