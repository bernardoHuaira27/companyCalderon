<?php

if ( class_exists( 'neom_Customize_Range_Control' ) ) {
	// container width.
	$wp_customize->add_setting(
		'neom_site_cntnr_width',
		array(
			'default'           => '1300',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'neom_sanitize_range_value',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new neom_Customize_Range_Control(
			$wp_customize,
			'neom_site_cntnr_width',
			array(
				'label'       => __( 'Container Width', 'neom-blog' ),
				'section'     => 'neom_theme_general',
				'priority'    => 100,
				'input_attrs' => array(
					'min'  => 768,
					'max'  => 2000,
					'step' => 1,
				),
			)
		)
	);

	$wp_customize->add_setting(
		'neom_breadcrumb_height',
		array(
			'default'           => 256,
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'neom_sanitize_range_value',
		)
	);
	$wp_customize->add_control(
		new neom_Customize_Range_Control(
			$wp_customize,
			'neom_breadcrumb_height',
			array(
				'label'           => __( 'Content Height', 'neom-blog' ),
				'section'         => 'neom_theme_breadcrumb',
				'priority'        => 8,
				'input_attrs'     => array(
					'min'  => 1,
					'max'  => 800,
					'step' => 1,
				),
				'active_callback' => 'neom_breadcrumb_height',
			)
		)
	);
}

// Background Image.
$wp_customize->add_setting(
	'neom_breadcrumb_bg_img',
	array(
		'default'           => esc_url( get_template_directory_uri() . '/assets/images/breadcrumb/breadcrumb.jpg' ),
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'neom_sanitize_url',
		'priority'          => 10,
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'neom_breadcrumb_bg_img',
		array(
			'label'           => esc_html__( 'Background Image', 'neom-blog' ),
			'section'         => 'neom_theme_breadcrumb',
			'active_callback' => 'neom_breadcrumb_bg_img',
		),
	)
);

// Background Attachment.
$wp_customize->add_setting(
	'neom_breadcrumb_back_attach',
	array(
		'default'           => 'fixed',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'neom_sanitize_select',
		'priority'          => 10,
	)
);

$wp_customize->add_control(
	'neom_breadcrumb_back_attach',
	array(
		'label'           => __( 'Background Attachment', 'neom-blog' ),
		'section'         => 'neom_theme_breadcrumb',
		'type'            => 'select',
		'choices'         =>
		array(
			'inherit' => __( 'Inherit', 'neom-blog' ),
			'scroll'  => __( 'Scroll', 'neom-blog' ),
			'fixed'   => __( 'Fixed', 'neom-blog' ),
		),
		'active_callback' => 'neom_breadcrumb_back_attach',
	)
);


