<?php
/*
 *
 * Social Icon
 */

function neom_get_social_icon_default() {
	return apply_filters(
		'neom_get_social_icon_default',
		json_encode(
			array(
				array(
					'icon_value' => esc_html__( 'fa-facebook', 'neom-blog' ),
					'link'       => esc_html__( '#', 'neom-blog' ),
					'id'         => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value' => esc_html__( 'fa-twitter', 'neom-blog' ),
					'link'       => esc_html__( '#', 'neom-blog' ),
					'id'         => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value' => esc_html__( 'fa-linkedin', 'neom-blog' ),
					'link'       => esc_html__( '#', 'neom-blog' ),
					'id'         => 'customizer_repeater_header_social_004',
				),
			)
		)
	);
}
