<div class='pyre_metabox'>

<?php 
$this->upload('background', __('Custom Background Image', 'Creativo'), __('This will overide the actual background used in the Theme Option Area.', 'Creativo')); ?>
<?php
$this->select(	'en_full_screen',
				__('Enable FullScreen Background Image', 'Creativo'),
				array('no' => __('No', 'Creativo'), 'yes' => __('Yes', 'Creativo')),
				__('Select to enable or disable the Fullscreen Background Image. This option requires to use a Custom Background Image.', 'Creativo')
			);
?>
<?php 
$this->colorpicker('bg_color', __('Custom Background Color', 'Creativo'), __('This will overide the actual background color used in the Theme Option Area.', 'Creativo'));?>

<?php
$this->select(	'bg_repeat',
				__('Custom Background Repeat', 'Creativo'),
				array(
					'no-repeat' => __('No Repeat','Creativo'), 
					'repeat-x' => __('Repeat Horizontally', 'Creativo'), 
					'repeat-y' => __('Repeat Vertically', 'Creativo'), 
					'repeat' => __('Repeat All', 'Creativo')
					),
				__('Select how the Custom Background Image will be repeated along the page.', 'Creativo')
			);
?>
<?php
$this->select(	'bg_position',
				__('Custom Background Position', 'Creativo'),
				array('top left' => __('Top Left', 'Creativo'), 
				      'top center' => __('Top Center', 'Creativo'), 
					  'top right' => __('Top Right', 'Creativo'), 
					  'center left' => __('Middle Left', 'Creativo'),
					  'center center' => __('Middle Center', 'Creativo'),
					  'center right' => __('Middle Right', 'Creativo'),
					  'bottom left' => __('Bottom Left', 'Creativo'),
					  'bottom center' => __('Bottom Center', 'Creativo'),
					  'bottom right' => __('Bottom Right', 'Creativo')
					  ),
				__('Select how the Custom Background Image will be positioned on the page.', 'Creativo')
			);
?>
<?php
$this->select(	'bg_attach',
				__('Custom Background Scrolling', 'Creativo'),
				array(
					'fixed' => __('Fixed in Place', 'Creativo'), 
					'scroll' => __('Scroll Normally', 'Creativo')
					),
				__('Select how the Custom Background Image will behave on user scroll.', 'Creativo')
			);
?>
</div>