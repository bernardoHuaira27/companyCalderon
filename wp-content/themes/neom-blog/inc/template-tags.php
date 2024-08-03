<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package neom
 */

if ( ! function_exists( 'neom_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function neom_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			esc_html_x( 'Posted on %s', 'post date', 'neom-blog' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'neom-blog' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';
	}
endif;

if ( ! function_exists( 'neom_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function neom_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'neom-blog' ) );
			if ( $categories_list && neom_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'neom-blog' ) . '</span>', $categories_list );
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'neom-blog' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'neom-blog' ) . '</span>', $tags_list );
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			/* translators: %s: post title */
			comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'neom-blog' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
			echo '</span>';
		}

		edit_post_link(
			sprintf(
			/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'neom-blog' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function neom_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'neom_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'neom_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so neom_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so neom_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in neom_categorized_blog.
 */
function neom_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'neom_categories' );
}
add_action( 'edit_category', 'neom_category_transient_flusher' );
add_action( 'save_post', 'neom_category_transient_flusher' );

/**
 * Function that returns if the menu is sticky
 */
if ( ! function_exists( 'neom_sticky_menu' ) ) :
	function neom_sticky_menu() {
		$neom_menu_style = get_theme_mod( 'neom_menu_style', 'sticky' );

		if ( $neom_menu_style == 'sticky' ) :
			return 'sticky-nav ';
		else :
			return 'not-sticky';
		endif;
	}
endif;

/**
 * Function that returns if the menu is sticky
 */
if ( ! function_exists( 'neom_menu_size' ) ) :
	function neom_menu_size() {
		$neom_menu_container_size = get_theme_mod( 'neom_menu_container_size', 'container-full' );

		if ( $neom_menu_container_size == 'container-full' ) :
			return 'container-full';
		else :
			return 'av-container';
		endif;
	}
endif;


/**
 * Register Google fonts for neom.
 */
