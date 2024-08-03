<?php
if ( ! function_exists( 'neom_above_header' ) ) :
	function neom_above_header() {
		$hide_show_social_icon   = get_theme_mod( 'hide_show_social_icon', true );
		$hide_show_cntct_details = get_theme_mod( 'hide_show_cntct_details', true );
		$hide_show_email_details = get_theme_mod( 'hide_show_email_details', true );
		$hide_show_mbl_details   = get_theme_mod( 'hide_show_mbl_details', true );
		if ( true === $hide_show_social_icon || true === $hide_show_cntct_details || true === $hide_show_email_details || true === $hide_show_mbl_details ) :
			?>
			<div id="above-header" class="header-above-info awp-theme-block theme-d-none">
				<div class="header-widget">
					<div class="container-full">
						<div class="theme-columns-area">
							<div class="theme-column-6">
								<div class="widget-left text-av-left text-center">                                
									<?php
										$neom_contact_detail_disable = get_theme_mod( 'neom_contact_detail_disable', true );
										$neom_contact_detail_icon    = get_theme_mod( 'neom_contact_detail_icon', 'fa-user' );
										$neom_contact_detail_text    = get_theme_mod( 'neom_contact_detail_text', '24x7 Support' );
										$neom_contact_detail_link    = get_theme_mod( 'neom_contact_detail_link' );
									if ( true === $neom_contact_detail_disable ) {
										?>
												<aside class="widget widget-contact wgt-1">
													<div class="contact-area">
													<?php if ( ! empty( $neom_contact_detail_icon ) ) : ?>
															<div class="contact-icon">
																<i class="fa <?php echo esc_attr( $neom_contact_detail_icon ); ?>"></i>
															</div>
														<?php endif; ?>
														<a href="<?php echo esc_url( $neom_contact_detail_link ); ?>" class="contact-info">
															<span class="title contact"><?php echo esc_html( $neom_contact_detail_text ); ?></span>
														</a>
													</div>
												</aside>
											<?php
									}
										$neom_email_detail_disable = get_theme_mod( 'neom_email_detail_disable', true );
										$neom_email_detail_icon    = get_theme_mod( 'neom_email_detail_icon', 'fa-envelope-o' );
										$neom_email_detail_text    = get_theme_mod( 'neom_email_detail_text', 'Email: mail@example.com' );
										$neom_email_detail_link    = get_theme_mod( 'neom_email_detail_link' );
									?>
										<?php if ( true == $neom_email_detail_disable ) { ?>
												<aside class="widget widget-contact wgt-2">
													<div class="contact-area">
														<?php if ( ! empty( $neom_email_detail_icon ) ) : ?>
															<div class="contact-icon">
																<i class="fa <?php echo esc_attr( $neom_email_detail_icon ); ?>"></i>
															</div>
														<?php endif; ?>	
														<a href="<?php echo esc_url( $neom_email_detail_link ); ?>" class="contact-info">
															<span class="title email"><?php echo esc_html( $neom_email_detail_text ); ?></span>
														</a>
													</div>
												</aside>
											<?php
										}
											$neom_mobile_detail_disable = get_theme_mod( 'neom_mobile_detail_disable', true );
											$neom_mobile_detail_icon    = get_theme_mod( 'neom_mobile_detail_icon', 'fa-phone' );
											$neom_mobile_detail_text    = get_theme_mod( 'neom_mobile_detail_text', 'Call Us +(21) 1234 5678' );
											$neom_mobile_detail_link    = get_theme_mod( 'neom_mobile_detail_link' );
										?>
										<?php if ( true === $neom_mobile_detail_disable ) { ?>
											<aside class="widget widget-contact wgt-3">
												<div class="contact-area">
													<?php if ( ! empty( $neom_mobile_detail_icon ) ) : ?>
														<div class="contact-icon">
															<i class="fa <?php echo esc_attr( $neom_mobile_detail_icon ); ?>"></i>
														</div>
													<?php endif; ?>	
													<a href="<?php echo esc_url( $neom_mobile_detail_link ); ?>" class="contact-info">
														<span class="title mobile"><?php echo esc_html( $neom_mobile_detail_text ); ?></span>
													</a>
												</div>
											</aside>
										<?php } ?>
								</div>
							</div>
							<div class="theme-column-6">
								<div class="widget-right text-av-right text-center">
									<?php
										// above_header_first.
										$neom_topbar_icon_disable = get_theme_mod( 'neom_topbar_icon_disable', true );
										$neom_topbar_social_icons = get_theme_mod( 'neom_topbar_social_icons', neom_get_social_icon_default() );

									if ( true === $neom_topbar_icon_disable ) {
										?>
											<aside class="widget widget_social_widget">
												<ul>
													<?php
													$neom_topbar_social_icons = json_decode( $neom_topbar_social_icons );
													if ( $neom_topbar_social_icons != '' ) {
														foreach ( $neom_topbar_social_icons as $social_item ) {
															$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'neom_translate_single_string', $social_item->icon_value, 'Header section' ) : '';
															$social_link = ! empty( $social_item->link ) ? apply_filters( 'neom_translate_single_string', $social_item->link, 'Header section' ) : '';
															?>
														<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
															<?php
														}
													}
													?>
												</ul>
											</aside>
											<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif;
	} endif;
add_action( 'neom_above_header', 'neom_above_header' );
?>
