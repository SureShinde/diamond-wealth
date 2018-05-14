<?php
/*
Widget Instagram
*/

	return array(
		'name'                    => __( 'Instagram Widget', 'Creativo' ),
		// shortcode name

		'base'                    => 'cr_instagram_widget_render',
		// shortcode base [test_element]

		'category'                => __( 'WordPress Widgets', 'Creativo' ),
		// param category tab in add elements view

		'description'             => __( 'A widget for Instagram pictures', 'Creativo' ),
		// element description in add elements view

		'icon' => 'icon-wpb-wp', // Simply pass url to your icon here,
		// don't show params window after adding

		'weight'                  => -40,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(					
					array(
						'type' => 'textfield',
						'heading' => __( 'Instagram Username', 'js_composer' ),
						'param_name' => 'username',
						'value' => 'travelmagazine',
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Pictures count', 'js_composer' ),
						'param_name' => 'number',
						'value' => '',
					),

					array(
						'type' => 'dropdown',
						'heading' => __( 'Columns', 'js_composer' ),
						'param_name' => 'columns',
						'value' => array(
							__( '4 Columns', 'js_composer' ) => 4,
							__( '5 Columns', 'js_composer' ) => 5,
							__( '6 Columns', 'js_composer' ) => 6,
							__( '8 Columns', 'js_composer' ) => 8
						),
						'description' => __( 'Select element location.', 'js_composer' )
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Extra class name', 'js_composer' ),
						'param_name' => 'el_class',
						'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' )
					)				
				  		
				),		    			
		
	);