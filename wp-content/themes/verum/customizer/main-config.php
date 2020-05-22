<?php
if(class_exists('Kirki')) {
	Kirki::add_config( 'verum_options', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );

	Kirki::add_panel( 'verum_panel', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Verum Optins', 'verum' ),
	) );

	Kirki::add_section( 'blog_settings', array(
	    'title'          => esc_html__( 'Blog Settings', 'verum' ),
	    'panel'          => 'verum_panel',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'verum_options', [
		'type'        => 'select',
		'settings'    => 'sidebar_display_setting',
		'label'       => esc_html__( 'Sidebar Position', 'verum' ),
		'section'     => 'blog_settings',
		'default'     => 'no',
		'placeholder' => esc_html__( 'Select an option...', 'verum' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'no' => esc_html__( 'No Sidebar', 'verum' ),
			'left' => esc_html__( 'Left Sidebar', 'verum' ),
			'right' => esc_html__( 'Right Sidebar', 'verum' ),
		],
	] );
}
