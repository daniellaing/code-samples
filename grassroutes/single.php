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
					<h1><?php the_title(); ?></h1>
					
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> | <?php edit_post_link('Edit', '', ''); ?></strong>
					</div>
					<div class="galleria">
						<?php $args = array('post_type'   => 'attachment', 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_parent' => $post->ID);
        				$attachments = get_posts($args);
        				if ($attachments) {
            				foreach ($attachments as $attachment) {
							 echo wp_get_attachment_image( $attachment->ID, false ); }
        				} ?>
					</div>
					<?php the_content(); ?>
					
					<div class="tags">
						Tags: <?php the_tags('', ' / ', ''); ?>
					</div>
					
				</div>
				
				<?php comments_template(); ?>
				<?php endwhile; endif; ?>
			</div>
			
		</div>
	
	</div>

<?php get_footer(); ?>