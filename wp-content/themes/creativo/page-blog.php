<?php // Template Name: Blog Style Big Image ?>
<?php get_header(); ?>

<?php
global $data;
$sidebar = get_post_meta( $post->ID, 'pyre_en_sidebar', true );
$no_sidebar_behavior = get_post_meta( $post->ID, 'pyre_no_sidebar_behavior', true );

if(( $sidebar == 'no' && $no_sidebar_behavior != 'minimal') || ( $data['big_layout_thumb'] == 'full' )) {
	$thumbnail = 'full';
	$thumb_to_search = '';
} 
else {
	$thumbnail = 'blog-xxl';
	$thumb_to_search = '800x533';
}
$current_page_id = $post->ID;

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
    	$post_count = ( get_post_meta($post->ID, 'pyre_posts_count', true) != '' ) ? get_post_meta($post->ID, 'pyre_posts_count', true) : $data['posts_count'];

		$category = ( get_post_meta($post->ID, 'pyre_posts_category', true) != 0 ) ? $category = '&cat='.get_post_meta($post->ID, 'pyre_posts_category', true) : '';
		$blog = new WP_Query('showposts='. $post_count .$category.'&paged='.$paged);

		/* Check the position of the Post Title and Meta */
		$post_meta_position = (get_post_meta($post->ID, 'pyre_post_title_meta_pos', true) != NULL) ? get_post_meta($post->ID, 'pyre_post_title_meta_pos', true) : $data['post_meta_style'];
		if( $post_meta_position == 'default' ) {
			$post_meta_position = $data['post_meta_style'];
		}
		
		while($blog->have_posts()): $blog->the_post(); 	
		?>
        	<?php $posttags = get_the_tags(); ?>
        	<?php $more = 0; ?>		
			<div class="blogpost archive_pages layout_<?php echo $data['post_meta_design']; ?>">
				<?php
				if($data['post_meta_design'] !='modern') { 
					get_template_part('content/layout/blog-default');
				} 
				else {
					get_template_part('content/layout/blog-modern');	
				}
				?>             
            </div>                    
            <?php
		endwhile;
		wp_reset_query();	
		?>
        <?php cr_pagination($blog->max_num_pages, $range = 2); ?> 
     </div>
    <?php
     if( $sidebar != 'no' ) { 
     ?>              	
        <div class="sidebar" style="<?php echo $sidebar; ?>">                
        	<?php //generated_dynamic_sidebar(); 
            if ( !function_exists( 'generated_dynamic_sidebar' ) || !generated_dynamic_sidebar() ): 
            endif;
            ?>          
        
        </div>
    <?php 
    }
    ?>              
</div>        		
<?php get_footer(); ?>