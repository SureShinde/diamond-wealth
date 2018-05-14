<div class="pyre_metabox">
<?php
$this->select(	'portfolio_style',
				__('Portfolio Style', 'Creativo'),
				array('3d' => __('3D', 'Creativo'), 'flat' => __('Flat', 'Creativo'), 'masonry' => __('Masonry', 'Creativo')),
				__('Select the style of the Portfolio page', 'Creativo')
			);
?>

<?php
$this->select(	'portfolio_details_pos',
				__('Portfolio Details Display', 'Creativo'),
				array( 'hover' => __('On Hover', 'Creativo'), 'below' => __('Below Image', 'Creativo') ),
				__('Select how the Portfolio Title and Categories will be shown. <br><span color="brown">These options work for Flat and Masonry Style only</span>', 'Creativo')
			);
?>

<?php
$types = get_terms('portfolio_category', 'hide_empty=0');
$types_array[0] = __('All categories', 'Creativo');
if($types) {
	foreach($types as $type) {
		$types_array[$type->term_id] = $type->name;
	}
	$this->select(	'portfolio_category',
		__('Portfolio Category', 'Creativo'),
		$types_array,
		__('Choose what portfolio category you want to display on this page.', 'Creativo')
	);
}
?>

<?php
$types_exc = get_terms('portfolio_category', 'hide_empty=0');
$types_array_exc[0] = __('None', 'Creativo');
if($types_exc) {
	foreach($types_exc as $type_exc) {
		$types_array_exc[$type_exc->term_id] = $type_exc->name;
	}
	$this->select(	'exclude_portfolio_category',
		__('Exclude Portfolio Category', 'Creativo'),
		$types_array_exc,
		__('Choose a portfolio category to be excluded from the query.', 'Creativo')
	);
}
?>

<?php
$this->select(	'force_full_width_port',
				__('Force 100% Width', 'Creativo'),
				array('no' => __('No', 'Creativo'), 'yes' => __('Yes', 'Creativo')),
				__('Select Yes to force the page width to be 100%. This option should only be used with Masonry Portfolio style.', 'Creativo')
			);
?>

</div>