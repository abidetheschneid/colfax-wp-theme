<?php
/*
 * Loop for Internal Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div id="title-wrap" <?php if (get_field('race_color') != ""): ?> class="<?= get_field('race_color'); ?>" <?php endif; ?>>
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
				<?php if (get_field('page_youtube') != ""): ?>
					<div class="video">
						<?= get_field('page_youtube'); ?>
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
				<?php if (get_field('page_snippets')): ?>
					<div class="snippets-wrap">
						<?php while (has_sub_field('page_snippets')): ?>
							<div class="snippet cf">
								<?php if (get_sub_field('page_snippet_img')): ?>
									<div class="snippet-img">
										<div class="pad">
											<img src="<?php the_sub_field('page_snippet_img'); ?>" />
										</div>
									</div>
								<?php endif; ?>
								<div class="snippet-content<?php if (get_sub_field('page_snippet_img') == ""): ?> full-width<?php endif; ?>">
									<?php if (get_sub_field('page_snippet_title')): ?>
										<h3><?php the_sub_field('page_snippet_title'); ?></h3>
									<?php endif; ?>
									<?php if (get_sub_field('page_snippet_content')): ?>
										<?php the_sub_field('page_snippet_content'); ?>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="five columns">
				<div class="sidebar-wrap">
					<div class="sidebar race<?php if (get_field('race_color') != ""): ?> <?= get_field('race_color'); ?><?php endif; ?>">
						<div class="color-wrap">
							<h1<?php if (get_field('race_sidebar_header') != ""): ?> style="background-image:url(<?= get_field('race_sidebar_header'); ?>);" <?php endif; ?>>
								<?php if (get_field('race_sidebar_title') != ""): ?>
									<?= get_field('race_sidebar_title'); ?>
								<?php endif; ?>
								</h1>
						</div>
						<?php if (get_field('race_sidebar') != ""): ?>
							<?= get_field('race_sidebar'); ?>
						<?php endif; ?>
					</div>
				</div>
				<?php if (get_field('race_sidebar_images')): ?>
					<div class="sidebar-wrap">
						<?php while (has_sub_field('race_sidebar_images')): ?>
							<div class="sidebar-image sidebar-race-image">
								<?php if (get_sub_field('race_sidebar_images_link')): ?>
									<a href="<?php the_sub_field('race_sidebar_images_link'); ?>">
									<?php elseif (get_sub_field('race_sidebar_images_link_external')): ?>
										<a href="<?php the_sub_field('race_sidebar_images_link_external'); ?>" class="standard" target="_blank">
										<?php endif; ?>
										<?php if (get_sub_field('race_sidebar_images_image')): ?>
											<img src="<?php the_sub_field('race_sidebar_images_image'); ?>" />
										<?php endif; ?>
										<?php if (get_sub_field('race_sidebar_images_text')): ?>
											<p><?php the_sub_field('race_sidebar_images_text'); ?></p>
										<?php endif; ?>
										<?php if (get_sub_field('race_sidebar_images_link')): ?>
										</a>
									<?php elseif (get_sub_field('race_sidebar_images_link_external')): ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php if (get_field('race_sidebar_bottom_content')): ?>
					<div class="sidebar-wrap">
						<div class="sidebar-content">
							<?= get_field('race_sidebar_bottom_content'); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php endwhile; ?>