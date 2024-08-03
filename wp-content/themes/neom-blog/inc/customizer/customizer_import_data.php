<?php
class neom_import_dummy_data {

	private static $instance;

	public static function init() {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof neom_import_dummy_data ) ) {
			self::$instance = new neom_import_dummy_data();
			self::$instance->neom_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */


	/**
	 * Setup the actions used for this class.
	 */
	public function neom_setup_actions() {

		// Enqueue scripts.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'neom_import_customize_scripts' ), 0 );

	}



	public function neom_import_customize_scripts() {

		wp_enqueue_script( 'neom-import-customizer-js', get_template_directory_uri() . '/assets/js/neom-import-customizer.js', array( 'customize-controls' ) );
	}
}

$neom_import_customizers = array(

	'import_data' => array(
		'recommended' => true,

	),
);
neom_import_dummy_data::init( apply_filters( 'neom_import_customizer', $neom_import_customizers ) );
