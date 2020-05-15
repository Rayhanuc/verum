<?php 

/*
Title: Gallery Images
Post Type: post
*/

piklist('field',array(
	'type' => 'select',
	'field' => 'verum_gallery_type',
	'label' => __('Select Gallery Display Type','verum'),
	'choices' => array(
		'carousel' => __('Carousel','verum'),
		'justified' => __('Justified','verum'),
	),
));
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