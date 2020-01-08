<?php
if ( !defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = [
    [
        'type'      => 'tab',
        'title'     => esc_html__( 'General Settings', 'mebel-laim' ),
        'options'   => [
            'promo_is_full_width'  => [
                'type'  => 'switch',
                'label' => esc_html__( 'Full Width?', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please choose "Yes" to make promo block full-width', 'mebel-laim' )
            ],

            'promo_padding_vertical'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Block Vertical Padding (px)', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo block vertical padding value in pixels', 'mebel-laim' )
            ],

            'promo_padding_horizontal'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Block Horizontal Padding (px)', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo block horizontal padding value in pixels', 'mebel-laim' )
            ],

            'promo_background_image' => [
                'type'          => 'upload',
                'label'         => esc_html__( 'Promo Background Image', 'mebel-laim' ),
                'desc'          => esc_html__( 'Please upload background image or choose existing from library', 'mebel-laim' ),
                'images_only'   => true,
                'sizes'         => ['thumbnail', 'medium', 'large', 'full']
            ],

            'background_image_quality' => [
                'type'      => 'radio',
                'value'     => 'full',
                'label'     => esc_html__( 'Background Image Quality', 'mebel-laim' ),
                'desc'      => esc_html__( 'Please choose the quality of background image', 'mebel-laim' ),
                'inline'    => false,
                'choices'   => [
                    'thumbnail' => esc_html__( 'Thumbnail (150x150)', 'mebel-laim' ),
                    'medium'    => esc_html__( 'Medium (300x300)', 'mebel-laim' ),
                    'large'     => esc_html__( 'Large (1024x1024)', 'mebel-laim' ),
                    'full'      => esc_html__( 'Full', 'mebel-laim' )
                ]
            ],

            'is_background_image_fixed'  => [
                'type'  => 'switch',
                'label' => esc_html__( 'Fixed Background Image?', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please choose "Yes" to make background image fixed', 'mebel-laim' )
            ],

            'is_overlay' => [
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'value' => [
                    'choice'    => 'yes'
                ],

                'picker'    => [
                    'choice'    => [
                        'type'      => 'select',
                        'label'     => esc_html__( 'Add Background Image Overlay?', 'mebel-laim' ),
                        'desc'      => esc_html__( 'Please choose if background image has overlay', 'mebel-laim' ),
                        'choices'   => [
                            'yes'   => esc_html__( 'Yes', 'mebel-laim' ),
                            'no'    => esc_html__( 'No', 'mebel-laim')
                        ]
                    ]
                ],

                'choices'   => [
                    'yes'   => [
                        'overlay_color'     => [
                            'type'  => 'color-picker',
                            'label' => esc_html__( 'Background Overlay Color', 'mebel-laim' ),
                            'desc'  => esc_html__( 'Please choose color or write its value in HEX', 'mebel-laim' ),
                            'value' => '#fff'
                        ],

                        'overlay_opacity'   => [
                            'type'          => 'slider',
                            'label'         => esc_html__( 'Overlay Opacity', 'mebel-laim' ),
                            'desc'          => esc_html__( 'Please select the overlay opacity (0 - min color, 1 - max color)', 'mebel-laim' ),
                            'value'         => 0.5,
                            'properties'    => [
                                'min'   => 0,
                                'max'   => 1,
                                'step'  => 0.05
                            ]
                        ]
                    ]
                ],
                'show_borders'  => false
            ],

            'promo_background_color'    => [
                'type'  => 'color-picker',
                'value' => '#f9f9f9',
                'label' => esc_html__( 'Promo Background Color', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please choose color from pallete or enter its value in HEX', 'mebel-laim' )
            ]
        ]
    ],

    [
        'type'      => 'tab',
        'title'     => esc_html__( 'Title', 'mebel-laim' ),
        'options'   => [
            'promo_title'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Promo Title', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo title text', 'mebel-laim' )
            ],

            'promo_title_size'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Promo Title Size (px)', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo title size value in pixels', 'mebel-laim' )
            ],

            'promo_title_position' => [
                'type'      => 'radio',
                'value'     => 'left',
                'label'     => esc_html__( 'Promo Title Position', 'mebel-laim' ),
                'desc'      => esc_html__( 'Please choose side where title will be placed', 'mebel-laim' ),
                'inline'    => true,
                'choices'   => [
                    'left'      => esc_html__( 'Left', 'mebel-laim' ),
                    'center'    => esc_html__( 'Center', 'mebel-laim' ),
                    'right'     => esc_html__( 'Right', 'mebel-laim' )
                ]
            ],

            'promo_title_margin'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Promo Title Margin Bottom (px)', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo title margin bottom value in pixels', 'mebel-laim' )
            ],

            'promo_title_color'    => [
                'type'  => 'color-picker',
                'value' => '#f9f9f9',
                'label' => esc_html__( 'Promo Title Color', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please choose color from pallete or enter its value in HEX', 'mebel-laim' )
            ]
        ]
    ],

    [
        'type'      => 'tab',
        'title'     => esc_html__( 'Text', 'mebel-laim' ),
        'options'   => [
            'promo_text'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Promo Text', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo text', 'mebel-laim' )
            ],

            'promo_text_size'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Promo Text Size (px)', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo text size value in pixels', 'mebel-laim' )
            ],

            'promo_text_position' => [
                'type'      => 'radio',
                'value'     => 'left',
                'label'     => esc_html__( 'Promo Text Position', 'mebel-laim' ),
                'desc'      => esc_html__( 'Please choose side where text will be placed', 'mebel-laim' ),
                'inline'    => true,
                'choices'   => [
                    'left'      => esc_html__( 'Left', 'mebel-laim' ),
                    'center'    => esc_html__( 'Center', 'mebel-laim' ),
                    'right'     => esc_html__( 'Right', 'mebel-laim' )
                ]
            ],

            'promo_text_color'    => [
                'type'  => 'color-picker',
                'value' => '#f9f9f9',
                'label' => esc_html__( 'Promo Text Color', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please choose color from pallete or enter its value in HEX', 'mebel-laim' )
            ]
        ]
    ],

    [
        'type'      => 'tab',
        'title'     => esc_html__( 'Button', 'mebel-laim' ),
        'options'   => [
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

            'promo_button_position' => [
                'type'      => 'radio',
                'value'     => 'left',
                'label'     => esc_html__( 'Promo Button Position', 'mebel-laim' ),
                'desc'      => esc_html__( 'Please choose side where button will be placed', 'mebel-laim' ),
                'inline'    => true,
                'choices'   => [
                    'left'      => esc_html__( 'Left', 'mebel-laim' ),
                    'center'    => esc_html__( 'Center', 'mebel-laim' ),
                    'right'     => esc_html__( 'Right', 'mebel-laim' )
                ]
            ],

            'promo_button_margin'  => [
                'type'  => 'text',
                'label' => esc_html__( 'Button Margin Top (px)', 'mebel-laim' ),
                'desc'  => esc_html__( 'Please enter promo button margin top value in pixels', 'mebel-laim' )
            ],

            'open_in_a_new_tab' => [
                'type'          => 'switch',
                'value'         => 'yes',
                'label'         => esc_html__( 'Open In A New Tab?', 'mebel-laim' ),
                'desc'          => esc_html__( 'Please select "Yes" if you want to open promo source in a new tab', 'mebel-laim' ),
                'left-choice'   => [
                    'value' => 'yes',
                    'label' => esc_html__( 'Yes', 'mebel-laim' )
                ],
                'right-choice'  => [
                    'value' => 'no',
                    'label' => esc_html__( 'No', 'mebel-laim' )
                ]
            ]
        ]
    ]
];