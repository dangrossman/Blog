<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php the_date('F j, Y', '<div class="postdate"><h1>', '</h1></div>'); ?> 

<div class="post">
	<h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>


    <div style="">
        <a href="http://www.improvely.com" title="Stop Click Fraud"><img src="http://www.improvely.com/images/ads/669conversions.png" alt="PPC Click Fraud Detection" /></a>
    </div>

	<div style="border-top: 1px dotted #ccc; padding-top: 20px">
	<?php comments_template(); ?>
	</div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>
