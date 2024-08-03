<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<div class='loader-container'>
		<div class='loader'>
			<div class='loading-square'></div>
			<div class='loading-square'></div>
			<div class='loading-square'></div>
			<div class='loading-square'></div>
		</div>
	</div>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to Content', 'neom-blog' ); ?></a>

		<?php
			get_template_part( 'template-pages/sections/section', 'topbar' );

		if ( get_header_image() ) :
			?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-header" id="custom-header" rel="home">
					<img src="<?php esc_url( header_image() ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>">
				</a>
			<?php endif; ?>

			<!--===// Start: Header =================================-->
			<header id="header-section" class="header header-eight section-header-3">
				<!--===// Start: Header Above =================================-->
				<?php
				$neom_topbar_enabled = get_theme_mod( 'neom_topbar_enabled', true );
				if ( true === $neom_topbar_enabled ) {
					do_action( 'neom_above_header' );
				}
				?>
				<!--===// End: Above Header =================================-->
				<div class="navigator-wrapper">
					<!--===// Start: Mobile Toggle =================================-->
					<div class="theme-mobile-nav <?php echo esc_attr( neom_sticky_menu() ); ?>"> 
						<div class="<?php echo esc_attr( neom_menu_size() ); ?>">
							<div class="theme-columns-area">
								<div class="theme-column-12">
									<div class="theme-mobile-menu">
										<div class="mobile-logo">
											<div class="logo">
												<?php do_action( 'neom_logo_content' ); ?>
											</div>
										</div>
										<div class="menu-toggle-wrap">
											<div class="mobile-menu-right"><ul class="header-wrap-right"></ul></div>
											<div class="hamburger hamburger-menu">
												<button type="button" class="toggle-lines menu-toggle">
													<div class="top-bun"></div>
													<div class="meat"></div>
													<div class="bottom-bun"></div>
												</button>
											</div>
											<div class="headtop-mobi">
												<button type="button" class="header-above-toggle"><span></span></button>
											</div>
										</div>
										<div id="mobile-m" class="mobile-menu">
											<button type="button" class="header-close-menu close-style"></button>
										</div>
										<div id="mob-h-top" class="mobi-head-top"></div>
									</div>
								</div>
							</div>
						</div>        
					</div>
					<!--===// End: Mobile Toggle =================================-->        

					<!--===// Start: Navigation =================================-->
					<div class="nav-area theme-d-none awp-theme-block">
						<div class="navbar-area <?php echo esc_attr( neom_sticky_menu() ); ?>">
							<div class="<?php echo esc_attr( neom_menu_size() ); ?>">
								<div class="theme-columns-area">
									<div class="theme-column-3 my-auto">
										<div class="logo">
											<?php do_action( 'neom_logo_content' ); ?>
										</div>
									</div>
									<div class="theme-column-9 my-auto">
										<div class="theme-menu">
											<nav class="menubar">
												<?php do_action( 'neom_primary_navigation' ); ?>                        
											</nav>
											<div class="menu-right">
												<ul class="header-wrap-right">
													<?php
														$neom_cart_icon_enabled = get_theme_mod( 'neom_cart_icon_enabled', true );
													if ( true === $neom_cart_icon_enabled ) :
														do_action( 'neom_navigation_cart' );
														endif;
														$neom_serche_icon_sh = get_theme_mod( 'neom_serche_icon_sh', true );
													if ( true === $neom_serche_icon_sh ) :
														do_action( 'neom_navigation_search' );
														endif;
														$neom_menu_btn_sh = get_theme_mod( 'neom_menu_btn_sh', true );
													if ( true === $neom_menu_btn_sh ) :
														do_action( 'neom_navigation_button' );
														endif;
													?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--===// End:  Navigation =================================-->
				</div>
			</header>
			<!-- End: Header =================================-->

		<?php
		if ( ! is_page_template( 'page-templates/frontpage.php' ) ) {
			neom_breadcrumbs_style();
		}

			get_template_part( 'template-pages/sections/section', 'navigation' );
		?>

		<div id="content" class="neom-content">
