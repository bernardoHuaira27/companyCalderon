<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package neom
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function neom_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'neom_body_classes' );



if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Backward compatibility for wp_body_open hook.
	 *
	 * @since 1.0.0
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

if ( ! function_exists( 'neom_str_replace_assoc' ) ) {

	/**
	 * neom_str_replace_assoc
	 *
	 * @param  array $replace
	 * @param  array $subject
	 * @return array
	 */
	function neom_str_replace_assoc( array $replace, $subject ) {
		return str_replace( array_keys( $replace ), array_values( $replace ), $subject );
	}
}

// neom Navigation.
if ( ! function_exists( 'neom_primary_navigation' ) ) :
	function neom_primary_navigation() {
		wp_nav_menu(
			array(
				'theme_location' => 'primary_menu',
				'container'      => '',
				'menu_class'     => 'menu-wrap',
				'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
				'walker'         => new WP_Bootstrap_Navwalker(),
			)
		);
	}
endif;
add_action( 'neom_primary_navigation', 'neom_primary_navigation' );


// neom Navigation Button.
if ( ! function_exists( 'neom_navigation_button' ) ) :
	function neom_navigation_button() {
		$neom_menu_btn_sh   = get_theme_mod( 'neom_menu_btn_sh', '1' );
		$neom_menu_btn_icon = get_theme_mod( 'neom_menu_btn_icon', 'fa-user' );
		$neom_menu_btn_text = get_theme_mod( 'neom_menu_btn_text' );
		$neom_menu_btn_link = get_theme_mod( 'neom_menu_btn_link' );
		if ( $neom_menu_btn_sh == '1' && ! empty( $neom_menu_btn_text ) ) :
			?>
	<li class="av-button-area">
		<a href="<?php echo esc_url( $neom_menu_btn_link ); ?>" class="awp-btn awp-btn-primary awp-btn-bubble"><?php echo wp_kses_post( $neom_menu_btn_text ); ?> <?php
		if ( ! empty( $neom_menu_btn_icon ) ) :
			?>
			<i class="fa <?php echo esc_attr( $neom_menu_btn_icon ); ?>"></i><?php endif; ?></a>
	</li>
			<?php
endif;
	}
endif;
add_action( 'neom_navigation_button', 'neom_navigation_button' );


// neom Logo.
if ( ! function_exists( 'neom_logo_content' ) ) :
	function neom_logo_content() {
		if ( has_custom_logo() ) {
				the_custom_logo();
		} else {
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
				<h4 class="site-title">
				<?php
					echo esc_html( get_bloginfo( 'name' ) );
				?>
				</h4>
			</a>	
			<?php
		}
		?>
		<?php
			$neom_description = get_bloginfo( 'description' );
		if ( $neom_description ) :
			?>
				<p class="site-description"><?php echo esc_html( $neom_description ); ?></p>
			<?php
		endif;
	}
endif;
add_action( 'neom_logo_content', 'neom_logo_content' );

// neom Navigation Search.
if ( ! function_exists( 'neom_navigation_search' ) ) :
	function neom_navigation_search() {
		$neom_serche_icon_sh = get_theme_mod( 'neom_serche_icon_sh', true );
		if ( $neom_serche_icon_sh == true ) :
			?>
				<li class="search-button">
					<button id="view-search-btn" class="header-search-toggle"><i class="fa fa-search"></i></button>
					<div class="view-search-btn header-search-popup">
						<div class="search-overlay-layer"></div>
						<div class="header-search-pop">
							<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'neom-blog' ); ?>">
								<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'neom-blog' ); ?></span>
								<input type="search" class="search-field header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'neom-blog' ); ?>" name="s" id="popfocus" value="" autofocus>
								<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
							</form>
							<button type="button" class="close-style header-search-close"></button>
						</div>
					</div>
				</li>
			<?php
		endif;
	}
endif;
add_action( 'neom_navigation_search', 'neom_navigation_search' );

// neom Navigation Cart.
if ( ! function_exists( 'neom_navigation_cart' ) ) :
	function neom_navigation_cart() {
		$neom_cart_icon_enabled = get_theme_mod( 'neom_cart_icon_enabled', true );
		if ( $neom_cart_icon_enabled == true && class_exists( 'WooCommerce' ) ) :
			?>
		<li class="cart-wrapper">
			<a href="javascript:void(0);" class="cart-icon-wrap" id="cart" title="View your shopping cart">
				<i class="fa fa-shopping-bag"></i>
				<?php
				if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
					$count    = WC()->cart->cart_contents_count;
					$cart_url = wc_get_cart_url();

					if ( $count > 0 ) {
						?>
							<span><?php echo esc_html( $count ); ?></span>
						<?php
					} else {
						?>
							<span><?php echo esc_html_e( '0', 'neom-blog' ); ?></span>
							<?php
					}
				}
				?>
			</a>
			<!-- Shopping Cart Start -->
			<div class="shopping-cart">
				<?php get_template_part( 'woocommerce/cart/mini', 'cart' ); ?>
			</div>
			<!-- Shopping Cart End -->
		</li>
			<?php
	endif;
	}
endif;
add_action( 'neom_navigation_cart', 'neom_navigation_cart' );

/**
 * Add WooCommerce Cart Icon With Cart Count (https://isabelcastillo.com/woocommerce-cart-icon-count-theme-header)
 */
function neom_add_to_cart_fragment( $fragments ) {

	ob_start();
	$count = WC()->cart->cart_contents_count;
	?>

	<a href="javascript:void(0);" class="cart-icon-wrap" id="cart" title="View your shopping cart">
	<i class="fa fa-shopping-bag"></i>	
	<?php
	if ( $count > 0 ) {
		?>
		<span><?php echo esc_html( $count ); ?></span>
		<?php
	} else {
		?>

		<span><?php echo esc_html_e( '0', 'neom-blog' ); ?></span>
		<?php
	}
	?>
	</a>
	<?php

	$fragments['a.cart-icon-wrap'] = ob_get_clean();

	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'neom_add_to_cart_fragment' );
