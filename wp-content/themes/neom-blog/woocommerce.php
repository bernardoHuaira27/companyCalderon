<?php
/**
 * Woocommerce.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package neom
 */

get_header();
?>
<!-- Woo & Sidebar Section -->
<section id="product" class="theme-default">
		<div class="container-full">
			<div class="theme-columns-area">
			<!--Woo Detail-->
			<?php if ( ! is_active_sidebar( 'neom-woocommerce-sidebar' ) ) { ?>
				<div id="awp-main-content" class="theme-column-12 wow fadeInUp">
			<?php } else { ?>	
				<div id="awp-main-content" class="theme-column-8 wow fadeInUp">
				<?php
			}
				woocommerce_content();
			?>
			</div>
			<!--/End of Woo Detail-->
			<?php get_sidebar( 'woocommerce' ); ?>
		</div>
	</div>
</section>
<!-- End of Woo & Sidebar Section -->

<?php get_footer(); ?>
