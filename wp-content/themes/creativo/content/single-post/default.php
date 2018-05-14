<?php global $data, $show_featured, $items, $sidebar_show, $extra, $post_meta_position; ?>
<?php
if(get_post_meta($post->ID, 'pyre_slider_revolution', true) && get_post_meta($post->ID, 'pyre_slider_revolution', true) != '0') {
    $slider_alias = get_post_meta($post->ID, 'pyre_slider_revolution', true);
    ?>
    <div class="row_full">
        <?php echo do_shortcode('[rev_slider alias="'.$slider_alias.'"]'); ?>
    </div>
    <?php
}
?>
<div class="row clearfix">
    
	<div class="post_container">            
    <?php				
		while(have_posts()): the_post(); 	
		?>
			<div class="blogpost">
				<?php
				/* if featured images and videos are set to be displayed */
				if($show_featured) {					

					if($post_meta_position == 'below') { 
	                    get_template_part('content/featured-images');
	                    cr_post_meta();	                    
	            	} 
	                else {
	                	cr_post_meta(); 
	                	get_template_part('content/featured-images');	                    	
	                }
	            }
	            else {
	            	cr_post_meta();
	            }
                ?>                                             
                            
                <div class="post-content">
                    <?php the_content(''); ?>
                </div> 
                <?php 
                wp_link_pages( array(
                    'before'      => '<div class="single_blogpost_split"></div><div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'Creativo' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span class="navigation_arrow">',
                    'link_after'  => '</span>',
                    ) );
                ?>                       
                <?php 
				if($data['show_tags'] && has_tag()){
				?>
                    <div class="post-atts">                                                               	   
                        <span class="single_post_tags"><?php the_tags('',' '); ?></span>                                                                       
                    </div>
                <?php } 

                if($data['social_icons']){
                ?>                    
                    <div class="social_icons <?php echo ($data['social_icons_design'] == 'vertical' ? 'vertical_sharing' : ''); ?>">
                        <div class="share_text"><?php echo ($data['social_share_text'] !='' ? $data['social_share_text'] : __('Share this post: ','Creativo')); ?></div>    
                            <?php cr_share_post(); ?>
                        <div class="clr"></div>
                    </div>
                <?php
                }                

                if($data['show_post_navi']){              
                	cr_posts_navigation();
				}
				?>
            </div>
            
            
            <div class="single_blogpost_split"></div> 
            
            <?php
			/* Author Function output */
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
		endwhile;	
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