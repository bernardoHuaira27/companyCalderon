<?php
/**
 * Theme Colors.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customize_Theme_Colors_Option' ) ) :

	/**
	 * Menu option.
	 */
	class neom_Customize_Theme_Colors_Option extends neom_Customize_Base_Option {

		public function elements() {

			return array(

				// Skin Color Mode Settings.
				'neom_skin_colors_main_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Skin Color Mode (Light/Dark)', 'neom-blog' ),
						'section'  => 'neom_theme_skin_color',
					),
				),

				// Primary Colors Section Background Selection.
				'neom_skin_colors_selection'         => array(
					'setting' => array(
						'default'           => 'dark-color',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 10,
						'label'    => esc_html__( 'Skin Mode (Light / Dark)', 'neom-blog' ),
						'section'  => 'neom_theme_skin_color',
						'choices'  => array(
							'light-color' => get_template_directory_uri() . '/assets/images/icons/color-mode1.png',
							'dark-color'  => get_template_directory_uri() . '/assets/images/icons/color-mode2.png',
						),
					),
				),

				// Primary and gradiatn Colors Settings.
				'neom_primary_colors_main_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Primary Colors', 'neom-blog' ),
						'section'  => 'neom_theme_primary_color',
					),
				),

				'neom_primary_colors_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Theme Color', 'neom-blog' ),
						'section'  => 'neom_theme_primary_color',
					),
				),

				// Primary Color Selection.
				'neom_primary_colors_selection'      => array(
					'setting' => array(
						'default'           => 'gradient-color',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 3,
						'label'    => esc_html__( 'Color Style (Solid / Gradient)', 'neom-blog' ),
						'section'  => 'neom_theme_primary_color',
						'choices'  => array(
							'normal-color'   => get_template_directory_uri() . '/assets/images/icons/color1.png',
							'gradient-color' => get_template_directory_uri() . '/assets/images/icons/color2.png',
						),
					),
				),

				// Primary Gradient Color liner Scale.
				'neom_primary_color_liner_ct'        => array(
					'setting' => array(
						'default'           => array(
							'slider' => -137,
							'suffix' => 'deg',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 40,
						'label'           => esc_html__( 'Linear Color Transition(Pro Feature) ', 'neom-blog' ),
						'section'         => 'neom_theme_primary_color',
						'input_attrs'     => array(
							'min'  => -360,
							'max'  => 360,
							'step' => 1,
						),
						'active_callback' => 'neom_primary_color_liner_ct',
					),
				),

				// Primary Colors Section Background Heading.
				'neom_primary_colors_bg_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'        => 'heading',
						'priority'    => 50,
						'label'       => esc_html__( 'Theme Background (Base) Color', 'neom-blog' ),
						'description' => esc_html__( 'This color setup is only for certain parts of the theme.', 'neom-blog' ),
						'section'     => 'neom_theme_primary_color',
					),
				),

				// Primary Colors Section Background Selection.
				'neom_primary_bg_colors_selection'   => array(
					'setting' => array(
						'default'           => 'gradient-color',
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 60,
						'label'    => esc_html__( 'Color Style (Solid / Gradient)', 'neom-blog' ),
						'section'  => 'neom_theme_primary_color',
						'choices'  => array(
							'normal-color'   => get_template_directory_uri() . '/assets/images/icons/color1.png',
							'gradient-color' => get_template_directory_uri() . '/assets/images/icons/color2.png',
						),
					),
				),

				// Primary Background Gradient Color liner Scale.
				'neom_primary_bg_color_liner_ct'     => array(
					'setting' => array(
						'default'           => array(
							'slider' => 137,
							'suffix' => 'deg',
						),
						'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 90,
						'label'           => esc_html__( 'Linear Color Transition(Pro Feature)', 'neom-blog' ),
						'section'         => 'neom_theme_primary_color',
						'input_attrs'     => array(
							'min'  => -360,
							'max'  => 360,
							'step' => 1,
						),
						'active_callback' => 'neom_primary_bg_color_liner_ct',
					),
				),

				// 1. Primary Menu Colors.
					// Menu Colors Enable Disable
					'neom_colors_menu_disable'       => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Menu Colors', 'neom-blog' ),
							'section'  => 'neom_primary_menu_colors',
						),
					),

				'neom_colors_menu_heading'           => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Menu Colors', 'neom-blog' ),
						'section'  => 'neom_primary_menu_colors',
					),
				),

				'neom_colors_submenu_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 35,
						'label'    => esc_html__( 'SubMenu Colors', 'neom-blog' ),
						'section'  => 'neom_primary_menu_colors',
					),
				),

				// 2. Cotent Colors.
					// Cotent Colors Enable Disable
					'neom_colors_content_disable'    => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Content Colors', 'neom-blog' ),
							'section'  => 'neom_content_theme_colors',
						),
					),
				// a. Paragraph Colors.
				'neom_colors_content_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Headings Colors', 'neom-blog' ),
						'section'  => 'neom_content_theme_colors',
					),
				),

				// b. Paragraph Colors.
				'neom_colors_content_p_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 65,
						'label'    => esc_html__( 'Paragraph Colors', 'neom-blog' ),
						'section'  => 'neom_content_theme_colors',
					),
				),

				// c. Button Colors.
				'neom_colors_content_button_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 75,
						'label'    => esc_html__( 'Button Colors', 'neom-blog' ),
						'section'  => 'neom_content_theme_colors',
					),
				),

				// 3. Sidebar Widgets Color.
					'neom_colors_sidebar_disable'    => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Sidebar Color Settings', 'neom-blog' ),
							'section'  => 'neom_sidebar_theme_colors',
						),
					),

				'neom_colors_sidebar_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Sidebar Widgets Colors', 'neom-blog' ),
						'section'  => 'neom_sidebar_theme_colors',
					),
				),

				// 4. Footer Widgets Color.
					'neom_colors_footer_disable'     => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Footer Color Settings', 'neom-blog' ),
							'section'  => 'neom_footer_theme_colors',
						),
					),

				'neom_colors_footer_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Footer Widgets Colors', 'neom-blog' ),
						'section'  => 'neom_footer_theme_colors',
					),
				),

			);
		}
	}
	new neom_Customize_Theme_Colors_Option();
endif;
