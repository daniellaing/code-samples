<?php get_header(); ?>
			<div id="content" class="row-fluid">
				<div class="span8">
					<?php $homepage = new WP_Query('post_type=page&pagename=home'); 
					if($homepage->have_posts()) : while($homepage->have_posts()) : $homepage->the_post(); ?>
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<?php the_content(); ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="span4">
					<div class="booking-widget">
						<a href="http://www.peek.com/activity-p16209002-oakland_cocktails_tour_san_francisco/" id="peek-booking-widget-link">Oakland Cocktails Tour in San Francisco | Peek</a>
						<script> 
							(function(idPrefix) { 
							id = idPrefix+'-js'; if (document.getElementById(id)) return; 
							var head = document.getElementsByTagName('head')[0] 
							el = document.createElement('script'); el.id = id 
							var date = new Date; var stamp = date.getMonth()+"-"+date.getDate() 
							el.src = "https://pirassets.s3.amazonaws.com/assets/widget.js?id=513794850d8264000200039b&ts="+stamp;
							
							head.appendChild(el); id = idPrefix+'-css'; el = document.createElement('link'); el.id = id 
							el.href = "https://pirassets.s3.amazonaws.com/assets/widget.css?id=513794850d8264000200039b&ts="+stamp;
							
							el.rel="stylesheet"; el.type="text/css"; head.appendChild(el); 
							}('peek-booking-widget')); 
						</script>
					</div>
					<div class="mailchimp">
						<h2>Join Our Announcements List</h2>
						<a href="http://visitor.r20.constantcontact.com/d.jsp?llr=9gdd4jpab&amp;p=oi&amp;m=1115952352474&amp;sit=b7swmwlib&amp;f=8bfe8c4f-b951-4d54-bfc2-154ffdf61bef" class="button" title="subscribe to our announcements">Subscribe</a>
					</div>
					<div class="connect">
						<h2>Connect with us!</h2>
						<div class="icons">
							<a title="Yelp!" href="http://www.yelp.com/biz/localite-tours-oakland#query:localite%20tour" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon_yelp_45x45.png" alt="Yelp!" /></a>
							<a title="Facebook" href="https://www.facebook.com/LocaliteTours" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon_facebook_45x45.png" alt="Facebook" /></a>
							<a title="Twitter @localitetours" href="https://twitter.com/LocaliteTours" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon_twitter_45x45.png" alt="Twitter" /></a>
							<a title="Instagram" href="http://instagram.com/localitetours/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon_instagram_45x45.png" alt="Instagram" /></a>
						</div>
					</div>
				</div>
				<div class="partners">
					<h2>Our Partners and Organizations We Support</h2>
					<a title="Oakland Grown" href="https://www.oaklandgrown.org" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/oakland_grown_logo.png" alt="Oakland Grown" /></a>
					<a title="Women's Initiative for Self Employment" href="http://www.womensinitiative.org" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/wise_logo.png" alt="Women's Initiative for Self Employment" /></a>
					<a title="Sustainable Business Alliance" href="http://sustainablebusinessalliance.org" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/sustainable_business_alliance_logo.png" alt="Sustainable Business Alliance" /></a>
				</div>
			</div>
<?php get_footer(); ?>
