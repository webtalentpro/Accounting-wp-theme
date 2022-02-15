<?php
// css and jss file script
require_once('lib/enqueue_css_js.php');

// theme setup
require_once('lib/theme_setup.php');

// bootstrap nav walker
require_once('lib/bs4navwalker.php');

// widgets file
require_once('lib/widgets.php');

// theme options
require_once('lib/theme-options.php');

// plugin activation file
require_once('lib/accounting_theme_activation.php');

// TGM plugin 
require_once('lib/class-tgm-plugin-activation.php');



//Comment Field Order

function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );