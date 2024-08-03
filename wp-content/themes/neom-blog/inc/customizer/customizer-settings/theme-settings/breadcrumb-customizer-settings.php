<?php
/**
 * Breadcrumb Settings.
 *
 * @package neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Breadcrumb_Option' ) ) :

	class neom_Customize_Breadcrumb_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_breadcrumb_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Breadcrumb Settings', 'neom-blog' ),
						'section'  => 'neom_theme_breadcrumb',
					),
				),

				// Animation.
				'neom_breadcrumb_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Site Animation Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_breadcrumb',
					),
				),

			);

		}

	}

	new neom_Customize_Breadcrumb_Option();

endif;
