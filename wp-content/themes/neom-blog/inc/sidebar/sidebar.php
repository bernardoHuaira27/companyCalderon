<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neom
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function neom_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Widget Area', 'neom-blog' ),
			'id'            => 'neom-sidebar-primary',
			'description'   => __( 'The Primary Widget Area', 'neom-blog' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title"><span></span>',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'neom-blog' ),
			'id'            => 'neom-footer-1',
			'description'   => __( 'The Footer Widget Area 1', 'neom-blog' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'neom-blog' ),
			'id'            => 'neom-footer-2',
			'description'   => __( 'The Footer Widget Area 2', 'neom-blog' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'neom-blog' ),
			'id'            => 'neom-footer-3',
			'description'   => __( 'The Footer Widget Area 3', 'neom-blog' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 4', 'neom-blog' ),
			'id'            => 'neom-footer-4',
			'description'   => __( 'The Footer Widget Area 4', 'neom-blog' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'WooCommerce Widget Area', 'neom-blog' ),
			'id'            => 'neom-woocommerce-sidebar',
			'description'   => __( 'This Widget area for WooCommerce Widget', 'neom-blog' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Info Widget Area', 'neom-blog' ),
			'id'            => 'neom-info-sidebar',
			'description'   => __( 'This Widget area for Info', 'neom-blog' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'neom_widgets_init' );

