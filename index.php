<?php

/***
Plugin Name: ShortcodeSlider
Plugin URI:
Description: A Shortcode Slider plugin
Version: 1.0
Author: Saiful
Author URI: 
License: GPLv2 or later
Text Domain: shortcodeslider
Domain Path: /languages/
 */

require_once(plugin_dir_path(__FILE__) . "inc/shortcode.php");

class ShortcodeSlider
{

  function __construct()
  {
    add_action('plugins_loaded', array($this, 'load_textdomain'));
    add_action('wp_enqueue_scripts', array($this, 'load_front_assets'));
  }

  function load_textdomain()
  {
    load_plugin_textdomain('shortcodeslider', false, plugin_dir_url(__FILE__) . "/languages");
  }

  function load_front_assets()
  {
    wp_enqueue_style('tiny-slider-css', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css', null, '1.0');
    wp_enqueue_script('tiny-slider-js', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', null, '1.0', true);
    wp_enqueue_script('tiny-slider-main', plugin_dir_url(__FILE__) . "assets/js/main.js", array('jquery'), '1.0', true);
  }
}
new ShortcodeSlider();
