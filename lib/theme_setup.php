<?php

function accounting_theme_setup(){
    add_theme_support('title-tag' );
    add_theme_support('post-thumbnails', array('post','page') );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "html5" );
    add_theme_support( "custom-logo"); 
    add_theme_support( "custom-header");
    add_theme_support( "custom-background" ); 
    add_theme_support( "align-wide" );

    load_theme_textdomain('wpdocs_theme', get_template_directory() . '/languages');
    register_nav_menus( array(
        'primary_menu'=> 'Primary Menu',
    ) );

}
add_action('after_setup_theme', 'accounting_theme_setup');