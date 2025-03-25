<?php

/**
 *
 * Register Widget Areas
 * @package runcolfax
 *
 **/
function colfax_register_sidebars()
{
    register_sidebar(array(
        'name' => __('Header Date', 'colfax'),
        'id' => 'header-date',
        'description' => __('The date block below the logo.', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Page Sidebar', 'colfax'),
        'id' => 'page-sidebar',
        'description' => __('The default sidebar that appears on pages.', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Volunteer Sidebar', 'colfax'),
        'id' => 'volunteer-sidebar',
        'description' => __('The sidebar that appears on volunteer pages.', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Register Link', 'colfax'),
        'id' => 'register-link',
        'description' => __('The registration link in the header.', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Promo Header', 'colfax'),
        'id' => 'promo-header',
        'description' => __('The header space above the promo image.', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Homepage Counter', 'colfax'),
        'id' => 'home-counter',
        'description' => __('The space below the homepage slider.', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Email Signup Form', 'colfax'),
        'id' => 'signup-form',
        'description' => __('The newsletter signup form.', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Column 1', 'colfax'),
        'id' => 'footer-1',
        'description' => __('', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Footer Column 2', 'colfax'),
        'id' => 'footer-2',
        'description' => __('', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => __('Footer Column 3', 'colfax'),
        'id' => 'footer-3',
        'description' => __('', 'colfax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
