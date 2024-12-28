<div class="header-non-pages-collaborations">
  <?php
  if (have_rows('repeater_for_intro_to_content_news')):
    while (have_rows('repeater_for_intro_to_content_news')) : the_row();
  ?>

      <div class="title-info-collaborations">
        <h2><?php echo get_sub_field('tititle_for_content_news'); ?></h2>
        <div class="info">
          <p><?php echo get_sub_field('content_for_content_for_news') ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>