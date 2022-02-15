<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
                <?php if($feature_image=get_field('feature_section', 'options')){ ?>
                <div
                    class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center
mb-4 mb-sm-0"
                    style="background-image:url(<?php echo $feature_image['feature_image']['url']; ?>);"></div>
                <?php } ?>
            </div>

            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="heading-section pl-md-4 pt-md-5">
                    <span class="subheading"><?php echo $feature_image['feature_subtitle']; ?></span>
                    <h2 class="mb-4"><?php echo $feature_image['feature_title']; ?></h2>
                </div>
                <?php if($feature_items=get_field('feature_items', 'options')){
                foreach($feature_items as $items){ ?>
                <div class="services-2 w-100 d-flex">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa <?php echo $items['items_icon']; ?>"></span>
                    </div>
                    <div class="text pl-4">
                        <h4>
                            <?php echo $items['items_title']; ?></h4>
                        <p>
                            <?php echo $items['items_description']; ?>
                        </p>
                    </div>
                </div>
                <?php }
                } ?>

            </div>
        </div>
    </div>
</section>