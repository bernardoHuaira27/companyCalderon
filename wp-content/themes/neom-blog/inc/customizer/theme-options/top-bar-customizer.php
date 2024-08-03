<?php
	require 'customizer-callback/top-bar-typo.php';

	// A. Topbar phone details icon setting.
	$wp_customize->add_setting(
		'neom_contact_detail_icon',
		array(
			'default'           => 'fa-user',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new Chints_IconPicker_Control(
			$wp_customize,
			'neom_contact_detail_icon',
			array(
				'label'           => __( 'Icon', 'neom-blog' ),
				'section'         => 'neom_topbar_settings',
				'priority'        => 31,
				'active_callback' => 'neom_contact_detail_icon',
			)
		)
	);
	// Topbar phone details Label.
	$wp_customize->add_setting(
		'neom_contact_detail_text',
		array(
			'default'           => '24x7 Support',
			'sanitize_callback' => 'neom_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'neom_contact_detail_text',
		array(
			'label'           => __( 'Text', 'neom-blog' ),
			'section'         => 'neom_topbar_settings',
			'type'            => 'text',
			'priority'        => 33,
			'active_callback' => 'neom_contact_detail_text',
		)
	);

	// Topbar phone details Link.
	$wp_customize->add_setting(
		'neom_contact_detail_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'neom_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'neom_contact_detail_link',
		array(
			'label'           => __( 'Link', 'neom-blog' ),
			'section'         => 'neom_topbar_settings',
			'type'            => 'text',
			'priority'        => 35,
			'active_callback' => 'neom_contact_detail_link',
		)
	);

	// B. Topbar phone details icon setting.
	$wp_customize->add_setting(
		'neom_email_detail_icon',
		array(
			'default'           => 'fa-envelope-o',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new Chints_IconPicker_Control(
			$wp_customize,
			'neom_email_detail_icon',
			array(
				'label'           => __( 'Icon', 'neom-blog' ),
				'section'         => 'neom_topbar_settings',
				'priority'        => 41,
				'active_callback' => 'neom_email_detail_icon',
			)
		)
	);
	// Topbar phone details Label.
	$wp_customize->add_setting(
		'neom_email_detail_text',
		array(
			'default'           => 'Email: mail@example.com',
			'sanitize_callback' => 'neom_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'neom_email_detail_text',
		array(
			'label'           => __( 'Text', 'neom-blog' ),
			'section'         => 'neom_topbar_settings',
			'type'            => 'text',
			'priority'        => 43,
			'active_callback' => 'neom_email_detail_text',
		)
	);

	// Topbar phone details Link.
	$wp_customize->add_setting(
		'neom_email_detail_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'neom_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'neom_email_detail_link',
		array(
			'label'           => __( 'Link', 'neom-blog' ),
			'section'         => 'neom_topbar_settings',
			'type'            => 'text',
			'priority'        => 45,
			'active_callback' => 'neom_email_detail_link',
		)
	);

	// c. Topbar phone details icon setting.
	$wp_customize->add_setting(
		'neom_mobile_detail_icon',
		array(
			'default'           => 'fa-phone',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new Chints_IconPicker_Control(
			$wp_customize,
			'neom_mobile_detail_icon',
			array(
				'label'           => __( 'Icon', 'neom-blog' ),
				'section'         => 'neom_topbar_settings',
				'priority'        => 51,
				'active_callback' => 'neom_mobile_detail_icon',
			)
		)
	);
	// Topbar phone details Label.
	$wp_customize->add_setting(
		'neom_mobile_detail_text',
		array(
			'default'           => 'Call Us +(21) 1234 5678',
			'sanitize_callback' => 'neom_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'neom_mobile_detail_text',
		array(
			'label'           => __( 'Text', 'neom-blog' ),
			'section'         => 'neom_topbar_settings',
			'type'            => 'text',
			'priority'        => 53,
			'active_callback' => 'neom_mobile_detail_text',
		)
	);

	// Topbar phone details Link.
	$wp_customize->add_setting(
		'neom_mobile_detail_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'neom_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'neom_mobile_detail_link',
		array(
			'label'           => __( 'Link', 'neom-blog' ),
			'section'         => 'neom_topbar_settings',
			'type'            => 'text',
			'priority'        => 55,
			'active_callback' => 'neom_mobile_detail_link',
		)
	);
