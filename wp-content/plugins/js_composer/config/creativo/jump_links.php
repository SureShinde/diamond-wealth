<?php
/*
Clients Element
*/
global $clients;
	return array(
		'name'                    => __( 'Jump Links', 'Creativo' ),
		// shortcode name

		'base'                    => 'jump_links',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Add jump links on a page.', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/jump-links.png', // Simply pass url to your icon here,

		//'weight'                  => 30,

		'params'=> array(
					array(
						'type' => 'param_group',
						'heading' => __( 'Values', 'js_composer' ),
						'param_name' => 'values',
						'description' => __( 'Enter values for graph - value, title and color.', 'js_composer' ),
						'value' => urlencode( json_encode( array(
							array(
								'label' => __( 'Overview', 'js_composer' ),
								'value' => '#overview',
								'icon' => '',
							),
							array(
								'label' => __( 'Web and Ui', 'js_composer' ),
								'value' => '#web-ui',
								'icon' => '',
							),
							array(
								'label' => __( 'Development', 'js_composer' ),
								'value' => '#development',
								'icon' => '',
							),
						) ) ),
						'params' => array(
							array(
								'type' => 'textfield',
								'heading' => __( 'Text of the Link', 'js_composer' ),
								'param_name' => 'label',
								'description' => __( 'Enter text used as title of bar.', 'js_composer' ),
								'admin_label' => true,
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Section id', 'js_composer' ),
								'param_name' => 'value',
								'description' => __( 'Enter value of bar.', 'js_composer' ),
								'admin_label' => true,
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Icon code', 'js_composer' ),
								'param_name' => 'icon',
								'description' => __( 'Enter the text code for the icon. E.g: fa fa-clock.', 'js_composer' ),
								'admin_label' => true,
							),
							
						),
					),	
					array(
				        'type' => 'dropdown',
				        'heading' => __('Styling', 'Creativo'),
				        'param_name' => 'style',
				        'admin_label' => true,						
				        'value' => array( __('Default', 'Creativo') => 'default', __('Custom', 'Creativo') => 'custom' )
				    ),
				    array(
				        'type' => 'dropdown',
				        'heading' => __('Links alignment', 'Creativo'),
				        'param_name' => 'link_align',
				        'admin_label' => true,						
				        'value' => array( __('Center', 'Creativo') => 'center', __('Left', 'Creativo') => 'left', __('Right', 'Creativo') => 'right' ),
				        'dependency' => array(
							'element' => 'style',
							'value' => 'custom'
						)
				    ),
				    array(
					  'type' => 'textfield',
					  'heading' => __('Link spacing (px)', 'Creativo'),
					  'param_name' => 'link_spacing',
					  'admin_label' => true,					  
					  'value' => '40px',
					  'description' => __('Enter a value in pixels for the spacing between each link. Default: 40px', 'Creativo'),	
					  'dependency' => array(
							'element' => 'style',
							'value' => 'custom'
						)
					  		
					),
					array(
					  'type' => 'textfield',
					  'heading' => __('Link Font Size (px)', 'Creativo'),
					  'param_name' => 'link_font_size',
					  'admin_label' => true,
					  'value' => '13px',
					  'description' => __('Enter a font size for the links, in pixels. Default: 13px', 'Creativo'),	
					  'dependency' => array(
							'element' => 'style',
							'value' => 'custom'
						)	
					),

					array(
					  'type' => 'textfield',
					  'heading' => __('Link Font Weight', 'Creativo'),
					  'param_name' => 'link_font_weight',
					  'admin_label' => true,
					  'value' => '',
					  'description' => __('Enter a value for the font weight of the jump links. Possible values are: 300, 400, 500, 600, 700', 'Creativo'),	
					  'dependency' => array(
							'element' => 'style',
							'value' => 'custom'
						)
					  		
					),

					array(
					  'type' => 'textfield',
					  'heading' => __('Link Line Height', 'Creativo'),
					  'param_name' => 'link_line_height',
					  'admin_label' => true,
					  'value' => '',
					  'description' => __('Enter a value for the line height of the jump links. Example: 1.4, normal, 2, 3, 40px, etc.', 'Creativo'),	
					  'dependency' => array(
							'element' => 'style',
							'value' => 'custom'
						)
					  		
					),		
				    array(
						'type' => 'colorpicker',
						'heading' => __( 'Link color', 'js_composer' ),
						'param_name' => 'link_color',
						'admin_label' => true,
						'description' => __( 'Enter a custom color for the jump links. Leave blank to inherit the link color set under Theme Options area', 'js_composer' ),
						'dependency' => array(
							'element' => 'style',
							'value' => 'custom'
						)
					),	

					array(
						'type' => 'colorpicker',
						'heading' => __( 'Link color on Hover', 'js_composer' ),
						'param_name' => 'link_color_hover',
						'description' => __( 'Enter a custom color for the jump links on hover effect. Leave blank to inherit the link color set under Theme Options area', 'js_composer' ),
						'dependency' => array(
							'element' => 'style',
							'value' => 'custom'
						)
					),	

					array(
				      'type' => 'textfield',
				      'heading' => __('Extra class name', 'Creativo'),
				      'param_name' => 'el_class',
				      'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'Creativo')
				    )					
				  		
				),		    			
		
	);
	

