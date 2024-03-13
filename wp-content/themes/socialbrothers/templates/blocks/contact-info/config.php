<?php

$prefix     = 'block_contact-info';
$block_data = [
    'key'    => $prefix,
    'fields' => [
        [
            'key'          => "{$prefix}_contact_info",
            'label'        => __('Contact info', '_SBB'),
            'name'         => 'contact_info',
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
            'key'        => "{$prefix}_contact-info",
            'name'       => 'company_info',
            'type'       => 'repeater',
            'label'      => __('Bedrijfs informatie', '_SBB'),
            'layout'     => 'block',
            'sub_fields' => [
                [
                    'key'   => "{$prefix}_company-info_label",
                    'label' => __('Titel', '_SBB'),
                    'name'  => 'info_label',
                    'type'  => 'text',
                ],
                [
                    'key'   => "{$prefix}_contact_info_label",
                    'label' => __('Bedrijfs info', '_SBB'),
                    'name'  => 'content',
                    'type'  => 'wysiwyg',
                ],
                [
                    'key'     => "{$prefix}_contact-info_link",
                    'label'   => __('Link', '_SBB'),
                    'name'    => 'link',
                    'type'    => 'link',
                    'wrapper' => ['width' => 50],
                ],
            ],
        ],
        [
            'key'        => "{$prefix}_company-socials",
            'name'       => 'company_socials',
            'type'       => 'repeater',
            'label'      => __('Sociaal media contact links', '_SBB'),
            'layout'     => 'block',
            'sub_fields' => [
                [
                    'key'     => "{$prefix}_company-socials_icon",
                    'name'    => 'socials_icon',
                    'label'   => __('Social media platform', '_SBB'),
                    'type'    => 'select',
                    'wrapper' => [
                        'width' => '50%',
                    ],
                    'choices' => [
                        ''          => __('Geen', '_SBB'),
                        'facebook'  => __('Facebook', '_SBB'),
                        'instagram' => __('Instagram', '_SBB'),
                        'linkedin'  => __('Linked In', '_SBB'),
                        'twitter'   => __('X (voormalg Twitter)', '_SBB'),
                    ],
                ],
                [
                    'key'     => "{$prefix}_company-socials_platform",
                    'name'    => 'socials_platform',
                    'type'    => 'link',
                    'label'   => __('Link', '_SBB'),
                    'wrapper' => [
                        'width' => '50%',
                    ],
                ],
            ],
        ],
    ],
];

return $block_data;
