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
				<li><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area"><img src="<?php bloginfo('template_directory'); ?>/images/sf_bay_thumb.jpg" alt="San Francisco Bay Area" />
                <h2>San Francisco Bay Area</h2></a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/northern-california-wine-country"><img src="<?php bloginfo('template_directory'); ?>/images/ncwc_thumb.jpg" alt="Northern California Wine Country" />
                <h2>Northern California Wine Country</h2></a></li>
                <li><a href="<?php bloginfo('url'); ?>/category/portland-and-oregon"><img src="<?php bloginfo('template_directory'); ?>/images/portland_or_thumb.jpg" alt="Portland and Oregon" />
                <h2>Portland and Oregon</h2></a></li>
                <li><a href="<?php bloginfo('url'); ?>/category/seattle-and-washington"><img src="<?php bloginfo('template_directory'); ?>/images/seattle_wa_thumb.jpg" alt="Seattle and Washington" />
                <h2>Seattle and Washington</h2></a></li>
                <li><a href="<?php bloginfo('url'); ?>/category/other-places"><img src="<?php bloginfo('template_directory'); ?>/images/other_places_thumb.jpg" alt="Other Places" />
                <h2>Other Places</h2></a></li>
            </ul>
            
            <div id="main">
                <ul class="items">
                	<li><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area"><img src="<?php bloginfo('template_directory'); ?>/images/sf_bay.jpg" alt="San Francisco Bay Area" />
                    <h2>San Francisco Bay Area</h2></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/category/northern-california-wine-country"><img src="<?php bloginfo('template_directory'); ?>/images/ncwc.jpg" alt="Northern California Wine Country" />
                    <h2>Northern California Wine Country</h2></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/category/portland-and-oregon"><img src="<?php bloginfo('template_directory'); ?>/images/portland_or.jpg" alt="Portland and Oregon" />
                    <h2>Portland and Oregon</h2></a></li>
					<li><a href="<?php bloginfo('url'); ?>/category/seattle-and-washington"><img src="<?php bloginfo('template_directory'); ?>/images/seattle_wa.jpg" alt="Seattle and Washington" />
                    <h2>Seattle and Washington</h2></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/category/other-places"><img src="<?php bloginfo('template_directory'); ?>/images/other_places.jpg" alt="Other Places" />
                    <h2>Other Places</h2></a></li>
                </ul>
            </div>
            
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
				<h2>Recent Discoveries</h2>
				<?php $paged = (intval(get_query_var('paged'))) ? intval(get_query_var('paged')) : 1;
				$do_not_duplicate[] = $post->ID; ?>
				<?php if ( $paged < 2 ) : ?>
				<?php else : ?>
				<?php endif; ?>
				<?php query_posts(array('posts_per_page' => 3, 'post__not_in' => $do_not_duplicate, 'paged' => $paged)); 
				if(have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?></strong>
					</div>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_post_thumbnail(array(60,60)); ?></a>
					<?php echo excerpt(30); ?>
				</div>
				<?php endwhile; ?>
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                </div>
                <?php else : ?> 
				<div class="clearfix"></div>
				<h2>Coming Soon&hellip;</h2>
                <?php endif; ?>
				<div class="post_index">
					<h2>Find Places</h2>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area">SF Bay</a></h3>
						<ul>
							<?php $sfbay = new WP_Query('category_name=san-francisco-bay-area&posts_per_page=-1&orderby=title&order=ASC'); 
							if($sfbay->have_posts()) : while($sfbay->have_posts()) : $sfbay->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area">CA Wine Country</a></h3>
						<ul>
							<?php $cawine = new WP_Query('category_name=northern-california-wine-country&posts_per_page=-1&orderby=title&order=ASC'); 
							if($cawine->have_posts()) : while($cawine->have_posts()) : $cawine->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area">Seattle</a></h3>
						<ul>
							<?php $seattle = new WP_Query('category_name=seattle-and-washington&posts_per_page=-1&orderby=title&order=ASC'); 
							if($seattle->have_posts()) : while($seattle->have_posts()) : $seattle->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area">Portland</a></h3>
						<ul>
							<?php $portland = new WP_Query('category_name=portland-and-oregon&posts_per_page=-1&orderby=title&order=ASC'); 
							if($portland->have_posts()) : while($portland->have_posts()) : $portland->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/san-francisco-bay-area">Other Places</a></h3>
						<ul>
							<?php $other = new WP_Query('category_name=other-places&posts_per_page=-1&orderby=title&order=ASC'); 
							if($other->have_posts()) : while($other->have_posts()) : $other->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
				</div>
			</div>
		
		</div>
	
	</div>

<?php get_footer(); ?>
