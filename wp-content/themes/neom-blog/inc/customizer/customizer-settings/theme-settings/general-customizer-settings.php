<?php
/**
 * General Settings.
 *
 * @package neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* General Settings.
*/

if ( ! class_exists( 'neom_Customize_General_Option' ) ) :

	class neom_Customize_General_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_general_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'General Settings', 'neom-blog' ),
						'section'  => 'neom_theme_general',
					),
				),

				// Animation.
				'neom_animation_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Site Animation Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_general',
					),
				),

				// Loading Icon.
				'neom_loading_icon_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Loading Icon Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_general',
					),
				),

				// Go To Top Icon.
				'neom_goto_top_icon_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 20,
						'label'    => esc_html__( 'Go To Top Icon Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_general',
					),
				),

				// WOO Cart Icon.
				'neom_cart_icon_enabled'     => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 30,
						'label'    => esc_html__( 'WOO Cart Icon Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_general',
					),
				),

			);

		}

	}

	new neom_Customize_General_Option();

endif;
