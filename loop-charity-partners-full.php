<?php
/*
 * Loop for Post Listing Template
 *
 */
?>

<div id="title-wrap" class="dblue">
	<div id="title" class="container">
		<div class="sixteen columns relative">
			<h1>Charity Partners</h1>
		</div>
	</div>
</div>

<div id="tabs-wrap">
	<div id="tabs" class="container">
		<div class="sixteen columns">
			<div class="tabs">
				<ul>
					<li><a href="<?php echo home_url(); ?>/charities/our-charity-partners/">Charity Partners by Name</a></li>
					<li><a href="javascript:void(0)" class="active">Charity Partner Descriptions</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="content-wrap">
	<div id="content" class="container">
		<div class="sixteen columns">
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<div class="categories-wrap-full">
				<ul>
					<?php
						$categories = get_terms('charity_partners_category', array('hide_empty' => true));
						foreach($categories as $category):
							echo '<li><a class="active" id="' . $category->slug . '">' . $category->name.'</a></li>';
						endforeach;
					?>
				</ul>
			</div>
		</div>
		<div class="sixteen columns">
			<div id="allcategories" class="<?php
				foreach($categories as $category):
					echo $category->slug . ' ';
				endforeach; ?>">
			</div>
			<div class="charities-wrap full-list">
				<div class="charities-list">
					<?php
						$postargs = array(
							'post_type' => 'charity-partners',
							'posts_per_page' => 999,
							'orderby' => 'title',
							'order' => 'ASC',
						);
						$loop = new WP_Query($postargs);
					?>
					<?php while ($loop->have_posts()): $loop->the_post(); ?>
						<?php $terms = get_the_terms(get_the_ID(), 'charity_partners_category'); ?>
						<div class="parent <?php foreach($terms as $term): echo $term->slug . ' '; endforeach; ?>">
							<div class="charity-partner cf">
								<div class="logo">
									<?php if(get_field('charity_partner_logo') != ""): ?>
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>">
											<img src="<?php the_field('charity_partner_logo'); ?>" />
										</a>
									<?php endif; ?>
								</div>
								<div class="description">
									<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
									<?php the_content(); ?>
									<?php if(get_field('charity_partner_link') != ""): ?>
										<a href="<?php the_field('charity_partner_link'); ?>" class="button" target="_blank" style="margin-top:15px;">Donate</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
