<?php
/*
Video Pop-up
*/

	return array(
		'name'                    => __( 'Video Pop-up', 'Creativo' ),
		// shortcode name

		'base'                    => 'cr_video_pop',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Add a Video Pop-up.', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/video_pop.png', // Simply pass url to your icon here,
		// don't show params window after adding

		//'front_enqueue_js' => get_template_directory_uri().'/js/vc/clients.js',

		//'weight'                  => 15,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
						'type' => 'colorpicker',
						'heading' => __( 'Video Icon color', 'js_composer' ),
						'param_name' => 'icon_color',
						'value' => '#333333',
						'description' => __( 'Select the color of the icon.', 'js_composer' )
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Video Icon Size', 'js_composer' ),
						'param_name' => 'icon_size',
						'value' => '30px',
						'description' => __( 'Enter the icon size in pixels. E.g: 30px', 'js_composer' )
					),
					array(
				      "type" => "textfield",
				      "heading" => __("Youtube Video URL", "Creativo"),
				      "param_name" => "ytb_video",					  
					  "admin_label" => true,
				      "description" => __("Enter the the Youtube video URL. E.g: https://www.youtube.com/watch?v=L_KaQfS1hRQ", "Creativo")
				    ),
				    array(
				      "type" => "textfield",
				      "heading" => __("Vimeo Video URL", "Creativo"),
				      "param_name" => "vm_video",					  
					  "admin_label" => true,
				      "description" => __("Enter the the Vimeo video URL. E.g: https://vimeo.com/253132660", "Creativo")
				    ),								    

					array(
				      "type" => "textfield",
				      "heading" => __("Extra class name", "Creativo"),
				      "param_name" => "el_class",
				      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "Creativo")
				    )					
				  		
				),		    			
		
	);
	

