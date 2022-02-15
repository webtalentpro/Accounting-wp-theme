<?php
/* Template Name: Contact-page
*/
get_header(); ?>
      <!-- END nav -->
      <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri())?>/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-end">
            <?php get_template_part('lib/breadcam'); ?>
              
              
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12">
                  <div class="wrapper">
                     <div class="row no-gutters">
                        <div class="col-lg-7 col-md-7 order-md-last d-flex align-items-stretch">
                           <div class="contact-wrap w-100 p-md-5 p-4">
                              <h3 class="mb-4">Get in touch</h3>
                              <div id="form-message-warning" class="mb-4"></div>
                              
                              <?php echo do_shortcode( '[contact-form-7 id="935" title="contact page form"]') ?>
                              
                           </div>
                        </div>
                        <div class="col-lg-5 col-md-5 d-flex align-items-stretch">
                           <div class="info-wrap bg-primary w-100 p-md-5 p-4">

                           <?php if($contact_title=get_field('contact_title', 'options')){?>
                              <h3><?php echo esc_html($contact_title); ?></h3>
                          <?php }?>

                          <?php if($contact_des=get_field('contact_desctription', 'options')){?>
                           <p class="mb-4"><?php echo esc_html($contact_des); ?></p>
                            <?php }?>

                            

                              <?php if($infos=get_field('contact__information', 'option')){
                                 foreach($infos as $info){ ?>
                              <div class="dbox w-100 d-flex align-items-start">
                                 <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa <?php echo esc_attr($info['icon']);?>"></span>
                                 </div>
                                 <div class="text pl-3">
                                    <p><?php echo esc_html($info['info_text']);  ?></p>
                                 </div>
                              </div>   
                              <?php } } ?>
      
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
      <?php if($mag=get_field('contact_map', 'options')){?>
      <div  id="map" class="map"><?php print_r($mag)  ?></div>
      <?php } ?>
      </section>
      <?php get_template_part('/template-parts/cta'); ?>

  
<?php get_footer(); ?>