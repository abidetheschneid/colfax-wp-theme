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
			<div class="<?php if (get_field('pricing')): ?>sixteen<?php else: ?>eleven<?php endif; ?> columns">
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
				<?php if (get_field('pricing')): ?>
					<div class="pricing-wrap cf">
						<?php while (has_sub_field('pricing')): ?>
							<div class="price <?php the_sub_field('pricing_color'); ?>">
								<div class="price-pad">
									<?php if (get_sub_field('pricing_title')): ?>
										<div class="heading">
											<h3><?php the_sub_field('pricing_title'); ?></h3>
										</div>
									<?php endif; ?>
									<?php if (get_sub_field('pricing_content')): ?>
										<div class="content">
											<?php the_sub_field('pricing_content'); ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php if (get_field('pricing')): ?>
					<div class="price-sidebar">
						<div class="sidebar">
							<?php global $post;
							if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Sidebar')) : endif;
							?>
						</div>
					</div>
				<?php endif; ?>
				<?php the_content(); ?>
				<?php if (is_page('Stay Informed')) { ?>
					<?php get_sidebar('signup-form'); ?>
				<?php } ?>
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
				<?php if (!post_password_required()): ?>
					<?php if (get_field('page_image_downloads')): ?>
						<h2>Logos, Marketing Flyers & Photos</h2>
						<div class="image-downloads-wrap">
							<?php while (has_sub_field('page_image_downloads')): ?>
								<?php if (get_sub_field('page_image_downloads_image')): ?>
									<div class="image-download">
										<div class="pad">
											<a href="<?php the_sub_field('page_image_downloads_image'); ?>" target="_blank">
												<img src="<?php the_sub_field('page_image_downloads_image'); ?>" />
											</a>
										</div>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				<?php if (get_field('faq')): ?>
					<div class="faq-wrap">
						<?php while (has_sub_field('faq')): ?>
							<?php if (get_sub_field('faq_section_title')): ?>
								<h2><?php the_sub_field('faq_section_title'); ?></h2>
							<?php endif; ?>
							<?php if (get_sub_field('faq_section')): ?>
								<?php $i = 1; ?>
								<?php while (has_sub_field('faq_section')): ?>
									<?php if (get_sub_field('faq_section_question')): ?>
										<h4 class="accordion-toggle">
											<?php echo 'Q' . $i . '. ';
											$i++; ?><?php the_sub_field('faq_section_question'); ?>
										</h4>
									<?php endif; ?>
									<?php if (get_sub_field('faq_section_answer')): ?>
										<div class="accordion-content"><?php the_sub_field('faq_section_answer'); ?></div>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="five columns" <?php if (get_field('pricing')): ?> style="display:none" <?php endif; ?>>
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

<?php endwhile; ?>