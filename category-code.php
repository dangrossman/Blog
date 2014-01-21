<?php get_header(); ?>

<div class="container" style="width: 850px; padding: 0">

    <h1 style="margin-bottom: 40px">Open Source Code</h1>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php
		$url = get_post_meta($post->ID, 'url', true); 
		$download = get_post_meta($post->ID, 'download', true);
		$arr = explode('/', $download);
		$filename = $arr[count($arr)-1];
	?>

	<div class="post" style="padding-bottom: 20px">

		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>

		<div class="btn-group">
			<a class="btn btn-primary" href="<?php echo $url; ?>">Project Details</a>
			<a class="btn btn-success" href="<?php echo $download; ?>">Download</a>
		</div>

	</div>
		
	<?php endwhile; ?>

	<?php if ($wp_query->max_num_pages > 1): ?>
	<ul class="pager">
		<li class="previous"><?php next_posts_link('&larr; Older posts'); ?></li>
		<li class="next"><?php previous_posts_link('Newer posts &rarr;'); ?></li>
	</ul>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
