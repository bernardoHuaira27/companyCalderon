<?php
/**
 * neom Header.
 *
 * @package neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Page_Header_Option' ) ) :

	class neom_Customize_Page_Header_Option extends neom_Customize_Base_Option {


		public function elements() {

			return array(

				'neom_page_header_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Page Header/Breadcrumb', 'neom-blog' ),
						'section'  => 'neom_theme_breadcrumb',
					),
				),

				'neom_page_header_disabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Page Header Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_breadcrumb',
					),
				),

				'neom_page_header_effect'           => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 5,
						'label'           => esc_html__( 'Enable Water Effect on Breadcrumb?', 'neom-blog' ),
						'section'         => 'neom_theme_breadcrumb',
						'active_callback' => 'neom_page_header_effect',
					),
				),

				'neom_page_header_background_color' => array(
					'setting' => array(
						'default'           => 'rgba(0,0,0,0.69)',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 7,
						'label'           => esc_html__( 'Page Header/Breadcrumb Color', 'neom-blog' ),
						'section'         => 'neom_theme_breadcrumb',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'neom_page_header_background_color',
					),
				),

				'neom_custom_logo_size'             => array(
					'setting' => array(
						'default'           => array(
							'slider' => 140,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 55,
						'label'       => esc_html__( 'Logo Width', 'neom-blog' ),
						'section'     => 'title_tagline',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 600,
							'step' => 3,
						),
					),
				),

			);

		}

	}

	new neom_Customize_Page_Header_Option();

endif;

function neom_page_header_background_color( $control ) {
	return true === ( $control->manager->get_setting( 'neom_page_header_disabled' )->value() == true );
}
function neom_page_header_effect( $control ) {
	return true === ( $control->manager->get_setting( 'neom_page_header_disabled' )->value() == true );
}
function neom_breadcrumb_height( $control ) {
	return true === ( $control->manager->get_setting( 'neom_page_header_disabled' )->value() == true );
}
function neom_breadcrumb_bg_img( $control ) {
	return true === ( $control->manager->get_setting( 'neom_page_header_disabled' )->value() == true );
}
function neom_breadcrumb_back_attach( $control ) {
	return true === ( $control->manager->get_setting( 'neom_page_header_disabled' )->value() == true );
}
