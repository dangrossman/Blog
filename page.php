<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="post">
	<h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>