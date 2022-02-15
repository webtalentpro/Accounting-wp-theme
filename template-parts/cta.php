
<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
            <?php if($cta=get_field('cta_text', 'options')){?>
                <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;"><?php echo esc_html($cta) ?></h2>
                <?php } ?>
            </div>
            <div class="col-md-5 d-flex align-items-center">
                       <?php echo do_shortcode('[contact-form-7 id="905" title="Newsletter"]') ?>                                 
                
            </div>
        </div>
    </div>
</section>