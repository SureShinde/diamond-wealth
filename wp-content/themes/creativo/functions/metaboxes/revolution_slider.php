<div class="pyre_metabox">
<?php
if(class_exists('RevSlider')) {
	$slider = new RevSlider();
	$arrSliders = $slider->getArrSliders();

	$revsliders = array();
	if ( $arrSliders ) {
		$revsliders[0] = __('Select Slider', 'Creativo');
		foreach ( $arrSliders as $slider ) {
			/** @var $slider RevSlider */
			$revsliders[ $slider->getAlias() ] = $slider->getTitle();
		}
	} else {
		$revsliders[0] = __( 'No sliders found', 'js_composer' );
	}
	$this->select(	'slider_revolution',
			__('Revolution Slider Select', 'Creativo'),
			$revsliders,
			__('Select a revolution slider which will be placed above the Post Content area, just below the Header.', 'Creativo')
		);
}
?>
</div>