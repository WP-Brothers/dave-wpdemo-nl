<?php

$prefix     = 'block_slider';
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
            'key'   => "{$prefix}_title_size",
            'label' => __('Titel formaat', '_SBB'),
            'name' => 'title_size',
            'type' => 'select',
            'instructions' => __('Selecteer het gewenste titel formaat', '_SBB'),
            'choices' => [
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
            'key'   => "{$prefix}_sub_title",
            'label' => __('Subtitel', '_SBB'),
            'name'  => 'sub_title',
            'type'  => 'text',
        ],
        'text-color' => [
            'key'   => "{$prefix}_subtitle_color",
            'label' => __('Subtitel tekst kleur', '_SBB'),
            'name' => 'subtitle_color',
            'type' => 'select',
            'instructions' => __('Selecteer de subtitel tekst kleur', '_SBB'),
            'choices' => [
                '' => __('Geen', '_SBB'),
                'text-black' => __('Zwart', '_SBB'),
                'text-secondary' => __('Groen', '_SBB'),
                'text-white' => __('Wit', '_SBB'),
            ],
        ],
        [
            'key'          => "{$prefix}_content",
            'label'        => __('Tekst', '_SBB'),
            'name'         => 'content',
            'type'         => 'wysiwyg',
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
        [
            'key'          => "{$prefix}_slider_tab",
            'label'        => __('Slider', '_SBB'),
            'name'         => 'slider_tab',
            'type'         => 'accordion',
            'open'         => 0,
            'multi_expand' => 1,
        ],
        [
            'key'     => "{$prefix}_slides",
            'label'   => __('Slides', '_SBB'),
            'name'    => 'slides',
            'type'    => 'repeater',
            'button_label' => __('Nieuwe slide', '_SBB'),
            'layout'  => 'block',
            'sub_fields' => [
                [
                    'key'     => "{$prefix}_slide_image_id",
                    'label'   => __('Afbeelding', '_SBB'),
                    'name'    => 'image_id',
                    'type'    => 'image',
                    'return_format' => 'id',
                ],
                [
                    'key'   => "{$prefix}_slide_title",
                    'label' => __('Titel', '_SBB'),
                    'name'  => 'title',
                    'type'  => 'text',
                ],
                [
                    'key'   => "{$prefix}_slide_date",
                    'label' => __('Datum', '_SBB'),
                    'name'  => 'date',
                    'type'  => 'date_picker',
                ],
                [ 'key'  => "{$prefix}_category",
                    'label' => __('Categorieën', '_SBB'),
                    'name'  => 'category',
                    'type'  => 'text',
                    'wrapper' => [
                        'width' => '50%',
                    ],
                ],
                
                [
                    'key'     => "{$prefix}_category_type",
                    'name'    => 'type',
                    'label'   => __('Stijl', '_SBB'),
                    'type'    => 'select',
                    'choices' => [
                        'fill' => __('Groen gevuld', '_SBB'),
                        'outline' => __('Groene omlijning', '_SBB'),
                    ],
                    'wrapper' => [
                        'width' => '50%',
                    ],
                ],
                
                
            ],
       ],
    ],
];

return $block_data; 