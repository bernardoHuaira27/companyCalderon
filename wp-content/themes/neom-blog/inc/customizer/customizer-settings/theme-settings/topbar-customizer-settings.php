<?php
/**
 * @topbar settings.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Topbar_Option' ) ) :

	class neom_Customize_Topbar_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				// Topbar Heading.
				'neom_topbar_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable/Disable Top Bar', 'neom-blog' ),
						'section'  => 'neom_topbar_settings',
					),
				),

				'neom_topbar_enabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Top Bar Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_topbar_settings',
					),
				),

				// Button.
				// 'neom_topbar_button_disable'  => array(
				// 	'setting' => array(
				// 		'default'           => true,
				// 		'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
				// 	),
				// 	'control' => array(
				// 		'type'            => 'toggle',
				// 		'priority'        => 500,
				// 		'label'           => esc_html__( 'Enable Topbar Button', 'neom-blog' ),
				// 		'section'         => 'neom_topbar_settings',
				// 		'active_callback' => 'neom_topbar_button_disable',
				// 	),
				// ),

				// Topbar Icon Heading.
				'neom_topbar_icon_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 10,
						'label'           => esc_html__( 'Top Bar Icon Settings', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_topbar_icon_heading',
					),
				),

				// Topbar Icon.
				'neom_topbar_icon_disable'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 15,
						'label'           => esc_html__( 'Enable Social Icons', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_topbar_icon_disable',
					),
				),

				// Topbar Contact Details Heading.
				'neom_contact_details_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 20,
						'label'           => esc_html__( 'Top Bar Contact Details', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_contact_details_heading',
					),
				),
				// Contact Details.
				'neom_contact_detail_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 30,
						'label'           => esc_html__( 'Enable Contact Details', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_contact_detail_disable',
					),
				),

				// Topbar Email Details Heading.
				'neom_email_details_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 39,
						'label'           => esc_html__( 'Top Bar Email Details', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_email_details_heading',
					),
				),
				// Email Details.
				'neom_email_detail_disable'   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 40,
						'label'           => esc_html__( 'Enable Email Details', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_email_detail_disable',
					),
				),

				// Topbar Mobile Details Heading.
				'neom_mobile_details_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 49,
						'label'           => esc_html__( 'Top Bar Mobile Details', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_mobile_details_heading',
					),
				),
				// Mobile Details.
				'neom_mobile_detail_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 50,
						'label'           => esc_html__( 'Enable Mobile Details', 'neom-blog' ),
						'section'         => 'neom_topbar_settings',
						'active_callback' => 'neom_mobile_detail_disable',
					),
				),

				'neom_topbar_social_icons_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 18,
						'label'    => esc_html__( 'Icons', 'neom-blog' ),
						'section'  => 'neom_topbar_settings',
					),
				),
			);

		}

	}

	new neom_Customize_Topbar_Option();

endif;
