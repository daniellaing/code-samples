<?php get_header(); ?>
	
	<div id="page">
	
		<div class="container">
			
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
			
			<div id="content">
				<p>Search Results</p>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> | <?php edit_post_link('Edit', '', ''); ?></strong>
					</div>
					<?php echo excerpt(30); ?>
				</div>
				<?php endwhile; ?>
                <?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
				<?php else : ?> 
				<h2>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</h2>
				
				<div class="search">
					<?php get_search_form(); ?>
				</div>
				<?php endif; ?>
			</div>
		
		</div>
	
	</div>

<?php get_footer(); ?>