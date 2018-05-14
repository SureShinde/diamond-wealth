<?php global $data, $post_meta_position, $current_page_id; ?>

<div class=content_wrapper>
	<?php
	if($post_meta_position == 'above') { 
		cr_post_meta();					
		cr_featured_images('full','');							
	}
	else {							
		cr_featured_images('full','');
		cr_post_meta();	
	}
	$excerpt = ( get_post_meta($current_page_id, 'pyre_excerpt_length', true) !='') ? get_post_meta($current_page_id, 'pyre_excerpt_length', true) : ( $data['post_excerpt_length'] =  ( $data['post_excerpt_length'] ) ? $data['post_excerpt_length'] : 30 );
	?>

	<div class="post-content archive">
		<?php 
		if($data['post_content']!='Full Content') { 
	    	 echo string_limit_words(get_the_excerpt(), $excerpt ) . '...'; 
		}
		else{
			the_content();
		}
		?>
	</div>
		<?php 
	if ( $data['show_view_more']){
	?>
	    <div class="post-atts archive">                                
	        <?php if($data['show_view_more']){ ?>
	            <a href="<?php the_permalink(); ?>" class="button small button_default view_more_button"><?php _e('Read More &rarr;', 'Creativo'); ?></a>
	        <?php } ?>   
	    </div>
	<?php } ?>
</div>
