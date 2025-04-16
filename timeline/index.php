<?php
/**
 * Plugin Name: Time Line
 * Description: Adds a custom Timeline widget for Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Shohag
 * Author URI:  https://developers.elementor.com/
 * Text Domain: pro
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function register_timeline_widget( $widgets_manager ) {
	require_once( __DIR__ . '/widgets/timeline.php' );
	$widgets_manager->register( new \Timeline_Widget() );
}
add_action( 'elementor/widgets/register', 'register_timeline_widget' );


// function timeline_enqueue_styles() {
// 	wp_register_style(
// 		'timeline-widget-style',
// 		plugins_url( '/style.css', __FILE__ ),
// 		[],
// 		'1.0.0'
// 	);
// 	wp_enqueue_style( 'timeline-widget-style' );
// }
// add_action( 'wp_enqueue_scripts', 'timeline_enqueue_styles' );
