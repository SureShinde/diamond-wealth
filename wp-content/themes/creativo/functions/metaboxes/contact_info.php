<div class="pyre_metabox">
<div class="pyre_warning"><?php echo __('These options should not be used anymore. Instead use the Theme Options -> Contact Options area.', 'Creativo'); ?></div>
<?php
$this->text(	'email',
				__('Email Address', 'Creativo'),
				''
			);
?>
<?php
$this->textarea(	'gmap',
				__('Google Maps Address', 'Creativo')
			);
?>

<?php
$this->select(	'zoom',
				__('Zoom Level', 'Creativo'),
				array("8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21","22","23","24","25","26"),
				''
			);
?>
</div>