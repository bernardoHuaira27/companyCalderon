<?php
/**
 * neom Customizer partials.
 *
 * @package neom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'neom_Customizer_Partials' ) ) {

	/**
	 * Customizer Partials.
	 */
	class neom_Customizer_Partials {

		/**
		 * Instance.
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		// site title.
		public static function neom_customize_partial_blogname() {
			return get_bloginfo( 'name' );
		}

		// Site tagline.
		public static function neom_customize_partial_blogdescription() {
			return get_bloginfo( 'description' );
		}

		// Site tagline.
		public static function neom_customize_partial_breadcrumb_height() {
			return get_bloginfo( 'neom_breadcrumb_height' );
		}

		// Slider Area.
		public static function neom_main_slider_content_render_callback() {
			return get_theme_mod( 'neom_main_slider_content' );
		}

		// Top info Area.
		public static function neom_top_info_content_render_callback() {
			return get_theme_mod( 'neom_top_info_content' );
		}

		// Footer info Area.
		public static function neom_footer_info_content_render_callback() {
			return get_theme_mod( 'neom_footer_info_content' );
		}

		// service title.
		public static function customize_partial_neom_service_area_title() {
			return get_theme_mod( 'neom_service_area_title' );
		}

		// service description.
		public static function customize_partial_neom_service_area_des() {
			return get_theme_mod( 'neom_service_area_des' );
		}

		// Service Area.
		public static function neom_service_content_render_callback() {
			return get_theme_mod( 'neom_service_content' );
		}

		// features title.
		public static function customize_partial_neom_features_area_title() {
			return get_theme_mod( 'neom_features_area_title' );
		}

		// features description.
		public static function customize_partial_neom_features_area_des() {
			return get_theme_mod( 'neom_features_area_des' );
		}

		// features Area.
		public static function neom_features_content_render_callback() {
			return get_theme_mod( 'neom_features_content' );
		}

		// about title.
		public static function customize_partial_neom_about_area_title() {
			return get_theme_mod( 'neom_about_area_title' );
		}

		// about description.
		public static function customize_partial_neom_about_area_des() {
			return get_theme_mod( 'neom_about_area_des' );
		}

		// about Area.
		public static function neom_about_content_render_callback() {
			return get_theme_mod( 'neom_about_content' );
		}

		// funfact title.
		public static function customize_partial_neom_funfact_area_title() {
			return get_theme_mod( 'neom_funfact_area_title' );
		}

		// funfact description.
		public static function customize_partial_neom_funfact_area_des() {
			return get_theme_mod( 'neom_funfact_area_des' );
		}

		// funfact area.
		public static function customize_partial_neom_funfact_content() {
			return get_theme_mod( 'neom_funfact_content' );
		}

		// project title.
		public static function customize_partial_neom_portfolio_area_title() {
			return get_theme_mod( 'neom_portfolio_area_title' );
		}

		// project description.
		public static function customize_partial_neom_portfolio_area_des() {
			return get_theme_mod( 'neom_portfolio_area_des' );
		}

		// project area.
		public static function customize_partial_neom_theme_portfolio_category() {
			return get_theme_mod( 'neom_theme_portfolio_category' );
		}

		// testimonial title.
		public static function customize_partial_neom_testimonial_area_title() {
			return get_theme_mod( 'neom_testimonial_area_title' );
		}

		// testimonial description.
		public static function customize_partial_neom_testimonial_area_des() {
			return get_theme_mod( 'neom_testimonial_area_des' );
		}

		// testimonial area.
		public static function customize_partial_neom_testimonial_content() {
			return get_theme_mod( 'neom_testimonial_content' );
		}

		// call to action title.
		public static function customize_partial_neom_cta_area_title() {
			return get_theme_mod( 'neom_cta_area_title' );
		}

		// call to action title.
		public static function customize_partial_neom_cta_area_title2() {
			return get_theme_mod( 'neom_cta_area_title2' );
		}

		// call to action subtitle.
		public static function customize_partial_neom_cta_area_subtitle() {
			return get_theme_mod( 'neom_cta_area_subtitle' );
		}

		// call to action description.
		public static function customize_partial_neom_cta_area_des() {
			return get_theme_mod( 'neom_cta_area_des' );
		}

		// call to action button text.
		public static function customize_partial_neom_cta_button_text() {
			return get_theme_mod( 'neom_cta_button_text' );
		}

		// blog title.
		public static function customize_partial_neom_blog_area_title() {
			return get_theme_mod( 'neom_blog_area_title' );
		}

		// blog description.
		public static function customize_partial_neom_blog_area_des() {
			return get_theme_mod( 'neom_blog_area_des' );
		}

		// blog Button.
		public static function customize_partial_neom_blog_button_text() {
			return get_theme_mod( 'neom_blog_button_text' );
		}

		// blog area.
		public static function customize_partial_neom_theme_blog_category() {
			return get_theme_mod( 'neom_theme_blog_category' );
		}

		// team title.
		public static function customize_partial_neom_team_area_title() {
			return get_theme_mod( 'neom_team_area_title' );
		}

		// team description.
		public static function customize_partial_neom_team_area_des() {
			return get_theme_mod( 'neom_team_area_des' );
		}

		// team area.
		public static function customize_partial_neom_team_content() {
			return get_theme_mod( 'neom_team_content' );
		}

		// Client area.
		public static function customize_partial_neom_client_content() {
			return get_theme_mod( 'neom_client_content' );
		}

		// Client title.
		public static function customize_partial_neom_client_area_title() {
			return get_theme_mod( 'neom_client_area_title' );
		}
		// Client Desc.
		public static function customize_partial_neom_client_area_desc() {
			return get_theme_mod( 'neom_client_area_desc' );
		}

		// Step area.
		public static function customize_partial_neom_step_content() {
			return get_theme_mod( 'neom_step_content' );
		}

		// Step title.
		public static function customize_partial_neom_step_area_title() {
			return get_theme_mod( 'neom_step_area_title' );
		}
		// Step Desc.
		public static function customize_partial_neom_step_area_desc() {
			return get_theme_mod( 'neom_step_area_desc' );
		}

		// timeline area.
		public static function customize_partial_neom_timeline_content() {
			return get_theme_mod( 'neom_timeline_content' );
		}

		// timeline title.
		public static function customize_partial_neom_timeline_area_title() {
			return get_theme_mod( 'neom_timeline_area_title' );
		}
		// timeline Desc.
		public static function customize_partial_neom_timeline_area_desc() {
			return get_theme_mod( 'neom_timeline_area_desc' );
		}

		// faq area.
		public static function customize_partial_neom_faq_content() {
			return get_theme_mod( 'neom_faq_content' );
		}

		// faq title.
		public static function customize_partial_neom_faq_area_title() {
			return get_theme_mod( 'neom_faq_area_title' );
		}
		// faq Desc.
		public static function customize_partial_neom_faq_area_desc() {
			return get_theme_mod( 'neom_faq_area_desc' );
		}

		// map area.
		public static function customize_partial_neom_map_content() {
			return get_theme_mod( 'neom_map_content' );
		}

		// contact area.
		public static function customize_partial_neom_contact_content() {
			return get_theme_mod( 'neom_contact_content' );
		}
		// contact title.
		public static function customize_partial_neom_contact_area_title() {
			return get_theme_mod( 'neom_contact_area_title' );
		}
		// contact Des.
		public static function customize_partial_neom_contact_area_des() {
			return get_theme_mod( 'neom_contact_area_des' );
		}

		// Woocommerce title.
		public static function customize_partial_neom_woocommerce_area_title() {
			return get_theme_mod( 'neom_woocommerce_area_title' );
		}
		// Woocommerce Desc.
		public static function customize_partial_neom_woocommerce_area_desc() {
			return get_theme_mod( 'neom_woocommerce_area_desc' );
		}
		// Woocommerce Area.
		public static function customize_partial_neom_woocommerce_content() {
			return get_theme_mod( 'neom_woocommerce_content' );
		}

		// footer copyright text.
		public static function neom_footer_copyright_text_render_callback() {
			return get_theme_mod( 'neom_footer_copyright_text' );
		}

		// topbar text.
		public static function neom_contact_detail_text_render_callback() {
			return get_theme_mod( 'neom_contact_detail_text' );
		}
		// topbar phone number.
		public static function neom_email_detail_text_render_callback() {
			return get_theme_mod( 'neom_email_detail_text' );
		}
		// topbar phone number.
		public static function neom_mobile_detail_text_render_callback() {
			return get_theme_mod( 'neom_mobile_detail_text' );
		}

		// ecxerpt length.
		public static function neom_excerpt_length_render_callback() {
			return get_theme_mod( 'neom_excerpt_length' );
		}

		// Blog Meta.
		public static function neom_blog_content_ordering_render_callback() {
			return get_theme_mod( 'neom_blog_content_ordering' );
		}


		/**
		 * Theme Template
		 */
		public static function neom_template_contact_form_title_render_callback() {
			return get_theme_mod( 'contact_form_title' );
		}
		public static function neom_template_contact_form_subtitle_render_callback() {
			return get_theme_mod( 'contact_form_description' );
		}

		public static function neom_template_contact_google_map_title_render_callback() {
			return get_theme_mod( 'contact_google_map_title' );
		}

	}
}

neom_Customizer_Partials::get_instance();
