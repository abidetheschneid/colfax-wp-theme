<?php
/*
 * Loop for Promotion Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div id="title-wrap" class="dblue">
	<div id="title" class="container">
		<div class="sixteen columns relative">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div id="content-wrap">
	<div id="content" class="container">

		<div class="twelve columns offset-by-two">
			<div class="countdown">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Promo Header')) : ?><?php endif; ?>
			</div>

			<?php the_content(); ?>

			<?php if(get_field('promo_link')): ?>
				<a href="<?php the_field('promo_link'); ?>">
			<?php endif; ?>
			<?php if(get_field('promo_image')): ?>
				<img src="<?php the_field('promo_image'); ?>" class="full" />
			<?php endif; ?>
			<?php if(get_field('promo_link')): ?>
				</a>
			<?php endif; ?>

		</div>

	</div>
</div>

<?php endwhile; ?>
