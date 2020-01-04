<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Enqueue scripts and styles.
 */
if ( !is_admin() ) {
	$uri = fw_get_template_customizations_directory_uri( '/extensions/shortcodes/shortcodes/cwp-promo-block' );

	if ( !wp_style_is( 'fw-shortcode-cwp-promo-block-css', 'enqueued' ) ) {
		wp_enqueue_style(
		    'fw-shortcode-cwp-promo-block-css',
		    $uri . '/static/css/css/styles.min.css'
		);
	}
}