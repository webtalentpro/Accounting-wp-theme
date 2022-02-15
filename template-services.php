<?php 
/* Template Name: service-page */
get_header() ?>
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri())?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
             
            <?php get_template_part('lib/breadcam'); ?>
             
             
            </div>
         </div>
      </section>
<div class="service_section">
  <?php get_template_part('/template-parts/services'); ?>
  </div>
  <?php get_template_part('/template-parts/features'); ?>
 <?php get_template_part('/template-parts/pricing'); ?>
 <?php get_template_part('/template-parts/cta'); ?>

<?php get_footer(); ?>

