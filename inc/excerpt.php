<?php

/**
 *
 * Change the default exceprt length
 * @package runcolfax
 *
 **/
function custom_excerpt_length($length)
{
    return 32;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


/**
 *
 * Change the default excerpt read more
 * @package runcolfax
 *
 **/
function custom_excerpt_more($more)
{
    $more = '...';
    return $more;
}
add_filter('excerpt_more', 'custom_excerpt_more');
