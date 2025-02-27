<?php
/*
 * Loop for Internal Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div id="title-wrap"<?php if(get_field('page_header_color') != ""): ?> class="<?php the_field('page_header_color'); ?>"<?php endif; ?>>
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

		<?php if(get_field('registration')): ?>
			<div class="registration-wrap">
				<?php while(has_sub_field('registration')): ?>
					<div class="one-third column">
						<div class="registration">
							<?php if(get_sub_field('registration_photo')): ?>
								<img src="<?php the_sub_field('registration_photo'); ?>" />
							<?php endif; ?>
							<div class="content">
								<?php if(get_sub_field('registration_title')): ?>
									<h2><?php the_sub_field('registration_title'); ?></h2>
								<?php endif; ?>
								<?php if(get_sub_field('registration_content')): ?>
									<?php the_sub_field('registration_content'); ?>
								<?php endif; ?>
								<?php if(get_sub_field('registration_link')): ?>
									<a href="<?php the_sub_field('registration_link'); ?>" class="button">
										<?php if(get_sub_field('registration_link_text')): ?>
											<?php the_sub_field('registration_link_text'); ?>
										<?php else: ?>
											Register
										<?php endif; ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</div>

<?php endwhile; ?>
