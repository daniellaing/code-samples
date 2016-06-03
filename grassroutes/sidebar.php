<div class="subscribe">
	<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=GrassRoutesGuides', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
		<div>
			<input type="text" name="email" value="your email address" onfocus="if(this.value=='your email address'){this.value=''};" onblur="if(this.value==''){this.value='your email address'};" />
			<input type="hidden" value="GrassRoutesGuides" name="uri"/>
			<input type="hidden" name="loc" value="en_US"/>
			<input type="image" src="<?php bloginfo('template_directory'); ?>/images/subscribe_button.png" alt="subscribe" />
			<p>Delivered by <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></p>
		</div>
	</form>
</div>

<?php if(is_home()) : ?>
<div class="card">
	<h2 class="no_border">&nbsp;</h2>
	<div class="card_inner">
		<p class="courier">Hi, I'm Serena. I'm very curious and I love exploring. I've penned a series of local, eco-minded guidebooks called GrassRoutes Guides.<br /><br />
        This site is my journal of inspiring, tasty, and adventurous travels up and down the West Coast and beyond. I find good ideas each place I visit that I can use again at home and of course pass along!</p>
	</div>
	<div class="card_bottom"></div>
</div>
<?php endif; ?>

<div class="tag2">
	<h2>Connect Up</h2>
	<a href="http://www.facebook.com/GrassRoutesGuides" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook_icon.png" alt="Facebook" /></a>
	<a href="http://twitter.com/#!/grassroutestrav" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_icon.png" alt="Twitter" /></a>
	<a href="<?php bloginfo('url'); ?>/feed/rss2" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/rss_icon.png" alt="RSS" /></a>
	<a href="http://www.flickr.com/photos/grassroutesguides" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/flickr_icon.png" alt="Flickr" /></a>
</div>

<a class="bucket book-tour" href="http://www.localitetours.com/groups" target="_blank" title="Foodie Walking Tours"><img src="<?php bloginfo('template_directory'); ?>/images/book_tour.png" alt="Foodie Walking Tours" /></a>

<div class="card">
	
	<h2><a href="<?php bloginfo('url'); ?>/category/good-ideas">Good Ideas</a></h2>
	
	<div class="card_inner">
		(Invisible Souvenirs)
		<?php query_posts('category_name=good-ideas&posts_per_page=3'); ?>
		<ul>
		<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(array(50,50)); ?> 
		<?php echo get_post_meta($post->ID, 'Good Idea', true); ?></a></li>
		<?php endwhile; endif; ?>
		</ul>
		<?php wp_reset_query(); ?>
	</div>
	
	<div class="card_bottom"><a class="more" href="<?php bloginfo('url'); ?>/category/good-ideas">More &raquo;</a></div>
	
</div>

<div class="tag">
	<h2><a href="<?php bloginfo('url'); ?>/books">My Books</a></h2>
	<?php $myBooks = new WP_Query(array('post_type' => 'page', 'post__in' => array(22,19,17,15,13), 'orderby' => 'menu_order', 'order' => 'ASC')); ?>
    <ul class="books_rotate">
	<?php if ($myBooks->have_posts()) : ?>
    <?php while ($myBooks->have_posts()) : $myBooks->the_post(); ?>
    	<li><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('thumbnail'); ?></a> 
	<?php the_title(); ?>
	<a class="buy" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/buy_button.png" alt="Buy it now &raquo;" /></a></li>
	<?php endwhile; endif; ?>
    </ul>
	<?php wp_reset_query(); ?>
</div>

<div class="card">
	<h2><a href="<?php bloginfo('url'); ?>/about/press">Featured In</a></h2>
	<div class="card_inner">
		<ul>
			<?php wp_get_linksbyname('Press','order_by=rating&show_images=1&show_description=0'); ?>
		</ul>
	</div>
	<div class="card_bottom"><a class="more" href="<?php bloginfo('url'); ?>/about/press">More &raquo;</a></div>
</div>