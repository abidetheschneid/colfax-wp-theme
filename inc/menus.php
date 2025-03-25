<?php

/**
 *
 * Register Menus
 * @package runcolfax
 *
 **/
function colfax_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'colfax'),
        'mobile' => __('Mobile Navigation', 'colfax'),
    ));
}
