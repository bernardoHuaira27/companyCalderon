<?php
/**
 * Envato Elements:
 *
 * Elements Welcome Page UI.
 *
 * @package Envato/Envato_Elements
 * @since 2.0.0
 */

namespace Envato_Elements\Backend;

use Envato_Elements\Utils\Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Envato Elements Welcome Page UI.
 *
 * @since 2.0.0
 */
class Welcome extends Base{

	/**
	 * Registers our main "Elements" menu in the sidebar
	 */
	public function admin_menu() {

    	$svg_icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><path fill="black" d="M39.137058 70.157119c1.685122 0 3.051217-1.365967 3.051217-3.051217 0-1.685122-1.366095-3.051217-3.051217-3.051217-1.685121 0-3.051217 1.366095-3.051217 3.051217 0 1.68525 1.366096 3.051217 3.051217 3.051217zm17.560977-23.85614-17.212984 1.84103c-.321858.03862-.47635-.373356-.231738-.566471l16.852503-13.118945c1.094318-.901204 1.789532-2.291632 1.493422-3.785054-.296109-2.291632-2.188636-3.785054-4.570388-3.47607L34.721548 29.87333c-.321858.0515-.502099-.360481-.231738-.566471l18.139936-13.852782c3.579064-2.780856 3.875174-8.2524479.592219-11.4324082-2.986845-2.9868582-7.763223-2.8838635-10.737194.1029947L13.24716 33.864373c-1.094318 1.197313-1.596417 2.780856-1.287433 4.480268.502099 2.690736 3.17996 4.480268 5.870696 3.978169l15.758184-3.218583c.347607-.06437.527847.38623.231738.579345L16.337 50.871367c-2.188636 1.390428-3.17996 3.875175-2.484746 6.359921.695214 3.282955 3.978169 5.175482 7.158129 4.377273l26.134897-6.437166c.296109-.07725.514973.270361.321858.502099l-4.081164 5.033864c-1.094318 1.390428.695214 3.282955 2.188637 2.188637l13.42793-11.033304c2.381751-1.982647.798208-5.870696-2.291632-5.574586z"/></svg>';

		$page = add_menu_page(
			__( 'Envato Elements', 'envato-elements' ),
			__( 'Elements', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG,
			[ $this, 'admin_page_open' ],
			'data:image/svg+xml;base64,' . base64_encode($svg_icon),
			'58.6'
		);
		add_action( 'admin_print_scripts-' . $page, [ $this, 'admin_page_assets' ] );

		$submenu = add_submenu_page(
			ENVATO_ELEMENTS_SLUG,
			__( 'Envato Elements', 'envato-elements' ),
			__( 'Welcome', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG,
			[ $this, 'admin_page_open' ]
		);

		$submenu = add_submenu_page(
			ENVATO_ELEMENTS_SLUG,
			__( 'Template Kits', 'envato-elements' ),
			__( 'Template Kits', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG . '#/template-kits/premium-kits',
			[ $this, 'admin_page_open' ]
		);

		$submenu = add_submenu_page(
			ENVATO_ELEMENTS_SLUG,
			__( 'Free Kits', 'envato-elements' ),
			__( 'Free Kits', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG . '#/template-kits/free-kits',
			[ $this, 'admin_page_open' ]
		);

		$submenu = add_submenu_page(
			ENVATO_ELEMENTS_SLUG,
			__( 'Free Blocks', 'envato-elements' ),
			__( 'Free Blocks', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG . '#/template-kits/free-blocks',
			[ $this, 'admin_page_open' ]
		);

		$submenu = add_submenu_page(
			ENVATO_ELEMENTS_SLUG,
			__( 'Installed Kits', 'envato-elements' ),
			__( 'Installed Kits', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG . '#/template-kits/installed-kits',
			[ $this, 'admin_page_open' ]
		);

		$submenu = add_submenu_page(
			ENVATO_ELEMENTS_SLUG,
			__( 'Photos', 'envato-elements' ),
			__( 'Photos', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG . '#/photos',
			[ $this, 'admin_page_open' ]
		);

		$submenu = add_submenu_page(
			ENVATO_ELEMENTS_SLUG,
			__( 'Settings', 'envato-elements' ),
			__( 'Settings', 'envato-elements' ),
			'edit_posts',
			ENVATO_ELEMENTS_SLUG . '#/settings',
			[ $this, 'admin_page_open' ]
		);

	}

	/**
	 * Called when the plugin page is opened.
	 */
	public function admin_page_open(){
		?>
		<div id="envato-elements-app-holder"></div>
		<script type="text/javascript">
			jQuery(function(){
        var appHolder = document.getElementById( 'envato-elements-app-holder' );
        if (appHolder && 'undefined' !== typeof window.envatoElements) {
					window.envatoElements.initBackend( appHolder );
        }
      })
		</script>
		<?php
	}

	/**
	 * Assets required for the admin page to render correctly (i.e. all our react stuff)
	 */
	public function admin_page_assets(){
		wp_enqueue_style( 'envato-elements-admin', ENVATO_ELEMENTS_URI . 'assets/main.css', [], filemtime( ENVATO_ELEMENTS_DIR . 'assets/main.css' ) );
		wp_enqueue_script( 'envato-elements-admin', ENVATO_ELEMENTS_URI . 'assets/main.js', [], filemtime( ENVATO_ELEMENTS_DIR . 'assets/main.js' ), true );
	}

}
