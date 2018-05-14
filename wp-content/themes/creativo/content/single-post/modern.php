<?php global $data, $show_featured, $items, $sidebar_show, $extra, $post_meta_position; 
$content_pos = $data['single_post_modern_pos'];
$content_height = ( get_post_meta($post->ID, 'pyre_pt_fullscreen', true) == 'yes') ? 'fullscreen' : $data['single_post_height_option'];
$parallax_render = $parallax_class = '';
$extra_row_class = $show_featured ? '' : 'no_featured_images';

if( $data['single_post_title_parallax'] && ( $data['single_post_modern_background'] == 'custom_image' || $data['single_post_modern_background'] == 'featured') 
	&& !get_post_meta($post->ID, 'pyre_youtube_bg', true) && !get_post_meta($post->ID, 'pyre_vimeo_bg', true) ) {
	$parallax_render = 'data-stellar-background-ratio="0.5" style="background-size: 100%; background-attachment:fixed;"';
	$parallax_class = 'parallax_class';
}


while(have_posts()): the_post();

if(get_post_meta($post->ID, 'pyre_slider_revolution', true) && get_post_meta($post->ID, 'pyre_slider_revolution', true) != '0') {
	$slider_alias = get_post_meta($post->ID, 'pyre_slider_revolution', true);
    ?>
    <div class="row_full">
        <?php echo do_shortcode('[rev_slider alias="'.$slider_alias.'"]'); ?>
    </div>
    <?php
}	

	if($show_featured == true) {
		
	?>
		<div class="row_full_width design_modern <?php echo $parallax_class . ' vertical_' . $content_pos; ?>" <?php echo $parallax_render; ?> data-height="<?php echo $content_height; ?>">			
		    <?php 
		    if(get_post_meta($post->ID, 'pyre_youtube_bg', true) != ''){ ?>		    	
			    <div class="modern_video_background">
			    	<div class="video-container">
			    		<div id="youtub_bg_video" video-id="<?php echo get_post_meta($post->ID, 'pyre_youtube_bg', true); ?>"></div>
			    		<?php wp_enqueue_script('youtube-api'); ?>			    		
			    	</div>
			    	<?php if( has_post_thumbnail() ) { ?>
			    		<div class="video-poster-mobile"></div>		
			    	<?php } ?>
			    </div>
			<?php
			}
			elseif(get_post_meta($post->ID, 'pyre_vimeo_bg', true) != ''){ ?>
			    <div class="modern_video_background">
			    	<div class="video-container">
			    		<iframe src="https://player.vimeo.com/video/<?php echo get_post_meta($post->ID, 'pyre_vimeo', true); ?>?autoplay=1&loop=1&title=0&byline=0&portrait=0"  frameborder="0" volume="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			    		
			    	</div>		
			    </div>
			<?php
			}
			?>
			<div class="modern_heading_title_wrap">
				<div class="modern_heading_title">
					<?php
					single_post_title_modern();
					?>
				</div>
			</div>
		</div>
	<?php
	}
	?>
	<div class="row design_modern <?php echo $extra_row_class; ?> clearfix">
		<div class="post_container">            
			<div class="blogpost">			                                           
                <div class="post-content">
                	<?php
                	if($show_featured==false) {
                	?>
                		<div class="modern_title_not_featured">
							<?php single_post_title_modern(); ?>
						</div>	
					<?php	
					}
					?>
                    <?php the_content(''); ?>
                    <div class="post_pages">
                    	<?php 
                    	wp_link_pages(array(
                    		'before' => '<div class="pagination minimal clearfix">' . __ ('Pages: ', 'Creativo'),
                    		'after' => '</div>'
                    	)); 
                    	?>
                    </div>
                </div>  
                <div class="share_with_tags clearfix">
                	<?php
					if($data['social_icons']){
					?>
		                <div class="social_icons">
							<div class="share_text"><?php _e('Share: ','Creativo'); ?></div>    
		                   	<?php cr_share_post(); ?>						
		                </div>
		            <?php
					}
					
					if($data['show_tags'] && has_tag()){
					?>
	                    <div class="post-atts">                                                               	   
	                        <span><?php _e('Tags: ','Creativo');?></span> <span class="single_post_tags"><?php  the_tags('',', '); ?></span>                             
	                    </div>
	                <?php }
	                ?>
                </div>
                <?php
                if($data['show_post_navi']) {
                    cr_posts_navigation();
				}
                ?>                      
            </div>
            <?php
			echo cr_author_box();
            
		    if($data['related_posts']) { 			
				if($data['related_posts_layout'] == 'vertical') {
                    related_posts_vertical();
                }
                else {
                    modern_related_posts(); 
                }
			} 
			if($data['show_comments']){			
            	comments_template('', true);            
			}
			?>
        </div>

        <?php
	     if( $sidebar_show ) {
	     ?>
	      	<!--BEGIN #sidebar .aside-->
	        <div class="sidebar">                
	        	<?php //generated_dynamic_sidebar(); 
	            if ( !function_exists( 'generated_dynamic_sidebar' ) || !generated_dynamic_sidebar() ):
	            endif;
	            ?>          
	        <!--END #sidebar .aside-->
	        </div>
	    <?php 
	    }
	    ?> 
	</div>          
<?php        
endwhile;	
wp_reset_query();
?>
     
     