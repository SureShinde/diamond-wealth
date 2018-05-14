<?php
/*
Flat Portfolio Element
*/

	global $taxon, $portfolio_posts;
	
	//global $target_arr, $style_arr, $button_colors, $size_arr2;
	// Note that all keys=values in mapped shortcode can be used with javascript variable vc.map, and php shortcode settings variable.
	return array(
		'name'                    => __( 'Portfolio Flat', 'Creativo' ),
		// shortcode name

		'base'                    => 'vc_portfolio_el',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Portfolio items displayed in Flat Style.', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/portfolio-flat.png', // Simply pass url to your icon here,
		// don't show params window after adding

		//'front_enqueue_js' => get_template_directory_uri().'/js/vc/isotope_flat.js',

		//'weight'                  => 18,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
				      "type" => "textfield",
				      "heading" => __("Items Count", "Creativo"),
				      "param_name" => "items",
				      "value" => 8,
					  "admin_label" => true,
				      "description" => __("Enter how many portfolio items to show.", "Creativo")
				    ),	

				    array(
				      "type" => "dropdown",
				      "heading" => __("Images Size", "Creativo"),
				      "param_name" => "images_size",
					  "admin_label" => true,
				      "value" => array(__("Thumbnails", "Creativo") => "thumbs", __("Original Size", "Creativo") => "full"),
				      "description" => __("Select the layout of the Portfolio element", "Creativo"),
				      
				    ),

					array(
				      "type" => "dropdown",
				      "heading" => __("Show Filters", "Creativo"),
				      "param_name" => "show_filters",
					  "admin_label" => true,
				      "value" => array(__("Yes", "Creativo") => "yes", __("No", "Creativo") => "no"),
				      "description" => __("Show/hide portfolio filters.", "Creativo"),
				      'group' => __( 'Filters', 'js_composer' ),
				    ),
					
					array(
				      "type" => "dropdown",
				      "heading" => __("Filters Position", "Creativo"),
				      "param_name" => "filter_pos",
					  "admin_label" => true,
				      "value" => array(__("Left", "Creativo") => "left", __("Center", "Creativo") => "center", __("Right", "Creativo") => "right"),
				      "description" => __("Select the position of the filters.", "Creativo"),
					  'dependency' => array(
							'element' => 'show_filters',
							'value' => 'yes',
						),
					  'group' => __( 'Filters', 'js_composer' ),
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Portfolio Design", "Creativo"),
				      "param_name" => "portfolio_design",
					  "admin_label" => true,
				      "value" => array(__("Default", "Creativo") => "default", __("Modern", "Creativo") => "modern"),
				      "description" => __("Select the design for the Portfolio items.", "Creativo")
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Enable Items Spacing", "Creativo"),
				      "param_name" => "items_gap",	  
				      "value" => array(__("No", "Creativo") => "no", __("Yes", "Creativo") => "yes"),
					  'dependency' => array(
								'element' => 'portfolio_design',
								'value' => 'modern',
							),
				      "description" => __("Select yes to add a spacing between portfolio items. Works only when Masonry effect is being used!", "Creativo")
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Portfolio Layout", "Creativo"),
				      "param_name" => "portfolio_layout",
					  "admin_label" => true,
				      "value" => array(__("Grid", "Creativo") => "grid", __("Masonry", "Creativo") => "masonry"),
				      "description" => __("Select the layout of the Flat Portfolio: grid or masonry", "Creativo")
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Portfolio Width", "Creativo"),
				      "param_name" => "layout",
					  "admin_label" => true,
				      "value" => array(__("Normal", "Creativo") => "normal", __("Fullscreen", "Creativo") => "fullscreen"),
				      "description" => __("Select the layout of the Portfolio element", "Creativo"),
				      
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Columns", "Creativo"),
				      "param_name" => "columns_normal",	  
				      "value" => array(5, 4, 3, 2),
					  'dependency' => array(
								'element' => 'layout',
								'value' => 'normal',
							),
				      "description" => __("Select the number of columns to use.", "Creativo")
				    ),
					array(
				      "type" => "dropdown",
				      "heading" => __("Columns", "Creativo"),
				      "param_name" => "columns_fullscreen",
				      "value" => array(5 ,4 ,3),
					  'dependency' => array(
								'element' => 'layout',
								'value' => 'fullscreen',
							),
				      "description" => __("Select the number of columns to use.", "Creativo")
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Show Portfolio Details", "Creativo"),
				      "param_name" => "port_details",
					  "admin_label" => true,
				      "value" => array(__("On Hover", "Creativo") => "hover", __("Below Image", "Creativo") => "below"),
				      "description" => __("Select how to display the portfolio details.", "Creativo"),
				    ),

				    array(
				      "type" => "dropdown",
				      "heading" => __("Thumbnail/Videos", "Creativo"),
				      "param_name" => "thumbs_vs_videos",
					  "admin_label" => true,
				      "value" => array(__("Thumbnail", "Creativo") => "thumb", __("Videos", "Creativo") => "video"),
				      "description" => __("Select what to display: portfolio thumbnail or portfolio video - youtube or vimeo if set.", "Creativo")
				    ),
					
					array(
				      "type" => "dropdown",
				      "heading" => __("Show Icons on Hover", "Creativo"),
				      "param_name" => "show_icons",
					  "admin_label" => true,
				      "value" => array(__("Yes", "Creativo") => "yes", __("No", "Creativo") => "no"),
				      "description" => __("Show/hide icons on mouse hover.", "Creativo"),	
				      'dependency' => array(
								'element' => 'portfolio_design',
								'value' => 'default',
							),			      
				    ),				    
					
					array(
				      "type" => "dropdown",
				      "heading" => __("Colors", "Creativo"),
				      "param_name" => "style",
					  "admin_label" => true,
				      "value" => array(__("Default", "Creativo") => "default", __("Custom", "Creativo") => "custom"),
				      "description" => __("Select the styling of the Flat Portfolio", "Creativo"),
				      'group' => __( 'Colors', 'js_composer' ),
				    ),

				    array(
				      "type" => "textfield",
				      "heading" => __("Filters Bottom Margin", "Creativo"),
				      "param_name" => "filters_bottom_margin",					  
					  "value" => "20px",
				      "description" => __("Enter a value for the bottom margin", "Creativo"),
				      'group' => __( 'Colors', 'js_composer' ),
				      'dependency' => array(
							'element' => 'style',
							'value' => 'custom',
						),
				      	'group' => __( 'Filters Styling', 'js_composer' ),
				    ),	

				    array(
				      "type" => "dropdown",
				      "heading" => __("Filters Style", "Creativo"),
				      "param_name" => "filters_style",					  
				      "value" => array(__("Default", "Creativo") => "default", __("Modern", "Creativo") => "modern"),
				      "description" => __("Choose the styling of the Filters.", "Creativo"),
				      'group' => __( 'Colors', 'js_composer' ),
				      'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
				      'group' => __( 'Filters Styling', 'js_composer' ),
				    ),
				    array(
						  "type" => "colorpicker",
						  "heading" => __("Active Filter Color", 'Creativo'),
						  "param_name" => "filter_active_color",
						  "value" => '#ffffff', //Default Red color
						  "description" => __("Choose the color of the title", 'Creativo'),
						  'group' => __( 'Colors', 'js_composer' ),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						  'group' => __( 'Filters Styling', 'js_composer' ),
						),
				   	array(
						  "type" => "colorpicker",
						  "heading" => __("Inactive Filters Color", 'Creativo'),
						  "param_name" => "filter_inactive_color",
						  "value" => '#9b9b9b', //Default Red color
						  "description" => __("Choose the color of the title", 'Creativo'),
						  'group' => __( 'Colors', 'js_composer' ),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						  'group' => __( 'Filters Styling', 'js_composer' ),
						), 

				    array(
						  "type" => "colorpicker",
						  "heading" => __("Title Color", 'Creativo'),
						  "param_name" => "port_title_color",
						  "value" => '#ffffff', //Default Red color
						  "description" => __("Choose the color of the title", 'Creativo'),
						  'group' => __( 'Colors', 'js_composer' ),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						),					
					
					array(
				      "type" => "textfield",
				      "heading" => __("Title Font Size", "Creativo"),
				      "param_name" => "title_font_size",
					  "admin_label" => true,
					  "value" => "15px",
				      "description" => __("Enter the font size for the title. Default: 15px", "Creativo"),
				      'group' => __( 'Colors', 'js_composer' ),
				      'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
				    ),	
				    array(
				      "type" => "dropdown",
				      "heading" => __("Uppercase Title", "Creativo"),
				      "param_name" => "title_uppercase",
					  "admin_label" => true,
				      "value" => array(__("Yes", "Creativo") => "yes", __("No", "Creativo") => "no"),
				      "description" => __("Enable/Disable Title Uppercase.", "Creativo"),
				      'group' => __( 'Colors', 'js_composer' ),
				      'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
				    ),
					
					array(
						  "type" => "colorpicker",
						  "heading" => __("Portfolio Details Background Color", 'Creativo'),
						  "param_name" => "port_bg_color",
						  "value" => '#5bc98c', //Default Red color
						  "description" => __("Choose the background color of the Portfolio Details", 'Creativo'),
						  'group' => __( 'Colors', 'js_composer' ),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						),	
						
					array(
						  "type" => "colorpicker",
						  "heading" => __("Portfolio Icons/Categories Color", 'Creativo'),
						  "param_name" => "port_icon_color",
						  "value" => '#ffffff', //Default Red color
						  "description" => __("Choose the color of the icons/categories. The category color will be used when the Modern Portfolio is being used. ", 'Creativo'),
						  'group' => __( 'Colors', 'js_composer' ),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						),	
						
					array(
						  "type" => "colorpicker",
						  "heading" => __("Portfolio Mask Color", 'Creativo'),
						  "param_name" => "port_mask_color",
						  "value" => 'rgba(0,0,0,0.6)', //Default Red color
						  "description" => __("Choose the background color of the Portfolio Details", 'Creativo'),
						  'group' => __( 'Colors', 'js_composer' ),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						),				
					
				    array(
				      "type" => "dropdown",
				      "heading" => __("Show Portfolio Date", "Creativo"),
				      "param_name" => "port_date",
					  "admin_label" => true,
				      "value" => array(__("No", "Creativo") => "no", __("Yes", "Creativo") => "yes"),
				      "description" => __("Display the portfolio date.", "Creativo"),
				      'dependency' => array(
								'element' => 'port_details',
								'value' => 'below',
							),
				    ),
				    array(
						  "type" => "colorpicker",
						  "heading" => __("Date Color", 'Creativo'),
						  "param_name" => "port_date_color",
						  "value" => '#777777', //Default Red color
						  "description" => __("Choose the color of the date", 'Creativo'),
						  'dependency' => array(
								'element' => 'port_details',
								'value' => 'below',
							),
						),
					array(
				      "type" => "textfield",
				      "heading" => __("Date Font Size", "Creativo"),
				      "param_name" => "date_font_size",
					  "admin_label" => true,
					  "value" => "13px",
				      "description" => __("Enter the font size for the date. Default: 13px", "Creativo"),
				      'dependency' => array(
								'element' => 'port_details',
								'value' => 'below',
							),
				    ),	
					
					array(
							'type' => 'multiselect',
							'heading' => __( 'Include specific portfolio categories only', 'js_composer' ),
							'param_name' => 'include_categ',
							'value' => $taxon,
							//'options' => ,
							'description' => __( 'Select only specific portfolio categories to display posts', 'js_composer' ),
							
						),
				    array(
							'type' => 'multiselect',
							'heading' => __( 'Include specific portfolio items only', 'js_composer' ),
							'param_name' => 'include',
							'value' => $portfolio_posts,
							//'options' => ,
							'description' => __( 'Select only specific portfolio posts to be displayed', 'js_composer' ),
							
						),
					array(
				      "type" => "textfield",
				      "heading" => __("Category ID - DEPRECATED, use Options above for filtering!", "Creativo"),
				      "param_name" => "category_id",  
					  "admin_label" => true,    
				      "description" => __("Enter the category id to show posts from.", "Creativo")
				    ),
					array(
							'type' => 'textfield',
							'heading' => __( 'Extra class name', 'js_composer' ),
							'param_name' => 'el_class',
							'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
						),
				  		
				),		    			
		
	);