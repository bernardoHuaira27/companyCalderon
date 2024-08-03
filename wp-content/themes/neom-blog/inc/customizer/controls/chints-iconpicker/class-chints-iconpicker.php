<?php
/** Chints Iconpicker Control */
if ( class_exists( 'WP_Customize_Control' ) ) {
	class Chints_IconPicker_Control extends WP_Customize_Control {
		public $type = 'chints_iconpicker';


		// Enqueue custom scripts and styles.
		public function enqueue() {
			wp_enqueue_style( 'chints-iconpicker-fontawesome-css', get_template_directory_uri() . '/inc/customizer/controls/chints-iconpicker/fontawesome/fontawesome.css', array(), 6.0 );
			wp_enqueue_style( 'chints-iconpicker-fontawesome-solid-css', get_template_directory_uri() . '/inc/customizer/controls/chints-iconpicker/fontawesome/solid.css', array(), 6.0 );
			wp_enqueue_style( 'chints-iconpicker-fontawesome-brands-css', get_template_directory_uri() . '/inc/customizer/controls/chints-iconpicker/fontawesome/brands.css', array(), 6.0 );
			wp_enqueue_script( 'chints-iconpicker-control-js', get_template_directory_uri() . '/inc/customizer/controls/chints-iconpicker/js/chints-iconpicker-control.js', array( 'jquery' ), 1.0, true );
			wp_enqueue_style( 'chints-iconpicker-control-css', get_template_directory_uri() . '/inc/customizer/controls/chints-iconpicker/css/chints-iconpicker-control.css', array(), 1.0 );
		}
		/**
		 * Render display function.
		 */
		public function render_content() {
			$value = $this->value();
			?>
			<div class="social-repeater-general-control-icon" >
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="description customize-control-description">
					<?php
					echo sprintf(
						/* translators: %1$s is Fontawesome link */
						esc_html( 'Note: Some icons from fontawesome may not be displayed here. You can see the full list of icons at %1$s.' ),
						sprintf( '<a href="http://fontawesome.io/icons/" rel="nofollow" target="_blank">%s</a>', esc_html( 'http://fontawesome.io/icons/' ) )
					);
					?>
				</span>
				<div class="chints-input-group chints-icp-container">
				<input <?php $this->link(); ?> data-placement="bottomRight" class="chints-icp chints-icp-auto" value="<?php echo esc_attr( $this->value() ); ?>" type="text">
					<span class="chints-input-group-addon">
						<i class="<?php echo esc_attr( $value ); ?>"></i>
					</span>
				</div>
				<?php get_template_part( 'inc/customizer/controls/chints-iconpicker/icons' ); ?>
			</div>
			<?php
		}
	}
}
