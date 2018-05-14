<?php
/*
Woo Carousel Element
*/

$woo_categories = $woo_products = array();

function woo_categs() {

	$woo_categories[]='';
	
	$woo_categories_entries = get_terms('product_cat', 'orderby=name&hide_empty=1');
	foreach ($woo_categories_entries as $key => $entry) {
		$woo_categories[$entry->term_id] = $entry->name;
	}

	return $woo_categories;

}

function woo_prod() {
	$woo_products[]='';

	$prod_entries = get_posts('post_type=product&orderby=title&numberposts=-1&order=ASC&suppress_filters=0');
	foreach ($prod_entries as $key => $entry) {
		$woo_products[$entry->ID] = $entry->post_title;
	}

	return $woo_products;
}

	return array(
		'name'                    => __( 'Woo Carousel', 'Creativo' ),
		// shortcode name

		'base'                    => 'woo_carousel',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Add a WooCommerce Products Carousel.', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/woo-carousel.png', // Simply pass url to your icon here,
		// don't show params window after adding

		//'front_enqueue_js' => get_template_directory_uri().'/js/vc/clients.js',

		//'weight'                  => 15,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
				      "type" => "dropdown",
				      "heading" => __("Populate carousel from", "Creativo"),
				      "param_name" => "populate",					  
					  "admin_label" => true,
					  "value" => array( __("All Products", "Creativo") => 'all', __("Featured Products", "Creativo") => 'featured', __("Top Rated Products", "Creativo") => 'toprated', __("Products on Sale", "Creativo") => 'onsale', __("Bestselling Products", "Creativo") => 'bestselling'),
				      "description" => __("Enter how many clients to use.", "Creativo")
				    ),
				    array(
				      "type" => "textfield",
				      "heading" => __("Products count", "Creativo"),
				      "param_name" => "items",
					  "value" => '12',
					  "admin_label" => true,
				      "description" => __("Enter how many products to use.", "Creativo")
				    ),	
				    array(
				      "type" => "textfield",
				      "heading" => __("Visible Products", "Creativo"),
				      "param_name" => "visible_items",
					  "admin_label" => true,
					  "value" => '4',
				      "description" => __("Enter how many products will be visible for the carousel.", "Creativo")
				    ),	

				    array(
						'type' => 'multiselect',
						'heading' => __( 'Filter by Category', 'js_composer' ),
						'param_name' => 'categ_select',
						'value' => woo_categs(),
						"admin_label" => true,
						'description' => __( 'Enter categories name to filter posts.', 'js_composer' ),
					),
					array(
						'type' => 'multiselect',
						'heading' => __( 'Include specific products only', 'js_composer' ),
						'param_name' => 'include',
						'value' => woo_prod(),
						'admin_label' => true,
						'dependency' => array(
							'element' => 'populate',
							'value' => 'all',
						),
						'description' => __( 'Select only specific products to populate the carousel', 'js_composer' ),
						
					),
					array(
				        "type" => "dropdown",
				        "heading" => __("Enable Carousel Autoplay?", "Creativo"),
				        "param_name" => "autoplay",
						"admin_label" => true,
				        "value" => array( __("Yes", "Creativo") => 'yes', __("No", "Creativo") => 'no' )
				    ),
					
					array(
				      "type" => "textfield",
				      "heading" => __("Carousel Timeout", "Creativo"),
				      "param_name" => "timeout",
					  "value" => '3000',
					  "admin_label" => true,
				      "description" => __("Enter the timeout of the carousel in miliseconds. E.g: 2000 = 2 seconds.", "Creativo")
				    ),
					
					array(
				      "type" => "dropdown",
				      "heading" => __("Order By", "Creativo"),
				      "param_name" => "orderby",					  
					  "admin_label" => true,
					  "value" => array( __("Date", "Creativo") => 'date', __("Price", "Creativo") => 'price', __("Sales", "Creativo") => 'sales', __("Random", "Creativo") => 'random')
				      //"description" => __("Enter how many clients to use.", "Creativo")
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Order", "Creativo"),
				      "param_name" => "order",					  
					  "admin_label" => true,
					  "value" => array( __("Descending", "Creativo") => 'DESC', __("Ascending", "Creativo") => 'ASC')
				      //"description" => __("Enter how many clients to use.", "Creativo")
				    ),	
				    
					
					array(
				      "type" => "textfield",
				      "heading" => __("Extra class name", "Creativo"),
				      "param_name" => "el_class",
				      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "Creativo")
				    )					
				  		
				),		    			
		
	);
	

