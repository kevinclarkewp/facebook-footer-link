<?php
/*
Plugin Name:  Facebook Footer Link
Description:  Adds a Facebook profile link to the end of each post
", available at Udemy.com.
Plugin URI:   https://github.com/kevinclarkewp
Author:       Kevin Clarke
Version:      1.0
Text Domain:  facebook-footer-link
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

// exit if file is called directly from outside WordPress
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// Global options variable
$ffl_options = get_option('ffl_settings');

// Load style & script
require_once plugin_dir_path( __FILE__ ) . 'includes/facebook-footer-link-scripts.php';

// Load content
require_once plugin_dir_path( __FILE__ ) . 'includes/facebook-footer-link-content.php';

if(is_admin()) {
// Load settings page
require_once plugin_dir_path( __FILE__ ) . 'includes/facebook-footer-link-settings.php';
}




?>
