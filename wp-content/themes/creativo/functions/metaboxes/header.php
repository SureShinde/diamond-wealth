<div class="pyre_metabox">
<?php
$this->select(	'en_header',
				__('Enable Header', 'Creativo'),
				array('yes' => __('Yes', 'Creativo'), 'no' => __('No', 'Creativo')),
				__('Select to enable or disable the Header area.', 'Creativo')
			);

$this->select(	'header_style',
				__('Header Style', 'Creativo'),
				array(
					'default' => __('Default - set in Theme Options', 'Creativo'), 
					'style1' => __('Normal', 'Creativo'), 
					'style2' => __('Modern', 'Creativo'), 
					'business' => __('Business', 'Creativo')
				),
				__('Select the style of the Header', 'Creativo')
			);

$this->select(	'header_el_pos',
				__('Header Elements Positioning', 'Creativo'),
				array('default' => __('Default - set in Theme Options', 'Creativo'), 'normal' => __('Normal', 'Creativo'), 'center' => __('Centered', 'Creativo'), 'left' => __('Left', 'Creativo')),
				__('Select the positioning of the Header elements', 'Creativo')
			);

$this->select(	'header_width',
				__('Header Width', 'Creativo'),
				array('default' => __('Default', 'Creativo'), 'normal' => __('Normal', 'Creativo'), 'expanded' => __('Expanded', 'Creativo')),
				__('Select the width of the Header area', 'Creativo')
			);			

$this->select(	'en_topbar',
				__('Enable Top Bar', 'Creativo'),
				array('default' => __('Default', 'Creativo'), 'yes' => __('Yes', 'Creativo'), 'no' => __('No', 'Creativo')),
				__('Select to show or hide the Top Bar area. Leave Default to inherit the setting from the Theme Options -> Top Bar', 'Creativo')
			);

$this->select(	'transparent_header',
				__('Enable Transparent header', 'Creativo'),
				array('default' => __('Default', 'Creativo'),'not' => __('No', 'Creativo'), 'yes' => __('Yes', 'Creativo')),
				__('Select to enable or disable the use of Transparent Header. Leave Default selected to inherit the setting from Theme Options -> Header Top -> Transparent Header', 'Creativo')
			);

$this->text('header_transparency',
			__('Header Transparency', 'Creativo'),
			__('Enter transparency in percents. E.g: 60%. Leave blank to make your header fully transparent.<br>This option will only work if you Enable Transparent header option above.', 'Creativo')				
			);	
			
$this->upload('transparent_logo', __('Custom Logo', 'Creativo'), __('Allows you to upload a custom logo for the Transparent Header. ', 'Creativo')); 
$this->upload('transparent_logo_retina', __('Custom Logo Retina', 'Creativo'), __('Allows you to upload a custom logo for the Transparent Header for Retina enabled devices. ', 'Creativo')); 

$this->colorpicker('transparent_header_color', __('Transparent Header Menu Color', 'Creativo'), __('Select a custom color for the main items of the Header Menu - this will overide the Header Menu settings under Theme Options', 'Creativo')); 

$this->colorpicker('transparent_header_border_color', __('Transparent Header Bottom Border Color', 'Creativo'), __('Select a custom color for the border bottom of the Header Menu - this will overide the Header Business Icons Border setting under Theme Options', 'Creativo')); 

$this->colorpicker('transparent_header_icons_border_color', __('Transparent Header Icons Border Color', 'Creativo'), __('Select a custom color for the border of the Business Header Icons - this will overide the Header Business Icons Border Color setting under Theme Options', 'Creativo')); 

$this->colorpicker('transparent_logo_color', __('Transparent Header Text Logo Color', 'Creativo'), __('Select a custom color for the Text Logo when the Transparent Header is being used - this will overide the Text Logo color settings under Theme Options', 'Creativo')); 

$this->colorpicker('transparent_tagline_color', __('Transparent Header Tagline Color', 'Creativo'), __('Select a custom color for the Tagline when the Transparent Header is being used - this will overide the Tagline color settings under Theme Options', 'Creativo')); 


/* Menu selection for header */
$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
$menu_select['default'] = 'Default Menu';

foreach ( $menus as $menu ) {
	$menu_select[$menu->term_id] = $menu->name;
}

$this->select(
	'main_menu',
	__( 'Header Menu', 'Creativo' ),
	$menu_select,
	__( 'Select the menu you want to use inside the Header. Leave Default to use the Menu you set as Menus -> Primary Menu', 'Creativo' )
);

$this->select(
	'top_menu',
	__( 'Top Bar Menu', 'Creativo' ),
	$menu_select,
	__( 'Select the menu you want to use as the Top Bar Menu. Leave Default to use the Menu you set as Menus -> Top Menu', 'Creativo' )
);

$this->select(
	'one_menu',
	__( 'One Page Navigation Menu', 'Creativo' ),
	$menu_select,
	__( 'Select the menu you want to use for your One Page Navigation. Leave Default to use the Menu you set as Menus -> One Page Menu', 'Creativo' )
);
$this->select(
	'side_menu',
	__( 'Side Navigation Menu', 'Creativo' ),
	$menu_select,
	__( 'Select the menu you want to use for your Side Navigation. Leave Default to use the Menu you set as Menus -> Side Navigation Menu', 'Creativo' )
);
?>
</div>