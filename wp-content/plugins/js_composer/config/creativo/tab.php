<?php
/*
Tab Element
*/

return array(
		'name'                    => __( 'Tab', 'Creativo' ),
		// shortcode name

		'allowed_container_element' => 'vc_row',

		'base'                    => 'vc_tab',
		// shortcode base [test_element]

		'is_container' => true,
		'content_element' => false,		

		'params'=> array(
					array(
						'type' => 'textfield',
						'heading' => __( 'Title', 'js_composer' ),
						'param_name' => 'title',
						'description' => __( 'Enter title of tab.', 'js_composer' ),
					),
					array(
						'type' => 'tab_id',
						'heading' => __( 'Tab ID', 'js_composer' ),
						'param_name' => 'tab_id',
					),
					array(
				      "type" => "attach_image",
				      "heading" => __("Image Icon", "Creativo"),
				      "param_name" => "icon_img",
				      "value" => "",
				      "description" => __("Select/upload image from media library. <br />If no image is being used, the Text Icon library will be used", "Creativo")
				    ),
					array(
						'type' => 'iconpicker',
						'heading' => __( 'Text Icon', 'js_composer' ),
						'param_name' => 'icon_text',
			            'value' => '',
						'settings' => array(
							'emptyIcon' => true, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 1000, // default 100, how many icons per/page to display
						),		
						'admin_label' => true,	
						'description' => __( 'Select icon from library.', 'js_composer' ),
					),
				),				
		'js_view' => 'VcTabView' ,		    			
		
	);