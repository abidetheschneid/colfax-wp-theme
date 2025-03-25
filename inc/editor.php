<?php

/**
 *
 * Add style buttons to tinymce editor
 * @package runcolfax
 *
 **/
function my_mce_buttons_2($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');


/**
 *
 * Customize style options for tinymce editor
 * @package runcolfax
 *
 **/
function my_mce_before_init_insert_formats($init_array)
{
    $style_formats = array(
        array(
            'title' => 'Button',
            'selector' => 'a',
            'classes' => 'button'
        ),
        array(
            'title' => 'Sidebar Feature Link',
            'selector' => 'a',
            'classes' => 'highlight'
        ),
        array(
            'title' => 'Disclaimer',
            'selector' => 'p',
            'classes' => 'disclaimer'
        ),
        array(
            'title' => 'Full-Width Image',
            'selector' => 'img',
            'classes' => 'full-width'
        )
    );
    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;
}
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');


/**
 *
 * Add support for editor style
 * @package runcolfax
 *
 **/
add_editor_style('editor-style.css');
