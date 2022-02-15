<?php


function accounting_widgets(){
    // sidebar widget
    register_sidebar( array(
        'name'=>__('Blog Sidebar', 'accounting'),
        'id'=> 'sidebar-main',
        'before_widget'=> '<div class="sidebar-box ftco-animate">',
        'after_widget'=>'</div>',
        'before_title'=> '<h3>',
        'after_title'=> '</h3>',
    ) );

    register_sidebar( array(
        'name'=>__('Footer widget one', 'accounting'),
        'id'=> 'footer-1',
        'before_widget'=> '<ul class="list-unstyled"><li>',
        'after_widget'=>'</li></ul>',
        'before_title'=> '<h2 class="footer-heading">',
        'after_title'=> '</h2>',
    ) );

    register_sidebar( array(
        'name'=>__('Footer widget two', 'accounting'),
        'id'=> 'footer-2',
        'before_widget'=> '<ul class="list-unstyled"><li>',
        'after_widget'=>'</li></ul>',
        'before_title'=> '<h2 class="footer-heading">',
        'after_title'=> '</h2>',
    ) );

}
add_action( 'widgets_init', 'accounting_widgets');