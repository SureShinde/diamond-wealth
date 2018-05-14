<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$output = $title = $interval = $style = $el_class = '';
extract( shortcode_atts( array(
	'color' => 'grey',
	'style' => 'style1',
	'custom_colored_border' => '#5bc98c',
	'tt_font_size' => '13px',
	'tt_line_height' => '40px',
	'tt_font_weight' => '600',
	'tt_alignment' => 'left',
	'tc_font_size' => '13px',
	'tc_line_heigt' => '22px',
    'el_class' => ''
), $atts ) );

$icon = $left_padding = '';

global $tabs_counter;

$current_link = $_SERVER["REQUEST_URI"];
	// add an unique class to each button
	if(strpos($current_link, 'vc_editable=true')) {
		$tabs_counter = rand();
	}
	else{
		if( ! isset($tabs_counter) ){
		  $tabs_counter = 1;
		}
		else{
		  $tabs_counter ++;
		}
	}

	$styles_render = '';

	
	if($color == 'custom') {
		$styles_render = '<style type="text/css" scoped="scoped">';
			$styles_render .= '.wpb_content_element.tabs_' . $tabs_counter . ' .wpb_tabs_nav li.ui-tabs-active a:after {';
				$styles_render .= 'background-color:'.$custom_colored_border.';';				
			$styles_render .= '}';

			/* Custom Tab Titles styling */
			$styles_render .= ' .wpb_content_element.tabs_' . $tabs_counter . ' .wpb_tabs_nav a {';
				$styles_render .= ' font-size:' . $tt_font_size . ';';
				$styles_render .= ' font-weight:' . $tt_font_weight . ';';
				$styles_render .= ' line-height:' . $tt_line_height . ';';
				if($style != 'style5') {
					//$styles_render .= ' height:' . $tt_line_height . ';';
				}
			$styles_render .= '}';

			$styles_render .= '.wpb_content_element.tabs_' . $tabs_counter . ' .wpb_tour_tabs_wrapper .wpb_tab {';
				$styles_render .= 'font-size:'.$tc_font_size.'; line-height:'.$tc_line_heigt.';';				
			$styles_render .= '}';							
		$styles_render .= '</style>';
	}

wp_enqueue_script( 'jquery-ui-tabs' );

$el_class = $this->getExtraClass( $el_class );

$element = 'wpb_tabs';
if ( 'vc_tour' === $this->shortcode ) {
	$element = 'wpb_tour';
}

$style = ($style != 'style1') ? 'tabs_'.$style : '';

// Extract tab titles
preg_match_all( '/vc_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = array();
/**
 * vc_tabs
 *
 */
if ( isset( $matches[1] ) ) {
	$tab_titles = $matches[1];
}
$tabs_nav = '';
$tabs_nav .= '<ul class="wpb_tabs_nav ui-tabs-nav vc_clearfix">';
/*
foreach ( $tab_titles as $tab ) {
	$tab_atts = shortcode_parse_atts( $tab[0] );
	if ( isset( $tab_atts['title'] ) ) {
		
		$tabs_nav .= '<li class="'.$color.'"><a href="#tab-' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '" data-icon="'.$tab_atts['title'].'">' . $tab_atts['title'] . '</a></li>';
	}
	$icon = $left_padding = '';
}
*/
if ( preg_match_all( "/(.?)\[(vc_tab)\b(.*?)(?:(\/))?\]/s", $content, $matches ) ) {
    for ( $i = 0; $i < count( $matches[ 0 ] ); $i++ ) {
        $matches[ 3 ][ $i ] = shortcode_parse_atts( $matches[ 3 ][ $i ] );
    }
    for ( $i = 0; $i < count( $matches[ 0 ] ); $i++ ) {
        $icon_text = isset($matches[ 3 ][ $i ][ 'icon' ]) ? $matches[ 3 ][ $i ][ 'icon' ] : '';
        $icon_image = isset($matches[ 3 ][ $i ][ 'icon_img' ]) ? $matches[ 3 ][ $i ][ 'icon_img' ] : '';
        if($icon_image) {
			$icon_image_arr = wp_get_attachment_image_src($icon_image);		
			$icon_render = '<img src="'.$icon_image_arr[0].'" alt="">';
        }
		else {
			$icon_render = $icon_text != '' ? '<i class="' . $icon_text . '"></i>' : '';
		}

        if($icon_render == '') {
            $tabs_nav .= '<li class="'.$color.'"><a href="#tab-'.$matches[ 3 ][ $i ][ 'tab_id' ].'" data-href="#tab-'.$matches[ 3 ][ $i ][ 'tab_id' ].'"><span class="title">' . $matches[ 3 ][ $i ][ 'title' ] . '</span></a></li>';
        } else {
            $tabs_nav .= '<li class="'.$color.'"><a href="#tab-'.$matches[ 3 ][ $i ][ 'tab_id' ].'" data-href="#tab-'.$matches[ 3 ][ $i ][ 'tab_id' ].'"><span class="icon">' . $icon_render . '</span><span class="title">' . $matches[ 3 ][ $i ][ 'title' ] . '</span></a></li>';
        }
    }
}

$tabs_nav .= '</ul>' . "\n";

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim( $element . ' wpb_content_element ' . $el_class ), $this->settings['base'], $atts );

$output .= $styles_render;
$output .= "\n\t" . '<div class="' . $css_class . ' ' . $color . ' tabs_'.$tabs_counter.'" data-interval="">';
$output .= "\n\t\t" . '<div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs '.$style.' tabs_align_'.$tt_alignment.' vc_clearfix">';
//$output .= wpb_widget_title( array( 'title' => $title, 'extraclass' => $element . '_heading' ) );
$output .= "\n\t\t\t" . $tabs_nav;
$output .= "\n\t\t\t" . wpb_js_remove_wpautop( $content );

$output .= "\n\t\t" . '</div> ' . $this->endBlockComment( '.wpb_wrapper' );
$output .= "\n\t" . '</div> ' . $this->endBlockComment( $this->getShortcode() );



echo $output;