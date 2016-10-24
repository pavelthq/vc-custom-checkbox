<?php
return array(
	'name' => __( 'Test custom checkbox', 'js_composer' ),
	'base' => 'vc_test_custom_checkbox',
	'category' => __( 'Content', 'js_composer' ),
	'description' => __( 'Test custom checkbox', 'js_composer' ),
	'params' => array(
		// std='' - means that default is all unchecked
		array(
			'type' => 'custom_checkbox',
			'heading' => __( 'Checked1', 'js_composer' ),
			'param_name' => 'custom_checkbox',
			'std' => '',
			// default unchecked
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
		),
		// No STD means that default is first value in array, and if empty it will take first as Default value
		array(
			'type' => 'custom_checkbox',
			'heading' => __( 'Checked2', 'js_composer' ),
			'param_name' => 'custom_checkbox2',
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
		),
		array(
			'type' => 'custom_checkbox',
			'heading' => __( 'Checked2-with save always', 'js_composer' ),
			'param_name' => 'custom_checkbox2_save_always',
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
			'save_always' => true,
			// This will allow to force save empty value (otherwise in case if emtpy it will take first value in array)
		),
		// Std='Test2' - means that default is Test2 checked
		array(
			'type' => 'custom_checkbox',
			'heading' => __( 'Checked3', 'js_composer' ),
			'param_name' => 'custom_checkbox3',
			'std' => 'Test2',
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
		),
		// Std='Test2,Test3' - means that default is Test2 checked
		array(
			'type' => 'custom_checkbox',
			'heading' => __( 'Checked4', 'js_composer' ),
			'param_name' => 'custom_checkbox4',
			'std' => 'Test2,Test3',
			'value' => array(
				__( 'Test1', 'js_composer' ) => 'Test1',
				__( 'Test2', 'js_composer' ) => 'Test2',
				__( 'Test3', 'js_composer' ) => 'Test3',
			),
		),
	),
);