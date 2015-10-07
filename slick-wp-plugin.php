<?php
/*
Plugin Name: Slick Plugin
Plugin URI: http://gios.asu.edu
Description: Enable the Slick Slider on your site
Version: 1.0.0
Author: The Global Institute of Sustainability
License: Copyright 2015
GitHub Plugin URI: https://github.com/gios-asu/slick-wp-plugin
GitHub Branch:    master
*/

function slick_scripts () {
  wp_register_style( 'slick', plugin_dir_url( __FILE__ ) . '/stylesheets/slick.css', array(), '0.0.1', 'all' );
  wp_register_style( 'slick-custom', plugin_dir_url( __FILE__ ) . '/stylesheets/slick-custom.css', array(), '0.0.1', 'all' );

  wp_enqueue_style( 'slick' );
  wp_enqueue_style( 'slick-custom' );

  wp_register_script( 'slick', plugin_dir_url( __FILE__ ) . '/javascripts/slick.min.js', array(), '0.0.1', 'all' );
  wp_register_script( 'slick-wp-script', plugin_dir_url( __FILE__ )   . '/javascripts/slick-starter.js', array(), '0.0.1', 'all' );

  wp_enqueue_script( 'slick' );
  wp_enqueue_script( 'slick-wp-script' );
 
}
add_action( 'wp_enqueue_scripts', 'slick_scripts', 20 );
