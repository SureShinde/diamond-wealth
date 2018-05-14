<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $style
 * @var $color
 * @var $size
 * @var $open
 * @var $css_animation
 * @var $el_id
 * @var $content - shortcode content
 * @var $css
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Toggle
 */
$title = $el_class = $style = $color = $size = $sep_color = $custom_icon_color = $open = $css_animation = $css = $el_id = '';
$output = '';

$inverted = false;
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

// checking is color inverted
$style = str_replace( '_outline', '', $style, $inverted );
/**
 * @since 4.4
 */
$elementClass = array(
	'base' => apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_toggle', $this->settings['base'], $atts ),
	// TODO: check this code, don't know how to get base class names from params
	'style' => 'vc_toggle_' . $style,
	'color' => ( $color ) ? 'vc_toggle_color_' . $color : '',
	'inverted' => ( $inverted ) ? 'vc_toggle_color_inverted' : '',
	'size' => ( $size ) ? 'vc_toggle_size_' . $size : '',
	'open' => ( 'true' === $open ) ? 'vc_toggle_active' : '',
	'extra' => $this->getExtraClass( $el_class ),
	'css_animation' => $this->getCSSAnimation( $css_animation ), // TODO: remove getCssAnimation as function in helpers
);

global $fq_counter;
	
$current_link = $_SERVER["REQUEST_URI"];
// add an unique class to each button
if(strpos($current_link, 'vc_editable=true')) {
	$fq_counter = rand();
}
else{
	if( ! isset($fq_counter) ){
	  $fq_counter = 1;
	}
	else{
	  $fq_counter ++;
	}
}

$styles_render = '<style type="text/css" scoped="scoped">';
	$styles_render .= '.vc_toggle.fq_'.$fq_counter.' {';
		$styles_render .= 'border-color: '.$sep_color.';';
	$styles_render .= '}';
	$styles_render .= '.vc_toggle.fq_'.$fq_counter. ' .cr_toggle_icon {';
		$styles_render .= 'color:'.$custom_icon_color.';';
	$styles_render .= '}';
$styles_render .= '</style>';

$class_to_filter = trim( implode( ' ', $elementClass ) );
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );
$icon_render = ($style != 'default') ? '<i class="vc_toggle_icon"></i>' : '<i class="fa fa-angle-right cr_toggle_icon"></i>';
?>
<div <?php echo isset( $el_id ) && ! empty( $el_id ) ? 'id="' . esc_attr( $el_id ) . '"' : ''; ?> class="<?php echo esc_attr( $css_class ); ?> fq_<?php echo $fq_counter; ?>">
	<?php echo $styles_render; ?>
	<div class="vc_toggle_title"><?php echo apply_filters( 'wpb_toggle_heading', $this->getHeading( $atts ), array(
			'title' => $title,
			'open' => $open,
		) ); ?><?php echo $icon_render; ?></div>
	<div class="vc_toggle_content"><?php echo wpb_js_remove_wpautop( apply_filters( 'the_content', $content ), true ); ?></div>
</div>
