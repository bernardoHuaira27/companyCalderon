<?php
function neom_premium_setting( $wp_customize ) {
	$wp_customize->add_section(
		'upgrade_premium',
		array(
			'title'    => __( 'Upgrade to Pro', 'neom-blog' ),
			'priority' => 1,
		)
	);

	class Neom_WP_Button_Customize_Control extends WP_Customize_Control {
		public $type = 'upgrade_premium';

		function render_content() {
			?>
			<div class="premium_info">
				<ul>
					<li><a class="documentation" href="" target="_blank"><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'View Documentation', 'neom-blog' ); ?> </a></li>

					<li><a class="support" href="" target="_blank"><i class="dashicons dashicons-lightbulb"></i><?php esc_html_e( 'Get Support', 'neom-blog' ); ?> </a></li>

					<li><a class="free-pro" href="" target="_blank"><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Free Vs Pro', 'neom-blog' ); ?> </a></li>

					<li><a class="upgrade-to-pro" href="" target="_blank"><i class="dashicons dashicons-update-alt"></i><?php esc_html_e( 'Upgrade to Pro', 'neom-blog' ); ?> </a></li>

					<li><a class="show-love" href="" target="_blank"><i class="dashicons dashicons-smiley"></i><?php esc_html_e( 'Show Some Love', 'neom-blog' ); ?> </a></li>
				</ul>
			</div>
			<?php
		}
	}

	$wp_customize->add_setting(
		'upgrade_premium_buttons',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'neom_sanitize_text',
		)
	);

	$wp_customize->add_control(
		new Neom_WP_Button_Customize_Control(
			$wp_customize,
			'upgrade_premium_buttons',
			array(
				'section' => 'upgrade_premium',
			)
		)
	);
}
add_action( 'customize_register', 'neom_premium_setting' );
