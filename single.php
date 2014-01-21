<?php get_header(); ?>

	<div class="container" style="width: 850px; padding: 0">

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="post">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<div style="text-align: center; margin-bottom: 10px">
			<a href="http://www.improvely.com" title="Click Fraud Auditing"><img src="http://www.improvely.com/images/ads/fraud300.png" alt="PPC Click Fraud Prevention" style="border: 1px dotted #ccc" /></a>
		</div>

		<div style="border-top: 1px dotted #ccc; padding-top: 20px; margin-top: 60px">
		<?php comments_template(); ?>
		</div>

	</div>

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>