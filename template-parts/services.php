<section class="ftco-section bg-light ftco-no-pt">
    <div class="container">
        <div class="row">
        <?php if($services=get_field('service_itmes', 'options')){
            foreach($services as $service){?>
            <div
                class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">
                    <div class="icon d-flex mr-2">
                        <span class="fa <?php echo $service['service_icon']; ?>"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading"><?php echo $service['service_title']; ?></h3>
                        <p>
                        <?php echo $service['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php }
        }?>
        </div>
    </div>
</section>