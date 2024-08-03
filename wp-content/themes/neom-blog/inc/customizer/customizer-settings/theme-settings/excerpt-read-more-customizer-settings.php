<?php
/**
 * Excerpt Settings.
 *
 * @package neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Excerpt_Option' ) ) :

	class neom_Customize_Excerpt_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_excerpt_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Post Excerpt Button Settings', 'neom-blog' ),
						'section'  => 'neom_excerpt_general',
					),
				),

				// Animation.
				'neom_excerpt_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Post Button Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_excerpt_general',
					),
				),

			);

		}

	}

	new neom_Customize_Excerpt_Option();

endif;
