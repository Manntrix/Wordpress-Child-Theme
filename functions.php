<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); //Main CSS
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/custom.css' ); //for CSS file
	wp_enqueue_script( 'mycustom', get_stylesheet_directory_uri() . '/mycustom.js', array(), '20151228', true );  // For JS file
}
?>