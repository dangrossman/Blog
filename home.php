<?php get_header(); ?>

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  query_posts('cat=-461,-683&paged=' . $paged);
?>

<div class="container">

  <div class="row">

    <div class="col-lg-8 col-xs-12">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php
        if (get_the_title() != 'A date range picker for Twitter Bootstrap') {
          add_filter('the_content', 'wpautop');
          add_filter('the_content', 'wptexturize');
        }
        ?>

        <?php the_date('F j, Y', '<h2 class="postdate">', '</h2>'); ?> 

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

    </div><!-- //first column -->
    <div class="col-lg-4 col-xs-12">

      <div id="bio">

        <p>Hi, I'm <b>Dan Grossman</b>, the Philly-area creator of <a href="https://www.improvely.com">Improvely</a>, <a href="http://www.w3counter.com">W3Counter</a>, and <a href="/category/code">some open source stuff</a>. Here's a couple other places
          you can follow me online &mdash;</p>

        <ul class="list-group icon-list">
          <li class="list-group-item"><a href="http://github.com/dangrossman"><i class="fa fa-github fa-lg"></i> github</a></li>
          <li class="list-group-item"><a href="http://news.ycombinator.com/user?id=dangrossman"><i class="fa fa-square fa-lg"></i> hacker news</a></li>
          <li class="list-group-item"><a href="http://twitter.com/djg"><i class="fa fa-twitter-square fa-lg"></i> twitter</a></li>    
          <li class="list-group-item"><a href="http://stackoverflow.com/users/280598/dan-grossman"><i class="fa fa-stack-exchange fa-lg"></i> stack overflow</a></li>
          <li class="list-group-item"><a href="http://www.linkedin.com/in/dangrossmanawio"><i class="fa fa-linkedin-square fa-lg"></i> linkedin</a></li>
          <li class="list-group-item"><a href="/rss"><i class="fa fa-rss-square fa-lg"></i> RSS feed</a></li>
        </ul> 

      </div>

    </div><!-- //second column -->

  </div><!-- //row -->

</div><!-- //container -->

<?php get_footer(); ?>
