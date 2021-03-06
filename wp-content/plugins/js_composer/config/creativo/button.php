<?php
/*
Button Element
*/
//global $target_arr, $button_size, $button_colors, $alignment;

$button_colors = array(__('Default', 'Creativo') => 'default',__('Green', 'Creativo') => 'green', __('Blue', 'Creativo') => 'blue', __('Red', 'Creativo') => 'red', __('Yellow', 'Creativo') => 'yellow', __('Purple', 'Creativo') => 'purple', __('Grey', 'Creativo') => 'grey', __('Black', 'Creativo') => 'black', __('Custom') => 'custom', __('Custom Gradient') => 'custom_grd');

$button_size = array( __('Small', 'Creativo') => 'small', __('Large', 'Creativo') => 'large');

$button_target = array(	__( 'Same window', 'js_composer' ) => '_self', __( 'New window', 'js_composer' ) => '_blank', );

$button_align = array(__('Center', 'Creativo') => 'center', __('Left', 'Creativo') => 'left', __('Right', 'Creativo') => 'right' );

return array(
		'name'                    => __( 'Button - Creativo', 'Creativo' ),
		// shortcode name

		'base'                    => 'vc_button',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'Eye catching button.', 'Creativo' ),
		// element description in add elements view

		'icon' => 'icon-wpb-ui-button', // Simply pass url to your icon here,
		//'icon' => get_template_directory_uri() . 'icon-wpb-ui-button.png',
		// don't show params window after adding

		//'weight'                  => 21,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
						'type' => 'textfield',
						'heading' => __( 'Text', 'js_composer' ),
						'holder' => 'button',
						'class' => 'wpb_button',
						'param_name' => 'title',
						'value' => __( 'Text on the button', 'js_composer' ),
						'description' => __( 'Enter text on the button.', 'js_composer' ),
					),
					array(
						'type' => 'href',
						'heading' => __( 'URL (Link)', 'js_composer' ),
						'param_name' => 'href',
						'description' => __( 'Enter button link.', 'js_composer' ),
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Target', 'js_composer' ),
						'param_name' => 'target',
						'value' => $button_target,
						'dependency' => array(
							'element' => 'href',
							'not_empty' => true,
							'callback' => 'vc_button_param_target_callback'
						)
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Style', 'js_composer' ),
						'param_name' => 'style',
						'value' => array(
							__( 'Normal', 'js_composer' ) => 'normal',
							__( '3D', 'js_composer' ) => '3d'
						),
						'description' => __( 'Select the style of the button.', 'js_composer' )
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Shape', 'js_composer' ),
						'param_name' => 'shape',
						'value' => array(
							__( 'Square', 'js_composer' ) => 'square',
							__( 'Rounded', 'js_composer' ) => 'rounded',
							__( 'Round', 'js_composer' ) => 'round',
						),
						'description' => __( 'Select the shape of the button.', 'js_composer' )
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Size', 'js_composer' ),
						'param_name' => 'size',
						'value' => $button_size,
						'description' => __( 'Button size.', 'js_composer' )
					),
					array(
						'type' => 'checkbox',
						'heading' => __( 'Set full width button?', 'js_composer' ),
						'param_name' => 'full_width',			
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Style', 'js_composer' ),
						'param_name' => 'color',
						'value' => $button_colors,
						'description' => __( 'Button stlying and colors.', 'js_composer' )
						//'param_holder_class' => 'vc_colored-dropdown'
					),

							array(
								'type' => 'textfield',
								'heading' => __( 'Font Size (px)', 'js_composer' ),
								'param_name' => 'custom_font_size',
								'value' => '', //Default Red color
								'description' => __('Enter a custom Font Size in pixels for the Button Text. E.g: 14px', 'Creativo'),
								'dependency' => array(
									'element' => 'color',
									'value' => array('custom','custom_grd'),
								),
								'group' => __( 'Custom Style', 'js_composer' )
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Line Height', 'js_composer' ),
								'param_name' => 'custom_line_height',
								'value' => '', //Default Red color
								'description' => __('Enter a custom Line Height for the Button Text. E.g: 22px or 2 or normal, etc', 'Creativo'),
								'dependency' => array(
									'element' => 'color',
									'value' => array('custom','custom_grd'),
								),
								'group' => __( 'Custom Style', 'js_composer' )
							),
							array(
								'type' => 'textfield',
								'heading' => __( 'Font Weight', 'js_composer' ),
								'param_name' => 'custom_font_weight',
								'value' => '', //Default Red color
								'description' => __('Enter a Font Weight for the Button Text. Available options are: 300, 400, 500, 600, 700', 'Creativo'),
								'dependency' => array(
									'element' => 'color',
									'value' => array('custom','custom_grd'),
								),
								'group' => __( 'Custom Style', 'js_composer' )
							),

							array(
								'type' => 'textfield',
								'heading' => __( 'Letter Spacing', 'js_composer' ),
								'param_name' => 'custom_letter_spacing',
								'value' => '1px', //Default Red color
								'description' => __('Enter a custom letter spacing value. By default, the buttons are using an -1px value.', 'Creativo'),
								'dependency' => array(
									'element' => 'color',
									'value' => array('custom','custom_grd'),
								),
								'group' => __( 'Custom Style', 'js_composer' )
							),
							
							array(
							  'type' => 'colorpicker',							  
							  'class' => '',
							  'heading' => __('Button Text Color', 'Creativo'),
							  'param_name' => 'custom_text_color',
							  'value' => '#ffffff', //Default Red color
							  'description' => __('Choose the custom border color of the Button', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom','custom_grd'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),

							array(
							  'type' => 'colorpicker',							  
							  'class' => '',
							  'heading' => __('Gradient Color 1', 'Creativo'),
							  'param_name' => 'grd_color_1',
							  'value' => '#5bc98c', //Default Red color
							  'description' => __('Select first color for gradient', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom_grd'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),
							array(
							  'type' => 'colorpicker',							  
							  'class' => '',
							  'heading' => __('Gradient Color 2', 'Creativo'),
							  'param_name' => 'grd_color_2',
							  'value' => '#5bc98c', //Default Red color
							  'description' => __('Select second color for gradient', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom_grd'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),
							
							array(
							  'type' => 'colorpicker',
							  'holder' => 'div',
							  'class' => '',
							  'heading' => __('Button Background Color', 'Creativo'),
							  'param_name' => 'custom_color',
							  'value' => '#5bc98c', //Default Red color
							  'description' => __('Choose the custom color of the Button', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),
							
							array(
							  'type' => 'colorpicker',
							  'holder' => 'div',
							  'class' => '',
							  'heading' => __('Button Border Color', 'Creativo'),
							  'param_name' => 'custom_border_color',
							  'value' => '#5bc98c', //Default Red color
							  'description' => __('Choose the custom border color of the Button', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),	

							array(
								'type' => 'textfield',
								'heading' => __( 'Button Border Width', 'js_composer' ),
								'param_name' => 'button_border_width',
								'value' => '1px', //Default Red color
								'description' => __('Enter a custom value in pixels for the padding left/right. Default: 20px', 'Creativo'),
								'dependency' => array(
									'element' => 'color',
									'value' => array('custom'),
								),
								'group' => __( 'Custom Style', 'js_composer' )
							),
							
							array(
							  'type' => 'colorpicker',
							  'holder' => 'div',
							  'class' => '',
							  'heading' => __('Button Text Color on Hover', 'Creativo'),
							  'param_name' => 'custom_text_color_hover',
							  'value' => '#ffffff', //Default Red color
							  'description' => __('Choose the custom text color on Hover', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),
							
							
							array(
							  'type' => 'colorpicker',
							  'holder' => 'div',
							  'class' => '',
							  'heading' => __('Button Background Color on Hover', 'Creativo'),
							  'param_name' => 'custom_color_hover',
							  'value' => '#666666', //Default Red color
							  'description' => __('Choose the custom color on Hover', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),
							
							array(
							  'type' => 'colorpicker',
							  'holder' => 'div',
							  'class' => '',
							  'heading' => __('Button Border Color on Hover', 'Creativo'),
							  'param_name' => 'custom_border_color_hover',
							  'value' => '#666666', //Default Red color
							  'description' => __('Choose the custom border color on Hover', 'Creativo'),
							  'dependency' => array(
									'element' => 'color',
									'value' => array('custom'),
								),
							  'group' => __( 'Custom Style', 'js_composer' )
							),

							array(
								'type' => 'textfield',
								'heading' => __( 'Padding Left/Right (px)', 'js_composer' ),
								'param_name' => 'padding_lr',
								'value' => '20px', //Default Red color
								'description' => __('Enter a custom value in pixels for the padding left/right. Default: 20px', 'Creativo'),
								'dependency' => array(
									'element' => 'color',
									'value' => array('custom','custom_grd'),
								),
								'group' => __( 'Custom Style', 'js_composer' )
							),

					array(
						'type' => 'checkbox',
						'heading' => __( 'Add icon?', 'js_composer' ),
						'param_name' => 'add_icon',
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Icon Alignment', 'js_composer' ),
						'description' => __( 'Select icon alignment.', 'js_composer' ),
						'param_name' => 'i_align',
						'value' => array(
							__( 'Left', 'js_composer' ) => 'left_icon',
							// default as well
							__( 'Right', 'js_composer' ) => 'right_icon',
						),
						'dependency' => array(
							'element' => 'add_icon',
							'value' => 'true',
						),
					),
					array(
						'type' => 'dropdown',
						'heading' => __( 'Icon library', 'js _composer' ),
						'value' => array(
							__( 'Font Awesome', 'js_composer' ) => 'fontawesome',
							__( 'Open Iconic', 'js_composer' ) => 'openiconic',
							__( 'Typicons', 'js_composer' ) => 'typicons',
							__( 'Entypo', 'js_composer' ) => 'entypo',
							__( 'Linecons', 'js_composer' ) => 'linecons'
						),
						'param_name' => 'icon_type',
						'dependency' => array(
							'element' => 'add_icon',
							'value' => 'true'
						),
						'description' => __( 'Select icon library.', 'js_composer' ),
					),
					array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon', 'js_composer' ),
						'param_name' => 'icon_fontawesome',
			            'value' => 'fa fa-info-circle',
						'settings' => array(
							'emptyIcon' => false, // default true, display an 'EMPTY' icon?
							'iconsPerPage' => 2000, // default 100, how many icons per/page to display
						),
						'dependency' => array(
							'element' => 'icon_type',
							'value' => 'fontawesome',
						),
						'description' => __( 'Select icon from library.', 'js_composer' ),
					),
					array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon', 'js_composer' ),
						'param_name' => 'icon_openiconic',
						'settings' => array(
							'emptyIcon' => false, // default true, display an 'EMPTY' icon?
							'type' => 'openiconic',
							'iconsPerPage' => 2000, // default 100, how many icons per/page to display
						),
						'dependency' => array(
							'element' => 'icon_type',
							'value' => 'openiconic',
						),
						'description' => __( 'Select icon from library.', 'js_composer' ),
					),
					array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon', 'js_composer' ),
						'param_name' => 'icon_typicons',
						'settings' => array(
							'emptyIcon' => false, // default true, display an 'EMPTY' icon?
							'type' => 'typicons',
							'iconsPerPage' => 2000, // default 100, how many icons per/page to display
						),
						'dependency' => array(
						'element' => 'icon_type',
						'value' => 'typicons',
					),
						'description' => __( 'Select icon from library.', 'js_composer' ),
					),
					array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon', 'js_composer' ),
						'param_name' => 'icon_entypo',
						'settings' => array(
							'emptyIcon' => false, // default true, display an 'EMPTY' icon?
							'type' => 'entypo',
							'iconsPerPage' => 2000, // default 100, how many icons per/page to display
						),
						'dependency' => array(
							'element' => 'icon_type',
							'value' => 'entypo',
						),
					),
					array(
						'type' => 'iconpicker',
						'heading' => __( 'Icon', 'js_composer' ),
						'param_name' => 'icon_linecons',
						'settings' => array(
							'emptyIcon' => false, // default true, display an 'EMPTY' icon?
							'type' => 'linecons',
							'iconsPerPage' => 2000, // default 100, how many icons per/page to display
						),
						'dependency' => array(
							'element' => 'icon_type',
							'value' => 'linecons',
						),
						'description' => __( 'Select icon from library.', 'js_composer' ),
					),
					array(
					  'type' => 'dropdown',
					  'heading' => __('Button Align', 'Creativo'),
					  'param_name' => 'align',
					  'value' => $button_align,
					  'description' => __('Select the alignment for the button.', 'Creativo')
					),
					array(
						'type' => 'checkbox',
						'heading' => __( 'Display Inline Buttons?', 'js_composer' ),
						'param_name' => 'inline_button',
						'value' => array( __( 'Yes, please', 'js_composer' ) => 'yes' ),
						'description' => __( 'Check this option if you want to show more buttons on the same row, as inline buttons. For this option to work you will have to enable it for the other buttons on the same row and also for the row element to set the Element Alignment option to left, right or center.', 'js_composer' )
					),
					vc_map_add_css_animation(),
					array(
					  'type' => 'textfield',
					  'heading' => __('Animation Delay (miliseconds)', 'Creativo'),
					  'param_name' => 'delay',
					  'description' => __('Add animation delay in miliseconds. E.g: 1000 = 1 second.', 'Creativo')
					),
					array(
						'type' => 'textfield',
						'heading' => __( 'Extra class name', 'js_composer' ),
						'param_name' => 'el_class',
						'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
					),	
				),		    			
		
	);
	

