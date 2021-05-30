<?php
if(!isset($skin_fields['new_select'])){
	$skin_fields['new_select'] = array(
		'field_type' => 'select',
		'field_label' => __('Select Box', 'kboard'),
		'field_name' => '필드명',
		'class' => 'kboard-attr-select',
		'meta_key' => '',
		'row' => array('1'=>array('label'=>'라벨1'), '2'=>array('label'=>'라벨2')),
		'default_value' => '',
		'permission' => '',
		'roles' => array(),
		'description' => '',
		'required' => '',
		'show_document' => '',
		'close_button' => 'yes'
	);
}
