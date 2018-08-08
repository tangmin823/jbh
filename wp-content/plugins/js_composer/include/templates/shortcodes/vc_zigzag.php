<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/** @var array $atts */
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

$class_to_filter = 'vc-zigzag-wrapper';
$class_to_filter .= vc_shortcode_custom_css_class( $atts['css'], ' ' ) . $this->getExtraClass( $atts['el_class'] ) . $this->getCSSAnimation( $atts['css_animation'] );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );
$wrapper_attributes = array();
if ( ! empty( $atts['align'] ) ) {
	$class_to_filter .= ' vc-zigzag-align-' . esc_attr( $atts['align'] );
}
if ( ! empty( $atts['el_id'] ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $atts['el_id'] ) . '"';
}

$color = '';
if ( 'custom' !== $atts['color'] ) {
	$color = vc_convert_vc_color( $atts['color'] );
} else {
	$color = esc_attr( $atts['custom_color'] );
}
$width = '100%';
if ( ! empty( $atts['el_width'] ) ) {
	$width = esc_attr( $atts['el_width'] ) . '%';
}
$border_width = '10';
if ( ! empty( $atts['el_border_width'] ) ) {
	$border_width = esc_attr( $atts['el_border_width'] );
}
$minheight = 2 + intval( $border_width );
?>
