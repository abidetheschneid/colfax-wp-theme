<?php
/*
 * Loop for Internal Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div id="title-wrap" <?php if (get_field('page_header_color') != ""): ?> class="<?= get_field('page_header_color'); ?>" <?php endif; ?>>
		<div id="title" class="container">
			<div class="sixteen columns relative">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

	<div id="content-wrap">
		<div id="content" class="container">
			<div class="eleven columns">
				<?php if (get_field('page_header_img') != ""): ?>
					<div class="header-img">
						<img src="<?= get_field('page_header_img'); ?>" />
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php if (have_posts()) : ?>
				<?php $query = new WP_Query(array('post_type' => 'training-tips', 'posts_per_page' => 999, 'orderby' => 'menu_order', 'order' => 'ASC'));
				while ($query->have_posts()) : $query->the_post(); ?>
					<div class="training-tip-entry">
						<h2>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php if (get_field('tip_logo') != ""): ?>
							<div class="logo-wrap">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>">
									<img src="<?= get_field('tip_logo'); ?>" />
								</a>
							</div>
						<?php endif; ?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>">Read More ></a>
					</div>
				<?php endwhile; ?>
			<?php endif;
			wp_reset_postdata(); ?>
			</div>
			<div class="five columns">
				<div class="sidebar-wrap">
					<div class="sidebar">
						<?php global $post;
						if ($post->post_parent == 54 || $post->ID == 64 || $post->ID == 52) {
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Volunteer Sidebar')) : endif;
						} else {
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar')) : endif;
						}
						?>
					</div>
				</div>
				<?php if (get_field('page_sidebar_images')): ?>
					<div class="sidebar-wrap">
						<?php while (has_sub_field('page_sidebar_images')): ?>
							<div class="sidebar-image">
								<?php if (get_sub_field('page_sidebar_link')): ?>
									<a href="<?php the_sub_field('page_sidebar_link'); ?>" target="_blank" class="standard">
									<?php endif; ?>
									<?php if (get_sub_field('page_sidebar_img')): ?>
										<img src="<?php the_sub_field('page_sidebar_img'); ?>" />
									<?php endif; ?>
									<?php if (get_sub_field('page_sidebar_link')): ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>