<?php
	// 1. Footer active callback.
function neom_menu_btn_icon( $control ) {
	return true === ( $control->manager->get_setting( 'neom_menu_btn_sh' )->value() == true );
}
function neom_menu_btn_text( $control ) {
	return true === ( $control->manager->get_setting( 'neom_menu_btn_sh' )->value() == true );
}
function neom_menu_btn_link( $control ) {
	return true === ( $control->manager->get_setting( 'neom_menu_btn_sh' )->value() == true );
}
