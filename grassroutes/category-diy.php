<?php get_header(); ?>
	<?php if ( $paged < 2 ) : ?>
	<div class="banner">
    	<script>
		<!--
			jQuery(document).ready(function() {
			jQuery("#scrollable").scrollable({keyboard: 'static',circular: true}).navigator().autoscroll({interval: 8000});
			});
		-->
		</script>
        <div class="banner_ctn">
            
            <div id="scrollable">
                <ul class="items">
                    <li><img src="<?php bloginfo('template_directory'); ?>/images/culture_vulture.jpg" alt="Culture Vulture" />
                        <div class="excerpt">
							<h1><a href="<?php bloginfo('url'); ?>/category/culture-vulture">Culture Vulture</a></h1>
                            <?php echo category_description(); ?>
                        </div>
                    </li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/night_owl.jpg" alt="Night Owl" />
                        <div class="excerpt">
							<h1><a href="<?php bloginfo('url'); ?>/category/night-owl">Night Owl</a></h1>
                            <?php echo category_description(); ?>
                        </div>
                    </li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/garden_maven.jpg" alt="Garden Maven" />
                        <div class="excerpt">
							<h1><a href="<?php bloginfo('url'); ?>/category/garden-maven">Garden Maven</a></h1>
                            <?php echo category_description(); ?>
                        </div>
                    </li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/kitchen_adventures.jpg" alt="Kitchen Adventures" />
                        <div class="excerpt">
							<h1><a href="<?php bloginfo('url'); ?>/category/kitchen-adventures">Kitchen Adventures</a></h1>
                            <?php echo category_description(); ?>
                        </div>
                    </li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/outdoors.jpg" alt="Outdoors and on the Road" />
                        <div class="excerpt">
							<h1><a href="<?php bloginfo('url'); ?>/category/outdoors">Outdoors and on the Road</a></h1>
                            <?php echo category_description(); ?>
                        </div>
                    </li>
					
                </ul>
            </div>
        	<a class="prev browse left"></a>
        	<a class="next browse right"></a>
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
				<h2>Recent Projects</h2>
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
					<h2>Find More Projects</h2>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/culture-vulture">Culture Vulture</a></h3>
						<ul>
							<?php $culture = new WP_Query('category_name=culture-vulture&posts_per_page=-1&orderby=title&order=ASC'); 
							if($culture->have_posts()) : while($culture->have_posts()) : $culture->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/night-owl">Night Owl</a></h3>
						<ul>
							<?php $night = new WP_Query('category_name=night-owl&posts_per_page=-1&orderby=title&order=ASC'); 
							if($night->have_posts()) : while($night->have_posts()) : $night->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/garden-maven">Garden Maven</a></h3>
						<ul>
							<?php $garden = new WP_Query('category_name=garden-maven&posts_per_page=-1&orderby=title&order=ASC'); 
							if($garden->have_posts()) : while($garden->have_posts()) : $garden->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/kitchen-adventures">Kitchen Adventures</a></h3>
						<ul>
							<?php $kitchen = new WP_Query('category_name=kitchen-adventures&posts_per_page=-1&orderby=title&order=ASC'); 
							if($kitchen->have_posts()) : while($kitchen->have_posts()) : $kitchen->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; endif; 
							wp_reset_query(); ?>
						</ul>
					</div>
					<div class="column">
						<h3><a href="<?php bloginfo('url'); ?>/category/outdoors">Outdoors / on the Road</a></h3>
						<ul>
							<?php $outdoors = new WP_Query('category_name=outdoors&posts_per_page=-1&orderby=title&order=ASC'); 
							if($outdoors->have_posts()) : while($outdoors->have_posts()) : $outdoors->the_post(); ?>
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
