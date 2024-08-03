<?php
/* Notifications in customizer */


require get_template_directory() . '/inc/customizer/customizer-notice/customizer-notify.php';
$neom_config_customizer = array(
	'recommended_plugins'          => array(
		'neom-companion' => array(
			'recommended' => true,
			'description' => sprintf( __( 'Install and activate <strong>Neom Companion</strong> plugin for taking full advantage of all the features this theme has to offer.', 'neom-blog' ) ),
		),
	),
	'recommended_actions'          => array(),
	'recommended_actions_title'    => esc_html__( 'Recommended Actions', 'neom-blog' ),
	'recommended_plugins_title'    => esc_html__( 'Recommended Plugin', 'neom-blog' ),
	'install_button_label'         => esc_html__( 'Install and Activate', 'neom-blog' ),
	'activate_button_label'        => esc_html__( 'Activate', 'neom-blog' ),
	'neom_deactivate_button_label' => esc_html__( 'Deactivate', 'neom-blog' ),
);
Neom_Customizer_Notify::init( apply_filters( 'neom_customizer_notify_array', $neom_config_customizer ) );

