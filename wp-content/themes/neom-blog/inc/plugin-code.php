<?php
/**
 * Admin notice
 */
class neom_screen {
	public function __construct() {
		/* notice  Lines*/
		add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
		add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
		add_action( 'load-themes.php', array( $this, 'neom_activation_admin_notice' ) );
	}
	public function neom_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ( 'themes.php' == $pagenow ) ) {
			add_action( 'admin_notices', array( $this, 'neom_admin_notice' ), 99 );
		}
	}
	/**
	 * Display an admin notice linking to the welcome screen
	 *
	 * @sfunctionse 1.8.2.4
	 */
	public function neom_admin_notice() {
		if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) ) { ?>
			<div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
					<?php
						echo '<div><a href="' . esc_url( wp_nonce_url( add_query_arg( 'gs-notice-dismissed', 'dismiss_admin_notices' ) ) ) . '" class="getting-started-notice-dismiss"> Dismiss this notice </a></div>';
					?>
					<div class="neom-getting-started-notice clearfix">
						<div class="neom-theme-screenshot">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'neom-blog' ); ?>" />
						</div><!-- /.neom-theme-screenshot -->
						<div class="neom-theme-notice-content">
							<h2 class="neom-notice-h2">
								<?php
								printf(
								/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
									esc_html__( 'Welcome! Thank you for choosing %1$s!', 'neom-blog' ),
									'<strong>' . wp_get_theme()->get( 'Name' ) . '</strong>'
								);
								?>
							</h2>

							<p class="plugin-install-notice"><?php echo sprintf( __( 'To take full advantage of all the features of this theme, please install and activate the <strong>Awp Companion</strong> plugin, then enjoy this theme.', 'neom-blog' ) ); ?></p>

							<a class="neom-btn-get-started button button-primary button-hero neom-button-padding" href="#" data-name="" data-slug="">
							<?php
							printf(
							/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
								esc_html__( 'Get started with %1$s', 'neom-blog' ),
								'<strong>' . wp_get_theme()->get( 'Name' ) . '</strong>'
							);
							?>

							</a><span class="neom-push-down">
							<?php
								/* translators: %1$s: Anchor link start %2$s: Anchor link end */
								printf(
									'or %1$sCustomize theme%2$s</a></span>',
									'<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
									'</a>'
								);
							?>
						</div><!-- /.neom-theme-notice-content -->
					</div>
				</div>
			<?php
		}
	}

	/**
	 * Register dismissal of the getting started notification.
	 * Acts on the dismiss link.
	 * If clicked, the admin notice disappears and will no longer be visible to this user.
	 */
	public function getting_started_notice_dismissed() {

		if ( isset( $_GET['gs-notice-dismissed'] ) ) {
			add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
		}
	}

	/**
	 * Deletes the getting started notice's dismiss status upon theme switch.
	 */
	public function flush_dismiss_status() {
		delete_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
	}

}
$GLOBALS['neom_screen'] = new neom_screen();

/**
* Plugin installer
*/

add_action( 'wp_ajax_install_act_plugin', 'neom_admin_install_plugin' );

function neom_admin_install_plugin() {
	/**
	 * Install Plugin.
	 */
	include_once ABSPATH . '/wp-admin/includes/file.php';
	include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
	include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

	if ( ! file_exists( WP_PLUGIN_DIR . '/one-click-demo-import' ) ) {
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( 'one-click-demo-import' ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );
	}
	if ( ! file_exists( WP_PLUGIN_DIR . '/awp-companion' ) ) {
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( 'awp-companion' ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );
	}

	// Activate plugin.
	if ( current_user_can( 'activate_plugin' ) ) {
		$result = activate_plugin( 'one-click-demo-import/one-click-demo-import.php' );
		$result = activate_plugin( 'awp-companion/awp-companion.php' );
	}

}
