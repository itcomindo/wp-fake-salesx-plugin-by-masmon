<?php
defined('ABSPATH') || exit;

/**
 *=========================
 *Plugin Name: Fake Sales X
 *Plugin URI: https://budiharyono.com/
 *Description: Fake Sales X is a plugin to display fake sales notifications on your website.
 *Version: 2.0.0
 *Author: Budi Haryono
 *Author URI: https://budiharyono.com/
 *=========================
 */



add_action('plugins_loaded', 'fakesalesx_plugin_loaded');
function fakesalesx_plugin_loaded()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        // If Carbon Fields is not active, deactivate your plugin and display an error message
        add_action('admin_notices', 'fakesalesx_plugin_activation_error');
        add_action('admin_init', 'fakesalesx_deactivate_plugin');
    }
}
function fakesalesx_plugin_activation_error()
{
    echo '<div class="error"><p>You need to install and activate the Carbon Fields plugin first.</p></div>';
}
function fakesalesx_deactivate_plugin()
{
    deactivate_plugins(plugin_basename(__FILE__));
}
add_action('admin_init', 'fakesalesx_check_carbon_fields_deactivation');
function fakesalesx_check_carbon_fields_deactivation()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        deactivate_plugins(plugin_basename(__FILE__));
    }
}


/**
 *=========================
 *NAME: Load Scripts and Styles from it's own folder
 *=========================
 */
function fakesalesx_load_scripts()
{
    wp_enqueue_style('fakesalesx-css', plugins_url('fakesalesx-css.css', __FILE__));
    // load flickity css from cdn
    wp_enqueue_style('fakesalesx-flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
    //load animate.css from cdn
    wp_enqueue_style('fakesalesx-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

    // load flickity from cdn
    wp_enqueue_script('fakesalesx-flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'), 'v2.2', true);
    // load fakesalesx script
    wp_enqueue_script('fakesalesx-script', plugins_url('fakesalesx-js.js', __FILE__), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'fakesalesx_load_scripts');


/**
 *=========================
 *NAME: Include plugin needed
 *=========================
 */
require_once plugin_dir_path(__FILE__) . 'fakesalesx-fields.php';
require_once plugin_dir_path(__FILE__) . 'fakesalesx-show.php';
