<?php
function accounting_theme_register_required_plugins(){

    $plugins = array(
        array(
            'name'=>__('Contact Form 7','accounting'),
            'slug'=> 'contact-form-7',
            'required'=> true,
        ),

        array(
            'name'=>__('Widget Import & Export','accounting'),
            'slug'=> 'widget-importer-exporter',
            'required'=> true,
        ),
      
        array(
            'name'=>__('Customizer Export/Import','accounting'),
            'slug'=> 'customizer-export-import',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields','accounting'),
            'slug'=> 'advanced-custom-fields',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields: Font Awesome Field','accounting'),
            'slug'=> 'advanced-custom-fields-font-awesome',
            'required'=> true,
        ),
        array(
            'name'=>__('Advanced Custom Fields Pro','accounting'),
            'slug'=> 'advanced-custom-fields-pro',
            'source'=> get_stylesheet_directory().'/plugins/advanced-custom-fields-pro.zip',
            'required'=> true,
        ),              
          
        array(
            'name'=>__('Classic Widgets','accounting'),
            'slug'=> 'classic-widgets',
            'required'=> true,
        ),


    );

    $config= array(
        'id'=> 'accounting-plugin-active',
        'menu'=> 'Accounting Plugins Activation',
        'parent_slug'=> 'themes.php',
        'has_notices'=> true,

    );
    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'accounting_theme_register_required_plugins' );