function neom_google_font() {

	$get_fonts_url = '';

	$font_families = array();

	$font_families = array( 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

		return $get_fonts_url;
}

function neom_scripts_styles() {
	wp_enqueue_style( 'neom-fonts', neom_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'neom_scripts_styles' );


/**
 * Register Breadcrumb for Multiple Variation
 */
function neom_breadcrumbs_style() {
	get_template_part( './template-pages/sections/section', 'breadcrumb' );
}


/**
 * Archive Post: This Function Check whether Sidebar active or Not
 */
if ( ! function_exists( 'neom_post_layout' ) ) :
	function neom_post_layout() {
		$neom_archive_blog_pages_layout = get_theme_mod( 'neom_archive_blog_pages_layout', 'neom_right_sidebar' );
		if ( 'neom_no_sidebar' !== $neom_archive_blog_pages_layout && is_active_sidebar( 'neom-sidebar-primary' ) ) {
			echo 'theme-column-8';
		} else {
			echo 'theme-column-12 mx-auto';
		}
	} endif;

/**
 * Single Post: This Function Check whether Sidebar active or Not
 */
if ( ! function_exists( 'neom_single_post_layout' ) ) :
	function neom_single_post_layout() {
		$neom_single_blog_pages_layout = get_theme_mod( 'neom_single_blog_pages_layout', 'neom_right_sidebar' );
		if ( 'neom_no_sidebar' !== $neom_single_blog_pages_layout && is_active_sidebar( 'neom-sidebar-primary' ) ) {
			echo 'theme-column-8';
		} else {
			echo 'theme-column-12 mx-auto';
		}
	} endif;

/**
 * Template Post: This Function Check whether Sidebar active or Not
 */
if ( ! function_exists( 'neom_template_layout' ) ) :
	function neom_template_layout() {
		if ( is_active_sidebar( 'neom-sidebar-primary' ) ) {
			echo 'theme-column-8';
		} else {
			echo 'theme-column-12 mx-auto';
		}
	} endif;



if ( ! function_exists( 'neom_dynamic_style' ) ) :
	function neom_dynamic_style() {

		$output_css = '';

		/**
		 *  Breadcrumb Style
		 */
		$neom_breadcrumb_height = get_theme_mod( 'neom_breadcrumb_height', '256' );

		if ( $neom_breadcrumb_height !== '' ) {
				$output_css .= '.breadcrumb-content {
					min-height: ' . esc_attr( $neom_breadcrumb_height ) . "px;
				}\n";
		}

		$neom_breadcrumb_bg_img      = get_theme_mod( 'neom_breadcrumb_bg_img', esc_url( get_template_directory_uri() . '/assets/images/breadcrumb/breadcrumb.jpg' ) );
		$neom_breadcrumb_back_attach = get_theme_mod( 'neom_breadcrumb_back_attach', 'fixed' );

		if ( $neom_breadcrumb_bg_img !== '' ) {
			$output_css .= '.breadcrumb-area {
					background-image: url(' . esc_url( $neom_breadcrumb_bg_img ) . ');
					background-attachment: ' . esc_attr( $neom_breadcrumb_back_attach ) . ";
				}\n";
		} else {
			$output_css .= ".breadcrumb-area {
				 background: var(--sp-gradient2);
			}\n";
		}

		$neom_site_cntnr_width = get_theme_mod( 'neom_site_cntnr_width', '1170' );
		if ( $neom_site_cntnr_width >= 768 && $neom_site_cntnr_width <= 2000 ) {
			$output_css .= '.post-section .av-container {
						max-width: ' . esc_attr( $neom_site_cntnr_width ) . "px;
					}\n";
		}

		$neom_footer_bg_img = get_theme_mod( 'neom_footer_bg_img', '' );
		if ( ! empty( $neom_footer_bg_img ) ) :
			$output_css .= '.footer-section.footer-one{ 
				background: url(' . esc_url( $neom_footer_bg_img ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		$neom_page_header_background_color = get_theme_mod( 'neom_page_header_background_color' );
		$output_css                       .= ".breadcrumb-area:before {
			background-color: $neom_page_header_background_color !important;
		}\n";

		/**
		 * Logo Width
		 */
		$neom_custom_logo_size = get_theme_mod(
			'neom_custom_logo_size',
			array(
				'slider' => 140,
				'suffix' => 'px',
			)
		);
		if ( $neom_custom_logo_size['slider'] != null ) {
			$output_css .= '.logo img, .mobile-logo img {
				max-width: ' . esc_attr( $neom_custom_logo_size['slider'] ) . "px;
			}\n";
		}

		/**
		 * Slider Overlay Settings
		 */
		$neom_main_slider_overlay_disable = get_theme_mod( 'neom_main_slider_overlay_disable', false );
		$neom_main_slider_overlay_color   = get_theme_mod( 'neom_main_slider_overlay_color', true );
		if ( true === $neom_main_slider_overlay_disable ) {
			$output_css .= ".theme-slider {
				background: rgba(0,0,0,0.6);
			}\n";
		}

		/**
		 * Slider Meta Color Settings
		 */
		$neom_main_slider_text_color_disable = get_theme_mod( 'neom_main_slider_text_color_disable', false );
		if ( true === $neom_main_slider_text_color_disable ) {
			$neom_main_slider_caption_title_color            = get_theme_mod( 'neom_main_slider_caption_title_color', '#fff' );
			$neom_main_slider_caption_title_bg_color         = get_theme_mod( 'neom_main_slider_caption_title_bg_color', '#11104d' );
			$neom_main_slider_caption_subtitle_title_color   = get_theme_mod( 'neom_main_slider_caption_subtitle_title_color', '#fff' );
			$neom_main_slider_caption_subtitle2_title_color  = get_theme_mod( 'neom_main_slider_caption_subtitle2_title_color', '#d81956' );
			$neom_main_slider_caption_descrption_title_color = get_theme_mod( 'neom_main_slider_caption_descrption_title_color', '#fff' );

			$output_css .= ".theme-slider .theme-content h3 {
				color: $neom_main_slider_caption_title_color;
			}
			.theme-slider .theme-content h3 {
				background: $neom_main_slider_caption_title_bg_color;
			}
			.theme-slider .theme-content h1 {
				color: $neom_main_slider_caption_subtitle_title_color;
			}
			.theme-slider .theme-content h1 .primary-color {
				background: $neom_main_slider_caption_subtitle2_title_color;
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				text-decoration: none;
			}
			.theme-slider .theme-content p {
				color: $neom_main_slider_caption_descrption_title_color;
			}\n";
		}

		/**
		 * Slider Text Bg overlay Color CSS
		 */
		$neom_main_slider_text_overlay_disable = get_theme_mod( 'neom_main_slider_text_overlay_disable', false );
		$neom_main_slider_text_overlay_color   = get_theme_mod( 'neom_main_slider_text_overlay_color', true );
		if ( true === $neom_main_slider_text_overlay_disable ) {
			$output_css .= ".theme-slider div.text-overlay {
				background: rgba(0,0,0,0.6);
			}\n";
		}

		/**
		 * About Bg Image Settings
		 */
		$neom_about_background = get_theme_mod( 'neom_about_background' );
		if ( ! empty( $neom_about_background ) ) :
			$output_css .= '.about-section {
				background: url(' . esc_url( $neom_about_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Service Bg Image Settings
		 */
		$neom_service_background = get_theme_mod( 'neom_service_background' );
		if ( ! empty( $neom_service_background ) ) :
			$output_css .= '.service-section {
				background: url(' . esc_url( $neom_service_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Portfolio Bg Image Settings
		 */
		$neom_portfolio_background = get_theme_mod( 'neom_portfolio_background' );
		if ( ! empty( $neom_portfolio_background ) ) :
			$output_css .= '.portfolio-section {
				background: url(' . esc_url( $neom_portfolio_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Cta Bg Image Settings
		 */
		$neom_cta_background_image = get_theme_mod( 'neom_cta_background_image', '' );
		if ( ! empty( $neom_cta_background_image ) ) :
			$output_css .= '.cta-section {
				background: url(' . esc_url( $neom_cta_background_image ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		* Funfact Bg Image Settings
		*/
		$neom_funfact_background = get_theme_mod( 'neom_funfact_background' );
		if ( ! empty( $neom_funfact_background ) ) :
			$output_css .= '.funfact-section {
				background: url(' . esc_url( $neom_funfact_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Team Bg Image Settings
		 */
		$neom_team_background = get_theme_mod( 'neom_team_background' );
		if ( ! empty( $neom_team_background ) ) :
			$output_css .= '.team-section {
				background: url(' . esc_url( $neom_team_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Client Bg Image Settings
		 */
		$neom_client_background = get_theme_mod( 'neom_client_background' );
		if ( ! empty( $neom_client_background ) ) :
			$output_css .= '.client-section {
				background: url(' . esc_url( $neom_client_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Testimonial Bg Image Settings
		 */
		$neom_testimonial_background = get_theme_mod( 'neom_testimonial_background' );
		if ( ! empty( $neom_testimonial_background ) ) :
			$output_css .= ".testimonial-section {
				background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('" . esc_url( $neom_testimonial_background ) . "') no-repeat fixed center center / cover;
			}\n";
		endif;

		/**
		 * Step Bg Image Settings
		 */
		$neom_step_background = get_theme_mod( 'neom_step_background', get_template_directory_uri() . '/assets/images/image_bg_dotted.png' );
		if ( ! empty( $neom_step_background ) ) :
			$output_css .= ".step-section {
				background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('" . esc_url( $neom_step_background ) . "') no-repeat fixed center center / cover;
			}\n";
		endif;

		/**
		 * Timeline Bg Image Settings
		 */
		$neom_timeline_background = get_theme_mod( 'neom_timeline_background' );
		if ( ! empty( $neom_timeline_background ) ) :
			$output_css .= '.timeline-section {
				background: url(' . esc_url( $neom_timeline_background ) . ") no-repeat scroll center center / cover;
			}\n";
		endif;

		/**
		 * Map Bg Image Settings
		 */
		$neom_map_img = get_theme_mod( 'neom_map_img' );
		if ( ! empty( $neom_map_img ) ) :
			$output_css .= '.contactmap-section .contactmapinfo {
				background: url(' . esc_url( $neom_map_img ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Faq Bg Image Settings
		 */
		$neom_faq_background = get_theme_mod( 'neom_faq_background', '' );
		if ( ! empty( $neom_faq_background ) ) :
			$output_css .= ".faq-section {
				background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('" . esc_url( $neom_faq_background ) . "') no-repeat fixed center center / cover;
			}\n";
		endif;

		/**
		 * Contact Bg Image Settings
		 */
		$neom_contact_background = get_theme_mod( 'neom_contact_background', '' );
		if ( ! empty( $neom_contact_background ) ) :
			$output_css .= ".contactform-section {
				background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('" . esc_url( $neom_contact_background ) . "') no-repeat center center / cover fixed;
			}\n";
		endif;

		/**
		 *  Menu-header-3 Custom CSS For Container-full setting
		 */

		$neom_menu_container_size = get_theme_mod( 'neom_menu_container_size', 'container-full' );
		if ( 'container-full' === $neom_menu_container_size ) {
			$output_css .= '@media (min-width: 992px) {
				 .header.header-three {
					 max-width: 95.15%;
					 top: 45px;
				 }
			 }' . "\n";
		}

		/* Css For Menu Design 2*/
		$neom_menu_design_layout = get_theme_mod( 'neom_menu_design_layout', 'menu-layout1' );
		if ( 'menu-layout1' !== $neom_menu_design_layout ) {
			$output_css .= '.breadcrumb-content {
				margin-top: 10px;
			}
			@media (max-width: 992px) {
				.breadcrumb-content {
					margin-top: 0px;
				}
			}' . "\n";
		}

		if ( is_admin() ) {
			$output_css .= 'body {
				margin-top: 32px;
			}\n';
		}

		wp_add_inline_style( 'neom-style', $output_css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neom_dynamic_style' );

/**
 * Plugin Calling.
 */
require_once get_template_directory() . '/inc/plugin-code.php';
