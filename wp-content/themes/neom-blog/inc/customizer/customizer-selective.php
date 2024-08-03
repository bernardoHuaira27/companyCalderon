<?php
/**
 * Override default customizer options.
 *
 * @package neom
 */

// Settings.
$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

if ( isset( $wp_customize->selective_refresh ) ) {

	// site title.
	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.nav-area .logo',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_customize_partial_blogname' ),
		)
	);

	// site tagline.
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.nav-area .site-description',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_customize_partial_blogdescription' ),
		)
	);

	// breadcrumb selector.
	$wp_customize->selective_refresh->add_partial(
		'neom_breadcrumb_height',
		array(
			'selector'        => '.breadcrumb-area .theme-columns-area .breadcrumb-content',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_customize_partial_breadcrumb_height' ),
		)
	);

	// Slider Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_main_slider_content',
		array(
			'selector'        => '.slider-wrapper .theme-slider .av-container',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_main_slider_content_render_callback' ),
		)
	);

	// Top Info Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_top_info_content',
		array(
			'selector'        => '.top-contact-info .info-section',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_top_info_content_render_callback' ),
		)
	);

	// Footer Info Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_footer_info_content',
		array(
			'selector'        => '.footer-above .theme-columns-area',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_footer_info_content_render_callback' ),
		)
	);

	// service title.
	$wp_customize->selective_refresh->add_partial(
		'neom_service_area_title',
		array(
			'selector'        => '.service-section h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_service_area_title' ),
		)
	);

	// service desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_service_area_des',
		array(
			'selector'        => '.service-section p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_service_area_des' ),
		)
	);

	// Service Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_service_content',
		array(
			'selector'        => '.service-section .service-contents',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_service_content_render_callback' ),
		)
	);

	// about title.
	$wp_customize->selective_refresh->add_partial(
		'neom_about_area_title',
		array(
			'selector'        => '.about-section .heading-title h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_about_area_title' ),
		)
	);

	// about desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_about_area_des',
		array(
			'selector'        => '.about-section p .about-description',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_about_area_des' ),
		)
	);

	// about Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_about_content',
		array(
			'selector'        => '.about-section .about-content',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_about_content_render_callback' ),
		)
	);

	// features title.
	$wp_customize->selective_refresh->add_partial(
		'neom_features_area_title',
		array(
			'selector'        => '.features-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_features_area_title' ),
		)
	);

	// features desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_features_area_des',
		array(
			'selector'        => '.features-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_features_area_des' ),
		)
	);

	// features Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_features_content',
		array(
			'selector'        => '.features-section .features-contents',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_features_content_render_callback' ),
		)
	);

	// funfact title.
	$wp_customize->selective_refresh->add_partial(
		'neom_funfact_area_title',
		array(
			'selector'        => '.funfact-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_funfact_area_title' ),
		)
	);

	// funfact desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_funfact_area_des',
		array(
			'selector'        => '.funfact-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_funfact_area_des' ),
		)
	);

	// funfact Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_funfact_content',
		array(
			'selector'        => '.funfact-section .funfact-wrapper',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_funfact_content_render_callback' ),
		)
	);

	// project title.
	$wp_customize->selective_refresh->add_partial(
		'neom_portfolio_area_title',
		array(
			'selector'        => '.portfolio-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_portfolio_area_title' ),
		)
	);

	// project description.
	$wp_customize->selective_refresh->add_partial(
		'neom_portfolio_area_des',
		array(
			'selector'        => '.portfolio-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_portfolio_area_des' ),
		)
	);

	// project Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_theme_portfolio_category',
		array(
			'selector'        => '.portfolio-section',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_theme_portfolio_category_render_callback' ),
		)
	);

	// testimonial title.
	$wp_customize->selective_refresh->add_partial(
		'neom_testimonial_area_title',
		array(
			'selector'        => '.testimonial-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_testimonial_area_title' ),
		)
	);

	// testimonial description.
	$wp_customize->selective_refresh->add_partial(
		'neom_testimonial_area_des',
		array(
			'selector'        => '.testimonial-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_testimonial_area_des' ),
		)
	);

	// testimonial Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_testimonial_content',
		array(
			'selector'        => '.testimonial-section .testimonial-carousel',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_testimonial_content_render_callback' ),
		)
	);

	// call to action title.
	$wp_customize->selective_refresh->add_partial(
		'neom_cta_area_title',
		array(
			'selector'        => '.cta-section .cta-content h4',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_cta_area_title' ),
		)
	);

	// call to action subtitle.
	$wp_customize->selective_refresh->add_partial(
		'neom_cta_area_subtitle',
		array(
			'selector'        => '.cta-section .subtitle',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_cta_area_subtitle' ),
		)
	);

	// call to action title 2.
	$wp_customize->selective_refresh->add_partial(
		'neom_cta_area_title2',
		array(
			'selector'        => '.cta-section .call-title',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_cta_area_title2' ),
		)
	);

	// call to action button text.
	$wp_customize->selective_refresh->add_partial(
		'neom_cta_button_text',
		array(
			'selector'        => '.cta-section .cta-btn',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_cta_button_text' ),
		)
	);

	// blog title.
	$wp_customize->selective_refresh->add_partial(
		'neom_blog_area_title',
		array(
			'selector'        => '.post-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_blog_area_title' ),
		)
	);

	// blog description.
	$wp_customize->selective_refresh->add_partial(
		'neom_blog_area_des',
		array(
			'selector'        => '.post-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_blog_area_des' ),
		)
	);

	// blog Button.
	$wp_customize->selective_refresh->add_partial(
		'neom_blog_button_text',
		array(
			'selector'        => '.post-section .blog-button',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_blog_button_text' ),
		)
	);

	// blog Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_theme_blog_category',
		array(
			'selector'        => '.post-section .post-carousel',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_theme_blog_category_render_callback' ),
		)
	);

	// Team Title.
	$wp_customize->selective_refresh->add_partial(
		'neom_team_area_title',
		array(
			'selector'        => '.team-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_team_area_title' ),
		)
	);
	// Team Subtitle.
	$wp_customize->selective_refresh->add_partial(
		'neom_team_area_des',
		array(
			'selector'        => '.team-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_team_area_des' ),
		)
	);

	// Team Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_team_content',
		array(
			'selector'        => '.team .team-selector',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_team_content_render_callback' ),
		)
	);

	// Client Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_client_content',
		array(
			'selector'        => '.client-section .partner-carousel',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_client_content_render_callback' ),
		)
	);

	// Client Title.
	$wp_customize->selective_refresh->add_partial(
		'neom_client_area_title',
		array(
			'selector'        => '.client-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_client_area_title' ),
		)
	);
	// Client Desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_client_area_des',
		array(
			'selector'        => '.client-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_client_area_des' ),
		)
	);

	// Step Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_step_content',
		array(
			'selector'        => '.step-section .step-carousel',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_step_content_render_callback' ),
		)
	);

	// Step Title.
	$wp_customize->selective_refresh->add_partial(
		'neom_step_area_title',
		array(
			'selector'        => '.step-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_step_area_title' ),
		)
	);
	// Step Desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_step_area_des',
		array(
			'selector'        => '.step-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_step_area_des' ),
		)
	);

	// Timeline Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_timeline_content',
		array(
			'selector'        => '.timeline-section .timeline-carousel',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_timeline_content_render_callback' ),
		)
	);

	// Timeline Title.
	$wp_customize->selective_refresh->add_partial(
		'neom_timeline_area_title',
		array(
			'selector'        => '.timeline-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_timeline_area_title' ),
		)
	);
	// Timeline Desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_timeline_area_des',
		array(
			'selector'        => '.timeline-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_timeline_area_des' ),
		)
	);

	// faq Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_faq_content',
		array(
			'selector'        => '.faq-section .faq-carousel',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_faq_content_render_callback' ),
		)
	);

	// faq Title.
	$wp_customize->selective_refresh->add_partial(
		'neom_faq_area_title',
		array(
			'selector'        => '.faq-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_faq_area_title' ),
		)
	);
	// faq Desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_faq_area_des',
		array(
			'selector'        => '.faq-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_faq_area_des' ),
		)
	);

	// Map Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_map_content',
		array(
			'selector'        => '.contactmap-section .contactmapinfo',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_map_content_render_callback' ),
		)
	);

	// contact Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_contact_content',
		array(
			'selector'        => '.contactform-section',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_contact_content_render_callback' ),
		)
	);

	// contact Title.
	$wp_customize->selective_refresh->add_partial(
		'neom_contact_area_title',
		array(
			'selector'        => '.contactform-section .heading-default h3',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_contact_area_title' ),
		)
	);
	// contact Desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_contact_area_des',
		array(
			'selector'        => '.contactform-section .heading-default p',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_contact_area_des' ),
		)
	);


	// woocommerce Title.
	$wp_customize->selective_refresh->add_partial(
		'neom_woocommerce_area_title',
		array(
			'selector'        => '.woocommerce-section .section-header .section-title',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_woocommerce_area_title' ),
		)
	);
	// woocommerce Desc.
	$wp_customize->selective_refresh->add_partial(
		'neom_woocommerce_area_desc',
		array(
			'selector'        => '.woocommerce-section .section-header .section-subtitle',
			'render_callback' => array( 'neom_Customizer_Partials', 'customize_partial_neom_woocommerce_area_desc' ),
		)
	);

	// Woocommerce Area.
	$wp_customize->selective_refresh->add_partial(
		'neom_woocommerce_content',
		array(
			'selector'        => '.woocommerce-section .woocommerce-selector',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_woocommerce_content_render_callback' ),
		)
	);

	// footer copyright text.
	$wp_customize->selective_refresh->add_partial(
		'neom_footer_copyright_text',
		array(
			'selector'        => '.footer-copyright .copyright-text',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_footer_copyright_text_render_callback' ),
		)
	);


	// topbar phone text.
	$wp_customize->selective_refresh->add_partial(
		'neom_topbar_social_icons',
		array(
			'selector'        => '.header-above-info .widget-left .share-toolkit',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_topbar_social_icons_render_callback' ),
		)
	);

	// topbar phone text.
	$wp_customize->selective_refresh->add_partial(
		'neom_contact_detail_text',
		array(
			'selector'        => '.header-above-info .contact-info .contact',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_contact_detail_text_render_callback' ),
		)
	);

	// topbar phone number.
	$wp_customize->selective_refresh->add_partial(
		'neom_email_detail_text',
		array(
			'selector'        => '.header-above-info .contact-info .email',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_email_detail_text_render_callback' ),
		)
	);

	// topbar Button text.
	$wp_customize->selective_refresh->add_partial(
		'neom_mobile_detail_text',
		array(
			'selector'        => '.header-above-info .contact-info .mobile',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_mobile_detail_text_render_callback' ),
		)
	);

	// All General Settings.
		// excerpt number.
		$wp_customize->selective_refresh->add_partial(
			'neom_excerpt_length',
			array(
				'selector'        => '.post .full-content .entry-content .more-link',
				'render_callback' => array( 'neom_Customizer_Partials', 'neom_excerpt_length_render_callback' ),
			)
		);

		// Blog Meta.
		$wp_customize->selective_refresh->add_partial(
			'neom_blog_content_ordering',
			array(
				'selector'        => '.post-section .post-content',
				'render_callback' => array( 'neom_Customizer_Partials', 'neom_blog_content_ordering_render_callback' ),
			)
		);


	/**
	* Theme Template
	*/
	// contact Form title.
	$wp_customize->selective_refresh->add_partial(
		'contact_form_title',
		array(
			'selector'        => '.contact .contact-header .section-title',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_template_contact_form_title_render_callback' ),
		)
	);
	// contact Form subtitle.
	$wp_customize->selective_refresh->add_partial(
		'contact_form_description',
		array(
			'selector'        => '.contact .contact-header .section-subtitle',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_template_contact_form_subtitle_render_callback' ),
		)
	);

	// contact Form Info.
	$wp_customize->selective_refresh->add_partial(
		'contact_google_map_title',
		array(
			'selector'        => '.contact .section-header .section-title',
			'render_callback' => array( 'neom_Customizer_Partials', 'neom_template_contact_google_map_title_render_callback' ),
		)
	);

}
