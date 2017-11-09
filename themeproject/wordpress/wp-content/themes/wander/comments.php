<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','wander'); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
	<h4 class="comments-title"><?php	printf( _n( 'ONE Comments%2$s', '%1$s Comments ', get_comments_number() ,'coco'),
									number_format_i18n( get_comments_number() ), ' ' ); ?></h4>
	
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>	
	
		<div class="media-list">
	<?php wp_list_comments ( array (          
            'type'=>'comment',
            'short_ping' => true,
            'avatar_size' => 70,
            'callback' => 'wander_comment::wander_comments' 
           ) );?>
		</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.','wander'); ?></p>

	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>


<div class="review_form_holder">
            <div class="cforms">
<h4 class="comments-title"><?php comment_form_title( __('Post a Comment','wander') ); ?></h4>

<div id="cancel-comment-reply">
	<small><?php cancel_comment_reply_link() ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.','wander'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>
<div class="fill-comment-form">
<div class="contact-form">
<form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post" id="sky-form" class="sky-form">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.','wander'), get_edit_user_link(), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('Log out of this account','wander'); ?>"><?php _e('Log out &raquo;','wander'); ?></a></p>

<?php else : ?>

<fieldset>				
                 
                  <label class="input">
					<input  placeholder="Name" type="text" name="author" id="name" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				  </label></fieldset>
                 <fieldset>	
                  <label class="input">
					<input  placeholder="Your email here" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				  </label>
				  </fieldset>
				

<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>','wander'), allowed_tags()); ?></small></p>-->
			
             <fieldset class="textareaa">  
                <label class="textarea">
					<textarea rows="5" name="comment" id="comment" cols="100" tabindex="4" placeholder="<?php echo __('Comment...', 'wander'); ?>"></textarea></p>
				</label>
</fieldset>		
<input class="btn btn-primary btn-lg btn-appear mt20 button seven" name="submit" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Now','wander'); ?>" />
<?php comment_id_fields(); ?>
</footer>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>
</div>
<?php endif; // If registration required and not logged in ?>

</div>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>

