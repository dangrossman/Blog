<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php the_date('F j, Y', '<div class="postdate"><h1 style="margin-top: 0">', '</h1></div>'); ?> 

<div class="post">
	<h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>

	<div style="text-align: center; margin-bottom: 10px">
		<a href="http://www.improvely.com" title="Click Fraud Auditing"><img src="http://www.improvely.com/images/ads/fraud300.png" alt="PPC Click Fraud Prevention" style="border: 1px dotted #ccc" /></a>
	</div>

	<div style="border-top: 1px dotted #ccc; padding-top: 20px">
	<?php comments_template(); ?>
	</div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>
