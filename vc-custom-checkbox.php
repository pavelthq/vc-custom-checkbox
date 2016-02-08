<?php
/*
Plugin Name: Vc Custom Checkbox
Plugin URI: http://vc.wpbakery.com/
Description: Custom checkbox Visual Composer on Steroids
Version: 1.0
Author: WPBakery
Author URI: http://wpbakery.com
License: http://codecanyon.net/licenses
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( '' ); // Don't call directly
}

add_action( 'vc_after_init', 'vc_custom_checkbox_init' );
add_action( 'vc_after_init', 'vc_custom_checkbox_shortcode' );
function vc_custom_checkbox_init() {
	require_once "param/class-vc-custom-checkbox.php";
	$checkbox = new VcCustomCheckbox();
}

function vc_custom_checkbox_shortcode() {
	require_once "shortcode/shortcode-vc-test-custom-checkbox-lean-map.php";
	require_once "shortcode/shortcode-vc-test-custom-checkbox-class.php";
}

function vc_custom_checkbox_path() {
	return __FILE__;
}