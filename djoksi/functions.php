<?php
function djoksi_theme_setup() {
    // Add featured image support
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'djoksi_theme_setup' );

// Enqueue styles and scripts
function djoksi_enqueue_scripts() {
    wp_enqueue_style( 'djoksi-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'djoksi_enqueue_scripts' );
?>
