<?php // Template Name: Blog Style Small Images ?>
<?php get_header(); ?>

<?php 
global $data; 	
$sidebar = get_post_meta( $post->ID, 'pyre_en_sidebar', true );
$current_page_id = $post->ID;

$post_count = ( get_post_meta($post->ID, 'pyre_posts_count', true) != '' ) ? get_post_meta($post->ID, 'pyre_posts_count', true) : $data['posts_count'];

if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }

$show_extra_content = $paged == 1 ? true : ($data['extra_content'] == 'no' ? false : true);

if( $show_extra_content ) {
?>
	<div class="row_full">
	    	<?php while(have_posts()): the_post(); ?>                	          	
		    	<?php the_content(); ?>                                   
	        <?php endwhile; ?> 
	</div>
<?php
}
?>
<div class="row clearfix">
	<div class="post_container">

    <?php
    	
		$show_featured_post = get_post_meta( $post->ID, 'pyre_show_first_post_big_layout', true ) == 'yes' ? true : false;
		
		$category = ( get_post_meta($post->ID, 'pyre_posts_category', true) != 0 ) ? $category = '&cat='.get_post_meta($post->ID, 'pyre_posts_category', true) : '';
		$blog = new WP_Query('showposts=' . $post_count.$category . '&paged='.$paged);	

		/* Check the position of the Post Title and Meta */
		$featured_post_position = (get_post_meta($post->ID, 'pyre_featured_post_title_meta_pos', true) != NULL) ? get_post_meta($post->ID, 'pyre_featured_post_title_meta_pos', true) : $data['post_meta_style'];
		if( $featured_post_position == 'default' ) {
			$featured_post_position = $data['post_meta_style'];
		}

		/* add extra class if we have the featured post set to yes*/
    	//$extra_class = ( get_post_meta( $post->ID, 'pyre_show_first_post_big_layout', true ) == 'yes' ) ? ' featured_post' : '';
    	
				
		while($blog->have_posts()): $blog->the_post(); 	
		?>
        	<?php $more = 0; ?>		
			
				<?php 
				if( $blog->current_post == 0 && !is_paged() && $show_featured_post ) { 					
				?>
					<div class="blogpost archive_pages featured_post">
						<?php					

						if( $sidebar == 'no' ) {
							$thumbnail = 'full';
							$thumb_to_search = '';
						} 
						else {
							$thumbnail = 'blog-xxl';
							$thumb_to_search = '800x533';
						}						

						if($featured_post_position == 'above') { 
							cr_post_meta();
				            cr_featured_images( $thumbnail, $thumb_to_search );				            
				        }
				        else {				            
				            cr_featured_images( $thumbnail, $thumb_to_search );
				            cr_post_meta();
				        }
				        ?>
				        <div class="post-content">
				            <?php 
				            if($data['post_content']!='Full Content') { 
				                 echo string_limit_words(get_the_excerpt(), ($data['post_excerpt_length']) ? $data['post_excerpt_length'] : 30  ).'...';  
				            }
				            else{
				                the_content();
				            }
				            get_template_part('content/post-share');
				            ?>
				        </div>
				    </div>
				<?php
				}
				else{
					if( $sidebar == 'no' ) {
						$thumbnail = 'blog-large';
						$thumb_to_search = '600x400';
					}
					else {	
						$thumbnail = 'blog-small';
						$thumb_to_search = '345x230';
					}
					?>
					<div class="blogpost archive_pages layout_<?php echo $data['post_meta_design']; ?> sm_images clearfix">
						<?php
						if($data['post_meta_design'] !='modern') { 
							get_template_part('content/layout/blog-small-default');
						} 
						else {
							get_template_part('content/layout/blog-small-modern');	
						}
						?>  
	                </div>    
                <?php
               	}
               	?>
            	                      
            <?php
		endwhile;
		wp_reset_query();	
		?>
        <?php cr_pagination($blog->max_num_pages, $range = 20); ?> 
     </div>
     <?php
     if( get_post_meta($post->ID, 'pyre_en_sidebar', true) != 'no' ) {
     ?>
      	<!--BEGIN #sidebar .aside-->
        <div class="sidebar" style="<?php echo $sidebar; ?>">                
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
		
<?php get_footer(); ?>