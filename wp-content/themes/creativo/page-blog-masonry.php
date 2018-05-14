<?php // Template Name: Blog Style Masonry ?>
<?php get_header(); ?>

<?php
global $data;
$current_page_id = $post->ID;
$sidebar = get_post_meta( $post->ID, 'pyre_en_sidebar', true );
$post_count = ( get_post_meta($post->ID, 'pyre_posts_count', true) != '' ) ? get_post_meta($post->ID, 'pyre_posts_count', true) : $data['posts_count'];
$grid_columns = ( get_post_meta($post->ID, 'pyre_grid_cols', true) ) ? get_post_meta($post->ID, 'pyre_grid_cols', true) : 4;
$force_full_width = ( get_post_meta($post->ID, 'pyre_force_full_width', true) == 'yes' )	? 'force_full_width' : '';

/* Check the position of the Post Title and Meta */
$post_meta_position = (get_post_meta($post->ID, 'pyre_post_title_meta_pos', true) != NULL) ? get_post_meta($post->ID, 'pyre_post_title_meta_pos', true) : $data['post_meta_style'];
if( $post_meta_position == 'default' ) {
	$post_meta_position = $data['post_meta_style'];
}
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
<div class="row clearfix <?php echo $force_full_width; ?>">
	<div class="post_container">
    	<div class="grid-masonry-page-template js-masonry clearfix">
    		<div class="gutter-sizer"></div>            		
        	<?php		

			$category = ( get_post_meta($post->ID, 'pyre_posts_category', true) != 0 ) ? $category = '&cat='.get_post_meta($post->ID, 'pyre_posts_category', true) : '';
			
			$blog = new WP_Query('showposts='.$post_count.$category.'&paged='.$paged);
			
			while($blog->have_posts()): $blog->the_post(); 	
			?>
            	
            	<?php $more = 0; ?>		
				<div class="blogpost grid_posts columns-<?php echo $grid_columns; ?>">
					
					<?php
					if($data['post_meta_design'] !='modern') { 
						get_template_part('content/layout/masonry-default');
					} 
					else {
						get_template_part('content/layout/masonry-modern');	
					}
					?>

                </div>                      
                <?php
			endwhile;	
			wp_reset_query();
			?>
		</div>	
        <?php cr_pagination($blog->max_num_pages, $range = 2); ?> 
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