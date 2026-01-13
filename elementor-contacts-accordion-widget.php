<?php
/**
 * Plugin Name: Elementor Contacts Accordion Widget
 * Description: Adds a repeater-based contacts accordion section to Elementor.
 * Version:     1.0
 * Author:      Valdas Kriūnas
 * Author URI:  https://github.com/valdas-kr
 * Text Domain: elementor-contacts-accordion-widget
 * Licence: GPLv3
 * Requires Plugins: elementor
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

function register_contacts_accordion_widget( $widgets_manager ) {
  require_once ( __DIR__ . '/widgets/contacts-accordion-widget.php' );
  $widgets_manager->register( new \Elementor_Contacts_Accordion_Widget() );
}
add_action( 'elementor/widgets/register', 'register_contacts_accordion_widget' );

function load_contacts_accordion_widget_assets() {
  wp_enqueue_style( 'style', plugin_dir_url(__FILE__) . 'assets/css/style.css' );
  wp_enqueue_script( 'script', plugin_dir_url(__FILE__) . 'assets/js/script.js', [], false, true );
}
add_action( 'wp_enqueue_scripts', 'load_contacts_accordion_widget_assets' );
?>