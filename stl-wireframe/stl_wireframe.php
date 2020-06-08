<?php
/**
 * Plugin Name: STL Wireframe Styles
 * Plugin URI: https://start-the-loop.com
 * Description: Gives your theme a wireframy look. Meant for pre-design prototyping. Tested with Twentysixteen, Twentyseventeen, Twentynineteen and TwentyTwenty.
 * Text Domain: stl_wireframe
 * Domain Path: /languages
 * Author: Kirsten Schelper
 * License: GPL 2.0+
 * Version: 0.1
 * Author URI: https://start-the-loop.com
*/

/* This is a very simple plugin. It doesn't write to the database and has no options.
It just adds some CSS to the <head> section. Deactivate the plugin and the styles will be gone. */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Load wireframe styles.
 */
 function stl_load_wireframestyles() {
    wp_register_style('wireframe-styles', plugins_url('/wireframe.css',  __FILE__ ));
    wp_enqueue_style('wireframe-styles', plugins_url('/wireframe.css',  __FILE__ ));
 }
 add_action( 'wp_enqueue_scripts', 'stl_load_wireframestyles' );
 
 /**
  * Add body class for specificity.
  */
  function stl_wireframe_body_class( $classes ) {
      $classes[] = 'is-wireframe';
      return $classes;
  }
  add_filter( 'body_class','stl_wireframe_body_class' );
