<?php

function register_my_menu() {
    register_nav_menu('header-menu',_('Header Menu'));
}
add_action( 'init', 'register_my_menu' );


function add_google_jquery() {
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
        wp_enqueue_script('jquery');
    }
}
add_action('wp_print_scripts ', 'add_google_jquery');



?>