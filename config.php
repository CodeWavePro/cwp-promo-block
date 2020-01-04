<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = [];

$cfg['page_builder'] = [
	'title'					=> esc_html__( 'CWP Promo Block', 'mebel-laim' ),
	'description'			=> esc_html__( 'Adds promo block with image and link to some product/post/page.', 'mebel-laim' ),
	'tab'					=> esc_html__( 'Content Elements', 'mebel-laim' ),
	'icon' 					=> 'dashicons dashicons-megaphone',
	'disable_correction'	=> true
];