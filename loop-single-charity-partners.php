<?php
/*
 * The loop for a single charity partner.
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div id="title-wrap" class="dblue">
	<div id="title" class="container">
		<div class="sixteen columns relative">
			<h1>Charity Partner</h1>
		</div>
	</div>
</div>

<div id="content-wrap">
	<div id="content" class="container">
		<div class="sixteen columns">
			<h2 class="headline"><?php the_title(); ?></h2>
			<?php if(get_field('charity_partner_logo') != ""): ?>
				<div class="charity-logo-wrap">
					<img src="<?php the_field('charity_partner_logo'); ?>" />
				</div>
			<?php endif; ?>
			<?php the_content(); ?>
			<?php if(get_field('charity_partner_link') != ""): ?>
				<a href="<?php the_field('charity_partner_link'); ?>" class="button" target="_blank" style="margin-top:15px;">Donate</a>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php endwhile; ?>
