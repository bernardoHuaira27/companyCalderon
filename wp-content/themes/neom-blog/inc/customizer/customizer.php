<?php
/**
 * neom Theme Customizer.
 *
 * @package neom
 */

if ( ! class_exists( 'neom_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class neom_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_register', array( $this, 'neom_customizer_panel_control' ) );
			add_action( 'customize_register', array( $this, 'neom_customizer_selective_refresh' ) );
			add_action( 'customize_register', array( $this, 'load_chints_iconpicker_to_customizer' ) );
			add_action( 'customize_preview_init', array( $this, 'neom_customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'neom_customizer_script' ) );
			add_action( 'after_setup_theme', array( $this, 'neom_customizer_settings' ) );
			add_action( 'customize_register', array( $this, 'neom_customizer_register' ) );
		}

		function load_chints_iconpicker_to_customizer() {
			require NEOM_PARENT_DIR . '/inc/customizer/controls/chints-iconpicker/class-chints-iconpicker.php';
		}

		// Register custom controls.
		public function neom_customizer_panel_control( $wp_customize ) {

			// Load customizer options extending classes.
			require NEOM_PARENT_DIR . '/inc/customizer/custom-customizer/customizer-panel.php';
			require NEOM_PARENT_DIR . '/inc/customizer/custom-customizer/customizer-section.php';

			// Register extended classes.
			$wp_customize->register_panel_type( 'neom_Customize_Panel' );
			$wp_customize->register_section_type( 'neom_Customize_Section' );

			// Load base class for controls.
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-base-control.php';
			// Load custom control classes.
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-color-control.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-category-control.php';
			// portfolio (For Taxonomy Dropdown control).
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-dropdown-control.php';
			// customizer heading control.
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-parent-heading-control.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-heading-control.php';
			// Blog ( theme options ).
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-radio-image-control.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-radio-buttonset-control.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-range-control.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-sortable-control.php';

			// typography (theme settings).
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-toggle-control.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-upgrade-control.php';

			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-slider-control.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/controls/code/customize-tinymce-control.php';

			// menu theme options.
			$wp_customize->register_control_type( 'neom_Customize_Parent_Heading_Control' );
			$wp_customize->register_control_type( 'neom_Customize_Heading_Control' );

			$wp_customize->register_control_type( 'neom_Customize_Radio_Image_Control' );
			$wp_customize->register_control_type( 'neom_Customize_Radio_Buttonset_Control' );
			$wp_customize->register_control_type( 'neom_Customize_Sortable_Control' );
			$wp_customize->register_control_type( 'neom_Customize_Slider_Control' );

			// typography settings.
			$wp_customize->register_control_type( 'neom_Customize_Toggle_Control' );
			$wp_customize->register_control_type( 'neom_Customize_Upgrade_Control' );

		}

		// Customizer selective refresh.
		public function neom_customizer_selective_refresh() {

			require_once NEOM_PARENT_DIR . '/inc/customizer/customizer-sanitize.php';
			require_once NEOM_PARENT_DIR . '/inc/customizer/customizer-partials.php';

		}

		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function neom_customizer_register( $wp_customize ) {

			$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting( 'custom_logo' )->transport      = 'refresh';

			/**
			 * Helper files
			 */
			require NEOM_PARENT_DIR . '/inc/custom-controls/font-control.php';
			require NEOM_PARENT_DIR . '/inc/sanitization.php';

			// Customizer selective.
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-selective.php';

			// Register panels and sections.
			require NEOM_PARENT_DIR . '/inc/customizer/panels-and-sections.php';

			// ALL Theme Optons Settings.
				// General Settings.
				require NEOM_PARENT_DIR . '/inc/customizer/theme-options/general-customizer.php';
				// Top Bar Settings.
				require NEOM_PARENT_DIR . '/inc/customizer/theme-options/top-bar-customizer.php';
				// Menu Settings.
				require NEOM_PARENT_DIR . '/inc/customizer/theme-options/menu-customizer.php';
				// Footer Settings.
				require NEOM_PARENT_DIR . '/inc/customizer/theme-options/footer-customizer.php';
				// Excerpt Options.
				require NEOM_PARENT_DIR . '/inc/customizer/theme-options/excerpt-customizer.php';
			// ALL Theme Optons Settings.

			// Theme Colors Settings.
			require NEOM_PARENT_DIR . '/inc/customizer/theme-options/colors-customizer.php';

			// Homepage Settings.
			require NEOM_PARENT_DIR . '/inc/customizer/theme-options/homepage-customizer.php';
		}


		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function neom_customize_preview_js() {
			wp_enqueue_script( 'neom-customizer', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}

		function neom_customizer_script() {
			wp_enqueue_script( 'neom-customizer-section', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-section.js', array( 'jquery' ), '', true );
		}

		// Include customizer customizer settings.

		function neom_customizer_settings() {

			// Base class.
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/customize-base-customizer-settings.php';

			// Read More / Excerpt Settings.
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/excerpt-read-more-customizer-settings.php';

			// General Settings.
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/general-customizer-settings.php';

			// Top Bar. (Theme Options Settings).
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/topbar-customizer-settings.php';

			// Menu (Theme Options Settings).
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/menu-bar-customizer-settings.php';

			// Page Header (Theme Options Settings).
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/head-customizer-settings.php';

			// Blog (Theme Options Settings).
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/blog-general-customizer-settings.php';

			// Footer (Theme Options Settings).
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/footer-copyright-customizer-settings.php';
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/footer-widget-customizer-settings.php';

			// Template Contact Us (Theme Template Settings).
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/contact-template-customizer-settings.php';

			// Colors Settings.
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/theme-colors-customizer-settings.php';

			// Frontpage Settings Options Required.
			require NEOM_PARENT_DIR . '/inc/customizer/customizer-options.php';

		}

	}
}// End if().

/**
 *  Kicking this off by calling 'get_instance()' method
 */
neom_Customizer::get_instance();
