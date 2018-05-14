<?php
/*
Clients Element
*/
global $clients;
	return array(
		'name'                    => __( 'Advanced Tables', 'Creativo' ),
		// shortcode name

		'base'                    => 'advanced_tables',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Create an Advanced table', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/advanced-tables.png', // Simply pass url to your icon here,

		//'weight'                  => 30,

		'params'=> array(
					array(
				        'type' => 'dropdown',
				        'heading' => __('Table Style', 'Creativo'),
				        'param_name' => 'style',
				        'admin_label' => true,						
				        'value' => array( __('Pricing Table', 'Creativo') => 'table_pricing', __('Features Table', 'Creativo') => 'table_features' )
				    ),
				    array(
				        'type' => 'dropdown',
				        'heading' => __('Table Columns', 'Creativo'),
				        'param_name' => 'tab_columns',
				        'admin_label' => true,						
				        'value' => array( 3,2,4,5 )
				    ),
					array(
						'type' => 'param_group',
						'heading' => __( 'Columns', 'js_composer' ),
						'param_name' => 'columns',
						'description' => __( 'Enter values for creating individual columns.', 'js_composer' ),
						'value' => urlencode( json_encode( array(
							array(
								'label' => __( 'Starter', 'js_composer' ),
								'icon' 	=> '',
								'value' => '',
								'billing_cycle' => '',
								'price' => '',
								'button_text' => '',
								'button_link' => '',
							),
							array(
								'label' => __( 'Basic', 'js_composer' ),
								'value' => '',
								'icon' 	=> '',
								'billing_cycle' => '',
								'price' => '',
								'button_text' => '',
								'button_link' => '',
							),
							array(
								'label' => __( 'Advanced', 'js_composer' ),
								'value' => '',
								'icon' 	=> '',
								'billing_cycle' => '',
								'price' => '',
								'button_text' => '',
								'button_link' => '',
							),
						) ) ),
						'params' => array(
							array(
								'type' => 'textfield',
								'heading' => __( 'Column Text', 'js_composer' ),
								'param_name' => 'label',
								'description' => __( 'Enter the heading title for the column.', 'js_composer' ),
								'admin_label' => true,
							),
							array(
						      'type' => 'attach_image',
						      'heading' => __('Column Icon', 'Creativo'),
						      'param_name' => 'icon',
						      'value' => '',
						      'description' => __('Select/upload image from media library.', 'Creativo')
						    ),
						    array (
								'type' => 'colorpicker',		    
							    'heading' => __('Heading - Separator - Button color', 'Creativo'),
							    'param_name' => 'head_sep_but_color',
							    'value' => '', //Default Red color
							    'description' => __('Choose the a custom color for the Column Heading Text, Separator and Button', 'Creativo'),
								'weight' => 1,
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Price', 'js_composer' ),
								'param_name' => 'price',
								'description' => __( 'Enter the heading title for the column.', 'js_composer' ),
								'admin_label' => true,
							),
							array(
								'type' => 'textarea',
								'heading' => __( 'Features', 'js_composer' ),
								'param_name' => 'value',
								'description' => __( 'Enter the features for this columns. Each feature must be placed on a new line.', 'js_composer' ),
								'admin_label' => false,
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Billing Cycle', 'js_composer' ),
								'param_name' => 'billing_cycle',
								'description' => __( 'Enter the heading title for the column.', 'js_composer' ),
								'admin_label' => true,
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Button text', 'js_composer' ),
								'param_name' => 'button_text',								
								'description' => __( 'Enter the text for the button.', 'js_composer' ),
								//'admin_label' => true,
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Button Link', 'js_composer' ),
								'param_name' => 'button_link',
								'description' => __( 'Enter the link for the button.', 'js_composer' ),
								//'admin_label' => true,
								'dependency' => array(
									'element' => 'button_text',
									'not_empty' => true
								)
							),
							
						),
					),

					array (
						'type' => 'colorpicker',					    
					    'heading' => __('Columns Background Color', 'Creativo'),
					    'param_name' => 'col_bg_color',
					    'value' => '#f7f8f9',
					    'description' => __('Choose the color of the title', 'Creativo'),						
					),	

					array(
				        'type' => 'dropdown',
				        'heading' => __('Add shadow effect on Hover', 'Creativo'),
				        'param_name' => 'add_shadow',
				        'admin_label' => true,						
				        'value' => array( __('Yes', 'Creativo') => 'yes', __('No', 'Creativo') => 'no' )
				    ),				

					array(
				      'type' => 'textfield',
				      'heading' => __('Extra class name', 'Creativo'),
				      'param_name' => 'el_class',
				      'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'Creativo')
				    )					
				  		
				),		    			
		
	);
	

