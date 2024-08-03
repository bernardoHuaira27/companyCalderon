<?php
/**
 * 2. Primary Color Settings
 */

	// Primary Color 1.
	$wp_customize->add_setting(
		'neom_primary_color_1',
		array(
			'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
			'capability'        => 'edit_theme_options',
			'default'           => '#2ab2ff',
		)
	);
	$wp_customize->add_control(
		new neom_Customize_Color_Control(
			$wp_customize,
			'neom_primary_color_1',
			array(
				'label'    => esc_html__( 'Color 1', 'neom-blog' ),
				'section'  => 'neom_theme_primary_color',
				'settings' => 'neom_primary_color_1',
				'priority' => 10,
				'choices'  => array(
					'alpha' => true,
				),
			)
		)
	);

	// Primary Color 2.
	$wp_customize->add_setting(
		'neom_primary_color_2',
		array(
			'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
			'capability'        => 'edit_theme_options',
			'default'           => '#172b56',
		)
	);
	$wp_customize->add_control(
		new neom_Customize_Color_Control(
			$wp_customize,
			'neom_primary_color_2',
			array(
				'label'           => esc_html__( 'Color 2 (Pro Feature)', 'neom-blog' ),
				'section'         => 'neom_theme_primary_color',
				'settings'        => 'neom_primary_color_2',
				'priority'        => 20,
				'choices'         => array(
					'alpha' => true,
				),
				'active_callback' => 'neom_primary_color_2',
			)
		)
	);
	// Disable color 2 if primary color is normal-color.
	function neom_primary_color_2( $control ) {
		return true === ( $control->manager->get_setting( 'neom_primary_colors_selection' )->value() !== 'normal-color' );
	}
	// Disable Liner transition Setting if primary color is normal-color.
	function neom_primary_color_liner_ct( $control ) {
		return true === ( $control->manager->get_setting( 'neom_primary_colors_selection' )->value() !== 'normal-color' );
	}

	// Primary Background Color 2.
	$wp_customize->add_setting(
		'neom_primary_bg_color_1',
		array(
			'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
			'capability'        => 'edit_theme_options',
			'default'           => '#121359',
		)
	);
	$wp_customize->add_control(
		new neom_Customize_Color_Control(
			$wp_customize,
			'neom_primary_bg_color_1',
			array(
				'label'    => esc_html__( 'Background Color 1', 'neom-blog' ),
				'section'  => 'neom_theme_primary_color',
				'settings' => 'neom_primary_bg_color_1',
				'priority' => 70,
				'choices'  => array(
					'alpha' => true,
				),
			)
		)
	);

	// Primary Color 2.
	$wp_customize->add_setting(
		'neom_primary_bg_color_2',
		array(
			'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
			'capability'        => 'edit_theme_options',
			'default'           => '#0e044b',
		)
	);
	$wp_customize->add_control(
		new neom_Customize_Color_Control(
			$wp_customize,
			'neom_primary_bg_color_2',
			array(
				'label'           => esc_html__( 'Background Color 2 (Pro Feature)', 'neom-blog' ),
				'section'         => 'neom_theme_primary_color',
				'settings'        => 'neom_primary_bg_color_2',
				'priority'        => 80,
				'choices'         => array(
					'alpha' => true,
				),
				'active_callback' => 'neom_primary_bg_color_2',
			)
		)
	);
	// Disable color 2 if primary color is normal-color.
	function neom_primary_bg_color_2( $control ) {
		return true === ( $control->manager->get_setting( 'neom_primary_bg_colors_selection' )->value() !== 'normal-color' );
	}
	// Disable Liner transition Setting if primary color is normal-color.
	function neom_primary_bg_color_liner_ct( $control ) {
		return true === ( $control->manager->get_setting( 'neom_primary_bg_colors_selection' )->value() !== 'normal-color' );
	}


	/**
	 * 1. Primary Menu Color Settings
	 */
		// Text/Link Color.
		$wp_customize->add_setting(
			'neom_colors_menu_text',
			array(
				'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
				'capability'        => 'edit_theme_options',
				'default'           => '#1e1e1e',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_menu_text',
				array(
					'label'    => esc_html__( 'Text/Link Color', 'neom-blog' ),
					'section'  => 'neom_primary_menu_colors',
					'settings' => 'neom_colors_menu_text',
					'priority' => 10,
				)
			)
		);

		// Hover Link Color.
		$wp_customize->add_setting(
			'neom_colors_menu_hover',
			array(
				'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
				'capability'        => 'edit_theme_options',
				'default'           => '#d81956',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_menu_hover',
				array(
					'label'    => esc_html__( 'Link Hover Color', 'neom-blog' ),
					'section'  => 'neom_primary_menu_colors',
					'settings' => 'neom_colors_menu_hover',
					'priority' => 20,
				)
			)
		);

		// Active Link Color.
		$wp_customize->add_setting(
			'neom_colors_menu_active',
			array(
				'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
				'capability'        => 'edit_theme_options',
				'default'           => '#d81956',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_menu_active',
				array(
					'label'    => esc_html__( 'Active Link Color', 'neom-blog' ),
					'section'  => 'neom_primary_menu_colors',
					'settings' => 'neom_colors_menu_active',
					'priority' => 30,
				)
			)
		);

		/*
		 B. SubMenu */
		// SubMenu Text/Link Color.
		$wp_customize->add_setting(
			'neom_colors_submenu_text',
			array(
				'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
				'capability'        => 'edit_theme_options',
				'default'           => '#1e1e1e',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_submenu_text',
				array(
					'label'    => esc_html__( 'Text/Link Color', 'neom-blog' ),
					'section'  => 'neom_primary_menu_colors',
					'settings' => 'neom_colors_submenu_text',
					'priority' => 40,
				)
			)
		);

		// SubMenu Hover Link Color.
		$wp_customize->add_setting(
			'neom_colors_submenu_hover',
			array(
				'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
				'capability'        => 'edit_theme_options',
				'default'           => '#d81956',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_submenu_hover',
				array(
					'label'    => esc_html__( 'Link Hover Color', 'neom-blog' ),
					'section'  => 'neom_primary_menu_colors',
					'settings' => 'neom_colors_submenu_hover',
					'priority' => 50,
				)
			)
		);

		// SubMenu Active Link Color.
		$wp_customize->add_setting(
			'neom_colors_submenu_active',
			array(
				'sanitize_callback' => array( 'neom_Customizer_Sanitize', 'sanitize_alpha_color' ),
				'capability'        => 'edit_theme_options',
				'default'           => '#d81956',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_submenu_active',
				array(
					'label'    => esc_html__( 'Active Color', 'neom-blog' ),
					'section'  => 'neom_primary_menu_colors',
					'settings' => 'neom_colors_submenu_active',
					'priority' => 60,
				)
			)
		);

		/**
		 * 2. Content Color Settings
		 */

		// H1 Color.
		$wp_customize->add_setting(
			'neom_colors_content_h1',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_h1',
				array(
					'label'    => esc_html__( 'H1 Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_h1',
					'priority' => 10,
				)
			)
		);
		// H2 Color.
		$wp_customize->add_setting(
			'neom_colors_content_h2',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_h2',
				array(
					'label'    => esc_html__( 'H2 Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_h2',
					'priority' => 20,
				)
			)
		);
		// H3 Color.
		$wp_customize->add_setting(
			'neom_colors_content_h3',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_h3',
				array(
					'label'    => esc_html__( 'H3 Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_h3',
					'priority' => 30,
				)
			)
		);
		// H4 Color.
		$wp_customize->add_setting(
			'neom_colors_content_h4',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_h4',
				array(
					'label'    => esc_html__( 'H4 Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_h4',
					'priority' => 40,
				)
			)
		);
		// H5 Color.
		$wp_customize->add_setting(
			'neom_colors_content_h5',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_h5',
				array(
					'label'    => esc_html__( 'H5 Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_h5',
					'priority' => 50,
				)
			)
		);
		// H6 Color.
		$wp_customize->add_setting(
			'neom_colors_content_h6',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_h6',
				array(
					'label'    => esc_html__( 'H6 Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_h6',
					'priority' => 60,
				)
			)
		);
		// P Color.
		$wp_customize->add_setting(
			'neom_colors_content_p',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_p',
				array(
					'label'    => esc_html__( 'Paragraph Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_p',
					'priority' => 70,
				)
			)
		);

		// Button Background Color.
		$wp_customize->add_setting(
			'neom_colors_content_button',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_button',
				array(
					'label'    => esc_html__( 'Button Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_button',
					'priority' => 80,
				)
			)
		);

		// Button Text Color.
		$wp_customize->add_setting(
			'neom_colors_content_btn_text',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_content_btn_text',
				array(
					'label'    => esc_html__( 'Button Text Color', 'neom-blog' ),
					'section'  => 'neom_content_theme_colors',
					'settings' => 'neom_colors_content_btn_text',
					'priority' => 80,
				)
			)
		);


		/**
		 * 3. Sidebar Widgets Color Settings
		 */
		// a. Sidebar Widget Title Color.
		$wp_customize->add_setting(
			'neom_colors_sidebar_title',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_sidebar_title',
				array(
					'label'    => esc_html__( 'Title Color', 'neom-blog' ),
					'section'  => 'neom_sidebar_theme_colors',
					'settings' => 'neom_colors_sidebar_title',
					'priority' => 10,
				)
			)
		);
		// b. Sidebar Widget Text Color.
		$wp_customize->add_setting(
			'neom_colors_sidebar_text',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_sidebar_text',
				array(
					'label'    => esc_html__( 'Text Color', 'neom-blog' ),
					'section'  => 'neom_sidebar_theme_colors',
					'settings' => 'neom_colors_sidebar_text',
					'priority' => 20,
				)
			)
		);
		// c. Sidebar Widget Link Color.
		$wp_customize->add_setting(
			'neom_colors_sidebar_link',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_sidebar_link',
				array(
					'label'    => esc_html__( 'Link Color', 'neom-blog' ),
					'section'  => 'neom_sidebar_theme_colors',
					'settings' => 'neom_colors_sidebar_link',
					'priority' => 30,
				)
			)
		);
		// d. Sidebar Widget Link Hover Color.
		$wp_customize->add_setting(
			'neom_colors_sidebar_hover',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#0074da',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_sidebar_hover',
				array(
					'label'    => esc_html__( 'Link Hover Color', 'neom-blog' ),
					'section'  => 'neom_sidebar_theme_colors',
					'settings' => 'neom_colors_sidebar_hover',
					'priority' => 40,
				)
			)
		);

		/**
		 * 4. Footer Widgets Color Settings
		 */
		// a. Footer Widget Title Color.
		$wp_customize->add_setting(
			'neom_colors_footer_title',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_footer_title',
				array(
					'label'    => esc_html__( 'Title Color', 'neom-blog' ),
					'section'  => 'neom_footer_theme_colors',
					'settings' => 'neom_colors_footer_title',
					'priority' => 10,
				)
			)
		);
		// b. Footer Widget Text Color.
		$wp_customize->add_setting(
			'neom_colors_footer_text',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_footer_text',
				array(
					'label'    => esc_html__( 'Text Color', 'neom-blog' ),
					'section'  => 'neom_footer_theme_colors',
					'settings' => 'neom_colors_footer_text',
					'priority' => 20,
				)
			)
		);
		// c. Footer Widget Link Color.
		$wp_customize->add_setting(
			'neom_colors_footer_link',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#000',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_footer_link',
				array(
					'label'    => esc_html__( 'Link Color', 'neom-blog' ),
					'section'  => 'neom_footer_theme_colors',
					'settings' => 'neom_colors_footer_link',
					'priority' => 30,
				)
			)
		);
		// d. Footer Widget Link Hover Color.
		$wp_customize->add_setting(
			'neom_colors_footer_hover',
			array(
				'sanitize_callback' => 'neom_sanitize_select',
				'capability'        => 'edit_theme_options',
				'default'           => '#0074da',
			)
		);
		$wp_customize->add_control(
			new neom_Customize_Color_Control(
				$wp_customize,
				'neom_colors_footer_hover',
				array(
					'label'    => esc_html__( 'Link Hover Color', 'neom-blog' ),
					'section'  => 'neom_footer_theme_colors',
					'settings' => 'neom_colors_footer_hover',
					'priority' => 40,
				)
			)
		);
