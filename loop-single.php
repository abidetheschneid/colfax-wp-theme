<?php
/*
 * The loop for a single post.
 */
?>


<?php while (have_posts()) : the_post(); ?>

	<div id="title-wrap" class="dblue">
		<div id="title" class="container">
			<div class="sixteen columns relative">
				<?php $category = get_the_category(); ?>
				<?php $firstCategory = $category[0]->cat_name; ?>
				<h1><?php echo $firstCategory; ?></h1>
			</div>
		</div>
	</div>

	<div id="content-wrap">
		<div id="content" class="container">
			<div class="eleven columns">
				<h2 class="headline"><?php the_title(); ?></h2>
				<?php if (get_field('post_photo') != ""): ?>
					<div class="header-img">
						<img src="<?= get_field('post_photo'); ?>" />
					</div>
				<?php endif; ?>
				<?php if (get_field('post_video') != ""): ?>
					<div class="video">
						<?= get_field('post_video'); ?>
					</div>
				<?php endif; ?>
				<?php if (get_field('post_logo') != ""): ?>
					<div class="logo-wrap">
						<img src="<?= get_field('post_logo'); ?>" />
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
				<?php if (get_field('post_link') != ""): ?>
					<a href="<?= get_field('post_link'); ?>" class="button" target="_blank">Read the Article</a>
				<?php endif; ?>
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