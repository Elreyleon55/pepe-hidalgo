<div class="header-non-pages">
  <?php
  if (have_rows('intro_to_content_exhibitions_page')):
    while (have_rows('intro_to_content_exhibitions_page')) : the_row();
  ?>

      <div class="title-info">
        <h1><?php echo get_sub_field('title_text_events'); ?></h1>
        <div class="info">
          <p><?php echo get_sub_field('content_text_events') ?>
            <?php
            $link = get_sub_field('link_to_gallery_event');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a class="button-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          </p>
        </div>
      </div>
      <div data-aos="zoom-in">
        <div class="image-header">
          <?php $image = get_sub_field('image_intro_events'); ?>
          <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
      </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
</div>