<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to grassroutes_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage grassroutes
 * @since grassroutes 1.0
 */
?>

<?php if ( post_password_required() ) : ?>
			<div id="comments">
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'grassroutes' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
return; endif; ?>


<?php if ('open' != $post->comment_status && have_comments()) : ?>
	<div id="respond">
		<h3 id="reply-title"><?php _e('Comments have been disabled.', 'grassroutes'); ?></h3>
    </div>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<?php 
	/**
	 * Get the comment form.
	*/ 
	
	comment_form(array(
				'comment_notes_before' => '<p class="comment-notes">'.__('Your email address will not be published.', 'grassroutes').'</p>',
				'comment_notes_after'  => '<p class="form-allowed-tags">'.sprintf(__('', 'grassroutes'),'<code>'.allowed_tags().'</code>').'</p>',
				'id_form'              => 'commentform',
				'label_submit'         => __('Submit Comment', 'grassroutes'),
					   )); 

?>

<?php endif; // Ends the comment status ?>


<?php /* Lists all the comments for the current post */ ?>
<?php if ( have_comments() ) : ?>

<div id="comments">
    <h3><?php comments_number(__('No comment yet','grassroutes'), __('1 comment','grassroutes'), __("% comments", 'grassroutes') );?></h3>

    <ul class="clearfix">
        <?php
        /* Loop through and list the comments. Tell wp_list_comments()
         * to use grassroutes_comment() to format the comments.
         * If you want to overload this in a child theme then you can
         * define grassroutes_comment() and that will be used instead.
         * See grassroutes_comment() in functions.php for more.
         */
		 wp_list_comments(array('callback' => 'grassroutes_comment', 'style' => 'ol')); ?>
    </ul>
                    
		<?php // Are there comments to navigate through? ?>
        <?php if (get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <div class="comment-nav clearfix">
            <p><?php paginate_comments_links(); ?>&nbsp;</p>
        </div>
        <?php endif; // Ends the comment navigation ?>
</div>
<?php endif; // Ends the comment listing ?>