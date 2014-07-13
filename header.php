<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php

	global $page, $paged;

	bloginfo('name');

	wp_title( '|', true, 'left' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf('Page %s', max($paged, $page));

	?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/2012/daterangepicker-bs3.css" />
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/2012/style.css" />

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/2012/moment.js"></script>
	<script type="text/javascript" src="/wp-content/themes/2012/daterangepicker.js"></script>

	<script type="text/javascript" src="http://d3js.org/d3.v3.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/2012/trianglify.js"></script>

	<link rel="stylesheet" href="http://f.fontdeck.com/s/css/uH5+KWQnibDTJRYggGJ9XZLTAgw/www.dangrossman.info/41697.css" type="text/css" />

	<?php wp_head(); ?>

</head>
<body>

<div class="navbar navbar-inverse" role="navigation" style="border-radius: 0">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Dan Grossman</a>
    </div>
    <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
      	<li<?php if ((is_home() || is_archive() || is_single()) && !is_category('Code') && !is_category('Portfolio')) echo ' class="active"'; ?>><a href="/">Blog</a></li>
		<li<?php if (is_page('Profile')) echo ' class="active"'; ?>><a href="/profile">Profile</a></li>
		<li<?php if (is_category('Portfolio')) echo ' class="active"'; ?>><a href="/category/portfolio">Portfolio</a></li>
		<li<?php if (is_category('Code')) echo ' class="active"'; ?>><a href="/category/code">Code</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<div id="topstripe"></div>
