<?php
/*
Testimonials Element
*/


	global $testimonials;
	// Note that all keys=values in mapped shortcode can be used with javascript variable vc.map, and php shortcode settings variable.
	return array(
		'name'                    => __( 'Testimonials', 'Creativo' ),
		// shortcode name

		'base'                    => 'vc_testimonials',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Add testimonials to your site.', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/testimonials.png', // Simply pass url to your icon here,
		// don't show params window after adding

		//'front_enqueue_js' => get_template_directory_uri().'/js/vc/testimonials.js',

		//'weight'                  => 14,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
				      "type" => "textfield",
				      "heading" => __("Testimonials count", "Creativo"),
				      "param_name" => "items",
					  "value" => '5',
					  "admin_label" => true,
				      "description" => __("Enter how many testimonials to use.", "Creativo")
				    ),
				    array(
				        "type" => "dropdown",
				        "heading" => __("Testimonial Design", "Creativo"),
				        "param_name" => "test_design",
						"admin_label" => true,
				        "value" => array( __("Default", "Creativo") => 'default', __("Modern", "Creativo") => 'modern' )
				    ),	
				    array(
				        "type" => "dropdown",
				        "heading" => __("Elements Positioning", "Creativo"),
				        "param_name" => "test_style",
						"admin_label" => true,
				        "value" => array( __("Centered", "Creativo") => 'center', __("Left", "Creativo") => 'left' )
				    ),	
				    array(
				        "type" => "dropdown",
				        "heading" => __("Show Testimonial Images", "Creativo"),
				        "param_name" => "test_images",
						"admin_label" => true,
				        "value" => array( __("Yes", "Creativo") => 'yes', __("No", "Creativo") => 'no' )
				    ),
				    array(
				        "type" => "dropdown",
				        "heading" => __("Testimonial Type", "Creativo"),
				        "param_name" => "type",
						"admin_label" => true,
				        "value" => array( __("Carousel", "Creativo") => 'carousel', __("Grid", "Creativo") => 'grid' )
				    ),
				    array(
				        "type" => "dropdown",
				        "heading" => __("Grid columns", "Creativo"),
				        "param_name" => "cols",
						"admin_label" => true,
				        "value" => array( __("1 Column", "Creativo") => 'cols-1', __("2 Columns", "Creativo") => 'cols-2', __("3 Columns", "Creativo") => 'cols-3', __("4 Columns", "Creativo") => 'cols-4' ),
				        'dependency' => array(
								'element' => 'type',
								'value' => 'grid',
							),
				    ),
					array(
				        "type" => "dropdown",
				        "heading" => __("Enable Carousel Autoplay?", "Creativo"),
				        "param_name" => "autoplay",
						"admin_label" => true,
				        "value" => array( __("Yes", "Creativo") => 'yes', __("No", "Creativo") => 'no' ),
				        'group' => __( 'Carousel Options', 'js_composer' ),
				        'dependency' => array(
								'element' => 'type',
								'value' => 'carousel',
							),
				    ),
					array(
				      "type" => "textfield",
				      "heading" => __("Visible Items", "Creativo"),
				      "param_name" => "visible_items",
					  "admin_label" => true,
					  "value" => '1',
				      "description" => __("Enter how many testimonials will be visible for carousel.", "Creativo"),
				      'group' => __( 'Carousel Options', 'js_composer' ),
				      'dependency' => array(
								'element' => 'type',
								'value' => 'carousel',
							),
				    ),
					array(
				      "type" => "textfield",
				      "heading" => __("Carousel Timeout", "Creativo"),
				      "param_name" => "timeout",
					  "value" => '2000',
					  "admin_label" => true,
				      "description" => __("Enter the timeout of the carousel in miliseconds. E.g: 2000 = 2 seconds.", "Creativo"),
				      'group' => __( 'Carousel Options', 'js_composer' ),
				      'dependency' => array(
								'element' => 'type',
								'value' => 'carousel',
							),
				    ),
					
					array(
				        "type" => "dropdown",
				        "heading" => __("Enable Carousel Navigation?", "Creativo"),
				        "param_name" => "navigation",
						"admin_label" => true,
				        "value" => array( __("Yes", "Creativo") => 'yes', __("No", "Creativo") => 'no' ),
				        'group' => __( 'Carousel Options', 'js_composer' ),
				        'dependency' => array(
								'element' => 'type',
								'value' => 'carousel',
							),
				    ),
				    array(
				        "type" => "dropdown",
				        "heading" => __("Navigation Type", "Creativo"),
				        "param_name" => "navigation_type",
						"admin_label" => true,
				        "value" => array( __("Dots", "Creativo") => 'dots', __("Lines", "Creativo") => 'lines', __("Arrows", "Creativo") => 'arrows' ),
				        'group' => __( 'Carousel Options', 'js_composer' ),
				        'dependency' => array(
								'element' => 'type',
								'value' => 'carousel',
							),
				    ),
				    array(
						  "type" => "colorpicker",		  
						  "heading" => __("Navigation Accent Color", 'Creativo'),
						  "param_name" => "dots_color",
						  "value" => '#5bc98c', //Default Red color
						  "description" => __("Choose a custom color for the dots navigation", 'Creativo'),
						  'group' => __( 'Carousel Options', 'js_composer' ),
						  'dependency' => array(
								'element' => 'navigation',
								'value' => 'yes',
							),
						),

				    array(
				        "type" => "dropdown",
				        "heading" => __("Dots Navigation Size", "Creativo"),
				        "param_name" => "dots_size",
						"admin_label" => true,
				        "value" => array( __("Small", "Creativo") => 'small', __("Big", "Creativo") => 'big' ),
				        'group' => __( 'Carousel Options', 'js_composer' ),
				        'dependency' => array(
								'element' => 'navigation',
								'value' => 'yes',
							),
				    ),
					
					array(
				        "type" => "dropdown",
				        "heading" => __("Testimonial Colors", "Creativo"),
				        "param_name" => "style",
						"admin_label" => true,
				        "value" => array( __("Green", "Creativo") => "green", __("Blue", "Creativo") => "blue", __("Red", "Creativo") => "red", __("Yellow", "Creativo") => "yellow", __("Purple", "Creativo") => "purple", __("Grey", "Creativo") => "grey", __("Black", "Creativo") => "black", __("Custom", "Creativo") => "custom" ),
				        'group' => __( 'Styling', 'js_composer' ),

				    ),

				    array(
						  "type" => "colorpicker",		  
						  "heading" => __("Testimonial Background Color", 'Creativo'),
						  "param_name" => "bg_color",
						  "value" => '', //Default Red color
						  "description" => __("Choose a custom color for the background of each testimonial", 'Creativo'),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						  'group' => __( 'Styling', 'js_composer' ),
						),

				    array(
				      "type" => "textfield",
				      "heading" => __("Testimonial Spacing Left/Right", "Creativo"),
				      "param_name" => "padding_lr",
					  "value" => '',					  
				      "description" => __("Set a value in pixels or percent for spacing left/right. E.g: 20px or 20%. This is usefull when using a background color", "Creativo"),
				      'group' => __( 'Styling', 'js_composer' ),
				      'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
				    ),

				    array(
				      "type" => "textfield",
				      "heading" => __("Testimonial Spacing Top/Bottom", "Creativo"),
				      "param_name" => "padding_tb",
					  "value" => '',					  
				      "description" => __("Set a value in pixels or percent for spacing top/bottom. E.g: 20px or 20%. This is usefull when using a background color", "Creativo"),
				      'group' => __( 'Styling', 'js_composer' ),
				      'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
				    ),
					
					array(
						  "type" => "colorpicker",		  
						  "heading" => __("Testimonial Description Color", 'Creativo'),
						  "param_name" => "custom_color",
						  "value" => '#333333', //Default Red color
						  "description" => __("Choose a custom color for the entire testimonial element", 'Creativo'),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						  'group' => __( 'Styling', 'js_composer' ),
						),
					
					array(
						  "type" => "colorpicker",
						  "holder" => "div",
						  "class" => "",
						  "heading" => __("Testimonial Author Color", 'Creativo'),
						  "param_name" => "testimonial_author",
						  "value" => '#5bc98c', //Default Red color
						  "description" => __("Choose a custom color for the author link", 'Creativo'),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						  'group' => __( 'Styling', 'js_composer' ),
						),
					array(
						  "type" => "colorpicker",
						  "holder" => "div",
						  "class" => "",
						  "heading" => __("Testimonial Link Color", 'Creativo'),
						  "param_name" => "testimonial_link",
						  "value" => '#333333', //Default Red color
						  "description" => __("Choose a custom color for the author link", 'Creativo'),
						  'dependency' => array(
								'element' => 'style',
								'value' => 'custom',
							),
						  'group' => __( 'Styling', 'js_composer' ),
						),
					
					array(
				      "type" => "textfield",
				      "heading" => __("Testimonial Description Font Size", "Creativo"),
				      "param_name" => "font_size",
					  "admin_label" => true,
					  "value" => '14',
				      "description" => __("Enter the testimonials font size in pixels.", "Creativo"),
				      'group' => __( 'Styling', 'js_composer' ),
				    ),
				    array(
						  "type" => "dropdown",		  
						  "heading" => __("Testimonial Description Font Style", 'Creativo'),
						  "param_name" => "font_style",
						  "value" => array( __("Normal", "Creativo") => "normal", __("Italic", "Creativo") => "italic" ),
						  "description" => __("Choose the font style for the testimonial description", 'Creativo'),
						  'group' => __( 'Styling', 'js_composer' ), 
						),
				    array(
				      "type" => "textfield",
				      "heading" => __("Testimonial Author Font Size", "Creativo"),
				      "param_name" => "author_font_size",	  
					  "value" => '16',
				      "description" => __("Enter the testimonial author font size in pixels.", "Creativo"),
				      'group' => __( 'Styling', 'js_composer' ),
				    ),
				    array(
				      "type" => "textfield",
				      "heading" => __("Testimonial Author Link Font Size", "Creativo"),
				      "param_name" => "author_link_font_size",	  
					  "value" => '12',
				      "description" => __("Enter the testimonial author link font size in pixels.", "Creativo"),
				      'group' => __( 'Styling', 'js_composer' ),
				    ),
					array(
						  "type" => "dropdown",
						  "heading" => __("Testimonials Description Font Weight", "Creativo"),
						  "param_name" => "font_weight",
						  "admin_label" => true,
						  "value" => array(300 ,400, 500, 600, 700),
						  "description" => __("Select the font weight of the Testimonial.", "Creativo"),
						  'group' => __( 'Styling', 'js_composer' ),
						),
					array(
						  "type" => "dropdown",
						  "heading" => __("Testimonials Author Font Weight", "Creativo"),
						  "param_name" => "author_font_weight",
						  "admin_label" => true,
						  "value" => array(600 ,300, 400, 500, 700),
						  "description" => __("Select the font weight of the Testimonial.", "Creativo"),
						  'group' => __( 'Styling', 'js_composer' ),
						),

					array(
				      "type" => "textfield",
				      "heading" => __("Testimonial Description Custom Font Family", "Creativo"),
				      "param_name" => "test_desc_font_family",					  
					  "value" => '',
				      "description" => __("Use a Custom Font family for the description of the testimonial. Will only work if the font family has been imported via Theme Options -> Typography area.", "Creativo"),
				      'group' => __( 'Styling', 'js_composer' ),
				    ),

					array(
						'type' => 'multiselect',
						'heading' => __( 'Include specific testimonials only', 'js_composer' ),
						'param_name' => 'include',
						'value' => $testimonials,
						//'options' => ,
						'description' => __( 'Select only specific testimonials to be displayed', 'js_composer' ),
							
						),

					array(
				      "type" => "textfield",
				      "heading" => __("Extra class name", "Creativo"),
				      "param_name" => "el_class",
				      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "Creativo")
				    )					
				  		
				),		    			
		
	);