<?php

/*
Title: About Page Data
Post type: page
*/

piklist('field',array(
	'type' => 'file',
	'field' => 'verum_about_image',
	'label' => __('About Image','verum'),
	'options' => array(
		'button' => __('Add Image','verum'),
		'modal_title' => __('About Image','verum'),
	)
));

piklist('field',array(
	'type' => 'text',
	'field' => 'verum_about_designation',
	'label' => __('Designation','verum'),
	'attributes' => array(
		'class' => 'large-text'
	)
));

piklist('field',array(
	'type' => 'textarea',
	'field' => 'verum_about_teaser',
	'label' => __('Teaser Text','verum'),
	'attributes' => array(
		'class' => 'large-text',
		'rows' => 10
	)
));

piklist('field',array(
	'type' => 'file',
	'field' => 'verum_about_footer_image',
	'label' => __('Footer Image','verum'),
	'options' => array(
		'button' => __('Add Image','verum'),
		'modal_title' => __('Footer Image','verum'),
	)
));

piklist('field',array(
	'type' => 'group',
	'field' => 'verum_about_social_links',
	'label' => __('Footer Image','verum'),
	'fields' => array(
		array(
			'type' => 'text',
			'field' => 'facebook',
			'label' => __('Facebook Link','verum'),
			'attributes' => array(
				'class' => 'regular-text',
			)
		),
		array(
			'type' => 'text',
			'field' => 'twitter',
			'label' => __('Twitter Link','verum'),
			'attributes' => array(
				'class' => 'regular-text',
			)
		),
		array(
			'type' => 'text',
			'field' => 'linkedin',
			'label' => __('Linkedin Link','verum'),
			'attributes' => array(
				'class' => 'regular-text',
			)
		),
	)
));
