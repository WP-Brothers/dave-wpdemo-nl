<?php

$prefix     = 'block_contact-header';
$block_data = [
    'key'    => $prefix,
    'fields' => [
        [
            'key'          => "{$prefix}_content_tab",
            'label'        => __('Contact Content', '_SBB'),
            'name'         => 'content_tab',
            'type'         => 'accordion',
            'open'         => 1,
            'multi_expand' => 1,
        ],
        'background' => [
            'key'          => "{$prefix}_wrapper_background",
            'label'        => __('Achtergrond kleur', '_SBB'),
            'name'         => 'wrapper_background',
            'type'         => 'select',
            'instructions' => __('Selecteer een achtergrond kleur', '_SBB'),
            'wrapper'      => ['width' => 33],
            'choices'      => [
                ''                   => __('Geen', '_SBB'),
                'bg-secondary'       => __('Groen', '_SBB'),
                'bg-secondary-light' => __('Neon wit', '_SBB'),
                'bg-white'           => __('Wit', '_SBB'),
            ],
        ],
        [
            'key'   => "{$prefix}_contact_title",
            'label' => __('Titel', '_SBB'),
            'name'  => 'title',
            'type'  => 'text',
        ],
        [
            'key'   => "{$prefix}_contact_content",
            'label' => __('Content', '_SBB'),
            'name'  => 'content',
            'type'  => 'wysiwyg',
        ],
        [
            'key'        => "{$prefix}_contact_links",
            'name'       => 'contact_links',
            'label'      => __('Contact links', '_SBB'),
            'type'       => 'repeater',
            'layout'     => 'block',
            'sub_fields' => [
                [
                    'key'     => "{$prefix}_link",
                    'label'   => __('Link', '_SBB'),
                    'name'    => 'link',
                    'type'    => 'link',
                    'wrapper' => ['width' => 33],
                ],
                [
                    'key'     => "{$prefix}_link_label",
                    'label'   => __('Link Label', '_SBB'),
                    'name'    => 'link_label',
                    'type'    => 'text',
                    'wrapper' => ['width' => 33],
                ],
                [
                    'key'     => "{$prefix}_link_type",
                    'name'    => 'link_type',
                    'label'   => __('Link type', '_SBB'),
                    'type'    => 'select',
                    'wrapper' => ['width' => 33],
                    'choices' => [
                        'tel'     => __('Telefoon', '_SBB'),
                        'email'   => __('Email', '_SBB'),
                        'address' => __('Adres', '_SBB'),
                    ],
                ],
                [
                    'key'     => "{$prefix}_link_use_icon",
                    'name'    => 'link_use_icon',
                    'label'   => __('Icoon gebruiken?', '_SBB'),
                    'type'    => 'true_false',
                    'ui'      => true,
                    'wrapper' => ['width' => 33],
                ],
                [
                    'key'     => "{$prefix}_link_icon",
                    'name'    => 'icon',
                    'label'   => __('Icoon', '_SBB'),
                    'type'    => 'GOOGLE_MATERIAL_ICON',
                    'wrapper' => ['width' => 33],

                    'conditional_logic' => [
                        [
                            [
                                'field'    => "{$prefix}_link_use_icon",
                                'operator' => '==',
                                'value'    => 1,
                            ],
                        ],
                    ],
                ],

                'icon-color' => [
                    'key'     => "{$prefix}_icon_color",
                    'label'   => __('Icoon kleur', '_SBB'),
                    'name'    => 'icon_color',
                    'type'    => 'select',
                    'choices' => [
                        ''               => __('Geen', '_SBB'),
                        'text-secondary' => __('Groen', '_SBB'),
                        'text-primary'   => __('Oranje', '_SBB'),
                    ],
                    'wrapper' => ['width' => 33],
                ],
            ],
        ],
    ],
];

return $block_data;
