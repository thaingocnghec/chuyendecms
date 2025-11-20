<?php
// Kế thừa style của parent theme
function header_custom_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'header-style', get_stylesheet_directory_uri() . '/assets/header.css' );

    // FontAwesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'header_custom_enqueue_styles' );