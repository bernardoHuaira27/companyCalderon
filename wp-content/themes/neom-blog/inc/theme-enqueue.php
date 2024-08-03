<?php
/**
 * Enqueue scripts and styles.
 */
function neom_scripts() {

	// Theme Styles.
	wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );

	wp_enqueue_style( 'font-awesome-6', get_template_directory_uri() . '/assets/css/fonts/font-awesome/css/fontawesome.css' );
	wp_enqueue_style( 'font-awesome-brand', get_template_directory_uri() . '/assets/css/fonts/font-awesome/css/brands.css' );
	wp_enqueue_style( 'font-awesome-solid', get_template_directory_uri() . '/assets/css/fonts/font-awesome/css/solid.css' );
	wp_enqueue_style( 'font-awesome-shims', get_template_directory_uri() . '/assets/css/fonts/font-awesome/css/v4-shims.css' );

	wp_enqueue_style( 'neom-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css' );

	wp_enqueue_style( 'neom-skin-default', get_template_directory_uri() . '/assets/css/color/default.css' );

	wp_enqueue_style( 'neom-theme-css', get_template_directory_uri() . '/assets/css/theme.css' );

	wp_enqueue_style( 'neom-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css' );

	wp_enqueue_style( 'neom-widgets', get_template_directory_uri() . '/assets/css/widgets.css' );

	wp_enqueue_style( 'neom-main', get_template_directory_uri() . '/assets/css/main.css' );

	wp_enqueue_style( 'neom-media-query', get_template_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_style( 'neom-woocommerce', get_template_directory_uri() . '/assets/css/woo.css' );

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );

	wp_enqueue_style( 'magnific-popup-min', get_template_directory_uri() . '/assets/css/magnific-popup.min.css' );

	// Theme Skin Mode.
	if ( 'dark-color' === get_theme_mod( 'neom_skin_colors_selection', 'dark-color' ) ) {
		wp_enqueue_style( 'neom-dark-color', get_template_directory_uri() . '/assets/css/skin-dark.css' );
	}

	// Loading Icon CSS/JS.
	if ( true === get_theme_mod( 'neom_loading_icon_disabled', true ) ) {
		wp_enqueue_style( 'neom-loading-icon', get_template_directory_uri() . '/assets/css/loading-icon.css' );
		wp_enqueue_script( 'neom-loading-icon', get_template_directory_uri() . '/assets/js/loading-icon.js', array( 'jquery' ), true );
	}

	wp_enqueue_style( 'neom-style', get_stylesheet_uri() );

	// Scripts.
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), true );

	wp_enqueue_script( 'jquery-ripples', get_template_directory_uri() . '/assets/js/jquery.ripples.min.js', array( 'jquery' ), false, true );

	// Pro Theme Js.
	wp_enqueue_script( 'isotope-min', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'countdown-min', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'counterup-min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'magnific-popup-min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'imagesloaded-min', get_template_directory_uri() . '/assets/js/imagesloaded.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'masonry-min', get_template_directory_uri() . '/assets/js/masonry.min.js', array( 'jquery' ), false, true );
	// Pro Theme js.

	wp_enqueue_script( 'anime-min', get_template_directory_uri() . '/assets/js/anime.min.js', array( 'jquery' ), false, true );

	if ( get_theme_mod( 'neom_animation_disabled', true ) == true ) :
		wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), false, true );
	endif;

	wp_enqueue_script( 'neom-theme', get_template_directory_uri() . '/assets/js/theme.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'neom-pro-js', get_template_directory_uri() . '/assets/js/pro.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'neom-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'neom_scripts' );

/**
 * Enqueue admin scripts and styles. Only For Free version
 */
function neom_admin_enqueue_scripts() {
	// Theme Getting Started.
	wp_enqueue_style( 'neom-customize-css', get_template_directory_uri() . '/assets/css/customize.css' );
	wp_enqueue_style( 'neom-admin-style', get_template_directory_uri() . '/assets/css/admin.css' );
	wp_enqueue_script( 'neom-admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array( 'jquery' ), '', true );
	wp_localize_script(
		'neom-admin-script',
		'neom_ajax_object',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
	);
	// Theme Selector Scroller.
	wp_enqueue_style( 'neom-selector-scroll-style', get_template_directory_uri() . '/inc/customizer/assets/css/customize.css', NEOM_THEME_VERSION, 'screen' );
}
add_action( 'admin_enqueue_scripts', 'neom_admin_enqueue_scripts' );

