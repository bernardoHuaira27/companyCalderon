<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION.
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'neom_city_locale_css' ) ) :
	function neom_city_locale_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}
		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'neom_city_locale_css' );


// Step 1: Update neom_child_theme_setup function.
function neom_child_theme_setup() {
	// Set the default settings for the child theme.
	set_theme_mod( 'neom_archive_blog_design', 'design2' );
	set_theme_mod( 'neom_primary_color_1', '#ef34ef' );
	set_theme_mod( 'neom_primary_bg_color_1', '#630060' );
}

// Hook the setup function.
add_action( 'after_setup_theme', 'neom_child_theme_setup' );

// Step 2: Enqueue Styles and Add Inline CSS.
function neom_child_theme_enqueue_styles() {
	// Enqueue parent theme style.
	wp_enqueue_style(
		'neom_city_parent',
		trailingslashit( get_template_directory_uri() ) . 'style.css',
		array(
			'owl-carousel-min',
			'font-awesome-6',
			'font-awesome-brand',
			'font-awesome-solid',
			'font-awesome-shims',
			'neom-editor-style',
			'neom-skin-default',
			'neom-theme-css',
			'neom-meanmenu',
			'neom-widgets',
			'neom-main',
			'neom-media-query',
			'neom-woocommerce',
			'animate',
			'magnific-popup-min',
			'neom-dark-color',
			'neom-loading-icon',
		)
	);

	// Enqueue child theme style.
	wp_enqueue_style( 'neom_city_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neom_city_parent' ), '1.0.0' );

	// Add inline style for custom colors.
	$custom_css = '
    :root {
		--sp-primary:#630060;
		--sp-primary2:#ef34ef;
		--sp-secondary:#660058;
		--sp-secondary2:#010044;
    }';
	wp_add_inline_style( 'neom_city_child', $custom_css );
}

// Hook the enqueue styles function with a higher priority.
add_action( 'wp_enqueue_scripts', 'neom_child_theme_enqueue_styles', 20 );
