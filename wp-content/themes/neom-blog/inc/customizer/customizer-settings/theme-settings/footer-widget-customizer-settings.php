<?php
/**
 * Footer widgets.
 *
 * @package     neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Footer_Widget_Option' ) ) :

	/**
	 * Option: Footer widget.
	 */
	class neom_Customize_Footer_Widget_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_footer_widget_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Footer Widget Settings', 'neom-blog' ),
						'section'  => 'neom_footer_widgets',
					),
				),

				'neom_footer_widgets_enabled'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Footer Widget Area Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_footer_widgets',
					),
				),

				'neom_footer_container_size'   => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Footer Width', 'neom-blog' ),
						'section'         => 'neom_footer_widgets',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Container Full', 'neom-blog' ),
						),
						'active_callback' => 'neom_footer_container_size',
					),
				),

				// column layout.
				'neom_footer_column_layout' => array(
					'setting' => array(
						'default'           => 'theme-column-4',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 35,
						'label'           => esc_html__( 'Column Layout', 'neom-blog' ),
						'section'         => 'neom_footer_widgets',
						'choices'         => array(
							'theme-column-6' => get_template_directory_uri() . '/assets/images/icons/column-2.png',
							'theme-column-4' => get_template_directory_uri() . '/assets/images/icons/column-3.png',
							'theme-column-3' => get_template_directory_uri() . '/assets/images/icons/column-4.png',
						),
						'active_callback' => 'neom_footer_column_layout',
					),

				),

				'neom_footer_effect_enable'    => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 40,
						'label'           => esc_html__( 'Enable Water Effect on Footer (Pro)', 'neom-blog' ),
						'section'         => 'neom_footer_widgets',
						'active_callback' => 'neom_footer_effect_enable',
					),
				),
			);
		}
	}

	new neom_Customize_Footer_Widget_Option();

endif;
