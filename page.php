<?php
/*
 * Internal Page Template
 * 
 */
?>

<?php get_header(); ?>

<?php 

global $post;

if (is_page('Register')) {
	get_template_part('loop', 'register');
} elseif (is_page('Races')) {
	get_template_part('loop', 'races');
} else {
	get_template_part('loop', 'page');
}

?>

<?php get_footer(); ?>