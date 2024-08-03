<?php

/*
 *
 * Footer Above Default
 */
function neom_get_footer_above_default() {
	return apply_filters(
		'neom_get_footer_above_default',
		json_encode(
			array(
				array(
					'icon_value' => 'fa-clock-o',
					'title'      => esc_html__( 'Mon-Fri 9am-6pm', 'neom-blog' ),
					'text'       => esc_html__( 'Mon-Sat: 8am-5pm', 'neom-blog' ),
					'link'       => esc_html__( '#', 'neom-blog' ),
					'id'         => 'customizer_repeater_footer_above_001',

				),
				array(
					'icon_value' => 'fa-envelope-o',
					'title'      => esc_html__( 'Support Mail', 'neom-blog' ),
					'text'       => esc_html__( 'Email: mail@example.com', 'neom-blog' ),
					'link'       => esc_html__( '#', 'neom-blog' ),
					'id'         => 'customizer_repeater_footer_above_002',

				),
				array(
					'icon_value' => 'fa-map-marker',
					'title'      => esc_html__( '380 St Klida Road', 'neom-blog' ),
					'text'       => esc_html__( 'Melbourne, Australia', 'neom-blog' ),
					'link'       => esc_html__( '#', 'neom-blog' ),
					'id'         => 'customizer_repeater_footer_above_003',

				),
			)
		)
	);
}
