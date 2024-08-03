<?php
/**
 * MenuBar.
 *
 * @package neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Menu_Bar_Option' ) ) :

	/**
	 * Menu option.
	 */
	class neom_Customize_Menu_Bar_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				'neom_main_menu_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Menu Settings', 'neom-blog' ),
						'section'  => 'neom_theme_menu_bar',
					),
				),

				// column layout.
				'neom_menu_design_layout'  => array(
					'setting' => array(
						'default'           => 'menu-layout1',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 2,
						'label'    => esc_html__( 'Menu Layouts (Pro)', 'neom-blog' ),
						'section'  => 'neom_theme_menu_bar',
						'choices'  => array(
							'menu-layout1' => get_template_directory_uri() . '/assets/images/icons/header-1.png',
							'menu-layout2' => get_template_directory_uri() . '/assets/images/icons/header-2.png',
							'menu-layout3' => get_template_directory_uri() . '/assets/images/icons/header-3.png',
						),
					),

				),

				'neom_menu_container_size' => array(
					'setting' => array(
						'default'           => 'container-full',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 5,
						'is_default_type' => true,
						'label'           => esc_html__( 'Menu Width', 'neom-blog' ),
						'section'         => 'neom_theme_menu_bar',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'neom-blog' ),
							'container-full' => esc_html__( 'Full Container', 'neom-blog' ),
						),
					),
				),

				'neom_menu_style'          => array(
					'setting' => array(
						'default'           => 'sticky',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 7,
						'is_default_type' => true,
						'label'           => esc_html__( 'Menu Style', 'neom-blog' ),
						'section'         => 'neom_theme_menu_bar',
						'choices'         => array(
							'sticky' => esc_html__( 'Sticky', 'neom-blog' ),
							'static' => esc_html__( 'Static', 'neom-blog' ),
						),
					),
				),

				'neom_search_icon_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 15,
						'label'    => esc_html__( 'Search Icon', 'neom-blog' ),
						'section'  => 'neom_theme_menu_bar',
					),
				),

				'neom_serche_icon_sh'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 16,
						'label'    => esc_html__( 'Search Icon Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_menu_bar',
					),
				),

				'neom_menu_btn_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 25,
						'label'    => esc_html__( 'Menu Button', 'neom-blog' ),
						'section'  => 'neom_theme_menu_bar',
					),
				),

				'neom_menu_btn_sh'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 26,
						'label'    => esc_html__( 'Menu Button Enable/Disable', 'neom-blog' ),
						'section'  => 'neom_theme_menu_bar',
					),
				),
			);

		}

	}

	new neom_Customize_Menu_Bar_Option();

endif;
