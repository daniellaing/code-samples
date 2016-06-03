<?php get_header(); ?>
	<?php if ( $paged < 2 ) : ?>
	<div class="banner">
    	<script>
		<!--
			jQuery(document).ready(function() {
			jQuery("#main").scrollable({keyboard: 'static',circular: true}).navigator().autoscroll({interval: 6000});
			});
		-->
		</script>
        <div class="banner_ctn">
        		
            <ul id="main_navi">
               	<li><a href="<?php bloginfo('url'); ?>/category/seattle-and-washington"><img src="<?php bloginfo('template_directory'); ?>/images/seattle_wa_thumb.jpg" alt="Seattle and Washington" />
                <h2>Seattle and Washington</h2></a></li>
                <li><a href="<?php bloginfo('url'); ?>/category/portland-and-oregon"><img src="<?php bloginfo('template_directory'); ?>/images/portland_or_thumb.jpg" alt="Portland and Oregon" />
                <h2>Portland and Oregon</h2></a></li>
                <li><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area"><img src="<?php bloginfo('template_directory'); ?>/images/sf_bay_thumb.jpg" alt="San Francisco Bay Area" />
                <h2>San Francisco Bay Area</h2></a></li>
                <li><a href="<?php bloginfo('url'); ?>/category/northern-california-wine-country"><img src="<?php bloginfo('template_directory'); ?>/images/ncwc_thumb.jpg" alt="Northern California Wine Country" />
                <h2>Northern California Wine Country</h2></a></li>
                <li><a href="<?php bloginfo('url'); ?>/category/other-places"><img src="<?php bloginfo('template_directory'); ?>/images/other_places_thumb.jpg" alt="Other Places" />
                <h2>Other Places</h2></a></li>
            </ul>
            
            <div id="main">
                <ul class="items">
                	<li><a href="<?php bloginfo('url'); ?>/category/seattle-and-washington"><img src="<?php bloginfo('template_directory'); ?>/images/seattle_wa.jpg" alt="Seattle and Washington" />
                    <h2>Seattle and Washington</h2></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/category/portland-and-oregon"><img src="<?php bloginfo('template_directory'); ?>/images/portland_or.jpg" alt="Portland and Oregon" />
                    <h2>Portland and Oregon</h2></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area"><img src="<?php bloginfo('template_directory'); ?>/images/sf_bay.jpg" alt="San Francisco Bay Area" />
                    <h2>San Francisco Bay Area</h2></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/category/northern-california-wine-country"><img src="<?php bloginfo('template_directory'); ?>/images/ncwc.jpg" alt="Northern California Wine Country" />
                    <h2>Northern California Wine Country</h2></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/category/other-places"><img src="<?php bloginfo('template_directory'); ?>/images/other_places.jpg" alt="Other Places" />
                    <h2>Other Places</h2></a></li>
                </ul>
            </div>
            
            <div class="navi travel_navi"></div>
            
        </div>
        
        <div class="shadow_left"></div>
		<div class="shadow_right"></div>
        
	</div>
    <?php endif; ?>
	
	<div id="page">
	
		<div class="container">
			
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
			
			<div id="content">
				<?php if ( $paged < 2 ) : ?>
				<p>Browse my most recent posts</p>
				<?php else : ?>
				<?php endif; ?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?></strong>
					</div>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_post_thumbnail('thumbnail'); ?></a>
					<?php echo excerpt(30); ?>
				</div>
				<?php endwhile; ?>
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                </div>
                <?php else : ?> 
				<h2>Coming Soon&hellip;</h2>
                <?php endif; ?>
			</div>
		
		</div>
	
	</div>

<?php get_footer(); ?>
