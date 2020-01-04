<?php
if ( !defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = [
    'promo_title'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Promo Title', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter promo title text', 'mebel-laim' )
    ],

    'promo_text'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Promo Text', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter promo text', 'mebel-laim' )
    ],

    'promo_background_image' => [
        'type'          => 'upload',
        'label'         => esc_html__( 'Promo Background Image', 'mebel-laim' ),
        'desc'          => esc_html__( 'Please upload background image or choose existing from library', 'mebel-laim' ),
        'images_only'   => true
    ],

    'promo_background_color'    => [
        'type'  => 'color-picker',
        'value' => '#f9f9f9',
        'label' => esc_html__( 'Promo Background Color', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please choose color from pallete or enter its value in HEX', 'mebel-laim' )
    ],

    'promo_button_link'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Button Link', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please paste link to product/post/page/other', 'mebel-laim' )
    ],

    'promo_button_text'  => [
        'type'  => 'text',
        'label' => esc_html__( 'Button Text', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please enter promo link button text', 'mebel-laim' )
    ],

    'open_in_a_new_tab' => [
        'type'  => 'switch',
        'value' => 'yes',
        'label' => esc_html__( 'Open In A New Tab?', 'mebel-laim' ),
        'desc'  => esc_html__( 'Please select "Yes" if you want to open promo source in a new tab', 'mebel-laim' ),
        'left-choice' => [
            'value' => 'yes',
            'label' => esc_html__( 'Yes', 'mebel-laim' )
        ],
        'right-choice' => [
            'value' => 'no',
            'label' => esc_html__( 'No', 'mebel-laim' )
        ]
    ]
];