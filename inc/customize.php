<?php

/**
 *
 * Add custom options for navbar
 * @package runcolfax
 *
 **/
function colfax_customize_register($wp_customize)
{
    $wp_customize->add_setting('navbar_color', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'navbar_color_picker',
        array(
            'label'      => __('Navigation Bar Color', 'colfax'),
            'section'    => 'colors',
            'settings'   => 'navbar_color',
            'priority'   => 1
        )
    ));
}

add_action('customize_register', 'colfax_customize_register');


/**
 *
 * Output css for navbar
 * @package runcolfax
 *
 **/
function colfax_customize_css()
{
    echo '<style type="text/css">';
    echo '   #nav-wrap, #mobile-header-wrap {';
    echo '       background:' . get_theme_mod('navbar_color', '#000000') . ';';
    echo '   }';
    echo '</style>';
}
add_action('wp_head', 'colfax_customize_css');
