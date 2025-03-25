<?php

/**
 *
 * Add charity partners post type
 * @package runcolfax
 *
 **/
function charity_partners_init()
{
    $args = array(
        'label' => 'Charity Partners',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'charity-partners'),
        'query_var' => true,
        'menu_icon' => 'dashicons-groups',
        'taxonomies' => array('charity_partners_category'),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'revisions',
            'thumbnail',
            'page-attributes',
        )
    );
    register_post_type('charity-partners', $args);
}
add_action('init', 'charity_partners_init');


/**
 *
 * Add taxonomy for charity partners post type
 * @package runcolfax
 *
 **/
function charity_partners_category_init()
{
    $labels = array(
        'name'              => _x('Charity Partner Categories', 'taxonomy general name'),
        'singular_name'     => _x('Charity Partner Category', 'taxonomy singular name'),
        'search_items'      => __('Search Charity Partner Categories'),
        'all_items'         => __('All Charity Partner Categories'),
        'parent_item'       => __('Parent Charity Partner Category'),
        'parent_item_colon' => __('Parent Charity Partner Category:'),
        'edit_item'         => __('Edit Charity Partner Category'),
        'update_item'       => __('Update Charity Partner Category'),
        'add_new_item'      => __('Add New Charity Partner Category'),
        'new_item_name'     => __('New Charity Partner Category'),
        'menu_name'         => __('Charity Partner Categories'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
    );
    register_taxonomy('charity_partners_category', 'charity-partners', $args);
}
add_action('init', 'charity_partners_category_init', 0);
