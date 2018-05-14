<?php
/*
Gym Classes Element
*/
global $target_arr;
	return array(
		'name'                    => __( 'Gym Classes', 'Creativo' ),
		// shortcode name

		'base'                    => 'gym_classes',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Add gym classes to your site.', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/gym.png', // Simply pass url to your icon here,
		// don't show params window after adding

		//'front_enqueue_js' => get_template_directory_uri().'/js/vc/clients.js',

		//'weight'                  => 15,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
				      'type' => 'textfield',
				      'heading' => __('Title', 'Creativo'),
				      'param_name' => 'title',
					  'value' => 'Kickboxing',
					  'admin_label' => true,
				      'description' => __('Enter the title of the gym class.', 'Creativo')
				    ),	
				    array(
				      'type' => 'textarea',
				      'heading' => __('Description', 'Creativo'),
				      'param_name' => 'content',
				      'admin_label' => true,
					  'value' => 'This is where you can add the description of the class',					  
				      'description' => __('Enter the description text for the gym class.', 'Creativo')
				    ),	
					array(
				        'type' => 'dropdown',
				        'heading' => __('Enable Separator', 'Creativo'),
				        'param_name' => 'has_separator',						
				        'value' => array( __('Yes', 'Creativo') => 'yes', __('No', 'Creativo') => 'no' )
				    ),
					array(
				      'type' => 'textfield',
				      'heading' => __('Text Link', 'Creativo'),
				      'param_name' => 'text_link',
					  'admin_label' => true,
					  'value' => '',
				      'description' => __('Enter the text used for the link of the gym class. Leave blank if you do not want to use a link', 'Creativo')
				    ),	
				    array(
						'type' => 'href',
						'heading' => __( 'URL (Link)', 'js_composer' ),
						'param_name' => 'href',
						'admin_label' => true,
						'description' => __( 'Enter the actual link. E.g: https://yoursite.com/', 'js_composer' ),
					),
				    array(
						'type' => 'dropdown',
						'heading' => __( 'Target', 'js_composer' ),
						'param_name' => 'target',
						'value' => $target_arr,
						'dependency' => array(
							'element' => 'href',
							'not_empty' => true							
						)
					),

				    array(
				        'type' => 'dropdown',
				        'heading' => __('Title HTML Tag', 'Creativo'),
				        'param_name' => 'title_tag',						
				        'value' => array( __('H1', 'Creativo') => 'h1', __('H2', 'Creativo') => 'h2', __('H3', 'Creativo') => 'h3', __('H4', 'Creativo') => 'h4', __('H5', 'Creativo') => 'h5', __('H6', 'Creativo') => 'h6', __('div', 'Creativo') => 'div' ),
				        'description' => __('Select the HTML tag to be used for the Title.', 'Creativo'),
				        'group' => __( 'Title', 'js_composer' ),
				    ),	

				    array(
				      'type' => 'textfield',
				      'heading' => __('Title font size', 'Creativo'),
				      'param_name' => 'title_fs',					  
					  'value' => '17px',
				      'description' => __('Enter a value for the Title font size. Default: 17px', 'Creativo'),
				      'group' => __( 'Title', 'js_composer' ),
				    ),

				    array(
				      'type' => 'textfield',
				      'heading' => __('Title font weight', 'Creativo'),
				      'param_name' => 'title_fw',					  
					  'value' => '600',
				      'description' => __('Choose the font weight for the Title. Default: 600', 'Creativo'),
				      'group' => __( 'Title', 'js_composer' ),
				    ),	

				    array(
						'type' => 'colorpicker',
						'heading' => __('Title Color', 'Creativo'),
						'param_name' => 'title_color',
						'value' => '#ffffff', //Default Red color
						'description' => __('Choose a color for the Title', 'Creativo'),		
						'group' => __( 'Title', 'js_composer' ),			
					),	

					array(
				      'type' => 'textfield',
				      'heading' => __('Description font size', 'Creativo'),
				      'param_name' => 'desc_fs',					  
					  'value' => '13px',
				      'description' => __('Enter a value for the Description font size. Default: 13px', 'Creativo'),
				      'group' => __( 'Description', 'js_composer' ),
				    ),

				    array(
				      'type' => 'textfield',
				      'heading' => __('Description font weight', 'Creativo'),
				      'param_name' => 'desc_fw',					  
					  'value' => '300',
				      'description' => __('Choose the font weight for the Description. Default: 300', 'Creativo'),
				      'group' => __( 'Description', 'js_composer' ),
				    ),	

				    array(
						'type' => 'colorpicker',
						'heading' => __('Description Color', 'Creativo'),
						'param_name' => 'desc_color',
						'value' => '#ffffff', //Default Red color
						'description' => __('Choose a color for the Title', 'Creativo'),		
						'group' => __( 'Description', 'js_composer' ),			
					),				    
				    array(
						'type' => 'colorpicker',
						'heading' => __('Separator Color', 'Creativo'),
						'param_name' => 'sep_color',
						'value' => '#ffffff', //Default Red color
						'description' => __('Choose a color for the separator', 'Creativo'),
						'dependency' => array(
							'element' => 'has_separator', 'value' => 'yes'
						),		
						'group' => __( 'Separator', 'js_composer' ),			
					),
					array(
				      'type' => 'textfield',
				      'heading' => __('Text Link font size', 'Creativo'),
				      'param_name' => 'text_link_fs',					  
					  'value' => '11px',
				      'description' => __('Enter a value for the Text Link font size. Default: 11px', 'Creativo'),
				      'dependency' => array(
							'element' => 'text_link', 'not_empty' => true,
						),
				      'group' => __( 'Link', 'js_composer' ),
				    ),

				    array(
				      'type' => 'textfield',
				      'heading' => __('Text Link font weight', 'Creativo'),
				      'param_name' => 'text_link_fw',					  
					  'value' => '700',
				      'description' => __('Choose the font weight for the Title. Default: 600', 'Creativo'),
				      'dependency' => array(
							'element' => 'text_link', 'not_empty' => true,
						),
				      'group' => __( 'Link', 'js_composer' ),
				    ),	

				    array(
						'type' => 'colorpicker',
						'heading' => __('Text Link Color', 'Creativo'),
						'param_name' => 'text_link_color',
						'value' => '#ffffff', //Default Red color
						'description' => __('Choose a color for the Text Link', 'Creativo'),
						'dependency' => array(
							'element' => 'text_link', 'not_empty' => true,
						),		
						'group' => __( 'Link', 'js_composer' ),			
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Text Link Color on Hover', 'Creativo'),
						'param_name' => 'text_link_color_hover',
						'value' => '#d03672', //Default Red color
						'description' => __('Choose a color for the Text Link on Hover', 'Creativo'),	
						'dependency' => array(
							'element' => 'text_link', 'not_empty' => true,
						),	
						'group' => __( 'Link', 'js_composer' ),			
					),
				    array(
				      'type' => 'attach_image',
				      'heading' => __('Background Image', 'Creativo'),
				      'param_name' => 'bg_image',
				      'value' => '',
				      'description' => __('Select/upload image from media library. Leave blank if you do not want to use a background image.', 'Creativo'),		
				      'group' => __( 'Container', 'js_composer' ),			  
				    ),	

				    array(
						'type' => 'colorpicker',
						'heading' => __('Overlay Mask Color', 'Creativo'),
						'param_name' => 'overlay_color',
						'value' => 'rgba(0,0,0,0.7)', //Default Red color
						'description' => __('Choose a color for the Overlay Mask. Leave blank if you don\'t want to use an overlay mask.', 'Creativo'),		
						'group' => __( 'Container', 'js_composer' ),			
					),

					array(
						'type' => 'colorpicker',
						'heading' => __('Overlay Mask Color on Hover', 'Creativo'),
						'param_name' => 'overlay_color_hover',
						'value' => 'rgba(0,0,0,0.9)', //Default Red color
						'description' => __('Choose a color for the Overlay Mask. Leave blank if you don\'t want to use an overlay mask.', 'Creativo'),		
						'group' => __( 'Container', 'js_composer' ),			
					),

					array(
				      'type' => 'textfield',
				      'heading' => __('Rounded Corners Radius', 'Creativo'),
				      'param_name' => 'border_radius',					  
					  'value' => '40px',
				      'description' => __('Enter a value in pixels for the roundness of the Gym Class element.', 'Creativo'),
				      'group' => __( 'Container', 'js_composer' ),
				    ),	

				    array(
				      'type' => 'textfield',
				      'heading' => __('Element Minimum Height', 'Creativo'),
				      'param_name' => 'min_height',					  
					  'value' => '',
				      'description' => __('Enter a value for the minimum height of the element. This option is useful if you want to make more Gym elements have the same height. E.g: 340px', 'Creativo'),
				      'group' => __( 'Container', 'js_composer' ),
				    ),

					array(
				      'type' => 'textfield',
				      'heading' => __('Extra class name', 'Creativo'),
				      'param_name' => 'el_class',
				      'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'Creativo'),
				    )					
				  		
				),		    			
		
	);
	

