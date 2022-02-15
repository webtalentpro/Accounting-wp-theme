<?php


function accounting_css_js(){
   

    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
 
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    wp_enqueue_script( 'migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'animamainteNumber', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );


}
add_action('wp_enqueue_scripts', 'accounting_css_js' );



