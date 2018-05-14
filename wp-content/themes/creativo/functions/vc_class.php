<?php
//Add Custom Creativo Templates Functionality to VC/*
if (class_exists('WPBakeryVisualComposerAbstract') ){

	add_filter( 'vc_load_default_templates', 'my_custom_template_modify_array' ); // Hook in
	function my_custom_template_modify_array( $data ) {
	    return array(); 
	}		

	add_action('admin_enqueue_scripts', 'creativo_vc_styles');

	function creativo_vc_styles() {			
		wp_enqueue_style('creativo_vc_extra', get_template_directory_uri() .'/vc_templ/creativo-addons.css', array(), '8.0.1', 'all');
	}

	function creativo_vc_library_cat_list() {
		return array( __('All','Creativo') => 'all', 
			__('Main Template','Creativo') => 'default',
			__('Business Template','Creativo') => 'business',
			__('Gym Template','Creativo') => 'gym',			
			__('Life Coach Template','Creativo') => 'lifecoach',			
			__('ShopKeeper Template','Creativo') => 'shopkeeper',
			__('Agency Template','Creativo') => 'agency',			
			__('Cafe&Bar Template','Creativo') => 'cafebar',
			__('Innovate Template','Creativo') => 'innovate',
			__('One Page Template','Creativo') => 'onepage',
			__('Manhattan Template','Creativo') => 'manhattan',
			__('Blogger Template','Creativo') => 'blogger',
			__('Hero Sections','Creativo') => 'hero',
			__('Icon/Image Box','Creativo') => 'icon_image_box',
			__('Content','Creativo') => 'content',	
			__('Gym Classes','Creativo') => 'gym_classes',			
			__('Call to Action','Creativo') => 'cta',
			//__('Carousels','Creativo') => 'carousels',
			__('Clients','Creativo') => 'clients',
			__('Contact Info','Creativo') => 'contact_info',
			__('Counters','Creativo') => 'counters',
			__('FAQs','Creativo') => 'faqs',
			__('Flip Boxes','Creativo') => 'flip_boxes',
			__('Google Maps','Creativo') => 'google_maps',
			__('Testimonials','Creativo') => 'testimonials',	
			__('Portfolio','Creativo') => 'portfolio',
			__('Pricing Columns','Creativo') => 'pricing_columns',
			__('Posts Grid','Creativo') => 'posts_grid',
			__('Progress Bars','Creativo') => 'progress_bars',			 
			__('Tabs','Creativo') => 'tabs', 
			__('Team Members','Creativo') => 'team_members',
			__('Tours','Creativo') => 'tours', 
		);			
	}

	add_action( 'vc_load_default_templates_action','templates_for_vc' ); 

	function templates_for_vc() {
		require_once locate_template('/vc_templ/creativo-templates.php');
	}

}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	/* disable updater */
	vc_manager()->disableUpdater(true);

	$style_arr = $button_colors = $button_colors2 = $posts = $testimonials = $portfolio_posts = $portfolio_categories = $clients = $categories = array();

	$style_arr = array( __("Style1", "Creativo") => "style1", __("Style2", "Creativo") => "style2");

	$button_colors = array(__("Default", "Creativo") => "default",__("Green", "Creativo") => "green", __("Blue", "Creativo") => "blue", __("Red", "Creativo") => "red", __("Yellow", "Creativo") => "yellow", __("Purple", "Creativo") => "purple", __("Grey", "Creativo") => "grey", __("Black", "Creativo") => "black");

	$button_colors2 = array(__("Default", "Creativo") => "default",__("Green", "Creativo") => "green", __("Blue", "Creativo") => "blue", __("Red", "Creativo") => "red", __("Yellow", "Creativo") => "yellow", __("Purple", "Creativo") => "purple", __("Grey", "Creativo") => "grey", __("Black", "Creativo") => "black", __("Custom") => "custom");

	$size_arr2 = array( __('Small', 'Creativo') => 'small', __('Large', 'Creativo') => 'large');

	$alignment = array(__('Center', "Creativo") => 'center', __('Left', 'Creativo') => 'left', __('Right', 'Creativo') => 'right' );

	$target_arr = array(
		__( 'Same window', 'js_composer' ) => '_self',
		__( 'New window', 'js_composer' ) => '_blank',
	);
	
	/* Custom Queries to populate Specific Categs and Posts Type */
	$posts_entries = get_posts('post_type=post&orderby=title&numberposts=-1&order=ASC&suppress_filters=0');
	    foreach ($posts_entries as $key => $entry) {
	        $posts[$entry->ID] = $entry->post_title;
	    }

	$cats_entries = get_categories('orderby=name&hide_empty=0');
	foreach ($cats_entries as $key => $entry) {
		$categories[$entry->term_id] = $entry->name;
	}

	global $wpdb;
	  $tax = $wpdb->get_results("SELECT $wpdb->terms.term_id, $wpdb->terms.name, $wpdb->term_taxonomy.taxonomy FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->term_taxonomy.taxonomy = 'portfolio_category' && $wpdb->terms.term_id = $wpdb->term_taxonomy.term_id");
	  
	  $taxon = array();
	  if ($tax) {
	    foreach ( $tax as $taxonomy ) {
	      $taxon[$taxonomy->term_id] = $taxonomy->name;
	    }
	  } else {
	    $taxon["No portfolio category found"] = 0;
	  }

	/* Authors Listing */  
	$authors = $wpdb->get_results("SELECT ID, user_nicename, display_name from $wpdb->users ORDER BY display_name");  

	$all_authors = array();
	if($authors) {
		foreach($authors as $author) {
			$all_authors[$author->ID] = $author->display_name;
		}	
	}
	

	$portfolio_categories_entries = get_terms('creativo_portfolio', 'orderby=name&hide_empty=0');
	foreach ($portfolio_categories_entries as $key => $entry) {
		$portfolio_categories[$entry->term_id] = $entry->name;
	}

	$portfolio_entries = get_posts('post_type=creativo_portfolio&orderby=title&numberposts=-1&order=ASC&suppress_filters=0');
	foreach ($portfolio_entries as $key => $entry) {
		$portfolio_posts[$entry->ID] = $entry->post_title;
	}

	$clients_entries = get_posts('post_type=clients&orderby=title&numberposts=-1&order=ASC&suppress_filters=0');
	if ($clients_entries != null && !empty($clients_entries)) {
	    foreach ($clients_entries as $key => $entry) {
	        $clients[$entry->ID] = $entry->post_title;
	    }
	}
	$testimonials_entries = get_posts('post_type=testimonials&orderby=title&numberposts=-1&order=ASC&suppress_filters=0');
	if ($testimonials_entries != null && !empty($testimonials_entries)) {
	    foreach ($testimonials_entries as $key => $entry) {
	        $testimonials[$entry->ID] = $entry->post_title;
	    }
	}
	/* ==================================================================== */

	$settings_row = array ( 'weight' => 50 );
	$settings_text = array ( 'weight' => 49 );	
	//$settings_icon = array ( 'weight' => 48 );
	$settings_custom_head = array ( 'weight' => 47 );
	$settings_rev = array ( 'weight' => 46 );
	$settings_layer = array ( 'weight' => 45 );
	$settings_acc = array ( 'weight' => 0, 'name' => 'Accordion - Creativo', 'category' => 'Creativo' );

	vc_map_update( 'vc_row', $settings_row );
	vc_map_update( 'vc_column_text', $settings_text );
	//vc_map_update( 'vc_icon', $settings_icon );
	vc_map_update( 'vc_custom_heading', $settings_custom_head );
	vc_map_update( 'vc_accordion', $settings_acc );
	vc_map_update( 'layerslider_vc', $settings_layer );
	vc_map_update( 'rev_slider_vc', $settings_rev );


	function getCSSAnimation( $css_animation ) {
		$output = '';
		if ( $css_animation != '' ) {
			wp_enqueue_script( 'waypoints' );
			wp_enqueue_style( 'animate-css' );
				$output = ' wpb_animate_when_almost_visible wpb_' . $css_animation . ' ' . $css_animation;
			}

		return $output;
	}	
}