	<div class="footer-one">
		<?php do_action( 'neom_above_footer' ); ?>
	</div>
	</div>
	<!--===// Start: Footer =================================-->
		<footer id="footer-section" class="footer-one footer-section">
			<?php
				$neom_footer_container_size  = get_theme_mod( 'neom_footer_container_size', 'container-full' );
				$neom_footer_column_layout   = get_theme_mod( 'neom_footer_column_layout', 'theme-column-4' );
				$neom_footer_widgets_enabled = get_theme_mod( 'neom_footer_widgets_enabled', true );
			if ( true === $neom_footer_widgets_enabled ) {
				if ( is_active_sidebar( 'neom-footer-1' ) || is_active_sidebar( 'neom-footer-2' ) || is_active_sidebar( 'neom-footer-3' ) || is_active_sidebar( 'neom-footer-4' ) ) {
					?>
					<div class="footer-primary">
						<div class="<?php echo esc_attr( $neom_footer_container_size ); ?>">
							<div class="theme-columns-area">
								<?php if ( is_active_sidebar( 'neom-footer-1' ) ) : ?>
										<div class="<?php echo esc_attr( $neom_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4 pr-md-5">
											<?php dynamic_sidebar( 'neom-footer-1' ); ?>
										</div>
									<?php endif; ?>
								<?php if ( is_active_sidebar( 'neom-footer-2' ) ) : ?>
										<div class="<?php echo esc_attr( $neom_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4 pl-md-5">
											<?php dynamic_sidebar( 'neom-footer-2' ); ?>
										</div>
									<?php endif; ?>
								<?php if ( is_active_sidebar( 'neom-footer-3' ) ) : ?>
										<div class="<?php echo esc_attr( $neom_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4">
											<?php dynamic_sidebar( 'neom-footer-3' ); ?>
										</div>
									<?php endif; ?>
								<?php if ( is_active_sidebar( 'neom-footer-4' ) ) : ?>
										<div class="<?php echo esc_attr( $neom_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4">
											<?php dynamic_sidebar( 'neom-footer-4' ); ?>
										</div>
									<?php endif; ?>
							</div>	       
						</div>
					</div>

					<?php
				}
			}

			$neom_footer_copright_enabled = get_theme_mod( 'neom_footer_copright_enabled', true );
			if ( $neom_footer_copright_enabled === true ) {
				$neom_footer_copyright_text = get_theme_mod( 'neom_footer_copyright_text', 'Copyright &copy; [current_year] [site_title] | Powered by [theme_author]' );
				?>
					<div class="footer-copyright">
						<div class="container-full">
							<div class="theme-columns-area">
							<?php if ( ! empty( $neom_footer_copyright_text ) ) { ?>
									<div class="theme-column-12 av-md-column-12 text-center">
										<div class="widget-right">                          
											<?php
												$neom_copyright_allowed_tags = array(
													'[current_year]' => date_i18n( 'Y' ),
													'[site_title]' => get_bloginfo( 'name' ),
													'[theme_author]' => sprintf( __( '<a href="https://awplife.com/" target="_blank"> Neom </a>', 'neom-blog' ) ),
												);
												?>

											<div class="copyright-text">
												<?php
													echo wp_kses_post( apply_filters( 'neom_footer_copyright', neom_str_replace_assoc( $neom_copyright_allowed_tags, $neom_footer_copyright_text ) ) );
												?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
			}
			?>
		</footer>
		<!-- End: Footer
		=================================-->

		<!-- Go To Top -->
		<?php
			$neom_goto_top_icon_enabled = get_theme_mod( 'neom_goto_top_icon_enabled', true );
		if ( $neom_goto_top_icon_enabled == true ) :
			?>
			<button type=button class="scrollup">
				<i class="fa fa-arrow-up"></i>
			</button>
		<?php endif; ?>
	</div>
	<?php
	wp_footer();

	?>

</body>
</html>
