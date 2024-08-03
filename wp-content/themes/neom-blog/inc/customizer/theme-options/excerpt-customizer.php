<?php
	$wp_customize->add_setting(
		'neom_excerpt_length',
		array(
			'capability'        => 'edit_theme_options',
			'default'           => 30,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'neom_excerpt_length',
		array(
			'type'            => 'number',
			'section'         => 'neom_excerpt_general', // Add a default or your own section.
			'label'           => esc_html__( 'Text Count', 'neom-blog' ),
			'description'     => esc_html__( 'excerpt number of words', 'neom-blog' ),
			'input_attrs'     => array(
				'min'   => 10,
				'max'   => 300,
				'step'  => 5,
				'style' => 'width: 60px;',
			),
			'active_callback' => 'neom_excerpt_length_count',
		)
	);

	$wp_customize->add_setting(
		'neom_excerpt_more_text',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => esc_html__( 'Read More', 'neom-blog' ),
		)
	);

	$wp_customize->add_control(
		'neom_excerpt_more_text',
		array(
			'label'           => esc_html__( 'Button Text', 'neom-blog' ),
			'section'         => 'neom_excerpt_general',
			'type'            => 'text',
			'active_callback' => 'neom_excerpt_more_text',
		)
	);

	function neom_excerpt_disabled( $control ) {
		return true === ( $control->manager->get_setting( 'neom_excerpt_disabled' )->value() == true );
	}

	function neom_excerpt_length_count( $control ) {
		return true === ( $control->manager->get_setting( 'neom_excerpt_disabled' )->value() == true );
	}
	function neom_excerpt_more_text( $control ) {
		return true === ( $control->manager->get_setting( 'neom_excerpt_disabled' )->value() == true );
	}

