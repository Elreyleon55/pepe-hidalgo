<!-- intro_to_content_contact -->

<div class="header-non-pages-contact">
  <?php
  if (have_rows('intro_to_content_contact')):
    while (have_rows('intro_to_content_contact')) : the_row();
  ?>

      <div class="title-info-contact">
        <h2><?php echo get_sub_field('content_title'); ?></h2>
        <div class="info">
          <p><?php echo get_sub_field('content_info') ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>