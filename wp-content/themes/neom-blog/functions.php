<?php
if ( ! function_exists( 'neom_setup' ) ) :
	function neom_setup() {

		/**
		 * Define Theme Version
		 */

		// Theme version.
		$neom_theme = wp_get_theme();
		define( 'NEOM_THEME_VERSION', $neom_theme->get( 'Version' ) );
		define( 'NEOM_THEME_NAME', $neom_theme->get( 'Name' ) );

		// Root path/URI.
		define( 'NEOM_PARENT_DIR', get_template_directory() );
		define( 'NEOM_PARENT_URI', get_template_directory_uri() );

		// Root path/URI.
		define( 'NEOM_PARENT_INC_DIR', NEOM_PARENT_DIR . '/inc' );
		define( 'NEOM_PARENT_INC_URI', NEOM_PARENT_URI . '/inc' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-header' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		// Add selective refresh for sidebar widget.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'neom-blog' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_menu' => esc_html__( 'Primary Menu', 'neom-blog' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support( 'custom-logo' );

		/*
		 * WooCommerce Plugin Support
		 */
		add_theme_support( 'woocommerce' );

		// Gutenberg wide images.
			add_theme_support( 'align-wide' );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( 'assets/css/editor-style.css', neom_google_font() ) );

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'neom_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'neom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function neom_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'neom_content_width', 1170 );
}
add_action( 'after_setup_theme', 'neom_content_width', 0 );

/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/theme-enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/menu/class-wp-bootstrap-navwalker.php';

/**
 * Called Breadcrumb
 */
require_once get_template_directory() . '/breadcrumb/theme-breadcrumb.php';


/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';


/**
 * Colors Setting.
 */
require get_template_directory() . '/inc/custom-theme-colors.php';

/**
 * Sidebar.
 */
require_once get_template_directory() . '/inc/sidebar/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Cart icon
 */
require get_template_directory() . '/inc/cart-icon.php';

/**
 * Read More / Excerpt Settings
 */
require_once get_template_directory() . '/inc/excerpt.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer/customizer.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer-repeater/functions.php';

/**
 * Demo File
 */
require_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( is_plugin_active( 'awp-companion/awp-companion.php' ) ) {
	// plugin is activated.
	require awp_companion_plugin_dir . 'inc/neom/demo-content/setup.php';
}
