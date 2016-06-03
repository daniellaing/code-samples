<?php get_header(); ?>

	<?php if(is_page('Books') || $post->post_parent == 6) : ?>
	<div class="banner">
    	<script>
		<!--
			jQuery(document).ready(function() {
			jQuery("#main").scrollable({keyboard: 'static',circular: true}).navigator().autoscroll({interval: 6000});
			});
		-->
		</script>
        <div class="banner_ctn">
        	<?php $query_books = new WP_Query('post_type=page&post_parent=6&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
            <ul id="main_navi">
               	<?php if ($query_books->have_posts()) : while ($query_books->have_posts()) : $query_books->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>#content"><?php echo the_post_thumbnail(array(60,60)); ?><h2><?php the_title(); ?></h2></a></li>
				<?php endwhile; endif; ?>
            </ul>
            
            <div id="main">
                <ul class="items">
                	<?php if ($query_books->have_posts()) : while ($query_books->have_posts()) : $query_books->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>#content"><?php echo the_post_thumbnail(array(450,330)); ?></a></li>
					<?php endwhile; endif; ?>
                </ul>
            </div>
            <?php wp_reset_query(); ?>
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
				<?php if(is_page('Books')) { ?>
				<?php if ($query_books->have_posts()) : ?>
				<h1>GrassRoutes Guidebooks</h1>
				<?php the_content(); ?>
				<ul class="books">
					<?php while($query_books->have_posts()) : $query_books->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('thumbnail'); ?></a>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php echo excerpt(30); ?></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				<?php } else if($post->post_parent == 6) { ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1><span>GrassRoutes Guide to</span><br /><?php the_title(); ?></h1>
                    
                    <div class="book_image">
                		<?php echo the_post_thumbnail(array(270,300)); ?>
                    </div>
                    
                    <div class="description">
						<p><?php echo get_post_meta($post->ID, 'Description', true); ?></p>
                    </div>
                    
                    <div class="quotes">
                        <?php echo get_post_meta($post->ID, 'Quotes', true); ?>
                    </div>
                    
                    <div class="buy_it">
                        <h2>Buy the Guide</h2>
                        <?php echo get_post_meta($post->ID, 'Buy it links', true); ?>
                    </div>
                	
                    <?php if(get_post_meta($post->ID, 'Best of', true)) : ?>
                	<div class="best_of">
                    	<h2>Buy the Guide</h2>
                        <?php echo get_post_meta($post->ID, 'Best of', true); ?>
                    </div>
                    <?php endif; ?>
					<div class="clearfix"></div>
                 </div>
                 <?php endwhile; endif; ?>  
                    
				<?php } else { ?>
                <?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?><?php if(is_page('about')) : ?> GrassRoutes<?php endif; ?></h1>
					<?php the_content(); ?>
                </div>
				<?php endwhile; endif; ?>
                <?php } ?>
			</div>
		
		</div>
	
	</div>

<?php get_footer(); ?>
