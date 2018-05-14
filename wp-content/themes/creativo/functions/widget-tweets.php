<?php
add_action('widgets_init', 'tweets_load_widgets');

function tweets_load_widgets()
{
	register_widget('Tweets_Widget');
}
class Tweets_Widget extends WP_Widget {
	
	function __construct()
	{
		$widget_ops = array('classname' => 'twitter-widget', 'description' => '');

		$control_ops = array('id_base' => 'tweets-widget');

		parent::__construct( 'tweets-widget', __('Creativo Twitter Feed', 'Creativo'), $widget_ops, $control_ops );
		//$this->WP_Widget('tweets-widget', 'Creativo Twitter Feed', $widget_ops, $control_ops);
	}


	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title'] );		
		$consumer_key = $instance['consumer_key'];
		$consumer_secret = $instance['consumer_secret'];
		$access_token = $instance['access_token'];
		$access_token_secret = $instance['access_token_secret'];
		$twitter_id = $instance['twitter_id'];
		$count = $instance['count'];

		$text_color = $instance['text_color'];
		$link_color = $instance['link_color'];		
		$show_follow = $instance['show_follow'];
		$show_icon = $instance['show_icon']; $render_icon = $instance['show_icon'] != 'no' ? '<i class="fa fa-twitter"></i>' : '';
		$alignment = $instance['alignment'];
	
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title ) {
			echo $before_title . $title . $after_title;
		}
		
		if($twitter_id && $consumer_key && $consumer_secret && $access_token && $access_token_secret && $count) { 
		
			$transName = 'list_tweets_'.$args['widget_id'];
			$cacheTime = 10;
			delete_transient($transName);
			if(false === ($twitterData = get_transient($transName))) {
			     // require the twitter auth class
			     @require_once 'twitteroauth/twitteroauth.php';
			     $twitterConnection = new TwitterOAuth(
								$consumer_key,	// Consumer Key
								$consumer_secret,   	// Consumer secret
								$access_token,       // Access token
								$access_token_secret    	// Access token secret
								);
			    $twitterData = $twitterConnection->get(
								  'statuses/user_timeline',
								  array(
								    'screen_name'     => $twitter_id,
								    'count'           => $count,
								    'exclude_replies' => false
								  )
								);
			     if($twitterConnection->http_code != 200)
			     {
			          $twitterData = get_transient($transName);
			     }

			     // Save our new transient.
			     set_transient($transName, $twitterData, 60 * $cacheTime);
			};
			$twitter = get_transient($transName);
			if($twitter && is_array($twitter)) {
				//var_dump($twitter);
				$id = rand(0,999);
				if( $text_color!='' || $link_color != '' || $alignment != 'left' ) {
				?>
					<style>
						#twitter_update_list_<?php echo $id; ?> {
							color: <?php echo $text_color; ?>;
							text-align: <?php echo $alignment; ?>;							
						}
						<?php 
						if($show_icon =='no') {
						?>
							#twitter_update_list_<?php echo $id; ?>, #twitter_update_list_<?php echo $id; ?> li {
								padding-left: 0;
							}
							#twitter_update_list_<?php echo $id; ?> li:before {
								content: initial;
							}
						<?php
						}
						?>
						#twitter_update_list_<?php echo $id; ?> a {
							color: <?php echo $link_color; ?>;
						}
					</style>
				<?php 
				} 
				?>
		        <ul id="twitter_update_list_<?php echo $id; ?>" class="twitter">
		        	<?php foreach($twitter as $tweet): ?>
		                <li><?php echo $render_icon; ?>
		                	
		                    	<?php
								$latestTweet = $tweet->text;
								$latestTweet = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '&nbsp;<a href="http://$1" target="_blank">http://$1</a>&nbsp;', $latestTweet);
								$latestTweet = preg_replace('/@([a-z0-9_]+)/i', '&nbsp;<a href="http://twitter.com/$1" target="_blank">@$1</a>&nbsp;', $latestTweet);
								echo $latestTweet;					
								$twitterTime = strtotime($tweet->created_at);
								$timeAgo = $this->ago($twitterTime);
								?>						
								<a href="http://twitter.com/<?php echo $tweet->user->screen_name; ?>/statuses/<?php echo $tweet->id_str; ?>" class="jtwt_date"><?php echo $timeAgo; ?></a>
		                   
		                </li>            
		       		<?php endforeach; ?> 
		        </ul>
		        <?php if($show_follow != 'no') { ?>
		        	<p class="nobottommargin topmargin2 tright"><a href="http://twitter.com/<?php echo $twitter_id; ?>" class="ntip" title="Follow <?php echo $twitter_id; ?> on Twitter"><?php _e('Follow on Twitter &rarr;', 'Creativo') ?></a></p>
		        <?php } ?>
			
	        <?php
			}
		}		

		echo $after_widget;
	}
	
	function ago($time)
	{
	   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	   $lengths = array("60","60","24","7","4.35","12","10");

	   $now = time();

	       $difference     = $now - $time;
	       $tense         = "ago";

	   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	       $difference /= $lengths[$j];
	   }

	   $difference = round($difference);

	   if($difference != 1) {
	       $periods[$j].= "s";
	   }

	   return "$difference $periods[$j] ago ";
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['consumer_key'] = $new_instance['consumer_key'];
		$instance['consumer_secret'] = $new_instance['consumer_secret'];
		$instance['access_token'] = $new_instance['access_token'];
		$instance['access_token_secret'] = $new_instance['access_token_secret'];
		$instance['twitter_id'] = $new_instance['twitter_id'];
		$instance['count'] = $new_instance['count'];
		$instance['text_color'] = $new_instance['text_color'];
		$instance['link_color'] = $new_instance['link_color'];
		$instance['show_icon'] = $new_instance['show_icon'];
		$instance['show_follow'] = $new_instance['show_follow'];
		$instance['alignment'] = $new_instance['alignment'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 
	function form( $instance ) {

		$defaults = array('title' => __('Recent Tweets', 'Creativo'), 'twitter_id' => '', 'count' => 3);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p><a href="http://dev.twitter.com/apps"><?php _e('Find or Create your Twitter App', 'Creativo'); ?></a></p>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('consumer_key'); ?>"><?php _e('Consumer Key:', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('consumer_key'); ?>" name="<?php echo $this->get_field_name('consumer_key'); ?>" value="<?php echo $instance['consumer_key']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('consumer_secret'); ?>"><?php _e('Consumer Secret:', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('consumer_secret'); ?>" name="<?php echo $this->get_field_name('consumer_secret'); ?>" value="<?php echo $instance['consumer_secret']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('access_token'); ?>"><?php _e('Access Token:', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('access_token'); ?>" name="<?php echo $this->get_field_name('access_token'); ?>" value="<?php echo $instance['access_token']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('access_token_secret'); ?>"><?php _e('Access Token Secret:', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('access_token_secret'); ?>" name="<?php echo $this->get_field_name('access_token_secret'); ?>" value="<?php echo $instance['access_token_secret']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('twitter_id'); ?>"><?php _e('Twitter ID:', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter_id'); ?>" name="<?php echo $this->get_field_name('twitter_id'); ?>" value="<?php echo $instance['twitter_id']; ?>" />
		</p>

			<label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Number of Tweets:', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" value="<?php echo $instance['count']; ?>" />
		</p>

		</p>

			<label for="<?php echo $this->get_field_id('text_color'); ?>"><?php _e('Text Color (e.g: #ddccdd):', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('text_color'); ?>" name="<?php echo $this->get_field_name('text_color'); ?>" value="<?php echo $instance['text_color']; ?>" />
		</p>

		</p>

			<label for="<?php echo $this->get_field_id('link_color'); ?>"><?php _e('Text Color (e.g: #ddccdd):', 'Creativo'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('link_color'); ?>" name="<?php echo $this->get_field_name('link_color'); ?>" value="<?php echo $instance['link_color']; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('show_icon'); ?>"><?php _e('Show Twitter Icon:','Creativo');?></label>
			<select id="<?php echo $this->get_field_id('show_icon'); ?>" name="<?php echo $this->get_field_name('show_icon'); ?>" class="widefat" style="width:100%;">
			    <option <?php selected( $instance['show_icon'], 'yes'); ?> value="small"><?php _e('Yes','Creativo');?></option>
			    <option <?php selected( $instance['show_icon'], 'no'); ?> value="no"><?php _e('No','Creativo');?></option> 			    
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('alignment'); ?>"><?php _e('Text Alignment','Creativo');?></label>
			<select id="<?php echo $this->get_field_id('alignment'); ?>" name="<?php echo $this->get_field_name('alignment'); ?>" class="widefat" style="width:100%;">
			    <option <?php selected( $instance['alignment'], 'left'); ?> value="left"><?php _e('Left','Creativo');?></option>
			    <option <?php selected( $instance['alignment'], 'center'); ?> value="center"><?php _e('Center','Creativo');?></option> 			    
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('show_follow'); ?>"><?php _e('Show Follow on Twitter link:','Creativo');?></label>
			<select id="<?php echo $this->get_field_id('show_follow'); ?>" name="<?php echo $this->get_field_name('show_follow'); ?>" class="widefat" style="width:100%;">
			    <option <?php selected( $instance['show_follow'], 'yes'); ?> value="small"><?php _e('Yes','Creativo');?></option>
			    <option <?php selected( $instance['show_follow'], 'no'); ?> value="no"><?php _e('No','Creativo');?></option> 			    
			</select>
		</p>
		
	<?php
	}
}

?>