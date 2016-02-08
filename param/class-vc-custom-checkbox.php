<?php

class VcCustomCheckbox {

	public function __construct() {
		add_action( 'vc_load_default_params', array(
			&$this,
			'vc_load_vc_custom_checkbox_param',
		) );

		add_action( 'vc_backend_editor_render', array(
			&$this,
			'vc_enqueue_editor_scripts_befe',
		) );
	}

	public function vc_enqueue_editor_scripts_befe() {
		wp_enqueue_script( 'vc-custom-checbox-befe', preg_replace( '/\s/', '%20', plugins_url( 'assets/vc-custom-checkbox.js', vc_custom_checkbox_path() ) ) );
	}

	/**
	 * Add custom param to system
	 */
	public function vc_load_vc_custom_checkbox_param() {
		vc_add_shortcode_param( 'custom_checkbox', array(
			&$this,
			'vc_custom_checkbox_form_field',
		) );
	}

	/**
	 * Checkbox shortcode attribute type.
	 *
	 * @param $settings
	 * @param string $value
	 *
	 * @return string - html string.
	 */
	public function vc_custom_checkbox_form_field( $settings, $value ) {
		$output = '';
		$current_value = is_string( $value ) ? ( strlen( $value ) > 0 ? explode( ',', $value ) : array() ) : (array) $value;
		$values = isset( $settings['value'] ) && is_array( $settings['value'] ) ? $settings['value'] : array( __( 'Yes' ) => 'true' );
		if ( ! empty( $values ) ) {
			foreach ( $values as $label => $v ) {
				$checked = count( $current_value ) > 0 && in_array( $v, $current_value ) ? ' checked' : '';
				$output .= ' <label class="vc_checkbox-label"><input id="' . $settings['param_name'] . '-' . $v . '" value="' . $v . '" class="wpb_vc_param_value ' . $settings['param_name'] . ' ' . $settings['type'] . '" type="checkbox" name="' . $settings['param_name'] . '"' . $checked . '> ' . $label . '</label>';
			}
		}

		return $output;
	}
}