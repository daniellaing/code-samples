<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;

	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'serenabartlett' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/jScrollPane.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.4.min.js"></script>

<?php wp_head(); ?>

<script type="text/javascript">
     jQuery.noConflict();
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jScrollPane.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.em.js"></script>
<script type="text/javascript">
jQuery(function(){
	jQuery('.entry').jScrollPane({dragMinHeight: 22, dragMaxHeight: 22, scrollbarWidth: 20, showArrows: true, arrowSize: 16});
});
</script>
</head>

<body <?php body_class(); ?>>
	
	<div id="page">
		
		<div id="header">
			<a class="logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>">Serena Bartlett</a>
			<ul class="nav">
				<li id="nav-serena"><img src="<?php bloginfo('template_directory'); ?>/images/nav_serena.png" alt="Serena Bartlett" /></li>
				<li id="nav-about"><a href="<?php bloginfo('url'); ?>/about"><img src="<?php bloginfo('template_directory'); ?>/images/nav_about2.png" alt="About Me" /><img class="title" src="<?php bloginfo('template_directory'); ?>/images/nav_about.png" alt="About Me" /></a></li>
				<li id="nav-tours"><a href="<?php bloginfo('url'); ?>/tours"><img src="<?php bloginfo('template_directory'); ?>/images/nav_tours2.png" alt="Tours" /><img class="title" src="<?php bloginfo('template_directory'); ?>/images/nav_tours.png" alt="Tours" /></a></li>
				<li id="nav-classes"><a href="<?php bloginfo('url'); ?>/classes"><img src="<?php bloginfo('template_directory'); ?>/images/nav_classes2.png" alt="Classes" /><img class="title" src="<?php bloginfo('template_directory'); ?>/images/nav_classes.png" alt="Classes" /></a></li>
				<li id="nav-writing"><a href="<?php bloginfo('url'); ?>/writing"><img src="<?php bloginfo('template_directory'); ?>/images/nav_writing2.png" alt="Writing" /><img class="title" src="<?php bloginfo('template_directory'); ?>/images/nav_writing.png" alt="Writing" /></a></li>
				<li id="nav-culinary"><a href="<?php bloginfo('url'); ?>/culinary-expert"><img src="<?php bloginfo('template_directory'); ?>/images/nav_culinary2.png" alt="Culinary Expert" /><img class="title" src="<?php bloginfo('template_directory'); ?>/images/nav_culinary.png" alt="Culinary Expert" /></a></li>
				<li id="nav-books"><a href="<?php bloginfo('url'); ?>/books"><img src="<?php bloginfo('template_directory'); ?>/images/nav_books2.png" alt="Books" /><img class="title" src="<?php bloginfo('template_directory'); ?>/images/nav_books.png" alt="Books" /></a></li>
			</ul>
			<div class="social-media">
				<img src="<?php bloginfo('template_directory'); ?>/images/follow_me.png" alt="follow me" />
				<a class="icon" title="Localite Tours on Facebook" href="https://www.facebook.com/LocaliteTours" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon_fb.png" alt="Facebook" /></a>
				<a class="icon" title="Localite Tours on Instagram" href="http://instagram.com/localitetours/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon_instagram.png" alt="Instagram" /></a>
			</div>
		</div>
