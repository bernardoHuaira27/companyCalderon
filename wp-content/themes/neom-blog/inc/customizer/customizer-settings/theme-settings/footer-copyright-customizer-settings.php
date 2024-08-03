<?php
/**
 * Footer Copyright.
 *
 * @package neom
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Footer_Copyright_Option' ) ) :

	/**
	 * Footer Copyright.
	 */
	class neom_Customize_Footer_Copyright_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_footer_copy_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Footer Copyright Settings', 'neom-blog' ),
						'section'  => 'neom_footer_copyright',
					),
				),

				'neom_footer_copright_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Footer Copyright Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_footer_copyright',
					),
				),

				'neom_footer_social_icon_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 19,
						'label'    => esc_html__( 'Footer Social Icon Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_footer_copyright',
					),
				),

			);

		}

	}

	new neom_Customize_Footer_Copyright_Option();

endif;
