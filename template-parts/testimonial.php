<section class="ftco-section testimony-section bg-light">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div
                class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <?php if($section_title=get_field('testimonial_section', 'options')){ ?>
                    <span class="subheading"><?php  echo $section_title['subtitle']; ?></span>
                <h2> <?php echo $section_title['section_title']; ?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                <?php if( $testimonials=get_field('testimonial_items', 'options')){
                    foreach($testimonials as $testimonial){ ?>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-quote-left"></span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                   <?php echo $testimonial['description']; ?>
                                    </p>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="user-img"
                                        style="background-image: url(<?php echo $testimonial['person_image']['url']; ?>"></div>
                                    <div class="pl-3">
                                        <p class="name"><?php echo $testimonial['person_name']; ?></p>
                                        <span class="position"><?php echo $testimonial['job_title']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                } ?>
                </div>
            </div>
        </div>
    </div>
</section>