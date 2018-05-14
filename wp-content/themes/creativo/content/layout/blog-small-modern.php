<?php
global $data, $thumbnail, $thumb_to_search, $current_page_id;
if(has_post_thumbnail() || get_post_meta(get_the_ID(), 'pyre_youtube', true) || get_post_meta(get_the_ID(), 'pyre_vimeo', true) || (get_post_meta(get_the_ID(), 'pyre_mp3', true) != '' || get_post_meta(get_the_ID(), 'pyre_oga', true) != '' || get_post_meta(get_the_ID(), 'pyre_embed_code', true) != '' )):
?>
    <div class="blogpost_small_pic">
		<?php cr_featured_images( $thumbnail, $thumb_to_search); ?>
    </div>    
<?php
else:
	$full_width = 'width:100%;';
endif;
$excerpt = ( get_post_meta($current_page_id, 'pyre_excerpt_length', true) !='') ? get_post_meta($current_page_id, 'pyre_excerpt_length', true) : ( $data['post_excerpt_length'] =  ( $data['post_excerpt_length'] ) ? $data['post_excerpt_length'] : 30 );
?>
<div class="blogpost_small_desc <?php echo $full_width; ?>">
    <?php
	if($data['post_meta_category_pos'] == 'above') { 
		cr_post_category();
		echo cr_post_meta_title();							
	}
	else {
		echo cr_post_meta_title();							
		cr_post_category();		
	}	
	?>
	<?php cr_post_meta_ul_only_big_images(); ?>
    <div class="post-content">
        <?php 
		if($data['post_content']!='Full Content') { 
			echo string_limit_words(get_the_excerpt(), $excerpt ) . '...'; 
			if($data['show_view_more'] ){ ?>
	        	<a href="<?php the_permalink(); ?>" class="modern_layout view_more_button"><?php _e('Read More ', 'Creativo'); ?></a>
	        <?php 
	    	}  
		}
		else{
			the_content();
		}
		?> 
		       
    </div>
</div>