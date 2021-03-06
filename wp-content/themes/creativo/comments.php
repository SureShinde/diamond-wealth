<?php
global $data;
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'Creativo') ?></p>
	<?php
		return;
	}

/*-----------------------------------------------------------------------------------*/
/*	Display the comments + Pings
/*-----------------------------------------------------------------------------------*/

		if ( have_comments() ) : // if there are comments ?>
        
        <?php if ( ! empty($comments_by_type['comment']) ) : // if there are normal comments ?>
		
		<div id="comments" class="posts-boxes toppadding">
        	<div class="content_box_title">
        		<?php 
        		if ($data['single_post_design'] == 'modern') {
        		?>
        			<h5><?php _e('Article Comments', 'Creativo') ?></h5>
        		<?php
        		}
        		else {
        		?>
        			<span class="white smaller"><?php _e('Your thoughts here', 'Creativo') ?></span>
        	
        		<?php
        		}
        		?>
            </div>    
        </div>
		
		<ol class="commentlist">
			<?php wp_list_comments('type=comment&callback=comment_style'); ?>
        </ol>

        <?php endif; ?>

        <?php if ( ! empty($comments_by_type['pings']) ) : // if there are pings ?>
		
		<h3 id="pings"><?php _e('Trackbacks for this post', 'Creativo') ?></h3>
		
		<ol class="pinglist">
        <?php wp_list_comments('type=pings&callback=comment_style'); ?>
        </ol>

        <?php endif; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php previous_comments_link(); ?></div>
			<div class="alignright"><?php next_comments_link(); ?></div>
		</div>
		
		<?php
		
		
/*-----------------------------------------------------------------------------------*/
/*	Deal with no comments or closed comments
/*-----------------------------------------------------------------------------------*/
		
		if ('closed' == $post->comment_status ) : // if the post has comments but comments are now closed ?>
		
		<p class="nocomments"><?php _e('Comments are now closed for this article.', 'Creativo') ?></p>
		
		<?php endif; ?>

 		<?php else :  ?>
		
        <?php if ('open' == $post->comment_status) : // if comments are open but no comments so far ?>

        <?php else : // if comments are closed ?>
		
		<?php if (is_single()) { ?><p class="nocomments"><?php _e('Comments are closed.', 'Creativo') ?></p><?php } ?>

        <?php endif; ?>
        
<?php endif;


/*-----------------------------------------------------------------------------------*/
/*	Comment Form
/*-----------------------------------------------------------------------------------*/

	if ( comments_open() ) : ?>
		<?php 
    	if ($data['single_post_design'] == 'modern' || $data['comments_style'] == 'modern') {
    		?>
			<div id="respond">
				<div class="posts-boxes toppadding">		
		            <div class="content_box_title">
		                <h5 class="modern_big"><?php comment_form_title( __('Leave a Reply', 'Creativo'), __('Leave a Reply to %s', 'Creativo') ); ?></h5>
		                <span class="sub_head"><?php _e('Your email will not be published','Creativo'); ?></span>
		            </div>
		        </div>
				<div class="cancel-comment-reply">
					<?php cancel_comment_reply_link(); ?>
				</div>
				<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
					<p><?php printf(__('You must be %1$slogged in%2$s to post a comment.', 'Creativo'), '<a href="'.get_option('siteurl').'/wp-login.php?redirect_to='.urlencode(get_permalink()).'">', '</a>') ?></p>
					<?php else : ?>
				
					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				
						<?php if ( is_user_logged_in() ) : ?>
					
							<p><?php printf(__('Logged in as %1$s. %2$sLog out &raquo;%3$s', 'Creativo'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>', '<a href="'.(function_exists('wp_logout_url') ? wp_logout_url(get_permalink()) : get_option('siteurl').'/wp-login.php?action=logout" title="').'" title="'.__('Log out of this account', 'Creativo').'">', '</a>') ?></p>
					
						<?php else : ?>

							<div class="comment_fields clearfix">
					
								<div class="comment_half">
									<label for="author"><?php _e('Name', 'Creativo') ?> <?php if ($req) _e("*", 'Creativo'); ?></label>
									<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1"/>						
								</div>
							
								<div class="comment_half last">
									<label for="email"><?php _e('Email', 'Creativo') ?> <?php if ($req) _e("*", 'Creativo'); ?></label>
									<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
								</div>						

							</div>
					
						<?php endif; ?>
					
						<div class="comment_textarea">
							<label for="comment"><?php _e('Message', 'Creativo') ?></label>
							<textarea name="comment" id="comment" cols="58" rows="5" tabindex="4"></textarea>
						</div>
						
						<!--<p class="allowed-tags"><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
					
						<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'Creativo') ?>" class="button large rounded button_default" />
						<?php comment_id_fields(); ?>
						</p>
						<?php do_action('comment_form', $post->ID); ?>
				
					</form>

					<?php /*

					$comments_args = array('title_reply'=>'','comment_notes_before'=>'');

					comment_form($comments_args); */ ?>

				<?php endif; // If registration required and not logged in ?>
			</div>
    		<?php
    	}
    	else {
        ?>
			<div id="respond">
				<div class="posts-boxes toppadding">		
		            <div class="content_box_title">
		                <span class="white smaller"><?php comment_form_title( __('Leave a Reply', 'Creativo'), __('Leave a Reply to %s', 'Creativo') ); ?></span>
		            </div>
		        </div>
				<div class="cancel-comment-reply">
					<?php cancel_comment_reply_link(); ?>
				</div>
			
				<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
				<p><?php printf(__('You must be %1$slogged in%2$s to post a comment.', 'Creativo'), '<a href="'.get_option('siteurl').'/wp-login.php?redirect_to='.urlencode(get_permalink()).'">', '</a>') ?></p>
				<?php else : ?>
			
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			
					<?php if ( is_user_logged_in() ) : ?>
				
					<p><?php printf(__('Logged in as %1$s. %2$sLog out &raquo;%3$s', 'Creativo'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>', '<a href="'.(function_exists('wp_logout_url') ? wp_logout_url(get_permalink()) : get_option('siteurl').'/wp-login.php?action=logout" title="').'" title="'.__('Log out of this account', 'Creativo').'">', '</a>') ?></p>
				
					<?php else : ?>
				
					<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" style="width:50%;" />
					<label for="author"><small><?php _e('Name', 'Creativo') ?> <?php if ($req) _e("*", 'Creativo'); ?></small></label></p>
				
					<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" style="width:50%;" />
					<label for="email"><small><?php _e('Mail <span>(will not be published)</span>', 'Creativo') ?> <?php if ($req) _e("*", 'Creativo'); ?></small></label></p>
				
					<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" style="width:50%;" />
					<label for="url"><small><?php _e('Website', 'Creativo') ?></small></label></p>
				
					<?php endif; ?>
				
					<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>
					
					<!--<p class="allowed-tags"><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
				
					<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment', 'Creativo') ?>" class="button small button_default" />
					<?php comment_id_fields(); ?>
					</p>
					<?php do_action('comment_form', $post->ID); ?>
			
				</form>

				<?php /*

				$comments_args = array('title_reply'=>'','comment_notes_before'=>'');

				comment_form($comments_args); */ ?>

			<?php endif; // If registration required and not logged in ?>
			</div>
		<?php
		}
		?>
	<?php endif; // if you delete this the sky will fall on your head ?>
