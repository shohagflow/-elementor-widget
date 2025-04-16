<?php
/**
 * Plugin Name: Team Mamber
 * Description: Auto embed any embbedable content from external URLs into Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Shohag
 * Author URI:  https://developers.elementor.com/
 * Text Domain: shohag

 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


function register_team( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/team_widget.php' );

	$widgets_manager->register( new \Elementor_Team() );

}
add_action( 'elementor/widgets/register', 'register_team');

