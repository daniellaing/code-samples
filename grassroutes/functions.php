<?php

// Max upload size

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// Register Sidebars
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div class="card">',
'after_widget' => '</div><div class="card_bottom"></div></div>',
'before_title' => '<h2>',
'after_title' => '</h2><div class="card_inner">',
));


// Thumbnails
add_theme_support('post-thumbnails');

// Show all Images 
function getImages(){ 
        
}

// Excerpt
/* function new_excerpt_more($more) {
       global $post;
	return '&hellip; <a href="'. get_permalink($post->ID) . '">' . 'Read more&raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length'); */

// Custom Excerpt

function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'&hellip; <a href="'. get_permalink($post->ID) . '">' . 'Read more&raquo;' . '</a>';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

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
}

/* Defines the callback function for use with wp_list_comments(). This function controls how comments are displayed. */

if (!function_exists('grassroutes_comment')) :

	function grassroutes_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
			<li id="comment-<?php comment_ID(); ?>" <?php comment_class('clearfix'); ?>>
					
				<div class="comment-meta">
					<?php
					$urlHome = get_option('home');
					echo get_avatar( $comment, $size='45', $default = $urlHome . '/wp-content/themes/grassroutes/images/grassroutes_avatar.png' ); ?>
					<h4><?php comment_author_link(); ?></h4>
                    <?php /* translators: %1$s is the comment date, %2#s is the comment time */ ?>
					<?php printf(__('%1$s at %2$s', 'grassroutes'), get_comment_date(), get_comment_time()); ?>
				</div>
				
				<div class="comment-entry">
					<?php if ($comment->comment_approved == '0') : ?>
					<p><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
					<?php else : ?>
						<?php comment_text(); ?>
                    <?php endif; ?>
				</div>
						
				<div class="comment-reply">
					<?php edit_comment_link(__('Edit comment','grassroutes'),'',' / '); ?>
					<?php comment_reply_link(array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => __('Reply', 'grassroutes'))); ?>
                </div>
                
<?php } endif;

/* Customise the comment form */

// Starting with the default fields
function grassroutes_comment_form_fields(){
	$fields =  array(
		'author' => '<p class="comment-form-author"><label for="author" class="grassroutes_form_label">'.__('Name:','grassroutes').'</label><input id="author" name="author" type="text" /></p>',
		'email'  => '<p class="comment-form-email"><label for="email" class="grassroutes_form_label">' . __('Email:','grassroutes').'</label><input id="email" name="email" type="text" /></p>',
		'url'    => '<p class="comment-form-url"><label for="url" class="grassroutes_form_label">'.__('Website:','grassroutes').'</label><input id="url" name="url" type="text" /></p>',
	);
	
	
	return $fields;
}

// The comment field textarea
function grassroutes_comment_textarea(){
	echo '<p class="clearfix"><label class="grassroutes_form_label">'.__('Message:','grassroutes').'</label><br />
	<textarea name="comment" id="comment" cols="" rows="" tabindex="4"></textarea></p><div class="grassroutes_wrap">';
	
}

// Add all the filters we defined
add_filter('comment_form_default_fields', 'grassroutes_comment_form_fields');
add_filter('comment_form_field_comment', 'grassroutes_comment_textarea');

// Share this shortcode

if (function_exists('st_makeEntries')) :
add_shortcode('sharethis', 'st_makeEntries');
endif;

?>