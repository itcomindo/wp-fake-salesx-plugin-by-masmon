<?php
defined('ABSPATH') || exit;

/**
 *=========================
 *Plugin Name: MM WP Fake Sales X
 *Plugin URI: https://budiharyono.com/
 *Description: Fake Sales X is a plugin to display fake sales notifications on your website.
 *Version: 2.0.0
 *Author: Budi Haryono
 *Author URI: https://budiharyono.com/
 *=========================
 */


//define plugin directory
define('FAKESALESX_DIR', plugin_dir_path(__FILE__));


function crb_load()
{
    require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}
// add_action('after_setup_theme', 'crb_load');


function fakesalesx_plugin_loaded()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        crb_load();
    }
}
add_action('plugins_loaded', 'fakesalesx_plugin_loaded');



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
