<?php
	require 'customizer-callback/menu-callback.php';

	// Header Image.
	// $wp_customize->get_section( 'header_image' )->panel    = 'neom_theme_settings';
	// $wp_customize->get_section( 'header_image' )->title    = __( 'Page Header', 'neom-blog' );
	// $wp_customize->get_section( 'header_image' )->priority = 40;

	// Sticky Bar Logo.
	// $wp_customize->add_setting(
	// 'neom_sticky_bar_logo',
	// array(
	// 'sanitize_callback' => 'esc_url_raw',
	// )
	// );
	// $wp_customize->add_control(
	// new WP_Customize_Image_Control(
	// $wp_customize,
	// 'neom_sticky_bar_logo',
	// array(
	// 'label'           => esc_html__( 'Set Sticky Menu Logo', 'neom-blog' ),
	// 'description'     => esc_html__( 'You can Upload the Standrad size of logo (220x40px)', 'neom-blog' ),
	// 'section'         => 'neom_theme_menu_bar',
	// 'settings'        => 'neom_sticky_bar_logo',
	// 'priority'        => 15,
	// 'active_callback' => 'neom_sticky_bar_logo',
	// )
	// )
	// );
	// function neom_sticky_bar_logo( $control ) {
	// return true === ( $control->manager->get_setting( 'neom_menu_style' )->value() == 'sticky' );
	// }

	// Menu Button icon setting.
	$wp_customize->add_setting(
		'neom_menu_btn_icon',
		array(
			'default'           => 'fa-user',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new neom_Icon_Picker_Control(
			$wp_customize,
			'neom_menu_btn_icon',
			array(
				'label'           => __( 'Icon', 'neom-blog' ),
				'section'         => 'neom_theme_menu_bar',
				'iconset'         => 'fa',
				'priority'        => 40,
				'active_callback' => 'neom_menu_btn_icon',
			)
		)
	);
	// Menu Button Label.
	$wp_customize->add_setting(
		'neom_menu_btn_text',
		array(
			'default'           => 'Button',
			'sanitize_callback' => 'neom_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'neom_menu_btn_text',
		array(
			'label'           => __( 'Button Text', 'neom-blog' ),
			'section'         => 'neom_theme_menu_bar',
			'type'            => 'text',
			'priority'        => 40,
			'active_callback' => 'neom_menu_btn_text',
		)
	);

	// Menu Button Link.
	$wp_customize->add_setting(
		'neom_menu_btn_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'neom_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'neom_menu_btn_link',
		array(
			'label'           => __( 'Button Link', 'neom-blog' ),
			'section'         => 'neom_theme_menu_bar',
			'type'            => 'text',
			'priority'        => 50,
			'active_callback' => 'neom_menu_btn_link',
		)
	);
