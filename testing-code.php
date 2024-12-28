    <!-- this is for the id  -->
    <?php
    $images = get_field('2022_to_precent_art');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if ($images): ?>
      <div class="grid">
        <?php foreach ($images as $image_id): ?>
          <div class="grid-item">
            <?php echo wp_get_attachment_image($image_id, $size); ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>


    <!-- this for the array of images -->
    <?php
    $images = get_field('array_gallery_art');
    if ($images): ?>
      <div class="grid">
        <?php foreach ($images as $image): ?>
          <div class="grid-item" class="grid-sizer">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <p><?php echo esc_html($image['caption']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>