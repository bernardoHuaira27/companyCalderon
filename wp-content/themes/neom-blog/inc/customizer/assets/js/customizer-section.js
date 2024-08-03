( function( api ) {

	// Extends our custom "example-1" section.
	api.sectionConstructor['plugin-section'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );

function neom_frontpage_sections_scroll( section_id ){
    var scroll_section_id = "slider-section";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch ( section_id ) {
        case 'accordion-section-neom_theme_top_header_area':
        scroll_section_id = "site-header";
        break;

        case 'accordion-section-neom_main_theme_slider':
        scroll_section_id = "slider-section";
        break;

        case 'accordion-section-neom_theme_top_info':
        scroll_section_id = "info-section";
        break;

        case 'accordion-section-neom_theme_about':
        scroll_section_id = "about-section";
        break;

        case 'accordion-section-neom_theme_service':
        scroll_section_id = "service-section";
        break;
        
        case 'accordion-section-neom_theme_features':
        scroll_section_id = "features-section";
        break;

        case 'accordion-section-neom_theme_portfolio':
        scroll_section_id = "portfolio-section";
        break;

        case 'accordion-section-neom_theme_funfact':
        scroll_section_id = "funfact-section";
        break;

        case 'accordion-section-neom_theme_testimonial':
        scroll_section_id = "testimonial-section";
        break;

		case 'accordion-section-neom_theme_blog':
        scroll_section_id = "post-section";
        break;
		
        case 'accordion-section-neom_theme_team':
        scroll_section_id = "team-section";
        break;	
		
		case 'accordion-section-neom_theme_cta':
        scroll_section_id = "cta-section";
        break;
		
		case 'accordion-section-neom_theme_client':
        scroll_section_id = "client-section";
        break;
		
		case 'accordion-section-neom_theme_step':
        scroll_section_id = "step-section";
        break;
		
		case 'accordion-section-neom_theme_map':
        scroll_section_id = "contactmap-section";
        break;
		
		case 'accordion-section-neom_theme_timeline':
        scroll_section_id = "timeline-section";
        break;
		
		case 'accordion-section-neom_theme_faq':
        scroll_section_id = "faq-section";
        break;
		
		case 'accordion-section-neom_theme_contact':
        scroll_section_id = "contactform-section";
        break;
		
		case 'accordion-section-neom_theme_woocommerce':
        scroll_section_id = "woocommerce-section";
        break;
		
		case 'accordion-section-neom_theme_footer_info':
        scroll_section_id = "footerinfo-section";
        break;
    }

    if( $contents.find('#'+scroll_section_id).length > 0 ){
        $contents.find("html, body").animate({
        scrollTop: $contents.find( "#" + scroll_section_id ).offset().top
        }, 1000);
    }
}

jQuery('body').on('click', '#sub-accordion-panel-neom_frontpage_settings .control-subsection .accordion-section-title', function(event) {
        var section_id = jQuery(this).parent('.control-subsection').attr('id');
        neom_frontpage_sections_scroll( section_id );
});