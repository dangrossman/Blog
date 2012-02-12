<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php the_date('F j, Y', '<div class="postdate"><h1>', '</h1></div>'); ?> 

<div class="post">
	<h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>

	<?php comments_template(); ?>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>