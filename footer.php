<?php

/**
 *
 * Sitewide Footer Template
 * @package runcolfax
 *
 **/

?>

<div id="footer-wrap">
	<div id="footer" class="container">
		<div class="sixteen columns">
			<h3>Our Sponsors</h3>
		</div>
		<div class="one-third column">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1')) : ?><?php endif; ?>
		</div>
		<div class="one-third column">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2')) : ?><?php endif; ?>
		</div>
		<div class="one-third column">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3')) : ?><?php endif; ?>
		</div>
	</div>
</div>

<div id="mobilenav">
	<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => '')); ?>
</div>

<?php wp_footer(); ?>

</body>

</html>