<?php
/* Template Name: Home-page */
get_header(); ?>
<div class="hero-wrap">
    <div class="home-slider owl-carousel">
        <?php if($sliders=get_field('sliders', 'options')){ foreach($sliders as
        $slider){ ?>
        <div
            class="slider-item"
            style="background-image:url(<?php echo esc_url($slider['slider_image']['url']); ?>;">
            <div class="overlay"></div>
            <div class="container">
                <div
                    class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2><?php echo esc_html($slider['sub-title']); ?></h2>
                            <h1 class="mb-4"><?php echo esc_html($slider['title']); ?></h1>
                            <p>
                                <a href="<?php echo esc_url($slider['button_link']); ?>" class="btn btn-white"><?php echo esc_html($slider['button_text']); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } 
    }?>
    </div>
</div>

<?php get_template_part('/template-parts/features' ); ?>
<?php get_template_part('/template-parts/services' ); ?>
<?php get_template_part('/template-parts/counters' ); ?>
<?php get_template_part('/template-parts/testimonial' ); ?>
<?php get_template_part('/template-parts/faqs' ); ?>
<?php get_template_part('/template-parts/blogs' ); ?>
<?php get_template_part('/template-parts/cta' ); ?>
<?php get_template_part('/template-parts/pricing' ); ?>

<?php get_footer(); ?>