<?php
/**
 * Register customizer panels and sections.
 *
 * @package neom
 */

/**
 * Panel 1: Theme Options
 */

$wp_customize->add_panel(
	new neom_Customize_Panel(
		$wp_customize,
		'neom_theme_settings',
		array(
			'priority'   => 10,
			'title'      => esc_html__( 'Theme Options', 'neom-blog' ),
			'capabitity' => 'edit_theme_options',
		)
	)
);


	// a. Section: General.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_theme_general',
			array(
				'title'    => esc_html__( 'General Settings', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 10,
			)
		)
	);

	// b. Top Bar Section.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_topbar_settings',
			array(
				'title'    => esc_html__( 'Top Bar Settings', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 20,
			)
		)
	);

	// c. Menu Section.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_theme_menu_bar',
			array(
				'title'    => esc_html__( 'Menu Settings', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 30,
			)
		)
	);

	// d. Section Breadcrumb.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_theme_breadcrumb',
			array(
				'title'    => esc_html__( 'Page Breadcrumb Settings', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 40,
			)
		)
	);

	// e. Blog Section.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_blog_general',
			array(
				'title'    => esc_html__( 'Blog Settings', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 50,
			)
		)
	);

	// f. excerpt Section.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_excerpt_general',
			array(
				'title'    => esc_html__( 'ReadMore/Excerpt Settings', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 60,
			)
		)
	);

	// g. Page Title Section.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_theme_page_title',
			array(
				'title'    => esc_html__( 'Page/Breadcrumb Title', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 70,
			)
		)
	);


	// h. Footer.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_theme_footer',
			array(
				'title'    => esc_html__( 'Footer Settings', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'priority' => 80,
			)
		)
	);

	// h 1. footer widgets.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_footer_widgets',
			array(
				'title'    => esc_html__( 'Footer Widgets', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'section'  => 'neom_theme_footer',
				'priority' => 80,
			)
		)
	);
	// h 2. footer widgets.
	$wp_customize->add_section(
		new neom_Customize_Section(
			$wp_customize,
			'neom_footer_copyright',
			array(
				'title'    => esc_html__( 'Footer Copyright', 'neom-blog' ),
				'panel'    => 'neom_theme_settings',
				'section'  => 'neom_theme_footer',
				'priority' => 90,
			)
		)
	);


	/**
	 * Panel 2: Theme Colors
	 */
	$wp_customize->add_panel(
		new neom_Customize_Panel(
			$wp_customize,
			'neom_theme_colors',
			array(
				'priority'   => 11,
				'title'      => esc_html__( 'Theme Colors', 'neom-blog' ),
				'capabitity' => 'edit_theme_options',
			)
		)
	);

		// a. Colors > Primary Colors .
		$wp_customize->add_section(
			new neom_Customize_Section(
				$wp_customize,
				'neom_theme_skin_color',
				array(
					'title'    => esc_html__( 'Skin Color Mode (Dark/Light)', 'neom-blog' ),
					'panel'    => 'neom_theme_colors',
					'priority' => 10,
				)
			)
		);

		// b. Colors > Primary Colors .
		$wp_customize->add_section(
			new neom_Customize_Section(
				$wp_customize,
				'neom_theme_primary_color',
				array(
					'title'    => esc_html__( 'Primary Colors', 'neom-blog' ),
					'panel'    => 'neom_theme_colors',
					'priority' => 10,
				)
			)
		);

		// c: Colors > Menu Color.
		$wp_customize->add_section(
			new neom_Customize_Section(
				$wp_customize,
				'neom_primary_menu_colors',
				array(
					'title'    => esc_html__( 'Menu Colors', 'neom-blog' ),
					'panel'    => 'neom_theme_colors',
					'priority' => 10,
				)
			)
		);

		// // c: Colors > Content.
		// $wp_customize->add_section(
		// 	new neom_Customize_Section(
		// 		$wp_customize,
		// 		'neom_content_theme_colors',
		// 		array(
		// 			'title'    => esc_html__( 'Content', 'neom-blog' ),
		// 			'panel'    => 'neom_theme_colors',
		// 			'priority' => 10,
		// 		)
		// 	)
		// );

		// // d: Colors > Sidebar.
		// $wp_customize->add_section(
		// 	new neom_Customize_Section(
		// 		$wp_customize,
		// 		'neom_sidebar_theme_colors',
		// 		array(
		// 			'title'    => esc_html__( 'Sidebar', 'neom-blog' ),
		// 			'panel'    => 'neom_theme_colors',
		// 			'priority' => 10,
		// 		)
		// 	)
		// );

		// // e: Colors > Footer.
		// $wp_customize->add_section(
		// 	new neom_Customize_Section(
		// 		$wp_customize,
		// 		'neom_footer_theme_colors',
		// 		array(
		// 			'title'    => esc_html__( 'Footer', 'neom-blog' ),
		// 			'panel'    => 'neom_theme_colors',
		// 			'priority' => 10,
		// 		)
		// 	)
		// );


			/**
			 * Panel 3: Typography
			 */
			$wp_customize->add_panel(
				new neom_Customize_Panel(
					$wp_customize,
					'neom_theme_typography',
					array(
						'priority'   => 30,
						'title'      => esc_html__( 'neom Typography', 'neom-blog' ),
						'capabitity' => 'edit_theme_options',
					)
				)
			);

			// Section: Typography > Enable typography.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_enable_disable_typography',
					array(
						'title'    => esc_html__( 'Enable Typography', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 5,
					)
				)
			);

			// Section: Typography > Header typography.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_header_typography',
					array(
						'title'    => esc_html__( 'Header Typography', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 20,
					)
				)
			);

			// Section: Slider > Homepage Section Slider.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_slider_typography',
					array(
						'title'    => esc_html__( 'Slider Typography', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 25,
					)
				)
			);

			// Section: Typography > Homepage Section typography.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_homepage_typography',
					array(
						'title'    => esc_html__( 'Homepage Typography', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 30,
					)
				)
			);

			// Section: Headings > Headings typography.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_headings_typography',
					array(
						'title'    => esc_html__( 'Headings Typography', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 30,
					)
				)
			);

			// Section: Typography > Page typography.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_blog_archive_typography',
					array(
						'title'    => esc_html__( 'Blog / Archive / Single Post', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 45,
					)
				)
			);

			// Section: Typography > Sidebar typography.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_sidebar_widget_typography',
					array(
						'title'    => esc_html__( 'Sidebar Widget', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 55,
					)
				)
			);

			// Section: Typography > Footer typography.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_footer_widget_typography',
					array(
						'title'    => esc_html__( 'Footer Widget', 'neom-blog' ),
						'panel'    => 'neom_theme_typography',
						'priority' => 65,
					)
				)
			);

			/**
			 * Styling: Theme Styling
			 */
			$wp_customize->add_panel(
				new neom_Customize_Panel(
					$wp_customize,
					'theme_style',
					array(
						'priority'   => 30,
						'title'      => esc_html__( 'neom Theme Styling', 'neom-blog' ),
						'capabitity' => 'edit_theme_options',
					)
				)
			);

			// Section: Theme Styling > Theme Color.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_theme_color_settings',
					array(
						'title'    => esc_html__( 'Theme Color', 'neom-blog' ),
						'panel'    => 'theme_style',
						'priority' => 1,
					)
				)
			);

			// Section: Theme Styling > Theme Size.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_theme_size_settings',
					array(
						'title'    => esc_html__( 'Layout Size', 'neom-blog' ),
						'panel'    => 'theme_style',
						'priority' => 5,
					)
				)
			);

			/* Theme Template. */

			$wp_customize->add_panel(
				new neom_Customize_Panel(
					$wp_customize,
					'neom_theme_template_settings',
					array(
						'priority'   => 30,
						'title'      => esc_html__( 'Theme Templates', 'neom-blog' ),
						'capabitity' => 'edit_theme_options',
					)
				)
			);

			// Section: About Template.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_template_contact_us',
					array(
						'title'    => esc_html__( 'About Template', 'neom-blog' ),
						'panel'    => 'neom_theme_template_settings',
						'priority' => 10,
					)
				)
			);

			// Section: Contact Template.
			$wp_customize->add_section(
				new neom_Customize_Section(
					$wp_customize,
					'neom_template_contact_us',
					array(
						'title'    => esc_html__( 'Contact Us Template', 'neom-blog' ),
						'panel'    => 'neom_theme_template_settings',
						'priority' => 12,
					)
				)
			);

