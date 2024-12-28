<?php

/**
 * The template for displaying the home page
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme

 * The template for displaying the Home Page.
 *
 * @Kaleb https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SCH_School_Theme

 */

get_header();
?>


<main id="primary" class="site-main">

  <section class="hero-slider">
    <div class="hero-information">
      <div class="hero-inner-container-info">
        <h1>PEPE HIDALGO</h1>
        <div class="inner-container-info-enter">
          <?php echo '<a href="' . get_permalink(1854) . '">ENTER</a>'; ?>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/hero-slider'); ?>
    <div class="hero-social-icons">
      <div class="hero-inner-container">
        <a href="" class="instagram">
          <?php get_template_part('/media/icon-instagram') ?>
        </a>
        <a href="" class="tik-tok">
          <?php get_template_part('/media/icon-tik-tok') ?>
        </a>
      </div>
    </div>
  </section>

</main><!-- #primary -->

<?php

get_footer();
?>