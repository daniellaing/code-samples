<?php get_header(); ?>
	
	<div id="page">
	
		<div class="container">
			
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
			
			<div id="content">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_post_thumbnail('thumbnail'); ?></a>
					<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_post_meta($post->ID, 'Good Idea', true); ?></a></h1>
					
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?></strong>
					</div>
					
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
