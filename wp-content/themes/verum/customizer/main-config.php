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

	Kirki::add_section( 'search_settings', array(
	    'title'          => esc_html__( 'Search Settings', 'verum' ),
	    'panel'          => 'verum_panel',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'verum_options', [
		'type'        => 'text',
		'settings'    => 'search_heading',
		'label'       => esc_html__( 'Heading', 'verum' ),
		'section'     => 'search_settings',
		'default'     => __('Latest Posts','verum'),
		'priority'    => 10,
	] );

	Kirki::add_field( 'verum_options', [
		'type'        => 'select',
		'settings'    => 'search_post_source',
		'label'       => esc_html__( 'Post Source', 'verum' ),
		'section'     => 'search_settings',
		'default'     => 'latest',
		'placeholder' => esc_html__( 'Select an option...', 'verum' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'latest' => esc_html__( 'Latest Posts', 'verum' ),
			'featured' => esc_html__( 'Featured Posts', 'verum' ),
		],
	] );

	Kirki::add_field( 'verum_options', [
		'type'        => 'repeater',
		'label'       => esc_html__( 'Featured Posts', 'verum' ),
		'section'     => 'search_settings',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Featured Post', 'verum' ),
			'field' => 'post'
		],
		'button_label' => esc_html__('Add new', 'verum' ),
		'settings'     => 'search_featured_post',
		'fields' => [
			'post'  => [
				'type'        => 'select',
				'label'       => esc_html__( 'Featured Post', 'verum' ),
				'choices' => Kirki_Helper::get_posts(array(
					'posts_per_page' => -1,
					'post_status' => 'publish',
					'post_type' => 'post'
				))
			],

		],
		'active_callback' => array(
			array(
				'setting' => 'search_post_source',
				'value' => 'featured',
				'operator' => '=='
			)
		),
	] );
}
