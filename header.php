<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/font-awesome/css/font-awesome.css" />
<!--[if IE 7]>
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/font-awesome/css/font-awesome-ie7.css" />
<![endif]-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="/wp-content/themes/2012/moment.js"></script>
<script src="/wp-content/themes/2012/daterangepicker.js"></script>
<link type="text/css" rel="stylesheet" href="/wp-content/themes/2012/daterangepicker.css" />

</head>
<body>

<div id="left">

	<h1><a href="/"><img src="https://www.gravatar.com/avatar/b60786ec5b4e9ea388df529076add9e0?s=32&d=identicon" /> Dan Grossman</a></h1>

	<ul class="nav nav-pills nav-stacked">
		<li<?php if ((is_home() || is_archive() || is_single()) && !is_category('Code') && !is_category('Portfolio')) echo ' class="active"'; ?>><a href="/">Blog</a></li>
		<li<?php if (is_page('Profile')) echo ' class="active"'; ?>><a href="/profile">Profile</a></li>
		<li<?php if (is_category('Portfolio')) echo ' class="active"'; ?>><a href="/category/portfolio">Portfolio</a></li>
		<li<?php if (is_category('Code')) echo ' class="active"'; ?>><a href="/category/code">Code</a></li>
		<li<?php if (is_page('Contact Me')) echo ' class="active"'; ?>><a href="/contact">Contact</a></li>
	</ul>

	<ul class="nav nav-list" style="margin-top: 20px">
		<li class="nav-header">You'll also find me here</li>
		<li><a href="http://github.com/dangrossman"><i class="icon-github icon-large"></i> github</a></li>
		<li><a href="http://stackoverflow.com/users/280598/dan-grossman"><i class="icon-stackexchange icon-large"></i> stack overflow</a></li>
		<li><a href="http://news.ycombinator.com/user?id=dangrossman"><i class="icon-sign-blank icon-large"></i> hacker news</a></li>
		<li><a href="http://twitter.com/djg"><i class="icon-twitter-sign icon-large"></i> twitter</a></li>		
		<li><a href="http://www.linkedin.com/in/dangrossmanawio"><i class="icon-linkedin-sign icon-large"></i> linkedin</a></li>
		<li><a href="https://plus.google.com/100677073852106351263/posts"><i class="icon-google-plus-sign icon-large"></i> google+</a></li>
		<li class="separator" style="width: auto"></li>
	        <li><a href="/rss"><i class="icon-rss-sign icon-large"></i> RSS feed</a></li>
	</ul>

</div>

<div id="right">
