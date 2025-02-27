<?php
/*
 * The loop for a single training tip post.
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div id="title-wrap" class="dblue">
		<div id="title" class="container">
			<div class="sixteen columns relative">
				<h1>Training Tips</h1>
			</div>
		</div>
	</div>

	<div id="content-wrap">
		<div id="content" class="container">
			<div class="eleven columns">
				<h2 class="headline"><?php the_title(); ?></h2>
				<?php if (get_field('tip_photo') != ""): ?>
					<div class="header-img">
						<img src="<?= get_field('tip_photo'); ?>" />
					</div>
				<?php endif; ?>
				<?php if (get_field('tip_video') != ""): ?>
					<div class="video">
						<?= get_field('tip_video'); ?>
					</div>
				<?php endif; ?>
				<?php if (get_field('tip_logo') != ""): ?>
					<div class="logo-wrap">
						<img src="<?= get_field('tip_logo'); ?>" />
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
			</div>
			<div class="five columns">
				<div class="sidebar-wrap">
					<div class="sidebar">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar')) : ?><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; ?>