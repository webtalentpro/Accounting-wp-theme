<?php 




function my_acf_option_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $parent = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings', 'accounting'),
            'menu_title'    => __('Theme Options','accounting'),
            'menu_slug'     => 'theme-options',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
         // Add sub page.
         $child = acf_add_options_page(array(
            'page_title'  => __('Header Settings', 'accounting'),
            'menu_title'  => __('Header control', 'accounting'),
            'parent_slug' => $parent['menu_slug'],

        ));

        $child = acf_add_options_page(array(
            'page_title'  => __('Home Page', 'accounting'),
            'menu_title'  => __('Home Page', 'accounting'),
            'parent_slug' => $parent['menu_slug'],
        ));
        $child = acf_add_options_page(array(
            'page_title'  => __('Contact Page', 'accounting'),
            'menu_title'  => __('Contact Page', 'accounting'),
            'parent_slug' => $parent['menu_slug'],
        ));
        $child = acf_add_options_page(array(
            'page_title'  => __('Footer', 'accounting'),
            'menu_title'  => __('Footer', 'accounting'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}
add_action('acf/init', 'my_acf_option_init');