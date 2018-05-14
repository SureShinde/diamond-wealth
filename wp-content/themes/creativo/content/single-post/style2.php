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
    <?php 
    if($show_featured) {
        get_template_part('content/featured-images'); 
    }
    ?>
	<div class="post_container">            
    <?php				
		while(have_posts()): the_post(); 	
		?>
			<div class="blogpost">
				<?php 				
	            cr_post_meta();	           
                ?>                                             
                            
                <div class="post-content">
                    <?php the_content(''); ?>
                    <?php
                    if($data['social_icons']){
                    ?>
                        
                        <div class="social_icons <?php echo ($data['social_icons_design'] == 'vertical' ? 'vertical_sharing' : ''); ?> clearfix">
                            <div class="share_text"><?php _e('Share this post: ','Creativo'); ?></div>
                                <?php cr_share_post(); ?>                                
                        </div>
                    <?php
                    }
                    ?>
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
                        <span><?php _e('Tags: ','Creativo');?></span> <span class="single_post_tags"><?php  the_tags('',' '); ?></span>                                                                       
                    </div>
                <?php } 

                if($data['show_post_navi']) {
                    cr_posts_navigation();
				}
				?>
            </div>
            
            
            <div class="single_blogpost_split"></div> 
            
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
            ?>
                    
            <?php
			if($data['show_comments']){
            ?>         
                <div class="design_modern styling2">
                    <?php comments_template('', true); ?>
                </div>
            <?php
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