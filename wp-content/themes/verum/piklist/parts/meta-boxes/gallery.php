<?php 

/*
Title: Gallery Images
Post Type: post
*/

piklist('field',array(
	'type' => 'file',
	'field' => 'verum_gallery',
	'label' => __('Gallery Images','verum'),
	'attributes' => array(
		'class' => 'widefat'
	),
	'option' => array(
		'modal_title' => __('Add Image','verum'),
		'save' => 'id'
	),
	'add_more' => true
));