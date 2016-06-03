<?php get_header(); ?>
	<?php if ( $paged < 2 ) : ?>
	<div class="banner">
    	<script>
		<!--
			jQuery(document).ready(function() {
			jQuery("#scrollable").scrollable({keyboard: 'static',circular: true}).navigator().autoscroll({interval: 6000});
			});
		-->
		</script>
        <div class="banner_ctn">
            <div id="scrollable">
                <ul class="items">
                	<?php $featured = new WP_Query('category_name=recipes&posts_per_page=3&orderby=date'); 
                    if($featured->have_posts()) : while ($featured->have_posts()) : $featured->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(array(375,250)); ?></a>
                        <div class="excerpt">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php echo excerpt(55); ?>
                        </div>
                    </li>
                    <?php endwhile; endif; 
					wp_reset_query(); ?>
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
				<h2>Recipes</h2>
				<?php $paged = (intval(get_query_var('paged'))) ? intval(get_query_var('paged')) : 1;
				/* $do_not_duplicate[] = $post->ID; */ ?>
				<?php if ( $paged < 2 ) : ?>
				<?php else : ?>
				<?php endif; ?>
				<?php query_posts(array('category_name' => 'recipes', 'posts_per_page' => 5, 'post__not_in' => $do_not_duplicate, 'paged' => $paged)); 
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
                <?php endif; ?>
			</div>
		
		</div>
	
	</div>

<?php get_footer(); ?>
