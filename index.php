<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

 <?php the_date('F j, Y', '<div class="postdate"><h1>', '</h1></div>'); ?> 

<div class="post">
	<h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
</div>

<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1): ?>
<ul class="pager">
	<li class="previous"><?php next_posts_link('&larr; Older posts'); ?></li>
	<li class="next"><?php previous_posts_link('Newer posts &rarr;'); ?></li>
</ul>
<?php endif; ?>

<?php get_footer(); ?>