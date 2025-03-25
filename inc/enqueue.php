<?php

/**
 *
 * Enqueue Styles & Javascript
 * @package runcolfax
 *
 **/
function colfax_load_scripts()
{
    // Conditional version number to avoid cache
    $versionNum = in_array($_SERVER['SERVER_NAME'], ['local.runcolfax.org']) ? date('U') : COLFAX_THEME_VERSION;

    // Javascript
    wp_enqueue_script('jquery');
    wp_enqueue_script('mmenu', get_template_directory_uri() . '/js/jquery.mmenu.min.all.js', array('jquery'), '5.5.3', true);
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('easyListSplitter', get_template_directory_uri() . '/js/jquery.easyListSplitter.js', array('jquery'), '1.0.2', true);
    wp_enqueue_script('royalslider', get_template_directory_uri() . '/js/jquery.royalslider.min.js', array('jquery'), '1.0.2', true);
    wp_enqueue_script('colfax', get_template_directory_uri() . '/js/runcolfax.js', array('jquery'), $versionNum, true);

    // Styles
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/css/reset.css', array(), $versionNum, 'all');
    wp_enqueue_style('skeleton', get_stylesheet_directory_uri() . '/css/skeleton.css', array(), $versionNum, 'all');
    wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/css/fonts.css', array(), $versionNum, 'all');
    wp_enqueue_style('dropdowns', get_stylesheet_directory_uri() . '/css/dropdowns.css', array(), $versionNum, 'all');
    wp_enqueue_style('jquery-mmenu', get_stylesheet_directory_uri() . '/css/jquery.mmenu.all.css', array(), '1.0.0', 'all');
    wp_enqueue_style('jquery-royalslider', get_stylesheet_directory_uri() . '/css/jquery.royalslider.css', array(), '1.0.5', 'all');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), $versionNum, 'all');
}
