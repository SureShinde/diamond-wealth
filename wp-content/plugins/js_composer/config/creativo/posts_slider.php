<?php
/*
3D Portfolio Element
*/

	global $posts, $categories, $all_authors;	
	
	// Note that all keys=values in mapped shortcode can be used with javascript variable vc.map, and php shortcode settings variable.
	return array(
		'name'                    => __( 'Posts Slider', 'Creativo' ),
		// shortcode name

		'base'                    => 'cr_posts_slider',
		// shortcode base [test_element]

		'category'                => 'Creativo',
		// param category tab in add elements view

		'description'             => __( 'A beautiful Posts Slider', 'Creativo' ),
		// element description in add elements view

		'icon' => get_template_directory_uri() . '/images/vc/owl-carousel.png', // Simply pass url to your icon here,
		// don't show params window after adding

		//'front_enqueue_js' => get_template_directory_uri().'/js/vc/isotope.js',

		//'weight'                  => 19,
		// Depends on ordering in list, Higher weight first		

		//'js_view'                 => 'ViewTestElement',
		// JS View name for backend. Can be used to override or add some logic for shortcodes in backend (cloning/rendering/deleting/editing).

		'params'=> array(
					array(
				      'type' => 'textfield',
				      'heading' => __('Items Count', 'Creativo'),
				      'param_name' => 'items',
					  'admin_label' => true,
					  'value' => '3',
				      'description' => __('Enter how many portfolio items to show.', 'Creativo')
				    ),
				    array(
				      'type' => 'dropdown',
				      'heading' => __('Show Post Category', 'Creativo'),
				      'param_name' => 'show_category',					  
				      'value' => array(__('Yes', 'Creativo') => 'yes', __('No', 'Creativo') => 'no'),
				      'description' => __('Show/hide post category.', 'Creativo')
				    ),
					array(
				      'type' => 'dropdown',
				      'heading' => __('Show Post Title', 'Creativo'),
				      'param_name' => 'show_title',					  
				      'value' => array(__('Yes', 'Creativo') => 'yes', __('No', 'Creativo') => 'no'),
				      'description' => __('Show/hide post title.', 'Creativo')
				    ),
				    array(
				      'type' => 'dropdown',
				      'heading' => __('Show Post Excerpt', 'Creativo'),
				      'param_name' => 'show_excerpt',					  
				      'value' => array(__('Yes', 'Creativo') => 'yes', __('No', 'Creativo') => 'no'),
				      'description' => __('Show/hide portfolio tags.', 'Creativo')
				    ),/*
					array(
				      'type' => 'dropdown',
				      'heading' => __('Columns', 'Creativo'),
				      'param_name' => 'columns',
					  'admin_label' => true,
				      'value' => array(4,3,2,1),
				      'description' => __('Select the number of columns to use.', 'Creativo')
				    ),*/
				    array(
						'type' => 'multiselect',
						'heading' => __( 'Include specific categories only', 'js_composer' ),
						'param_name' => 'include_categ',
						'value' => $categories,
						//'options' => ,
						'description' => __( 'Select only specific categories to display posts', 'js_composer' ),
							
						),
				    array(
						'type' => 'multiselect',
						'heading' => __( 'Include specific posts only', 'js_composer' ),
						'param_name' => 'include',
						'value' => $posts,
						//'options' => ,
						'description' => __( 'Select only specificposts to be displayed', 'js_composer' ),							
						),

				    array(
							'type' => 'multiselect',
							'heading' => __( 'Show Posts by Author', 'js_composer' ),
							'param_name' => 'author_select',
							'value' => $all_authors,
							'description' => __( 'Select only specific posts to be displayed', 'js_composer' ),
									
						),
									
					array(
							'type' => 'textfield',
							'heading' => __( 'Extra class name', 'js_composer' ),
							'param_name' => 'el_class',
							'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
					),
					array(
				      'type' => 'textfield',
				      'heading' => __('Slider Width', 'Creativo'),
				      'param_name' => 'width',					  
					  'value' => '100%',
				      'description' => __('Enter the width of the Slider.', 'Creativo'),
				      'group' => __( 'Design Options', 'js_composer' ),
				    ),
					array(
				      'type' => 'dropdown',
				      'heading' => __('Style', 'Creativo'),
				      'param_name' => 'slider_style',					  
				      'value' => array(__('Default', 'Creativo') => 'default', __('Custom', 'Creativo') => 'custom'),
				      'description' => __('Selec the styling of the Posts Slider.', 'Creativo'),
				      'group' => __( 'Design Options', 'js_composer' ),
				    ),
				    array(
					  'type' => 'colorpicker',					  					  
					  'heading' => __('Title color', 'Creativo'),
					  'param_name' => 'title_color',
					  'value' => '#ffffff', //Default Red color
					  'description' => __('Choose the Post Title color', 'Creativo'),
					  'group' => __( 'Design Options', 'js_composer' ),
					  'dependency' => array(
							'element' => 'slider_style',
							'value' => 'custom',							
						),
					),
					array(
				      'type' => 'textfield',
				      'heading' => __('Title Font Size', 'Creativo'),
				      'param_name' => 'title_font_size',					  
					  'value' => '45px',
				      'description' => __('Enter the Post Title font size.', 'Creativo'),
				      'group' => __( 'Design Options', 'js_composer' ),
				      'dependency' => array(
							'element' => 'slider_style',
							'value' => 'custom',							
						),
				    ),
					array(
					  'type' => 'colorpicker',					  					  
					  'heading' => __('Excerpt color', 'Creativo'),
					  'param_name' => 'excerpt_color',
					  'value' => '#ffffff', //Default Red color
					  'description' => __('Choose the Post Excerpt color', 'Creativo'),
					  'group' => __( 'Design Options', 'js_composer' ),
					  'dependency' => array(
							'element' => 'slider_style',
							'value' => 'custom',							
						),
					),
					array(
				      'type' => 'textfield',
				      'heading' => __('Excerpt Font Size', 'Creativo'),
				      'param_name' => 'excerpt_font_size',					  
					  'value' => '16px',
				      'description' => __('Enter the Post Excerpt font size.', 'Creativo'),
				      'group' => __( 'Design Options', 'js_composer' ),
				      'dependency' => array(
							'element' => 'slider_style',
							'value' => 'custom',							
						),
				    ),
				    array(
				      'type' => 'textfield',
				      'heading' => __('Excerpt Words Limit', 'Creativo'),
				      'param_name' => 'excerpt_words',					  
					  'value' => '20',
				      'description' => __('Enter the number of words to be used. Default is 20.', 'Creativo'),
				      'group' => __( 'Design Options', 'js_composer' ),
				      'dependency' => array(
							'element' => 'slider_style',
							'value' => 'custom',							
						),
				    ),
					array(
					  'type' => 'colorpicker',					  					  
					  'heading' => __('Category color', 'Creativo'),
					  'param_name' => 'category_color',
					  'value' => '#ffffff', //Default Red color
					  'description' => __('Choose the Post Category color', 'Creativo'),
					  'group' => __( 'Design Options', 'js_composer' ),
					  'dependency' => array(
							'element' => 'slider_style',
							'value' => 'custom',							
						),
					),
					array(
				      'type' => 'textfield',
				      'heading' => __('Category Font Size', 'Creativo'),
				      'param_name' => 'category_font_size',					  
					  'value' => '16px',
				      'description' => __('Enter the Category font size.', 'Creativo'),
				      'group' => __( 'Design Options', 'js_composer' ),
				      'dependency' => array(
							'element' => 'slider_style',
							'value' => 'custom',							
						),
				    ),
				    /*
				    array(
				      'type' => 'textfield',
				      'heading' => __('Slider Height', 'Creativo'),
				      'param_name' => 'height',					  
					  'value' => '550px',
				      'description' => __('Enter the height of the Slider.', 'Creativo'),
				      'group' => __( 'Design Options', 'js_composer' ),
				    ),*/
				  		
				),		    			
		
	);