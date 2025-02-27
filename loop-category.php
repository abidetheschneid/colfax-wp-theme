<?php
/*
 * Loop for Post Listing Template
 *
 */
?>

<?php
$category = get_the_category();
$categoryID = $category[0]->cat_ID;
if ($categoryID == '138') {
	$titlebg = get_field('page_header_color', 68);
} elseif ($categoryID == '139') {
	$titlebg = get_field('page_header_color', 70);
}
?>

<div id="title-wrap" <?php if ($titlebg != ''): ?> class="<?php echo $titlebg; ?>" <?php else: ?>class="dblue" <?php endif; ?>>
	<div id="title" class="container">
		<div class="sixteen columns relative">
			<?php if ($categoryID == '150') { ?>
				<h1>A Year in Running</h1>
			<?php } else { ?>
				<h1><?php single_cat_title(); ?></h1>
			<?php } ?>
		</div>
	</div>
</div>

<div id="content-wrap">
	<div id="content" class="container">
		<div class="eleven columns">
			<?php if (have_posts()) : ?>
				<div class="news-wrap">
					<?php while (have_posts()) : the_post(); ?>
						<div class="news cf">
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php if (get_field('post_logo') != ""): ?>
								<div class="logo-wrap">
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>">
										<img src="<?= get_field('post_logo'); ?>" />
									</a>
								</div>
							<?php endif; ?>
							<?php echo the_excerpt(50); ?>
							<p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>">Read More &gt;</a></p>
						</div>
					<?php endwhile; ?>
				</div>
			<?php else : ?>
				<h2>No Articles Found</h2>
				<p>Sorry, but we can't seem to find the articles you're looking for.</p>
			<?php endif; ?>
			<div class="pagination">
				<div class="nav-previous alignleft"><?php next_posts_link('< Older Posts'); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link('Newer Posts >'); ?></div>
			</div>
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