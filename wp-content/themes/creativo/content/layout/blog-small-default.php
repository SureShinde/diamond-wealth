<?php
global $data, $thumbnail, $thumb_to_search, $current_page_id;
if(has_post_thumbnail() || get_post_meta(get_the_ID(), 'pyre_youtube', true) || get_post_meta(get_the_ID(), 'pyre_vimeo', true)):
?>
    <div class="blogpost_small_pic">
		<?php cr_featured_images( $thumbnail, $thumb_to_search); ?>
    </div>    
<?php
else:
	$full_width = 'width:98%;';
endif;
$excerpt = ( get_post_meta($current_page_id, 'pyre_excerpt_length', true) !='') ? get_post_meta($current_page_id, 'pyre_excerpt_length', true) : ( $data['post_excerpt_length'] =  ( $data['post_excerpt_length'] ) ? $data['post_excerpt_length'] : 30 );
?>
<div class="blogpost_small_desc <?php echo $full_width; ?>">
    <?php cr_post_meta(); ?>
    <div class="post-content">
        <?php 
		if($data['post_content']!='Full Content') { 
			 echo string_limit_words(get_the_excerpt(), $excerpt ).'...';  
		}
		else{
			the_content();
		}
		?>
        <?php 
        if( $data['show_view_more'] ) { ?>
            <div class="small_read_more"><a href="<?php the_permalink(); ?>"><?php _e('Continue Reading ', 'Creativo'); ?>&rarr;</a></div>
        <?php
        } 
        ?>
    </div>
</div>