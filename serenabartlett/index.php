<?php get_header(); ?>
		
		<div id="content">
			
			<div class="title">
				<?php if (get_post_meta($post->ID, 'Title', true)) : ?>
				<?php echo get_post_meta($post->ID, 'Title', true); ?>
				<?php else : ?>
				<?php the_title(); ?>
				<?php endif; ?>
				
				<div class="breadcrumbs">
					<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
				</div>
				
			</div>
			
			<?php if (have_posts()) : ?>
			<div class="container_top"></div>
			<div class="entry ">
				<?php while (have_posts()) : the_post(); ?>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<?php the_content(); ?>
					<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=GrassRoutesGuides', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
						<div>
							<h3>Subscribe to GrassRoutesTravel.com</h3>
							<input type="text" name="email" value="your email address" onfocus="if(this.value=='your email address'){this.value=''};" onblur="if(this.value==''){this.value='your email address'};" />
							<input type="hidden" value="GrassRoutesGuides" name="uri"/>
							<input type="hidden" name="loc" value="en_US"/>
							<input type="image" src="<?php bloginfo('template_directory'); ?>/images/subscribe_button.png" alt="subscribe" />
							<!--<p>Delivered by <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></p>-->
						</div>
					</form>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="container_bottom"></div>
			
			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Previous Entry') ?></div>
				<div class="alignright"><?php previous_posts_link('Next Entry &raquo;') ?></div>
			</div>
			<?php endif; ?>
		</div>
		
<?php get_footer(); ?>