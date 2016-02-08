<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_vc_test_custom_checkbox extends WPBakeryShortCode {
	/**
	 * @param $atts
	 * @param null $content
	 *
	 * @return mixed|void
	 */
	protected function content( $atts, $content = null ) {
		// Merge defaults + given attributes
		$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

		return print_r( $atts, true );
	}
}
