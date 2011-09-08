<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php the_title(); ?> &raquo; <?php bloginfo('name'); ?></title>
	
	<meta name="description" content="<?php if (have_posts()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; endif; ?>" />
	
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed (<?php bloginfo('language'); ?>)" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!--Stylesheets-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/compiled/ie.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/compiled/print.css" type="text/css" media="print" charset="utf-8" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/compiled/main.css" type="text/css" media="screen" charset="utf-8" />
	
	<!--Mobile-->
	<?php if (ereg('iPhone', $_SERVER['HTTP_USER_AGENT']) || ereg('iPod', $_SERVER['HTTP_USER_AGENT']) || ereg('iPad',$_SERVER['HTTP_USER_AGENT'])): ?>
		
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="apple-touch-fullscreen" content="yes" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png" />
		
		<?php if (ereg('iPad', $_SERVER['HTTP_USER_AGENT'])): ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ipad.css" />
		<?php else: ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/iphone.css" />	
		<?php endif; ?>
		
	<?php else: ?>
		<meta name="viewport" content="width=960" />
	<?php endif ?>

	<?php wp_head(); ?>
	
	<!--Scripts--> 
	<?php // NOTE: We are enqueing jQuery from Google CDN in the functions.php. If it doesn't load we grab the local version ?>
	<script>!window.jQuery && document.write('<script src="scripts/jquery-1.6.2.min.js"><\/script>')</script>
	<script type="text/javascript">
		jQuery(document).ready(function init() { 
			// jQuery init function
		});
	</script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.browser.addEnvClass.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/init.js"></script>
	 
	
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
	<div id="body-container">
			<div id="header">
				<div id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/dlvs_logo.jpg" alt=""></a></div>
				<div id="tools"> <a href="/about/contact/">Contact</a> | <a href="">Login</a> </div>			
				<div id="primary-menu">
					<?php primary_menu(); ?>
				</div>
		</div><!--#end header-->