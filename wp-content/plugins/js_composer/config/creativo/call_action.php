<?php
/*
Call to Action Element
*/

	global $target_arr, $style_arr, $button_colors, $size_arr2;
	// Note that all keys=values in mapped shortcode can be used with javascript variable vc.map, and php shortcode settings variable.
	return array(
		'name'                    => __( 'Call to Action', 'Creativo' ),
		// shortcode name

		'base'                    => 'tagline_box',
		// shortcode base [test_element]

		'category'                => __( 'Creativo', 'Creativo' ),
		// param category tab in add elements view

		'description'             => __( 'Catch visitors attention with CTA block.', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/call_action.png', // Simply pass url to your icon here,
		// don't show params window after adding

		//'weight'                  => 21,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
					  "type" => "dropdown",
					  "heading" => __("Call to Action Elements Positioning", "Creativo"),
					  "param_name" => "action_box_style",
					  "value" => array( __("Left ( title & description) + Right (button)", "Creativo") => "style1", 
					  					__("Centered (Title, Description & Button)", "Creativo") => "style2"
					  			),
					  "description" => __("Select the style of the Action Box - Style 2 will center the elements of the Action Box.", "Creativo")
					),		  
					array(
					  "type" => "textarea",
					  'admin_label' => true,
					  "heading" => __("Heading text", "Creativo"),
					  "param_name" => "call_text",
					  "value" => __("Heading Text Here", "Creativo"),
					  "description" => __("Enter your heading text.", "Creativo")
					),
					array(
					  "type" => "textarea",
					  'admin_label' => true,
					  "heading" => __("Description text", "Creativo"),
					  "param_name" => "call_text_small",
					  "value" => __("Subheading text here", "Creativo"),
					  "description" => __("Enter your description", "Creativo")
					),		
					array(
					  "type" => "textfield",
					  "heading" => __("Text on the button", "Creativo"),
					  "param_name" => "title",
					  "value" => __("Text on the button", "Creativo"),
					  "description" => __("Text on the button.", "Creativo")
					),
					array(
					  "type" => "textfield",
					  "heading" => __("URL (Link)", "Creativo"),
					  "param_name" => "href",
					  "description" => __("Button link.", "Creativo")
					),
					array(
					  "type" => "dropdown",
					  "heading" => __("Target", "Creativo"),
					  "param_name" => "target",
					  "value" => $target_arr,
					  "dependency" => Array('element' => "href", 'not_empty' => true)
					),
					array(
					  "type" => "dropdown",
					  "heading" => __("Styling", "Creativo"),
					  "param_name" => "color",
					  "value" => array(__("Default", "Creativo") => "default",__("Green", "Creativo") => "green", __("Blue", "Creativo") => "blue", __("Red", "Creativo") => "red", __("Yellow", "Creativo") => "yellow", __("Purple", "Creativo") => "purple", __("Grey", "Creativo") => "grey", __("Black", "Creativo") => "black", __('Custom', 'Creativo') => 'custom'),
					  "description" => __("Button color.", "Creativo")
					),
					array(
						"type" => "colorpicker",
						"heading" => __("Background Color", 'Creativo'),
						"param_name" => "custom_bg_color",
						"value" => '', //Default Red color
						"description" => __("Choose a custom background color for the CTA element.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),/*
					array(
						"type" => "colorpicker",
						"heading" => __("Background Color on Hover", 'Creativo'),
						"param_name" => "custom_bg_color_hover",
						"value" => '', //Default Red color
						"description" => __("Choose a custom background color on hover for the CTA element.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),*/
					array(
						'type' => 'attach_image',
						'heading' => __( 'Background Image', 'js_composer' ),
						'param_name' => 'custom_bg_image',
						'value' => '',
						'description' => __( 'Select an image from media library to be used as the background of the Call to Action element.', 'js_composer' ),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),						
					),
					array(
						"type" => "textfield",
						"heading" => __("Inner Padding", "Creativo"),
						"param_name" => "custom_inner_padding",
						"value" => '',
						"description" => __("This option allows you to change the inner padding of the Call to Action element. Leave blank to use the default padding set for the theme. E.g: 40px", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "colorpicker",
						"heading" => __("Heading Text Color", 'Creativo'),
						"param_name" => "custom_title_color",
						"value" => '#03072e', //Default Red color
						"description" => __("Choose a custom color for the Heading text.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),/*
					array(
						"type" => "colorpicker",
						"heading" => __("Heading Text Color on Hover", 'Creativo'),
						"param_name" => "custom_title_color_hover",
						"value" => '#ffffff', //Default Red color
						"description" => __("Choose a custom color for the Heading text on hover.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),*/
					array(
						"type" => "textfield",
						"heading" => __("Heading Text Font Size", "Creativo"),
						"param_name" => "custom_title_font_size",
						"value" => '',
						"description" => __("Enter a custom Font Size in pixels for the Heading Text. E.g: 20px", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "textfield",
						"heading" => __("Heading Text Font Weight", "Creativo"),
						"param_name" => "custom_title_font_weight",
						"value" => '',
						"description" => __("Enter a custom Font Weight for the Heading Text. Available options are: 300, 400, 500, 600, 700", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),

					array(
						"type" => "textfield",
						"heading" => __("Heading Text Line Height", "Creativo"),
						"param_name" => "custom_title_line_height",
						"value" => '',
						"description" => __("Enter a custom Line Height for the Heading Text. E.g: 24px or 2 or normal, etc.", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),

					array(
						"type" => "colorpicker",
						"heading" => __("Description Text Color", 'Creativo'),
						"param_name" => "custom_description_color",
						"value" => '#939399', //Default Red color
						"description" => __("Choose a custom color for the Description text.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "textfield",
						"heading" => __("Description Text Font Size", "Creativo"),
						"param_name" => "custom_description_font_size",
						"value" => '',
						"description" => __("Enter a custom Font Size in pixels for the Description Text. E.g: 20px", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "textfield",
						"heading" => __("Description Text Font Weight", "Creativo"),
						"param_name" => "custom_description_font_weight",
						"value" => '',
						"description" => __("Enter a custom Font Weight for the Description Text. Available options are: 300, 400, 500, 600, 700", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),

					array(
						"type" => "textfield",
						"heading" => __("Description Text Line Height", "Creativo"),
						"param_name" => "custom_description_line_height",
						"value" => '',
						"description" => __("Enter a custom Line Height for the Description Text. E.g: 24px or 2 or normal, etc.", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),

					array(
					  "type" => "dropdown",
					  "heading" => __("Button Vertical Align", "Creativo"),
					  "param_name" => "button_align",
					  "value" => array(__("Top", "Creativo") => "top", __('Middle', 'Creativo') => 'middle'),
					  "description" => __("Choose the vertical alignment of the Button.", "Creativo"),
					  'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),

					array(
						"type" => "colorpicker",
						"heading" => __("Button Text Color", 'Creativo'),
						"param_name" => "button_text_color",
						"value" => '#ffffff', //Default Red color
						"description" => __("Choose a custom color for the text of the button.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "textfield",
						"heading" => __("Button Text Font Size", "Creativo"),
						"param_name" => "button_text_font_size",
						"value" => '',
						"description" => __("Enter a custom Font Size for the Text of the Button. E.g: 14px", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "textfield",
						"heading" => __("Button Text Font Weight", "Creativo"),
						"param_name" => "button_text_font_weight",
						"value" => '',
						"description" => __("Enter a custom Font Weight for the Text of the Button. Available options are: 300, 400, 500, 600, 700", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "textfield",
						"heading" => __("Button Text Line Height", "Creativo"),
						"param_name" => "button_text_line_height",
						"value" => '',
						"description" => __("Enter a custom Line Heighter for the Text of the Button. E.g: 24px or 2 or normal, etc.", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "colorpicker",
						"heading" => __("Button Border Color", 'Creativo'),
						"param_name" => "button_border_color",
						"value" => '#03072e', //Default Red color
						"description" => __("Choose a custom color for the border of the button.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "colorpicker",
						"heading" => __("Button Background Color", 'Creativo'),
						"param_name" => "button_bg_color",
						"value" => '#03072e', //Default Red color
						"description" => __("Choose a custom color for the background of the button.", 'Creativo'),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
						"type" => "textfield",
						"heading" => __("Button Border Radius (px)", "Creativo"),
						"param_name" => "button_border_radius",
						"value" => '',
						"description" => __("Enter a value for the Border Radius. This value will make rounder corners for the Featured Services box. E.g: 10px ", "Creativo"),
						'dependency' => array(
							'element' => 'color',
							'value' => 'custom',
						),
					),
					array(
					  "type" => "dropdown",
					  "heading" => __("Size", "Creativo"),
					  "param_name" => "size",
					  "value" => $size_arr2,
					  "description" => __("Button size.", "Creativo")
					),
					array(
					  "type" => "textfield",
					  "heading" => __("Extra class name", "Creativo"),
					  "param_name" => "el_class",
					  "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "Creativo")
					)	
				),		    			
		
	);

