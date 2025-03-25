<?php

/**
 *
 * Theme Version Number
 * @package runcolfax
 *
 **/
define('COLFAX_THEME_VERSION', wp_get_theme()->get('Version'));


/**
 *
 * Theme Setup
 * @package runcolfax
 *
 **/
function colfax_theme_setup()
{
	add_action('init', 'colfax_register_menus');
	add_action('widgets_init', 'colfax_register_sidebars');
	add_action('wp_enqueue_scripts', 'colfax_load_scripts');
}
add_action('after_setup_theme', 'colfax_theme_setup');


/**
 *
 * Setup Theme-Supported Features
 * @package runcolfax
 *
 **/
function colfax_theme_supported_features()
{
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'colfax_theme_supported_features');


/**
 *
 * Include for Menus
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/menus.php');


/**
 *
 * Include for Widgets
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/widgets.php');


/**
 *
 * Include for CSS/JS Enqueues
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/enqueue.php');


/**
 *
 * Include for Excerpt
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/excerpt.php');


/**
 *
 * Include for Editor
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/editor.php');


/**
 *
 * Include for Charity Partners
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/charity-partners.php');


/**
 *
 * Include for Tips
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/tips.php');


/**
 *
 * Include for Theme Customizations
 * @package runcolfax
 *
 **/
include_once(get_stylesheet_directory() . '/inc/customize.php');
