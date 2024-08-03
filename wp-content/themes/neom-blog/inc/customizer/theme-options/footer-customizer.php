<?php
	require 'customizer-callback/footer-typo.php';
	// Footer copyright.

	// copyright text heading.
		$wp_customize->add_setting(
			'neom_footer_copyright_th',
			array(
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'neom_sanitize_text',
			)
		);

		$wp_customize->add_control(
			'neom_footer_copyright_th',
			array(
				'type'            => 'hidden',
				'label'           => __( 'Copyright Text', 'neom-blog' ),
				'section'         => 'neom_footer_copyright',
				'priority'        => 9,
				'active_callback' => 'neom_footer_copyright_th',
			)
		);

		// copyright text setting.
		$wp_customize->add_setting(
			'neom_footer_copyright_text',
			array(
				'sanitize_callback' => 'neom_sanitize_text',
				'default'           => __( 'Copyright &copy; 2024 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Neom theme by A WP Life', 'neom-blog' ),
				'transport'         => $selective_refresh,
			)
		);

		$wp_customize->add_control(
			'neom_footer_copyright_text',
			array(
				'label'           => esc_html__( 'Add Copyright Text', 'neom-blog' ),
				'section'         => 'neom_footer_copyright',
				'priority'        => 10,
				'type'            => 'textarea',
				'active_callback' => 'neom_footer_copyright_text',
			)
		);

		// Copyright Logo Heading.
		$wp_customize->add_setting(
			'neom_footer_copy_social_icon',
			array(
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'neom_sanitize_text',
			)
		);

		$wp_customize->add_control(
			'neom_footer_copy_social_icon',
			array(
				'type'            => 'hidden',
				'label'           => __( 'Social Icon (Pro Feature)', 'neom-blog' ),
				'section'         => 'neom_footer_copyright',
				'priority'        => 18,
				'active_callback' => 'neom_footer_copy_social_icon',
			)
		);

		// Copyright Logo Heading.
		$wp_customize->add_setting(
			'neom_footer_copy_img',
			array(
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'neom_sanitize_text',
			)
		);

		$wp_customize->add_control(
			'neom_footer_copy_img',
			array(
				'type'            => 'hidden',
				'label'           => __( 'Logo (Pro Feature)', 'neom-blog' ),
				'section'         => 'neom_footer_copyright',
				'priority'        => 20,
				'active_callback' => 'neom_footer_copy_img',
			)
		);

		// Copyright Logo Image.
		$wp_customize->add_setting(
			'neom_footer_first_img',
			array(
				'default'           => '',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'neom_sanitize_url',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'neom_footer_first_img',
				array(
					'label'           => esc_html__( 'Choose Image (Pro Feature)', 'neom-blog' ),
					'section'         => 'neom_footer_copyright',
					'priority'        => 21,
					'active_callback' => 'neom_footer_first_img',
				)
			)
		);


		// this setting is footer widgets setting.
		// Copyright Logo Image.
		$wp_customize->add_setting(
			'neom_footer_bg_img',
			array(
				'default'           => '',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'neom_sanitize_url',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'neom_footer_bg_img',
				array(
					'label'           => esc_html__( 'Footer Background Image', 'neom-blog' ),
					'section'         => 'neom_footer_widgets',
					'priority'        => 50,
					'active_callback' => 'neom_footer_bg_img',
				)
			)
		);
