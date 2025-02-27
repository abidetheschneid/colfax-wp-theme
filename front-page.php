<?php
/*
 * Template Name: Home
 * Homepage Template
 */
?>

<?php get_header(); ?>

<div id="slider-wrap">
	<div class="sliderContainer fullWidth clearfix">
		<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
			<?php if(get_field('home_slider')): ?>
				<?php while(has_sub_field('home_slider')): ?>
					<div class="rsContent">
                        <?php if(get_sub_field('home_slider_link') != ""): ?>
                            <a href="<?php the_sub_field('home_slider_link'); ?>">
                        <?php endif; ?>
                        <!-- conditonal for text position -->
						<div class="infoBlock rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
							<div class="photo-box <?php if(get_sub_field('home_slider_text_side') == "right"): ?>left<?php else: ?>right<?php endif; ?>"
                                style="background-image: url('<?php the_sub_field('home_slider_photo'); ?>');">
							</div>
							<div class="text-box <?php the_sub_field('home_slider_background'); ?> <?php the_sub_field('home_slider_text_side'); ?>">
                                <img src="<?php the_sub_field('home_slider_text_image'); ?>" />
							</div>
						</div>
                        <?php if(get_sub_field('home_slider_link') != ""): ?>
                            </a>
                        <?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div id="counter-wrap">
	<div id="counter" class="container">
		<div class="sixteen columns">
			<div class="home-counter">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Counter')) : ?><?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div id="content-wrap">
	<div id="content" class="container">
		<div class="row">
			<div class="two-thirds column">
				<div class="home-hero">
					<?php if(get_field('home_primary_feature_label') != ""): ?>
						<h1><?php the_field('home_primary_feature_label'); ?></h1>
					<?php endif; ?>
					<?php if(get_field('home_primary_feature_photo') != ""): ?>
						<?php if(get_field('home_primary_feature_link') != ""): ?>
							<a href="<?php the_field('home_primary_feature_link'); ?>" class="image-link">
						<?php endif; ?>
						<img src="<?php the_field('home_primary_feature_photo'); ?>" />
						<?php if(get_field('home_primary_feature_link') != ""): ?>
							</a>
						<?php endif; ?>
					<?php endif; ?>
					<?php if(get_field('home_primary_feature_headline') != ""): ?>
						<h2><?php the_field('home_primary_feature_headline'); ?></h2>
					<?php endif; ?>
					<?php if(get_field('home_primary_feature_excerpt') != ""): ?>
						<?php the_field('home_primary_feature_excerpt'); ?>
					<?php endif; ?>
					<?php if(get_field('home_primary_feature_link') != ""): ?>
						<a href="<?php the_field('home_primary_feature_link'); ?>" class="more">
							<?php if(get_field('home_primary_feature_link_text') != ""): ?>
								<?php the_field('home_primary_feature_link_text'); ?>
							<?php endif; ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="one-third column">
				<div class="home-feature">
					<?php if(get_field('home_secondary_feature_label') != ""): ?>
						<h1><?php the_field('home_secondary_feature_label'); ?></h1>
					<?php endif; ?>
					<?php if(get_field('home_secondary_feature_select') == "video"): ?>
						<?php if(get_field('home_secondary_feature_video') != ""): ?>
							<div class="video">
								<?php the_field('home_secondary_feature_video'); ?>
							</div>
						<?php endif; ?>
					<?php else: ?>
						<?php if(get_field('home_secondary_feature_photo') != ""): ?>
							<?php if(get_field('home_secondary_feature_link') != ""): ?>
								<a href="<?php the_field('home_secondary_feature_link'); ?>" class="image-link">
							<?php endif; ?>
							<img src="<?php the_field('home_secondary_feature_photo'); ?>" />
							<?php if(get_field('home_secondary_feature_link') != ""): ?>
								</a>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
					<?php if(get_field('home_secondary_feature_headline') != ""): ?>
						<h3><?php the_field('home_secondary_feature_headline'); ?></h3>
					<?php endif; ?>
					<?php if(get_field('home_secondary_feature_excerpt') != ""): ?>
						<?php the_field('home_secondary_feature_excerpt'); ?>
					<?php endif; ?>
					<?php if(get_field('home_secondary_feature_link') != ""): ?>
						<a href="<?php the_field('home_secondary_feature_link'); ?>" class="more">
							<?php if(get_field('home_secondary_feature_link_text') != ""): ?>
								<?php the_field('home_secondary_feature_link_text'); ?>
							<?php endif; ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="sixteen columns">
			<h1>Denver Colfax Marathon Weekend Details</h1>
		</div>

		<?php if(get_field('home_features')): ?>
			<div class="features-wrap">
				<div class="row">
					<?php $i = 1; while(has_sub_field('home_features')): ?>
						<div class="one-third column">
							<div class="home-feature">
								<?php if(get_sub_field('home_features_select') == "video"): ?>
									<?php if(get_sub_field('home_features_select') != ""): ?>
										<div class="video">
											<?php the_sub_field('home_features_video'); ?>
										</div>
									<?php endif; ?>
								<?php else: ?>
									<?php if(get_sub_field('home_features_photo') != ""): ?>
										<?php if(get_sub_field('home_features_link') != ""): ?>
											<a href="<?php the_sub_field('home_features_link'); ?>" class="image-link">
										<?php endif; ?>
										<img src="<?php the_sub_field('home_features_photo'); ?>" />
										<?php if(get_sub_field('home_features_link') != ""): ?>
											</a>
										<?php endif; ?>
									<?php endif; ?>
								<?php endif; ?>
								<div class="feature-block<?php if(get_sub_field('home_features_background') !=""): ?> <?php the_sub_field('home_features_background'); ?>"<?php endif; ?>>
									<?php if(get_sub_field('home_features_headline') != ""): ?>
										<h3><?php the_sub_field('home_features_headline'); ?></h3>
									<?php endif; ?>
								</div>
								<?php if(get_sub_field('home_features_excerpt') != ""): ?>
									<?php the_sub_field('home_features_excerpt'); ?>
								<?php endif; ?>
								<?php if(get_sub_field('home_features_link') != ""): ?>
									<a href="<?php the_sub_field('home_features_link'); ?>" class="more">
										<?php if(get_sub_field('home_features_link_text') != ""): ?>
											<?php the_sub_field('home_features_link_text'); ?>
										<?php endif; ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
						<?php if($i == 3): ?>
							<?php echo "</div><div class=\"row\">" ?>
						<?php endif; ?>
					<?php $i++; endwhile; ?>
				</div>
			</div>
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>
