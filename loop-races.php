<?php
/*
 * Loop for Internal Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div id="title-wrap">
	<div id="title" class="container">
		<div class="sixteen columns relative">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div id="content-wrap">
	<div id="content" class="container">
	
		<div class="sixteen columns">
			<?php the_content(); ?>
		</div>
	
		<?php if(get_field('race_list')): ?>
			<div class="race-list-wrap">
				<?php while(has_sub_field('race_list')): ?>
					<div class="one-third column">
						<div class="race-list<?php if(get_sub_field('race_list_color') != ""): ?> <?php the_sub_field('race_list_color'); ?><?php endif; ?>">
							<a href="<?php the_sub_field('race_list_link'); ?>">
								<?php if(get_sub_field('race_list_photo')): ?>
									<img src="<?php the_sub_field('race_list_photo'); ?>" />
								<?php endif; ?>
								<div class="color-wrap">
									<h3>
										<?php if(get_sub_field('race_list_name')): ?>
											<?php the_sub_field('race_list_name'); ?>
										<?php endif; ?>
									</h3>
								</div>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		
	</div>
</div>

<?php endwhile; ?>