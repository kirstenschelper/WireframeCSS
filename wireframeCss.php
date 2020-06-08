<?php
/**
 * Plugin Name: Wireframe Styles
 * Plugin URI:  https://github.com/kirstenschelper/WireframeCSS
 * Description: Gives your theme a wireframy look. Meant for pre-design prototyping. Tested with Twentysixteen, Twentyseventeen, Twentynineteen and TwentyTwenty.
 * Text Domain: stl_wireframe
 * Domain Path: /languages
 * Author:      Kirsten Schelper
 * License:     GPL 2.0+
 * Version:     0.2.0
 * Author URI:  https://start-the-loop.com
 */

/**
 * This is a very simple plugin. It doesn't write to the database and has no options.
 * It just adds some CSS to the <head> section. Deactivate the plugin and the styles will be gone.
 */

namespace WireframeCss;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Load wireframe styles.
 */
add_action( 'wp_enqueue_scripts', static function () {
	wp_register_style( 'wireframe-styles', plugins_url( '/assets/css/wireframe.css', __FILE__ ) );
	wp_enqueue_style( 'wireframe-styles', plugins_url( '/assets/css/wireframe.css', __FILE__ ) );
} );

/**
 * Add body class for specificity.
 */
add_filter( 'body_class', static function ( $classes ) {
	$classes[] = 'is-wireframe';

	return $classes;
} );
