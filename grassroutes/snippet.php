			<?php // Retrieve post content with custom word limit
			 function content($limit) {
      			$content = explode(' ', get_the_content(), $limit);
      			if (count($content)>=$limit) {
					array_pop($content);
					$content = implode(" ",$content).'&hellip; <a href="'. get_permalink($post->ID) . '">' . 'Read more&raquo;' . '</a>';
      			} else {
        			$content = implode(" ",$content);
      			} 
      			$content = preg_replace('/\[.+\]/','', $content);
      			$content = apply_filters('the_content', $content); 
      			$content = str_replace(']]>', ']]&gt;', $content);
      			return $content;
			} ?>
			
			<div id="content">
				<?php // displays gallery and full most recent post on first page followed by preceding posts limited to 150 words, 5 posts per page.
				 $page_num = $paged;
				
				query_posts('posts_per_page=5&paged='.$page_num);
				$count = 1; 
				if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<?php echo $paged; ?>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					
					<div class="date">
						<?php the_time('M j, Y'); ?> / By <strong><?php the_author(); ?></strong><br />
						Posted in <strong><?php the_category(' / '); ?></strong>
					</div>
					<?php if ($paged == 0) : ?>
						<?php if ($count == 1) : ?>
						<div class="galleria">
							<?php $args = array('post_type'   => 'attachment', 'numberposts' => -1, 'orderby' => 'menu_order', 'order' => 'ASC', 'post_parent' => $post->ID);
        					$attachments = get_posts($args);
							echo $attachments;
        					if ($attachments != 'array') {
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
						$count++; echo $count; ?>
					<?php else : ?>
						<?php echo content(150); ?>
						<?php echo do_shortcode('[sharethis]'); ?>
					<?php endif; ?>
				</div>
				<?php endwhile; ?>
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                </div>
                <?php endif; ?>
			</div>