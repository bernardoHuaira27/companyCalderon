<?php
/**
 * Typography.
 *
 * @package     neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== TYPOGRAPHY ==========================================*/
if ( ! class_exists( 'neom_Customize_Theme_Typography_Option' ) ) :

	/**
	 * Theme Typography option.
	 */
	class neom_Customize_Theme_Typography_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				// Hedaer Typo Heading
				'neom_typography_header_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Header/Menu Typography', 'neom-blog' ),
						'section'  => 'neom_header_typography',
					),
				),
				// Hedaer Typo Enable Disable
				'neom_typography_header_disable'         => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Header Typography', 'neom-blog' ),
						'section'  => 'neom_header_typography',
					),
				),

				// Slider Typo Heading
				'neom_typography_slider_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Slider Typography', 'neom-blog' ),
						'section'  => 'neom_slider_typography',
					),
				),
				// Slider Typo Enable Disable
				'neom_typography_slider_disable'         => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Slider Typography', 'neom-blog' ),
						'section'  => 'neom_slider_typography',
					),
				),

				// Slider Typo Heading
				'neom_typography_homepage_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Homepage Typography', 'neom-blog' ),
						'section'  => 'neom_homepage_typography',
					),
				),
				// Homepage Typo Enable Disable
				'neom_typography_homepage_disable'       => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Homepage Typography', 'neom-blog' ),
						'section'  => 'neom_homepage_typography',
					),
				),

				// Slider Typo Heading
				'neom_typography_headings_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Headings Typography', 'neom-blog' ),
						'section'  => 'neom_headings_typography',
					),
				),
				// Heading Typo Enable Disable
				'neom_typography_heading_disable'        => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Headings Typography', 'neom-blog' ),
						'section'  => 'neom_headings_typography',
					),
				),

				// Blog Archive Typo Heading
				'neom_typography_blog_archive_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Blog/Archive/Single Typography', 'neom-blog' ),
						'section'  => 'neom_blog_archive_typography',
					),
				),
				// Blog Typo Enable Disable
				'neom_typography_blog_archive_disable'   => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Blog/Archive Typography', 'neom-blog' ),
						'section'  => 'neom_blog_archive_typography',
					),
				),

				// Sidebar Typo Heading
				'neom_typography_sidebar_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Sidebar Typography', 'neom-blog' ),
						'section'  => 'neom_sidebar_widget_typography',
					),
				),
				// Sidebar Typo Enable Disable
				'neom_typography_sidebar_widget_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Sidebar Typography', 'neom-blog' ),
						'section'  => 'neom_sidebar_widget_typography',
					),
				),

				// Footer Typo Heading
				'neom_typography_footer_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Footer Typography', 'neom-blog' ),
						'section'  => 'neom_footer_widget_typography',
					),
				),
				// Footer Typo Enable Disable
				'neom_typography_sidebar_footer_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Footer Typography', 'neom-blog' ),
						'section'  => 'neom_footer_widget_typography',
					),
				),
			);

		}

	}

	new neom_Customize_Theme_Typography_Option();

endif;
