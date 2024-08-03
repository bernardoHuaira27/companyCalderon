<?php
	require 'customizer-callback/homepage-callback.php';

	// A. Icon 1 Setting.
	$wp_customize->add_setting(
		'neom_cta_left_icon',
		array(
			'default'           => 'fa-user',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new neom_Icon_Picker_Control(
			$wp_customize,
			'neom_cta_left_icon',
			array(
				'label'           => __( 'Left Icon', 'neom-blog' ),
				'section'         => 'neom_theme_cta',
				'iconset'         => 'fa',
				'priority'        => 170,
				'active_callback' => 'neom_cta_left_icon',
			)
		)
	);

	// B. Icon 2 Setting.
	$wp_customize->add_setting(
		'neom_cta_right_icon',
		array(
			'default'           => 'fa-phone',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new neom_Icon_Picker_Control(
			$wp_customize,
			'neom_cta_right_icon',
			array(
				'label'           => __( 'Right Icon', 'neom-blog' ),
				'section'         => 'neom_theme_cta',
				'iconset'         => 'fa',
				'priority'        => 290,
				'active_callback' => 'neom_cta_right_icon',
			)
		)
	);

	// C. Button Icon Setting.
	$wp_customize->add_setting(
		'neom_cta_button_icon',
		array(
			'default'           => 'fa-arrow-right',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new neom_Icon_Picker_Control(
			$wp_customize,
			'neom_cta_button_icon',
			array(
				'label'           => __( 'Button Icon', 'neom-blog' ),
				'section'         => 'neom_theme_cta',
				'iconset'         => 'fa',
				'priority'        => 390,
				'active_callback' => 'neom_cta_right_icon',
			)
		)
	);
