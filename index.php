<?php get_header(); ?>

<?php if (is_home()) {
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  query_posts('cat=-461,-683&paged=' . $paged);
} ?>

<div class="postsep" style="margin: 0"></div>

<?php while ( have_posts() ) : the_post(); ?>

  <?php
    if (get_the_title() != 'A date range picker for Twitter Bootstrap') {
      add_filter('the_content', 'wpautop');
      add_filter('the_content', 'wptexturize');
    }
  ?>

  <?php the_date('F j, Y', '<div class="postdate"><h1>', '</h1></div>'); ?> 

  <div class="post">
    <?php if (get_the_title() != ''): ?>
      <h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
    <?php endif; ?>
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
