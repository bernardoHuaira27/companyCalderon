<?php
/**
 * Place a cart icon with the number of items and total cost in the menu bar.
 *
 * @package neom
 */
add_filter( 'wp_nav_menu_items', 'neom_menucart', 10, 2 );
function neom_menucart( $menu, $args ) {
	if ( ! class_exists( 'WooCommerce' ) || 'primary' !== $args->theme_location ) {
		return $menu;
	}

	ob_start();
	global $woocommerce;

	$cart_url            = esc_url( wc_get_cart_url() );
	$shop_page_url       = esc_url( get_permalink( wc_get_page_id( 'shop' ) ) );
	$cart_contents_count = $woocommerce->cart->cart_contents_count;
	$cart_contents       = sprintf( _n( '%d item', '%d items', $cart_contents_count, 'neom-blog' ), $cart_contents_count );
	$cart_total          = esc_html( $woocommerce->cart->get_cart_total() );

	if ( $cart_contents_count == 0 ) {
		$menu_item = '<div class="shopping-cart"><a class="wcmenucart-contents cart-icon" href="' . $shop_page_url . '" title="' . esc_attr__( 'Start shopping', 'neom-blog' ) . '">';
	} else {
		$menu_item = '<div class="shopping-cart"><a class="wcmenucart-contents cart-icon" href="' . $cart_url . '" title="' . esc_attr__( 'View your Shopping Cart', 'neom-blog' ) . '">';
	}

	$menu_item .= '<i class="fas fa-bag-shopping cart-icon-pos" aria-hidden="true"></i></a>';

	if ( $cart_contents_count > 0 ) {
		$menu_item .= '<a href="' . $cart_url . '" class="cart-total">' . esc_html( $cart_contents_count ) . '</a>';
	}

	$menu_item .= '</div>';

	$neom_cart_icon_enabled = get_theme_mod( 'neom_cart_icon_enabled', true );

	if ( $neom_cart_icon_enabled ) {
		echo wp_kses(
			$menu_item,
			array(
				'div' => array( 'class' => array() ),
				'a'   => array(
					'href'  => array(),
					'class' => array(),
				),
				'i'   => array( 'class' => array() ),
			)
		);
	}

	$social = ob_get_clean();
	return $menu . $social;
}

