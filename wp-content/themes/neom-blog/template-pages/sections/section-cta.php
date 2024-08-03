<?php
	$neom_cta_hs            = get_theme_mod( 'cta_hs', '1' );
	$neom_cta_call_icon     = get_theme_mod( 'cta_call_icon', 'fa-user' );
	$neom_cta_call_title    = get_theme_mod( 'cta_call_title', 'Call Us:' );
	$neom_cta_call_text     = get_theme_mod( 'cta_call_text', '<a href="#">+(01) 335 2565</a>' );
	$neom_cta_right_icon    = get_theme_mod( 'cta_right_icon', 'fa-phone' );
	$neom_cta_title         = get_theme_mod( 'cta_title', 'Professional and Dedicated Consulting Services' );
	$neom_cta_description   = get_theme_mod( 'cta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.' );
	$neom_cta_btn_icon      = get_theme_mod( 'cta_btn_icon', 'fa-arrow-right' );
	$neom_cta_btn_lbl       = get_theme_mod( 'cta_btn_lbl', 'Apply Now' );
	$neom_cta_btn_link      = get_theme_mod( 'cta_btn_link' );
	$neom_cta_effect_enable = get_theme_mod( 'cta_effect_enable', '1' );
if ( $neom_cta_hs == '1' ) {
	?>
<section id="cta-section" class="cta-section home-cta 
	<?php
	if ( $neom_cta_effect_enable == '1' ) :
		echo esc_attr_e( 'cta-effect-active', 'neom-blog' );
endif;
	?>
">
	<div class="cta-overlay">
		<div class="container-full">
			<div class="theme-columns-area">
				<div class="theme-column-5 my-auto">
					<div class="call-wrapper">
					<?php if ( ! empty( $neom_cta_call_icon ) ) : ?>
							<div class="call-icon-box"><i class="fa <?php echo esc_attr( $neom_cta_call_icon ); ?>"></i></div>
						<?php endif; ?>
					<?php if ( ! empty( $neom_cta_call_title ) || ! empty( $neom_cta_call_text ) ) : ?>
							<div class="cta-info">
								<div class="call-title"><?php echo wp_kses_post( $neom_cta_call_title ); ?></div>
								<div class="call-phone"><?php echo wp_kses_post( $neom_cta_call_text ); ?></div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="theme-column-7 my-auto">
					<div class="cta-content-wrap">
						<div class="cta-content">
						<?php if ( ! empty( $neom_cta_right_icon ) ) : ?>
								<span class="cta-icon-wrap"><i class="fa <?php echo esc_attr( $neom_cta_right_icon ); ?>"></i></span>
							<?php endif; ?>
						<?php if ( ! empty( $neom_cta_title ) ) : ?>
								<h4><?php echo wp_kses_post( $neom_cta_title ); ?></h4>
							<?php endif; ?>
						<?php if ( ! empty( $neom_cta_description ) ) : ?>
								<p><?php echo wp_kses_post( $neom_cta_description ); ?></p>
							<?php endif; ?>
						</div>

					<?php if ( ! empty( $neom_cta_btn_lbl ) || ! empty( $neom_cta_btn_icon ) ) : ?>
							<div class="cta-btn">
								<a href="<?php echo esc_url( $neom_cta_btn_link ); ?>" class="awp-btn awp-btn-primary awp-btn-bubble"><?php echo esc_html( $neom_cta_btn_lbl ); ?> <i class="fa <?php echo esc_attr( $neom_cta_btn_icon ); ?>"></i></a>
							</div>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
