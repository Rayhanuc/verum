<?php

  /**
 * 
 * Plugin Name: Verum Theme Companion Plugin
 * Plugin URI:  https://
 * Description: Verum Theme Companion Plugin
 * Version:     1.0
 * Author:      Rayhan Uddin Chowdhury
 * Author URI:  https://
 * License:     GPLv2 or later
 * License URI: https://
 * Text Domain: verum-companion
 * Domain Path: /languages/
 */

require_once plugin_dir_path(__FILE__)."/widgets/verum-social-widget.php";
require_once plugin_dir_path(__FILE__)."/widgets/verum-social-widget.php";
require_once plugin_dir_path(__FILE__)."/widgets/verum-about-widget.php";
require_once plugin_dir_path(__FILE__)."/widgets/verum-recent-posts-widget.php";


function verumc_load_textdomain(){
	load_plugin_textdomain( 'verum-companion', false, dirname(__FILE__)."/languages" );
}
add_action('plugins_loaded','verumc_load_textdomain');

function verum_plugin_init() {
	add_image_size('verum-sidebar-thumbnail',90,75,true);
}
add_action('init','verum_plugin_init');