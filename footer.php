<?php
/*
 * Footer Include Template
 */
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mmenu.min.all.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.superfish.js"></script>

<?php if (is_front_page() || is_page('Test')) { ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.royalslider.min.js"></script>
<?php } ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easyListSplitter.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/runcolfax.js"></script>


</body>
</html>
