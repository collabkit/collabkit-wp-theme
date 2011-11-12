<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : ?>
		<div id="search-results">
			<h2>Search Results</h2>

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

					<div class="entry">

						<?php the_excerpt(); ?>

					</div>

				</article>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
		</div>
	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_footer(); ?>
