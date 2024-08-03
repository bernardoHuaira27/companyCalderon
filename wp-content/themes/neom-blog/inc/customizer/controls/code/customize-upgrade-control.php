<?php
/** 
 * Customize Heading control class.
 *
 * @package neom
 * 
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class neom_Customize_Upgrade_Control
 */
class neom_Customize_Upgrade_Control extends neom_Customize_Base_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'neom-upgrade';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		$upgrade_to_pro_link = 'https://awplife.com/wordpress-themes/neom-premium/';
		?>

		<div class="neom-upgrade-pro-message" style="display:none;";>
			<# if ( data.label ) { #><h4 class="customize-control-title"><?php echo wp_kses_post( 'Upgrade to <a href="'.$upgrade_to_pro_link.'" target="_blank" > Neom Premium </a> to add more', 'neom-blog'); ?> {{{ data.label }}} <?php esc_html_e( 'and get the other premium features.', 'neom-blog') ?></h4><# } #>
		</div>

		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}