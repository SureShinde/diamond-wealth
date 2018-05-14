<div class="pyre_metabox">
<?php
$this->select(	'en_footer',
				__('Enable Footer', 'Creativo'),
				array('yes' => __('Yes', 'Creativo'), 'no' => __('No', 'Creativo')),
				__('Select to show or hide the Footer area.', 'Creativo')
			);

$this->select(	'en_widgets',
				__('Enable Footer Widgets', 'Creativo'),
				array('yes' => __('Yes', 'Creativo'), 'no' => __('No', 'Creativo')),
				__('Select to enable or disable the Footer Widgets.', 'Creativo')
			);
$this->select(	'footer_width',
				__('Footer Width', 'Creativo'),
				array('default' => __('Default', 'Creativo'), 'normal' => __('Normal', 'Creativo'), 'expanded' => __('Expanded', 'Creativo')),
				__('Select the width used for the Footer area.', 'Creativo')
			);

$this->select(	'call_to_action',
				__('Enable Call to Action', 'Creativo'),
				array('default' => __('Default ', 'Creativo'), 'true' => __('Enable', 'Creativo'), 'false' => __('Disable', 'Creativo'), ),
				__('Enable/disable the Call to Action', 'Creativo')
			);
?>
</div>