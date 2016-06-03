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
                	<?php $query_garden = new WP_Query('category_name=garden&posts_per_page=3'); 
					if ($query_garden->have_posts()) :  while ($query_garden->have_posts()) : $query_garden->the_post(); ?>
                    <li><?php echo the_post_thumbnail(array(400,300)); ?>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <div class="excerpt">
                            <?php echo excerpt(30); ?>
                        </div>
                    </li>
                    <?php endwhile; endif; 
					wp_reset_query(); ?>
                </ul>
            </div>
        	<a class="prev browse left"></a>
        	<a class="next browse right"></a>
            <div class="navi"></div>
            
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
				<?php else : 
				// do nothing
				endif; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?></strong>
					</div>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_post_thumbnail('thumbnail'); ?></a>
					<?php echo excerpt(); ?>
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
