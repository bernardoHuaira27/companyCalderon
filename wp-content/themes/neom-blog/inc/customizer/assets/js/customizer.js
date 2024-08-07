/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function ( $ ) {
	
	// Service title
	wp.customize(
		'neom_service_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.service .section-title' ).text( newval );
				}
			);
		}
	);
	
	// Service description
	wp.customize(
		'neom_service_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.service .section-header p' ).text( newval );
				}
			);
		}
	);
	// Service Section
	wp.customize(
		'neom_service_content', function( value ) {
			value.bind(
				function( newval ) {
					$( '.service .container-full' ).text( newval );
				}
			);
		}
	);
	
	// Project title
	wp.customize(
		'neom_project_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.portfolio_selector .section-header .section-title' ).text( newval );
				}
			);
		}
	);
	
	// Project description
	wp.customize(
		'neom_project_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.portfolio_selector .section-header p' ).text( newval );
				}
			);
		}
	);
	
	
	// Testimonial title
	wp.customize(
		'neom_testimonial_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.testimonial .section-header h1' ).text( newval );
				}
			);
		}
	);
	
	// Testimonial description
	wp.customize(
		'neom_testimonial_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.testimonial .section-header p' ).text( newval );
				}
			);
		}
	);
	
	// Call to action title
	wp.customize(
		'neom_cta_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.callout-to-action .title' ).text( newval );
				}
			);
		}
	);
	
	// Call to action subtitle
	wp.customize(
		'neom_cta_area_subtitle', function( value ) {
			value.bind(
				function( newval ) {
					$( '.callout-to-action .subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Call to action description
	wp.customize(
		'neom_cta_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.callout-to-action .m-top-40 .callout-button' ).text( newval );
				}
			);
		}
	);
	
	// Call to action button text
	wp.customize(
		'neom_cta_button_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .btn-small' ).text( newval );
				}
			);
		}
	);
	
	
	// Blog title
	wp.customize(
		'neom_blog_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.home-news .section-title' ).text( newval );
				}
			);
		}
	);
	
	// Blog description
	wp.customize(
		'neom_blog_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.home-news .section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	
	// footer copyright text
	wp.customize(
		'neom_footer_copyright_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.footer-copyrights' ).text( newval );
				}
			);
		}
	);
	
	
} )( jQuery );