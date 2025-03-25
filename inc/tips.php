<?php

/**
 *
 * Add training tips post type
 * @package runcolfax
 *
 **/
function colfax_training_tips_init()
{
    $args = array(
        'label' => 'Training Tips',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'training-tips'),
        'query_var' => true,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'revisions',
            'thumbnail',
            'page-attributes',
        )
    );
    register_post_type('training-tips', $args);
}
add_action('init', 'colfax_training_tips_init');


/**
 *
 * Add kaiser tips post type
 * @package runcolfax
 *
 **/
function colfax_kaiser_tips_init()
{
    $args = array(
        'label' => 'Kaiser Tips',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'kp-tips'),
        'query_var' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'revisions',
            'thumbnail',
            'page-attributes',
        )
    );
    register_post_type('kp-tips', $args);
}
add_action('init', 'colfax_kaiser_tips_init');
