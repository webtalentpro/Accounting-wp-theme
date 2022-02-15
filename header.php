<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head() ?>
    </head>
    <body <?php body_class( ) ?>>
        <?php wp_body_open(); ?>
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-wrap">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <p class="mb-0 phone pl-md-2">
                                        <?php $header_phone=get_field('header_phone', 'options'); if($header_phone){ ?>

                                        <a href="tel:<?php echo $header_phone ?>" class="mr-2">
                                            <span class="fa fa-phone mr-1"></span>
                                            <?php echo $header_phone ?></a>

                                        <?php } ?>

                                        <?php $header_email=get_field('header_email', 'options'); if($header_email){ ?>
                                        <a href=":<?php echo $header_email ?>" class="mr-2">
                                        <span class="fa fa-paper-plane mr-1"></span>
                                            <?php echo $header_email ?></a>
                                        <?php } ?>

                                       
                                       
                                       
                                    </p>
                                </div>
                                <div class="col-md-6 d-flex justify-content-md-end">
                                    <div class="social-media">
                                        <p class="mb-0 d-flex">
                                            <?php $header_socials=get_field('header_social_icons', 'options');
                                            foreach($header_socials as $social){ ?>

                                        
                                            <a href="<?php  echo $social['url']; ?>" class="d-flex align-items-center justify-content-center">
                                                <span class="fa <?php  echo $social['icon']; ?>">
                                                    <i class="sr-only">Facebook</i>
                                                </span>
                                            </a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav
            class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
            id="ftco-navbar">
            <div class="container">
            
                
                
                <a class="navbar-brand" href="<?php echo esc_url(home_url( )); ?>"> <?php the_field('header_logo', 'options');?></a>
                
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#ftco-nav"
                    aria-controls="ftco-nav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                    Menu
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary_menu', 'depth' => 2, // 1
               'container' => 'div', 'container_class' =>
                'collapse navbar-collapse', 'container_id' => 'ftco-nav', 'menu_class' =>
                'navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker'=> new bs4navwalker(), ) ); ?>
            </div>
        </nav>
        <!-- END nav -->