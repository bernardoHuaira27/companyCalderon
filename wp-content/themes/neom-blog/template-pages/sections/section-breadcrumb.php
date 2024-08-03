<?php
$neom_page_header_disabled = get_theme_mod( 'neom_page_header_disabled', true );
$neom_page_header_effect   = get_theme_mod( 'neom_page_header_effect', false );

if ( true === $neom_page_header_disabled ) { ?>
	<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left 
		<?php
		if ( true === $neom_page_header_effect ) :
			echo esc_attr( 'breadcrumb-effect-active' );
		endif;
		?>
		">

		<div class="container-full">
			<div class="theme-columns-area">
				<div class="theme-column-12">
					<div class="breadcrumb-content">
						<div class="breadcrumb-heading wow fadeInLeft">
							<h2>
								<?php
								if ( is_home() || is_front_page() ) :
									single_post_title();
								elseif ( is_day() ) :
									printf( esc_html__( 'Daily Archives: %s', 'neom-blog' ), get_the_date() );
								elseif ( is_month() ) :
									printf( esc_html__( 'Monthly Archives: %s', 'neom-blog' ), get_the_date( 'F Y' ) );
								elseif ( is_year() ) :
									printf( esc_html__( 'Yearly Archives: %s', 'neom-blog' ), get_the_date( 'Y' ) );
								elseif ( is_category() ) :
									printf( esc_html__( 'Category Archives: %s', 'neom-blog' ), single_cat_title( '', false ) );
								elseif ( is_tag() ) :
									printf( esc_html__( 'Tag Archives: %s', 'neom-blog' ), single_tag_title( '', false ) );
								elseif ( is_404() ) :
									esc_html_e( 'Error 404', 'neom-blog' );
								elseif ( is_author() ) :
									printf( esc_html__( 'Author: %s', 'neom-blog' ), get_the_author() );
								elseif ( class_exists( 'woocommerce' ) ) :
									if ( is_shop() ) {
										woocommerce_page_title();
									} elseif ( is_cart() || is_checkout() ) {
										the_title();
									} else {
										the_title();
									}
								else :
									the_title();
								endif;
								?>
							</h2> 
						</div>
						<ol class="breadcrumb-list wow fadeInRight">
							<?php
							if ( function_exists( 'neom_breadcrumbs' ) ) {
								neom_breadcrumbs();
							}
							?>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
