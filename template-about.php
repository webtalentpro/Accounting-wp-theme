<?php
/* Template Name: about-page */
get_header(); ?>
      <!-- END nav -->
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri())?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
             
             
            <?php get_template_part('lib/breadcam'); ?>
             
            </div>
         </div>
      </section>

      <?php get_template_part('/template-parts/features'); ?>
      <?php get_template_part('/template-parts/counters'); ?>
      <?php get_template_part('/template-parts/testimonial'); ?>
      <?php get_template_part('/template-parts/faqs'); ?>
      <?php get_template_part('/template-parts/cta'); ?>

 <?php get_footer( ) ?>

