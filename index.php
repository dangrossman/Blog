<?php get_header(); ?>

<?php
  if (!is_single() && !is_page()) { 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts('cat=-461,-683&paged=' . $paged);
  }
?>

<div class="container">

  <div class="row">

    <div class="col-lg-8 col-xs-12 bigcol">

        <?php if (is_single() || is_page()): ?>
        <ul class="pager" id="backhome">
          <li class="previous"><a href="/">&larr; Home</a></li>
        </ul>
        <?php endif; ?>

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

	  <?php if (is_single() || is_page()): ?>
	  <div style="border-top: 1px dotted #ccc; padding-top: 20px; margin-top: 60px">
	    <?php comments_template(); ?>
	  </div>
	  <?php endif; ?>

        </div>

      <?php endwhile; ?>

      <?php if ($wp_query->max_num_pages > 1): ?>
      <ul class="pager">
        <li class="previous"><?php next_posts_link('&larr; Older posts'); ?></li>
        <li class="next"><?php previous_posts_link('Newer posts &rarr;'); ?></li>
      </ul>
      <?php endif; ?>

    </div><!-- //content column -->
    <div class="col-lg-4 col-xs-12">

      <div id="bio">

        <p>
          I'm <b>Dan Grossman</b>, the sole developer behind <a href="https://www.improvely.com">Improvely</a> and
          <a href="http://www.w3counter.com">W3Counter</a>.
        </p>
        <p>
          You can follow me online &mdash;
        </p>

        <ul class="list-group icon-list">
          <li class="list-group-item"><a href="http://github.com/dangrossman"><i class="fa fa-github fa-lg"></i> github</a></li>
          <li class="list-group-item"><a href="http://news.ycombinator.com/user?id=dangrossman"><i class="fa fa-hacker-news fa-lg"></i> hacker news</a></li>
          <li class="list-group-item"><a href="http://www.linkedin.com/in/dangrossmanawio"><i class="fa fa-linkedin-square fa-lg"></i> linkedin</a></li>
        </ul>

        <p>Past work &amp; open source &mdash;</p>

        <ul class="list-group icon-list">
          <li class="list-group-item"><i class="fa fa-lg fa-calendar"></i> <a href="http://www.daterangepicker.com/">Date Range Picker</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-wrench"></i> <a href="http://www.websitegoodies.com/">Website Goodies</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-line-chart"></i> <a href="http://www.visitorboost.com/">Visitor Boost</a></li>
	  <li class="list-group-item"><i class="fa fa-lg fa-pencil"></i> <a href="https://apps.shopify.com/improved-contact-form">Improved Contact Form</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-bookmark"></i> <a href="http://www.bookmarkly.com/">Bookmarkly</a> &mdash; <a href="https://github.com/dangrossman/bookmarkly">Code</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-tags"></i> <a href="https://wordpress.org/plugins/calais-auto-tagger/">WordPress Auto Tagger</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-tag"></i> <a href="https://github.com/dangrossman/PHP-OpenCalais">OpenCalais PHP Library</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-bank"></i> <a href="http://www.dangrossman.info/2013/08/02/a-frontend-ui-for-the-spreedly-core-api/">Spreedly Vault Viewer</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-search"></i> <a href="http://www.dangrossman.info/2011/01/15/more-free-code-node-searchparser/">node-searchparser</a></li>
          <li class="list-group-item"><i class="fa fa-lg fa-desktop"></i> <a href="http://www.dangrossman.info/2010/10/11/a-browscap-ini-parser-in-javascript/">node-browscap</a></li>
        </ul>

      </div>

    </div><!-- //bio column -->


  </div><!-- //row -->

</div><!-- //container -->

<?php get_footer(); ?>
