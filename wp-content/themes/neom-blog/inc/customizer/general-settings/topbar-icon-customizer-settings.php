<?php

function neom_topbar_icon_settings( $wp_customize ) {

	$active_callback = isset( $array['active_callback'] ) ? $array['active_callback'] : null;

	/**
	 * Customizer Repeater : Topbar Social Icons
	 */
	$wp_customize->add_setting(
		'neom_topbar_social_icons',
		array(
			'sanitize_callback' => 'neom_repeater_sanitize',
			'default'           => neom_get_social_icon_default(),
		)
	);

	$wp_customize->add_control(
		new neom_Repeater(
			$wp_customize,
			'neom_topbar_social_icons',
			array(
				'label'                            => esc_html__( 'Social Icons', 'neom-blog' ),
				'section'                          => 'neom_topbar_settings',
				'add_field_label'                  => esc_html__( 'Add New Social', 'neom-blog' ),
				'item_name'                        => esc_html__( 'Social', 'neom-blog' ),
				'priority'                         => 16,
				'customizer_repeater_icon_control' => true,
				'customizer_repeater_link_control' => true,
				'active_callback'                  => 'neom_topbar_social_icons',
			)
		)
	);
}
add_action( 'customize_register', 'neom_topbar_icon_settings' );
