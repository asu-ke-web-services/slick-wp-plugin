<?php
function slick_scripts () {
  wp_register_style( 'slick', get_stylesheet_directory_uri().'/stylesheets/slick.css', array(), '0.0.1', 'all' );
  wp_register_style( 'slick-custom', get_stylesheet_directory_uri().'/stylesheets/slick-custom.css', array(), '0.0.1', 'all' );

  wp_enqueue_style( 'slick' );
  wp_enqueue_style( 'slick-custom' );

  wp_register_script( 'slick', get_stylesheet_directory_uri().'/javascripts/slick.min.js', array(), '0.0.1', 'all' );
  wp_register_script( 'slick-wp-script', get_stylesheet_directory_uri() . '/javascripts/slick-starter.js', array(), '0.0.1', 'all' );

  wp_enqueue_script( 'slick' );
  wp_enqueue_script( 'slick-wp-script' );
 
}
add_action( 'wp_enqueue_scripts', 'slick_scripts', 20 );
