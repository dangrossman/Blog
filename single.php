<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-xs-12">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="post">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

				<?php if (get_the_title() == 'A Date Range Picker for Twitter Bootstrap'): ?>
		                <div style="text-align: center">
		                        <a href="https://www.improvely.com" title="Click Fraud Auditing"><img src="http://www.improvely.com/images/ads/gray728.png" alt="PPC Click Fraud Prevention" style="border: 1px dotted #ccc" /></a>
		                </div>
				<?php endif; ?>

				<div style="border-top: 1px dotted #ccc; padding-top: 20px; margin-top: 60px">
				<?php comments_template(); ?>
				</div>

			</div>

			<?php endwhile; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
