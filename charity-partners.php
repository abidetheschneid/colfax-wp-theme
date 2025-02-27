<?php
/*
 * Template Name: Charity Partners
 * Charity Partners Listing Template
 */
?>

<?php get_header(); ?>


<?php 

global $post;

if (is_page('Full Charity Partners Listing')) {
	get_template_part('loop', 'charity-partners-full');
} else {
	get_template_part('loop', 'charity-partners');
}

?>

<?php get_footer(); ?>