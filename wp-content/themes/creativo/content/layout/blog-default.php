<?php	
global $data, $post_meta_position,$thumbnail, $thumb_to_search, $current_page_id; 				
if( $post_meta_position == 'above') { 
    cr_post_meta();
    cr_featured_images( $thumbnail, $thumb_to_search );		            
}
else {		            
    cr_featured_images( $thumbnail, $thumb_to_search );
    cr_post_meta();
}
$excerpt = ( get_post_meta($current_page_id, 'pyre_excerpt_length', true) !='') ? get_post_meta($current_page_id, 'pyre_excerpt_length', true) : ( $data['post_excerpt_length'] =  ( $data['post_excerpt_length'] ) ? $data['post_excerpt_length'] : 30 );

?>

<div class="post-content archive">
	<?php 
	if($data['post_content']!='Full Content') { 
    	 echo string_limit_words(get_the_excerpt(), $excerpt  ).'...';  
	}
	else{
		the_content();
	}
	if ( $data['show_view_more'] || $data['social_icons_archives']){
	?>
	    <div class="post-atts archive clearfix"> 
	        <?php if( $data['social_icons_archives'] ) {                                            
	            cr_share_post();
	        }
	        if($data['show_view_more'] ){ ?>
	            <a href="<?php the_permalink(); ?>" class="button small button_default view_more_button"><?php _e('Continue Reading ', 'Creativo'); ?>&rarr;</a>
	        <?php } ?>   
	    </div>
	<?php }
	?>
</div> 