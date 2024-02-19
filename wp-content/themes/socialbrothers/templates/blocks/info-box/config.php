<?php

$prefix = 'block_info-box';
$block_data = [
    'key'     => $prefix,
    'fields'  => [
        [
            'key'          => "{$prefix}_content_tab",
            'label'        => __('Info Block Content', '_SBB'),
            'name'         => 'content_tab',
            'type'         => 'accordion',
            'open'         => 1,
            'multi_expand' => 1, 
        ],
        'background' => [
            'key'   => "{$prefix}_wrapper_background",
            'label' => __('Achtergrond kleur', '_SBB'),
            'name' => 'wrapper_background',
            'type' => 'select',
            'instructions' => __('Selecteer een achtergrond kleur', '_SBB'),
            'wrapper' => ['width' => 33],
            'choices' => [
                '' => __('Geen', '_SBB'),
                'bg-secondary' => __('Groen', '_SBB'),
                'bg-secondary-light' => __('Neon wit', '_SBB'),
                'bg-white' => __('Wit', '_SBB'),
            ],
        ],
        [
            'key'         => "{$prefix}_repeater",
            'name'        => 'repeater',
            'label'       => __('Info Boxes', '_SBB'),
            'type'        => 'repeater',
            'layout'      => 'block',
            'sub_fields'  => [
                [
                    'key'     => "{$prefix}_repeater_box_icon",
                    'name'    => 'box_icon',
                    'label'   => __('Icoon', '_SBB'),
                    'type'    => 'GOOGLE_MATERIAL_ICON',
                    'wrapper' => [
                        'width' => '50%',
                    ],
                    
                ],
                 'font-size' => [
                         'key'   => "{$prefix}_repeater_box_icon_size",
                    'label' => __('Formaat van de icoon', '_SBB'),
                    'name' => 'box_icon_size',
                    'type' => 'select',
                    'instructions' => __('Selecteer het gewenste formaat', '_SBB'),
                    'choices' => [
                        'text-lg' => __('Klein', '_SBB'),
                        'text-xl' => __('Normaal', '_SBB'),
                        'text-2xl' => __('Groot', '_SBB'),
                        'text-4xl' => __('Extra groot', '_SBB'),
                    ],
                      'wrapper' => [
                        'width' => '50%',
                    ],
                ],
                'background' => [
                    'key'   => "{$prefix}_repeater_box_background",
                    'label' => __('Achtergrond kleur infobox', '_SBB'),
                    'name' => 'box_background',
                    'type' => 'select',
                    'instructions' => __('Selecteer een achtergrond kleur voor de info-box', '_SBB'),
                    'choices' => [
                        '' => __('Geen', '_SBB'),
                        'bg-secondary' => __('Groen', '_SBB'),
                        'bg-white' => __('Wit', '_SBB'),
                    ],
                ],
                [
                    'key'   => "{$prefix}_repeater_box_title",
                    'label'   => __('Titel', '_SBB'),
                    'name'  => 'box_title',
                    'type'  => 'text',
                ],
                [
                    'key'   => "{$prefix}_repeater_box_content",
                    'label'   => __('Content', '_SBB'),
                    'name'  => 'box_content',
                    'type'  => 'wysiwyg',
                ],
                [
                    'key'   => "{$prefix}_repeater_box_link",
                    'label'   => __('Link', '_SBB'),
                    'name'  => 'box_link',
                    'type'  => 'link',
                    'wrapper' => ['width' => 33],
                	
                ],
                 [
                    'key'     => "{$prefix}_repeater_box_link_type",
                    'name'    => 'box_link_type',
                    'label'   => __('Stijl', '_SBB'),
                    'type'    => 'select',
                    'choices' => wpb_get_button_types(),
                    'wrapper' => ['width' => 33],
                    
                ],
                 [
                    'key'     => "{$prefix}_repeater_box_use_icon",
                    'name'    => 'box_use_icon',
                    'label'   => __('Icoon gebruiken?', '_SBB'),
                    'type'    => 'true_false',
                    'ui'      => true,
                    'wrapper' => ['width' => 33],
                ],
                [
                    'key'     => "{$prefix}_repeater_box_link_icon",
                    'name'    => 'box_link_icon',
                    'label'   => __('Icoon', '_SBB'),
                    'type'    => 'GOOGLE_MATERIAL_ICON',
           
                    'conditional_logic' => [
                        [
                            [
                                'field'    => "{$prefix}_repeater_box_use_icon",
                                'operator' => '==',
                                'value'    => 1,
                            ],
                        ],
                    ],
                    
                ],
                [
                    'key'     => "{$prefix}_repeater_box_icon_pos",
                    'name'    => 'box_icon_pos',
                    'label'   => __('Icoon Rechts?', '_SBB'),
                    'type'    => 'true_false',
                    'ui'      => true,
                    'wrapper' => ['width' => 33],
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
            ]
        ],
    ]
    

];

return $block_data;