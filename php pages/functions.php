<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package main-1luxe WordPress theme
 */

// Подключение стилей и скриптов
function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_template_directory_uri().'/assets/css/styles.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');