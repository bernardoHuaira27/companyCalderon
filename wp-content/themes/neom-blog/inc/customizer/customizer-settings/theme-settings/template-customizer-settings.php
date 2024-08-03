<?php
/**
 * Template.
 *
 * @package     neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== Template ==========================================*/
if ( ! class_exists( 'neom_Customize_Theme_Template_Option' ) ) :


	class neom_Customize_Theme_Template_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(
				/**
				* Theme contact form
				*/

					// Contact Form Heading.
					'neom_template_contact_form_heading'  => array(
						'setting' => array(),
						'control' => array(
							'type'     => 'parent_heading',
							'priority' => 1,
							'label'    => esc_html__( 'Contact Form Settings', 'neom-blog' ),
							'section'  => 'neom_theme_contact_page',
						),
					),

				// Contact Form Enable Disable.
				'neom_template_contact_form_disable'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Enable Contact Form', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				// Social Icon Enable Disable.
				'neom_template_contact_icon_disable'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 6,
						'label'           => esc_html__( 'Enable Social Icon', 'neom-blog' ),
						'section'         => 'neom_theme_contact_page',
						'active_callback' => 'contact_form_callback', // Callback location contact-us-template.php
					),
				),

				// Google Map.
				'neom_template_contact_form_map_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 15,
						'label'    => esc_html__( 'Contact Form Map', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				// Google Map Enable.
				'neom_template_contact_form_map_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 20,
						'label'    => esc_html__( 'Enable Google Map', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				// Contact Form Info.
				'neom_template_contact_form_info_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 25,
						'label'    => esc_html__( 'Contact Form Info', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				// Contact Form Info Enable.
				'neom_template_contact_form_info_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 26,
						'label'    => esc_html__( 'Enable Form Info', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				// Extra Sections.
				'neom_template_contact_form_extra_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 30,
						'label'    => esc_html__( 'Extra Sections', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				// Callout Enable Disable.
				'neom_template_contact_callout_disable'   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 35,
						'label'    => esc_html__( 'Enable Contact Callout', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				// Client Enable Disable.
				'neom_template_contact_client_disable'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 40,
						'label'    => esc_html__( 'Enable Contact Client', 'neom-blog' ),
						'section'  => 'neom_theme_contact_page',
					),
				),

				/**
				* Theme About Us
				*/
					// About US Heading.
					'neom_template_about_us_heading'      => array(
						'setting' => array(),
						'control' => array(
							'type'     => 'heading',
							'priority' => 1,
							'label'    => esc_html__( 'About Us Settings', 'neom-blog' ),
							'section'  => 'about_section_settings',
						),
					),

				// Funfact Enable Disable.
				'neom_template_about_us_funfact_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Enable Funfact Section', 'neom-blog' ),
						'section'  => 'about_section_settings',
					),
				),

				// Testimonial Disable.
				'neom_template_about_us_testimonial_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 15,
						'label'    => esc_html__( 'Enable Testimonial Section', 'neom-blog' ),
						'section'  => 'about_section_settings',
					),
				),

				// Testimonial Disable.
				'neom_template_about_us_client_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 25,
						'label'    => esc_html__( 'Enable client Section', 'neom-blog' ),
						'section'  => 'about_section_settings',
					),
				),

				// Funfact Disable.
				'neom_template_about_us_team_disable'     => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 35,
						'label'    => esc_html__( 'Enable Team Section', 'neom-blog' ),
						'section'  => 'about_section_settings',
					),
				),

				/**
				* Theme Service Template
				*/
					// Service Heading.
					'neom_template_service_heading'       => array(
						'setting' => array(),
						'control' => array(
							'type'     => 'heading',
							'priority' => 1,
							'label'    => esc_html__( 'Service Settings', 'neom-blog' ),
							'section'  => 'service_template_settings',
						),
					),

				// Service Funfact Enable Disable.
				'neom_template_service_callout_disable'   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Enable Callout Section', 'neom-blog' ),
						'section'  => 'service_template_settings',
					),
				),

				// Service client Disable.
				'neom_template_service_client_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 25,
						'label'    => esc_html__( 'Enable client Section', 'neom-blog' ),
						'section'  => 'service_template_settings',
					),
				),

			);
		}
	}

	new neom_Customize_Theme_Template_Option();

endif;
