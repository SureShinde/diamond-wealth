<?php get_header(); ?>

<?php
global $data;
$has_slides = false;
$items = $data['related_items'];
$sidebar_show = true;
$extra = 'extra-width';
$show_featured = ( get_post_meta($post->ID, 'pyre_show_featured', true) == no ) ? false : ( $data['show_featured'] == 'no' ? false : true ); 
$related_columns = 3;

/* Sidebar logic - if enabled in Admin area do the rest. */

if( $data['en_sidebar'] == 'no' ) {
	$sidebar_show = false;
	$extra ='';
	$items = $items+1; 
	$related_columns = 4;
}
else {	
	if(get_post_meta($post->ID, 'pyre_en_sidebar', true) == 'no'){		
		$sidebar_show = false;
		$extra ='';
		$items = $items+1; 
		$related_columns = 4;
	}
}

/* Check the position of the Post Title and Meta */
$post_meta_position = (get_post_meta($post->ID, 'pyre_post_title_meta_pos', true) != NULL) ? get_post_meta($post->ID, 'pyre_post_title_meta_pos', true) : $data['post_meta_style'];
if( $post_meta_position == 'default' ) {
	$post_meta_position = $data['post_meta_style'];
}

if(!$data['single_post_design'] || $data['single_post_design'] == 'default') {
	get_template_part('content/single-post/default');
}
elseif($data['single_post_design'] == 'modern') {
	get_template_part('content/single-post/modern');	
}
elseif($data['single_post_design'] == 'manhattan') {
	get_template_part('content/single-post/style2');
}
?>        

	
<?php get_footer(); ?>