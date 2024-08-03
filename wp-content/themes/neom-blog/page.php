<?php
/**
 * Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package neom
 */

get_header();
?>
<section id="post-section" class="post-section theme-default">
	<div class="container-full">
		<div class="theme-columns-area">

			<?php
			if ( class_exists( 'WooCommerce' ) ) {

				if ( is_account_page() || is_cart() || is_checkout() ) {
					echo '<div id="awp-main-content" class="theme-column-' . esc_attr( ! is_active_sidebar( 'neom-woocommerce-sidebar' ) ? '12' : '8' ) . '">';
				} else {

					echo '<div id="awp-main-content" class="theme-column-' . esc_attr( ! is_active_sidebar( 'neom-sidebar-primary' ) ? '12' : '8' ) . '">';

				}
			} else {
				echo '<div id="awp-main-content" class="theme-column-' . esc_attr( ! is_active_sidebar( 'neom-sidebar-primary' ) ? '12' : '8' ) . ' ">';
			}
			if ( have_posts() ) :
				the_post();

				the_content();
			endif;

			if ( comments_open() ) {
				comments_template( '', true );
			}
			?>
			</div>
			<?php
			if ( class_exists( 'WooCommerce' ) ) {
				if ( is_account_page() || is_cart() || is_checkout() ) {
					get_sidebar( 'woocommerce' );
				} else {
					get_sidebar();
				}
			} else {
				get_sidebar();
			}
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
