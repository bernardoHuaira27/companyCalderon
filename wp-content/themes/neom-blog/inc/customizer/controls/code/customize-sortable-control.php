<?php
/**
 * Customize Sortable control class.
 *
 * @package neom
 *
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class neom_Customize_Sortable_Control
 */
class neom_Customize_Sortable_Control extends neom_Customize_Base_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'neom-sortable';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		?>

		<label class='neom-sortable'>
			<span class="customize-control-title">
				{{{ data.label }}}
			</span>
			<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>

			<ul class="sortable">
				<# _.each( data.value, function( choiceID ) { #>
				<li {{{ data.inputAttrs }}} class='neom-sortable-item' data-value='{{ choiceID }}'>
					<i class='dashicons dashicons-move'></i>
					<i class="dashicons dashicons-visibility visibility"></i>
					{{{ data.choices[ choiceID ] }}}
				</li>
				<# }); #>
				<# _.each( data.choices, function( choiceLabel, choiceID ) { #>
				<# if ( -1 === data.value.indexOf( choiceID ) ) { #>
				<li {{{ data.inputAttrs }}} class='neom-sortable-item invisible' data-value='{{ choiceID }}'>
					<i class='dashicons dashicons-move'></i>
					<i class="dashicons dashicons-visibility visibility"></i>
					{{{ data.choices[ choiceID ] }}}
				</li>
				<# } #>
				<# }); #>
			</ul>
		</label>

		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}
