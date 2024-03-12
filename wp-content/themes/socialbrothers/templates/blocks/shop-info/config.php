<?php

$prefix     = 'block_shop-info';
$block_data = [
    'key'    => $prefix,
    'fields' => [
        [
            'key'          => "{$prefix}_content_tab",
            'label'        => __('Content', '_SBB'),
            'name'         => 'content_tab',
            'type'         => 'accordion',
            'open'         => 1,
            'multi_expand' => 1,
        ],
        [
            'key'   => "{$prefix}_title",
            'label' => __('Titel', '_SBB'),
            'name'  => 'title',
            'type'  => 'text',
        ],
        'font-size' => [
            'key'          => "{$prefix}_title_size",
            'label'        => __('Titel formaat', '_SBB'),
            'name'         => 'title_size',
            'type'         => 'select',
            'instructions' => __('Selecteer het gewenste titel formaat', '_SBB'),
            'choices'      => [
                'text-2xl' => __('Klein', '_SBB'),
                'text-3xl' => __('Normaal', '_SBB'),
                'text-4xl' => __('Groot', '_SBB'),
                'text-5xl' => __('Extra groot', '_SBB'),
            ],
            'wrapper' => [
                'width' => '25%',
            ],
        ],
        [
            'key'          => "{$prefix}_content",
            'label'        => __('Tekst', '_SBB'),
            'name'         => 'content',
            'type'         => 'text',
            'toolbar'      => 'contentcenter',
            'tabs'         => 'visual',
            'media_upload' => false,
        ],
        [
            'key'          => "{$prefix}_buttons",
            'label'        => __('Knoppen', '_SBB'),
            'name'         => 'buttons',
            'button_label' => __('Nieuwe knop', '_SBB'),
            'type'         => 'repeater',
            'max'          => 2,
            'layout'       => 'block',
            'collapsed'    => "{$prefix}_buttons_link",
            'sub_fields'   => [
                [
                    'key'     => "{$prefix}_buttons_link",
                    'name'    => 'link',
                    'label'   => __('Link', '_SBB'),
                    'type'    => 'link',
                    'wrapper' => [
                        'width' => '50%',
                    ],
                ],
                [
                    'key'     => "{$prefix}_buttons_type",
                    'name'    => 'type',
                    'label'   => __('Stijl', '_SBB'),
                    'type'    => 'select',
                    'choices' => wpb_get_button_types(),
                    'wrapper' => [
                        'width' => '50%',
                    ],
                ],
                [
                    'key'     => "{$prefix}_buttons_use_icon",
                    'name'    => 'use_icon',
                    'label'   => __('Icoon gebruiken?', '_SBB'),
                    'type'    => 'true_false',
                    'ui'      => true,
                    'wrapper' => [
                        'width' => '30%',
                    ],
                ],
                [
                    'key'     => "{$prefix}_buttons_icon",
                    'name'    => 'icon',
                    'label'   => __('Icoon', '_SBB'),
                    'type'    => 'GOOGLE_MATERIAL_ICON',
                    'wrapper' => [
                        'width' => '40%',
                    ],
                    'conditional_logic' => [
                        [
                            [
                                'field'    => "{$prefix}_buttons_use_icon",
                                'operator' => '==',
                                'value'    => 1,
                            ],
                        ],
                    ],
                ],
                [
                    'key'     => "{$prefix}_buttons_icon_pos",
                    'name'    => 'icon_pos',
                    'label'   => __('Icoon rechts?', '_SBB'),
                    'type'    => 'true_false',
                    'ui'      => true,
                    'wrapper' => [
                        'width' => '30%',
                    ],
                    'conditional_logic' => [
                        [
                            [
                                'field'    => "{$prefix}_buttons_use_icon",
                                'operator' => '==',
                                'value'    => 1,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];

return $block_data;
