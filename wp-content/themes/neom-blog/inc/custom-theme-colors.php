<?php
if ( ! function_exists( 'neom_custom_theme_colors_options' ) ) :
	function neom_custom_theme_colors_options() {

		$custom_color_css = '';

		/**
		 * Features Section Heading Color Settings
		*/
		if ( true === get_theme_mod( 'neom_features_section_color_disable', false ) ) :
			// a. features title Color.
			if ( get_theme_mod( 'neom_features_section_title_color' ) !== null ) :
				$custom_color_css .= '.features-section .heading-default h3 {
				color: ' . esc_attr( get_theme_mod( 'neom_features_section_title_color', '#1e1e1e' ) ) . "; }\n";
			endif;

			// a. features desc Color.
			if ( get_theme_mod( 'neom_features_section_description_color' ) !== null ) :
				$custom_color_css .= '.features-section .heading-default p {
				color: ' . esc_attr( get_theme_mod( 'neom_features_section_description_color', '#1e1e1e' ) ) . ";					
			}\n";
			endif;
		endif;

		/**
		 * Step Section Heading Color Settings
		*/
		if ( true === get_theme_mod( 'neom_step_section_color_disable', false ) ) :
			// a. step title Color.
			if ( get_theme_mod( 'neom_step_section_title_color' ) !== null ) :
				$custom_color_css .= '.step-section .heading-default h3 {
				color: ' . esc_attr( get_theme_mod( 'neom_step_section_title_color', '#1e1e1e' ) ) . "; }\n";
			endif;

			// a. step desc Color.
			if ( get_theme_mod( 'neom_step_section_description_color' ) !== null ) :
				$custom_color_css .= '.step-section .heading-default p {
				color: ' . esc_attr( get_theme_mod( 'neom_step_section_description_color', '#1e1e1e' ) ) . ";					
			}\n";
			endif;
		endif;

		/**
		 * Timeline Section Heading Color Settings
		*/
		if ( true === get_theme_mod( 'neom_timeline_section_color_disable', false ) ) :
			// a. timeline title Color.
			if ( get_theme_mod( 'neom_timeline_section_title_color' ) !== null ) :
				$custom_color_css .= '.timeline-section .heading-default h3 {
				color: ' . esc_attr( get_theme_mod( 'neom_timeline_section_title_color', '#fff' ) ) . "; }\n";
			endif;

			// a. timeline desc Color.
			if ( get_theme_mod( 'neom_timeline_section_description_color' ) !== null ) :
				$custom_color_css .= '.timeline-section .heading-default p {
				color: ' . esc_attr( get_theme_mod( 'neom_timeline_section_description_color', '#fff' ) ) . ";					
			}\n";
			endif;
		endif;

		/**
		 * Contact Section Heading Color Settings
		*/
		if ( true === get_theme_mod( 'neom_contact_section_color_disable', false ) ) :
			// a. contact title Color.
			if ( get_theme_mod( 'neom_contact_section_title_color' ) !== null ) :
				$custom_color_css .= '.contactform-section .heading-default h3 {
				color: ' . esc_attr( get_theme_mod( 'neom_contact_section_title_color', '#1e1e1e' ) ) . "; }\n";
			endif;

			// a. contact desc Color.
			if ( get_theme_mod( 'neom_contact_section_description_color' ) !== null ) :
				$custom_color_css .= '.contactform-section .heading-default p {
				color: ' . esc_attr( get_theme_mod( 'neom_contact_section_description_color', '#1e1e1e' ) ) . ";					
			}\n";
			endif;
		endif;

		/**
		 * Blog Section Heading Color Settings
		*/
		if ( true === get_theme_mod( 'neom_blog_section_color_disable', false ) ) :
			// a. blog title Color.
			if ( get_theme_mod( 'neom_blog_section_title_color' ) !== null ) :
				$custom_color_css .= '.post-section .heading-default h3 {
				color: ' . esc_attr( get_theme_mod( 'neom_blog_section_title_color', '#1e1e1e' ) ) . "; }\n";
			endif;

			// a. blog desc Color.
			if ( get_theme_mod( 'neom_blog_section_description_color' ) !== null ) :
				$custom_color_css .= '.post-section .heading-default p {
				color: ' . esc_attr( get_theme_mod( 'neom_blog_section_description_color', '#1e1e1e' ) ) . ";					
			}\n";
			endif;
		endif;

		/*============= Front Page Color Settings End Here ====================*/

		/**
		 * 1. Primary Colors Theme Color Settings.
		*/
		$neom_primary_colors_selection = get_theme_mod( 'neom_primary_colors_selection', 'gradient-color' );
		$neom_primary_color_1          = get_theme_mod( 'neom_primary_color_1', '#2b66c0' );
		$neom_primary_color_2          = get_theme_mod( 'neom_primary_color_2_pro', '#172b56' );
		$neom_primary_color_liner_ct   = get_theme_mod(
			'neom_primary_color_liner_ct',
			array(
				'slider' => -137,
				'suffix' => 'deg',
			)
		);

		// 1. Primary Colors Theme Color Settings.
		$custom_color_css .= ':root {
			--sp-primary: ' . esc_attr( $neom_primary_color_1 ) . ';
			--sp-primary2: ' . esc_attr( $neom_primary_color_2 ) . ';
		}' . "\n";

		// 1. Primary Colors Theme Gradiant Color Settings.
		if ( 'gradient-color' === $neom_primary_colors_selection ) {
			$custom_color_css .= ':root {
				--sp-gradient1: linear-gradient( -137deg , ' . esc_attr( $neom_primary_color_1 ) . ' 0%, ' . esc_attr( $neom_primary_color_2 ) . ' 100%);
			}';
			$custom_color_css .= '.awp-btn-bubble:hover::before, .awp-btn-bubble:focus::before {
				background-image: radial-gradient(circle, ' . esc_attr( $neom_primary_color_2 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_2 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_2 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%);
			}' . "\n";
		} else {
			$custom_color_css .= ':root {
				--sp-gradient1: ' . esc_attr( $neom_primary_color_1 ) . ';
			}';
			$custom_color_css .= '.awp-btn-bubble:hover::before, .awp-btn-bubble:focus::before {
				background-image: radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $neom_primary_color_1 ) . ' 25%, transparent 27%);
			}' . "\n";
		}

		/**
		 * 2. Primary Color Theme Background Color Settings.
		*/
		$neom_primary_bg_colors_selection = get_theme_mod( 'neom_primary_bg_colors_selection', 'gradient-color' );
		$neom_primary_bg_color_1          = get_theme_mod( 'neom_primary_bg_color_1', '#0e044b' );
		$neom_primary_bg_color_liner_ct   = get_theme_mod(
			'neom_primary_bg_color_liner_ct',
			array(
				'slider' => -137,
				'suffix' => 'deg',
			)
		);

		// 2. Primary Colors Theme Color Settings.
		$custom_color_css .= ':root {
			--sp-primary: ' . esc_attr( $neom_primary_bg_color_1 ) . ';
			--sp-primary2: #ee5b40;
		}' . "\n";

		// 2. Primary Colors Theme Gradiant Color Settings.
		if ( 'gradient-color' === $neom_primary_bg_colors_selection ) {
			$custom_color_css .= ':root {
				--sp-gradient2: linear-gradient( -137deg , ' . esc_attr( $neom_primary_bg_color_1 ) . ' 0%, #ee5b40 100%);
			}';
		} else {
			$custom_color_css .= ':root {
				--sp-gradient2: ' . esc_attr( $neom_primary_bg_color_1 ) . ';
			}';
		}

		/*============= Theme Primary Color Settings End Here ====================*/

		$neom_colors_menu_disable = get_theme_mod( 'neom_colors_menu_disable', false );
		if ( true === $neom_colors_menu_disable ) {
			/**
			* 1. Menu Color (text/hover/active)
			*/
			$neom_colors_menu_text   = get_theme_mod( 'neom_colors_menu_text', '#1e1e1e' );
			$neom_colors_menu_hover  = get_theme_mod( 'neom_colors_menu_hover', '#d81956' );
			$neom_colors_menu_active = get_theme_mod( 'neom_colors_menu_active', '#d81956' );

			$custom_color_css .= '.menubar .menu-wrap > li > a {
				color: ' . esc_attr( $neom_colors_menu_text ) . "; 
			}\n";

			$custom_color_css .= '.navbar-area .menubar .menu-wrap > li:hover > a, .navbar-area .menubar .menu-wrap > li:focus > a {
				background: linear-gradient(-137deg, ' . esc_attr( $neom_colors_menu_hover ) . ' 0%, ' . esc_attr( $neom_colors_menu_hover ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";

			$custom_color_css .= '.navbar-area .menubar .menu-wrap > li.active > a {
				background: linear-gradient(-137deg, ' . esc_attr( $neom_colors_menu_active ) . ' 0%, ' . esc_attr( $neom_colors_menu_active ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";

			/**
			* 1. Sub Menu Color (text/hover/active)
			*/
			$neom_colors_submenu_text   = get_theme_mod( 'neom_colors_submenu_text', '#1e1e1e' );
			$neom_colors_submenu_hover  = get_theme_mod( 'neom_colors_submenu_hover', '#d81956' );
			$neom_colors_submenu_active = get_theme_mod( 'neom_colors_submenu_active', '#d81956' );

			$custom_color_css .= '.navbar-area .menubar .dropdown-menu li a {
				color: ' . esc_attr( $neom_colors_submenu_text ) . "; 
			}\n";

			$custom_color_css .= '.navbar-area .menubar .dropdown-menu li:hover > a, .navbar-area .menubar .dropdown-menu li.focus > a {
				background: linear-gradient(-137deg, ' . esc_attr( $neom_colors_submenu_hover ) . ' 0%, ' . esc_attr( $neom_colors_submenu_hover ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";

			$custom_color_css .= '.navbar-area .menubar .menu-wrap .dropdown-menu > li.active > a {
				background: linear-gradient(-137deg, ' . esc_attr( $neom_colors_submenu_active ) . ' 0%, ' . esc_attr( $neom_colors_submenu_active ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";
		}

		wp_add_inline_style( 'neom-style', $custom_color_css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neom_custom_theme_colors_options' );
