<div class="swiper">
  <div class="swiper-wrapper">
    <?php if (have_rows('pepehidalgo_hero_images')): ?>
      <?php while (have_rows('pepehidalgo_hero_images')): the_row();
        $image = get_sub_field('hero_images');
      ?>
        <div class="swiper-slide">
          <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>