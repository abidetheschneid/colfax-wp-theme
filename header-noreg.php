<?php

/**
 *
 * Sitewide Header Template w/ No Registration
 * @package runcolfax
 *
 **/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>

<head>
	<script type="text/javascript">
		(function(a, b, c, d) {
			a = '//tags.tiqcdn.com/utag/silverline/colfax/prod/utag.js';
			b = document;
			c = 'script';
			d = b.createElement(c);
			d.src = a;
			d.type = 'text/java' + c;
			d.async = true;
			a = b.getElementsByTagName(c)[0];
			a.parentNode.insertBefore(d, a);
		})();
	</script>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico?v=2" />

	<title><?php wp_title('|', true, 'right'); ?></title>

	<?php wp_head(); ?>

	<script type="text/javascript">
		var utag_data = {
			e_name: "colfax"
		}
	</script>
	<script type="text/javascript">
		(function(a, b, c, d) {
			a = '//tags.tiqcdn.com/utag/silverline/colfax/prod/utag.js';
			b = document;
			c = 'script';
			d = b.createElement(c);
			d.src = a;
			d.type = 'text/java' + c;
			d.async = true;
			a = b.getElementsByTagName(c)[0];
			a.parentNode.insertBefore(d, a);
		})();
	</script>

	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-26898506-1', 'auto');
		ga('send', 'pageview');
	</script>

</head>

<body <?php if (is_front_page() || is_page('Test')) { ?>class="home" <?php } ?>>

	<div id="mobile-search-wrap">
		<div class="container">
			<div class="sixteen columns">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<input type="text" size="put_a_size_here" name="s" id="s" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
					<input type="submit" id="searchsubmit" value="Go" class="btn" />
				</form>
			</div>
		</div>
	</div>

	<div id="mobile-header-wrap">
		<div class="container">
			<div class="sixteen columns">
				<a href="#mobilenav" class="mobile-nav-button">Menu</a>
				<a href="javascript:void(0)" class="mobile-search-button">Search</a>
			</div>
		</div>
	</div>

	<div id="header-wrap">
		<div id="header" class="container">
			<div class="five columns">
				<a href="<?php echo home_url(); ?>" id="logo">
					<img src="https://www.runcolfax.org/wp-content/uploads/ColfaxMarathonLogo_Web-1.jpg" width=288 height=125 alt="Denver Colfax Marathon">
				</a>
			</div>
			<div class="eleven columns">
				<div class="top-links">
					<div class="social">
						<a href="https://www.facebook.com/runcolfaxdenver" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.png" />
						</a>
						<a href="https://twitter.com/runcolfax" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.png" />
						</a>
						<a href="https://plus.google.com/102042844368479588096/about" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-google.png" />
						</a>
						<a href="https://www.pinterest.com/runcolfaxdenver/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-pinterest.png" />
						</a>
						<a href="https://www.youtube.com/user/runcolfax" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-youtube.png" />
						</a>
					</div>
				</div>
				<div class="top-search cf">
					<div class="searchbar">
						<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
							<div class="search-form">
								<input type="text" name="s" id="s" placeholder="Search" />
								<input type="submit" id="searchsubmit" value="Go" class="btn test" />
							</div>
						</form>
					</div>
					<div class="signup">
						<a href="<?php echo home_url(); ?>/contact-us/stay-informed/">Sign Up for Email Newsletters</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="nav-wrap">
		<div id="nav" class="container">
			<div class="three columns">
				<div class="header-date">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Date')) : ?><?php endif; ?>
				</div>
			</div>
			<div class="thirteen columns">
				<div class="primary-nav">
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav')); ?>
				</div>
			</div>
		</div>
	</div>