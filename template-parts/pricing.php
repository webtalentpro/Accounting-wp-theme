
<section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section text-center ftco-animate">
                  <span class="subheading"><?php the_field('section_subtitle', 'options') ?></span>
                  <h2><?php the_field('section_title', 'options') ?></h2>
               </div>
            </div>
            <div class="row">
            <?php if($prices=get_field('price_plan', 'options')){
                foreach($prices as $price){
                    ?>
               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="block-7">
                     <div class="text-center">
                        <span class="excerpt d-block"><?php echo $price['package_name']; ?></span>
                        <span class="price"><sup>$</sup> <span class="number"><?php echo $price['package_price']; ?></span> <sub>/mos</
sub></span>
                        <ul class="pricing-text mb-5">
                        <?php echo $price['package_features']; ?>
                          
                        </ul>
                        <a href="<?php echo $price['button_link']; ?>" class="btn btn-primary d-block px-2 py-3"><?php echo $price
['button_text']; ?></a>
                     </div>
                  </div>
               </div>
               <?php }} ?>
            </div>
         </div>
      </section>