<?php
/*
 * Loop for Search Results Template
 *
 */
?>

<div id="title-wrap" class="dblue">
	<div id="title" class="container">
		<div class="sixteen columns relative">
			<h1>Search Results</h1>
		</div>
	</div>
</div>

<div id="content-wrap">
	<div id="content" class="container">
		<div class="sixteen columns">
			<h3><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?><br />&nbsp;</h3>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="news-wrap">
						<div class="news cf">
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php echo the_excerpt(50); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<h2>No Results</h2>
				<p>Sorry, but we can't find a match for your search.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
