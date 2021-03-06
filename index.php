<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container mt-3 mt-sm-4 mt-md-5 mb-5">
	<article class="<?php echo $post->post_status; ?> post-list-item">
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="meta">
			<span class="date"><?php the_time( 'F j, Y' ); ?></span>
			<span class="author">by <?php the_author_posts_link(); ?></span>
		</div>
		<div class="summary">
			<?php the_excerpt(); ?>
		</div>
	</article>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
