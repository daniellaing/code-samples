<?php get_header(); ?>
	
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
					<?php $eventspage = new WP_Query(array('post_type' => 'page', 'post__in' => array('1079'))); 
					if ($eventspage->have_posts()) : while ($eventspage->have_posts()) : $eventspage->the_post(); ?>
					<li class="events"><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(array(375,250)); ?></a>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</li>
					<?php endwhile; endif; 
					wp_reset_query(); ?>
					<?php $bookspage = new WP_Query(array('post_type' => 'page', 'order' => 'ASC', 'post__in' => array('13','17'))); 
					if ($bookspage->have_posts()) : while ($bookspage->have_posts()) : $bookspage->the_post(); ?>
					<li class="bookspage"><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(array(375,250)); ?></a>
						<div class="excerpt">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<?php echo excerpt(55); ?>
						</div>
					</li>
					<?php endwhile; endif; 
					wp_reset_query(); ?>
					
					<li><a href="<?php bloginfo('url'); ?>/category/videos-podcasts"><img class="attachment-375x250 wp-post-image" src="<?php bloginfo('template_directory'); ?>/images/vid-pod.jpg" alt="Videos and Podcasts" /></a>
						<h1><a href="<?php bloginfo('url'); ?>/category/videos-podcasts">Videos and Podcasts</a></h1>
					</li>
					<?php $featured = new WP_Query('category_name=featured&posts_per_page=2&orderby=date'); 
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
        	<a class="prev browse left"></a>
        	<a class="next browse right"></a>
        </div>
        
        <div class="shadow_left"></div> 
		<div class="shadow_right"></div>
        
	</div>
	
	<div id="page">
	
		<div class="container">
			
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
			
			<div id="content">
				<?php $page_num = $paged;
				/* if ($pagenum='') $pagenum =1; */
				query_posts('posts_per_page=5&paged='.$page_num);
				$count = 1; 
				if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?></strong>
					</div>
					<?php /* if ($paged == 0) : ?>
					<?php if ($count == 1) : ?>
					<div class="galleria">
						<?php $args = array('post_type'   => 'attachment', 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_parent' => $post->ID);
        				$attachments = get_posts($args);
        				if ($attachments) {
            				foreach ($attachments as $attachment) {
							 echo wp_get_attachment_image( $attachment->ID, false ); }
        				} ?>
					</div>
					<?php echo apply_filters('the_content', $post->post_content);?>
					<?php echo do_shortcode('[sharethis]'); ?>
					<?php else : ?>
					<?php echo content(150); ?>
					<?php echo do_shortcode('[sharethis]'); ?>
					<?php endif; 
					$count++; ?>
					<?php else : */ ?>
					<?php echo content(150); ?>
					<?php echo do_shortcode('[sharethis]'); ?>
					<?php /* endif; */ ?>
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
