<?php /* Template Name: Single Column */
get_header(); ?>
	
	<div id="page">
	
		<div class="container wide">
			
			<div id="content">
                <?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
                </div>
				<?php endwhile; endif; ?>
			</div>
		
		</div>
	
	</div>

<?php get_footer(); ?>
