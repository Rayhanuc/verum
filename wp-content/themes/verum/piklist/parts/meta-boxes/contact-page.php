<?php

/*
Title: Contact Page Data
Post type: page
Template: page-templates/contact
*/

piklist('field',array(
	'type' => 'text',
	'field' => 'verum_contact_subheading',
	'label' => __('Sub Heading','verum'),
	'attributes' => array(
		'class' => 'large-text'
	)
));

piklist('field',array(
	'type' => 'text',
	'field' => 'verum_contact_shortcode',
	'label' => __('Contact Form 7 Shortcode','verum'),
	'attributes' => array(
		'class' => 'large-text'
	)
));

