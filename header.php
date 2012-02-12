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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>
<body>

<div id="left">

	<h1>Dan Grossman</h1>

	<ul class="nav nav-pills nav-stacked">
		<li<?php if (is_home() || is_archive() || is_single()) echo ' class="active"'; ?>><a href="/">Blog</a></li>
		<li<?php if (is_page('Profile')) echo ' class="active"'; ?>><a href="/profile">Profile</a></li>
		<li<?php if (is_page('Portfolio')) echo ' class="active"'; ?>><a href="/portfolio">Porftolio</a></li>
		<li<?php if (is_page('Code')) echo ' class="active"'; ?>><a href="/code">Code</a></li>
		<li<?php if (is_page('Contact')) echo ' class="active"'; ?>><a href="/contact">Contact</a></li>
	</ul>

	<ul class="nav nav-list" style="margin-top: 40px">
		<li class="nav-header">You'll also find me here</li>
		<li><a href="http://github.com/dangrossman"><img src="http://github.com/favicon.ico" /> github</a></li>
		<li><a href="http://stackoverflow.com/users/280598/dan-grossman"><img src="http://stackoverflow.com/favicon.ico" /> stack overflow</a></li>
		<li><a href="http://news.ycombinator.com/user?id=dangrossman"><img src="http://news.ycombinator.com/favicon.ico" /> hacker news</a></li>
		<li><a href="http://twitter.com/djg"><img src="http://twitter.com/favicon.ico" /> twitter</a></li>		
		<li><a href="http://www.linkedin.com/in/dangrossmanawio"><img src="http://www.linkedin.com/favicon.ico" /> linkedin</a></li>
	</ul>

</div>

<div id="right">

	<?php if (is_home()): ?>
	<div id="topbox">
		<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/avatar.png" />
		<p>This is the personal site of Dan Grossman, web developer and entrepreneur. I create web applications that help people get the most out of their websites. 
		Check out my <a href="/profile">profile</a>, <a href="/portfolio">portfolio</a> and <a href="/code">open source code</a>.</p>
		<div style="clear: both"></div>
	</div>
	<?php endif; ?>