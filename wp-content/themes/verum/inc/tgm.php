<?php

require_once get_theme_file_path( 'library/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'verum_register_required_plugins' );

function verum_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Fakerpress',
			'slug'      => 'fakerpress',
			'required'  => true,
		),
		array(
			'name'      => 'Piklist',
			'slug'      => 'piklist',
			'required'  => true,
		),
		array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => true,
		),
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),

	);

	$config = array(
		'id'           => 'verum',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,                    
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}