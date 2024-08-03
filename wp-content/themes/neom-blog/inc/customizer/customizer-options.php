<?php
/**
 * Extend default customizer section.
 *
 * @package neom
 *
 * @see     WP_Customize_Section
 * @access  public
 */

require get_template_directory() . '/inc/customizer/upgrade-premium-for-free-theme.php';
require get_template_directory() . '/inc/customizer/controls/code/customize-plugin-control.php';

// General Customizer Settings.
require get_template_directory() . '/inc/customizer/general-settings/general-settings-customizer-default.php';
require get_template_directory() . '/inc/customizer/general-settings/topbar-icon-customizer-settings.php';

function neom_customizer_theme_settings( $wp_customize ) {

	$active_callback   = isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	// Site Title.
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}
add_action( 'customize_register', 'neom_customizer_theme_settings' );

add_action( 'customize_register', 'neom_recommended_plugin_section' );

// Recommended plugin section function.
function neom_recommended_plugin_section( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'Neom_Customize_Recommended_Plugin_Section' );
	// Register sections.
	$manager->add_section(
		new Neom_Customize_Recommended_Plugin_Section(
			$manager,
			'neom_upgrade_to_pro_option',
			array(
				'title'       => esc_html__( 'Ready for more?', 'neom-blog' ),
				'priority'    => 500,
				'plugin_text' => esc_html__( 'Upgrade To Pro', 'neom-blog' ),
				'plugin_url'  => 'https://awplife.com/demo/neom-premium/',
			)
		)
	);
}

/*
 *  Customizer Notifications
 */

require get_template_directory() . '/inc/customizer/customizer-notice/customizer-notify.php';

$neom_config_customizer = array(
	'recommended_plugins'          => array(
		'awp-companion' => array(
			'recommended' => true,
			'description' => sprintf(
				/* translators: %s: plugin name */
				esc_html__( 'Recommended Plugin: If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'neom-blog' ),
				'<strong>Awp Companion</strong>'
			),
		),
	),
	'recommended_actions'          => array(),
	'recommended_actions_title'    => esc_html__( 'Recommended Actions', 'neom-blog' ),
	'recommended_plugins_title'    => esc_html__( 'Import Demo Data (Recommended)', 'neom-blog' ),
	'install_button_label'         => esc_html__( 'Install and Activate', 'neom-blog' ),
	'activate_button_label'        => esc_html__( 'Activate', 'neom-blog' ),
	'neom_deactivate_button_label' => esc_html__( 'Deactivate', 'neom-blog' ),
);
Neom_Customizer_Notify::init( apply_filters( 'neom_customizer_notify_array', $neom_config_customizer ) );
