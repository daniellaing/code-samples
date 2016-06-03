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
		echo ' | ' . sprintf( __( 'Page %s', 'grassroutes2' ), max( $paged, $page ) );
?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/screen.css" />
<link rel="stylesheet" type="text/css" href="http://static.flowplayer.org/tools/css/scrollable-horizontal.css" />
<link rel="stylesheet" type="text/css" href="http://static.flowplayer.org/tools/css/scrollable-buttons.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/global.js"></script>
<script type="text/javascript">
<!-- hide from non JavaScript Browsers

Image1= new Image(813,1114)
Image1.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/background.jpg"
Image2= new Image(1,1)
Image2.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/header_bg.png"
Image3= new Image(990,1)
Image3.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/container_bg.png"
Image4= new Image(1,400)
Image4.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/banner_bg.png"
Image5= new Image(1,1)
Image5.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/slider_caption.png"
Image6= new Image(300,1)
Image6.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/prevBtn_bg.png"
Image7= new Image(300,1)
Image7.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/nextBtn_bg.png"
Image8= new Image(1,1)
Image8.src = "http://www.grassroutestravel.com/wp-content/themes/grassroutes/images/footer_bg.png"

// End Hiding -->
</script>
<?php wp_head(); ?>

<script type="text/javascript">
     jQuery = jQuery.noConflict();
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tools.min.js"></script>
<?php if(is_single()) : ?>
<?php if($paged == 0) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/galleria-1.2.7.min.js"></script>
<?php endif; endif; ?>

</head>

<body <?php body_class(); ?>>
	
	<div id="header">
		
		<div class="header_ctn">
			
			<div class="tagline">
				<p>Tasty and inspiring ideas from the most worthwhile West Coast Destinations.</p>
				<!--<img src="<?php bloginfo('template_directory'); ?>/images/tagline.png" alt="" />-->
			</div>
			
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/grassroutes_logo2.png" alt="GrassRoutes: Your Guide to DIY Travel" /></a>
			</div>
			
			<div class="search">
				<?php get_search_form(); ?>
			</div>
			
			<div class="menu">
				<ul>
					<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<?php wp_list_pages('title_li=&sort_column=menu_order&depth=2&exclude=1090'); ?>
					<li class="page_item page-item-1079">
						<a href="<?php bloginfo('url'); ?>/about/tours/">Tours</a>
					</li>
					<?php wp_list_categories('title_li=&orderby=ID&order=ASC&include=4,9'); ?>
				</ul>
			</div>
			
		</div>
		
	</div>