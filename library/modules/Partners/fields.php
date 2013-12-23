<?php

/************************
 * Custom Field Group
 ************************/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_custom-details',
		'title' => 'Custom Details',
		'fields' => array (
			array (
				'key' => 'field_custom_1a9dsf41',
				'label' => 'Custom Field',
				'name' => 'custom_field',
				'type' => 'text',
				'instructions' => 'Enter a custom value',
				'required' => 1,
				'default' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'custom',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>