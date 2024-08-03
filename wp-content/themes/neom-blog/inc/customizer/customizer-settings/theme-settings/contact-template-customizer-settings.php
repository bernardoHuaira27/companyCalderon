<?php
/**
 * contact_template Settings.
 *
 * @package neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* contact template Settings.
*/

if ( ! class_exists( 'neom_Customize_Contact_Template_Option' ) ) :

	class neom_Customize_Contact_Template_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_contact_template_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Contact Template Settings', 'neom-blog' ),
						'section'  => 'neom_template_contact_us',
					),
				),

				// Map Section Enable.
				'neom_contact_template_map_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Map Section Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_template_contact_us',
					),
				),

				// FAQ Section Enable.
				'neom_contact_template_faq_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 50,
						'label'    => esc_html__( 'FAQ Section Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_template_contact_us',
					),
				),
			);
		}
	}

	new neom_Customize_Contact_Template_Option();

endif;
