<?php

defined('ABSPATH') || exit('Forbidden');

function acf_theme_settings()
{
    $prefix = 'theme_settings';
    acf_add_options_page([
        'page_title' => __('Thema instellingen', '_SBB'),
        'menu_title' => __('Thema instellingen', '_SBB'),
        'menu_slug'  => 'theme_settings',
        'position'   => 3,
    ]);

    acf_add_local_field_group([
        'key'    => $prefix,
        'title'  => __('Thema instellingen', '_SBB'),
        'fields' => [
            [
                'key'       => "{$prefix}_general_tab",
                'label'     => __('Algemeen', '_SBB'),
                'type'      => 'tab',
                'placement' => 'left',
            ],
            [
                'key'           => "{$prefix}_logo",
                'name'          => 'logo',
                'label'         => __('Logo', '_SBB'),
                'type'          => 'image',
                'mime_types'    => 'svg, png, jpg',
                'return_format' => 'id',
                'instructions'  => __('Voeg hier het logo toe', '_SBB'),
                'wrapper'   => ['width' => 50],
            ],
            [
                'key'     => "{$prefix}_logo_link",
                'name'    => 'logo_link',
                'label'   => __('Logo link', '_SBB'),
                'type'    => 'link',
                'wrapper'   => ['width' => 50],
            ],
            [
                'key'       => "{$prefix}_contact_tab",
                'label'     => __('Contact', '_SBB'),
                'type'      => 'tab',
                'placement' => 'left',
            ],
            [
                'key'          => "{$prefix}_phone",
                'name'         => 'phone',
                'label'        => __('Telefoonnummer', '_SBB'),
                'type'         => 'text',
                'wrapper'      => ['width' => 50],
                'instructions' => __('Voeg hier het telefoonnummer toe', '_SBB'),
            ],
            [
                'key'          => "{$prefix}_email",
                'name'         => 'email',
                'label'        => __('Email', '_SBB'),
                'type'         => 'text',
                'wrapper'      => ['width' => 50],
                'instructions' => __('Voeg hier het e-mailadres toe', '_SBB'),
            ],
            [
                'key'       => "{$prefix}_address",
                'name'      => 'address',
                'label'     => __('Adres', '_SBB'),
                'type'      => 'textarea',
                'new_lines' => 'br',
                'wrapper'   => ['width' => 50],
            ],
            [
                'key'     => "{$prefix}_address_link",
                'name'    => 'address_link',
                'label'   => __('Adres link', '_SBB'),
                'type'    => 'link',
                'wrapper' => ['width' => 50],
            ],
            [
                'key'       => "{$prefix}_socials_tab",
                'label'     => __('Social Media', '_SBB'),
                'type'      => 'tab',
                'placement' => 'left',
            ],
            [
                'key'        => "{$prefix}_socials",
                'name'       => 'socials',
                'type'       => 'repeater',
                'label'      => __('Sociaal media iconen', '_SBB'),
                'layout'      => 'block',
                'sub_fields' => [
                    [
                        'key'     => "{$prefix}_socials_icon",
                        'name'    => 'socials_icon',
                        'label'   => __('Social media platform', '_SBB'),
                        'type'    => 'select',
                        'wrapper' => [
                            'width' => '50%',
                        ],
                        'choices' => [
                            '' => __('Geen', '_SBB'),
                            'facebook' => __('Facebook', '_SBB'),
                            'instagram' => __('Instagram', '_SBB'),
                            'linkedin' => __('Linked In', '_SBB'),
                            'twitter' => __('X (voormalg Twitter)', '_SBB'),
                        ],
                    ],
                    [
                        'key'   => "{$prefix}_socials_platform",
                        'name'  => 'socials_platform',
                        'type'  => 'link',
                        'label' => __('Link', '_SBB'),
                        'wrapper' => [
                            'width' => '50%',
                        ],
                    ],
                    
                ],
            ],
            [
                'key'       => "{$prefix}_header_tab",
                'label'     => __('Header', '_SBB'),
                'type'      => 'tab',
                'placement' => 'left',
            ],
           
            [
                'key'        => "{$prefix}_header_meta",
                'label'      => __('Reclame tekst', '_SBB'),
                'name'       => 'header_meta',
                'type'       => 'repeater',
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'     => "{$prefix}_header_text",
                        'name'    => 'header_text',
                        'label'   => __('Tekst boven de navigatie ', '_SBB'),
                        'type'    => 'wysiwyg',
                        
                    ],
                    
                    [
                        'key'     => "{$prefix}_header_text_use_icon",
                        'name'    => 'use_icon',
                        'label'   => __('Icoon gebruiken?', '_SBB'),
                        'type'    => 'true_false',
                        'ui'      => true,
                        'wrapper' => [
                            'width' => '30%',
                        ],
                    ],
                    [
                        'key'     => "{$prefix}_header_text_icon",
                        'name'    => 'icon',
                        'label'   => __('Icoon', '_SBB'),
                        'type'    => 'GOOGLE_MATERIAL_ICON',
                        'wrapper' => [
                            'width' => '40%',
                        ],
                        
                        'conditional_logic' => [
                            [
                                [
                                    'field'    => "{$prefix}_header_text_use_icon",
                                    'operator' => '==',
                                    'value'    => 1,
                                ],
                            ],
                        ],
                    ],
                    [
                        'key'     => "{$prefix}_header_text_icon_pos",
                        'name'    => 'icon_pos',
                        'label'   => __('Icoon Rechts?', '_SBB'),
                        'type'    => 'true_false',
                        'ui'      => true,
                        'wrapper' => [
                            'width' => '30%',
                        ],
                        'conditional_logic' => [
                            [
                                [
                                    'field'    => "{$prefix}_header_text_use_icon",
                                    'operator' => '==',
                                    'value'    => 1,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'key'        => "{$prefix}_header_meta_links",
                'label'      => __('Handige navigatie links', '_SBB'),
                'name'       => 'header_meta_links',
                'type'       => 'repeater',
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'   => "{$prefix}_header_links",
                        'label' => __('Belangrijke links', '_SBB'),
                        'name'  => 'header_links',
                        'type'  => 'link',
                    ],
                ],
            ],
            [
                'key'          => "{$prefix}_header_buttons",
                'label'        => __('Knoppen', '_SBB'),
                'name'         => 'header_buttons',
                'label'        => __('Nieuwe knoppen', '_SBB'),
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
                ],
            ],

            //  [
            //         'key'     => "{$prefix}_repeater_box_link_type",
            //         'name'    => 'box_link_type',
            //         'label'   => __('Taal', '_SBB'),
            //         'type'    => 'select',
            //         'choices' => [
            //             'NL' => __('Nederlands', '_SBB'),
            //             'EN' => __('Engels', '_SBB'),
            //         ],
            //         'wrapper' => ['width' => 33],
                    
            //     ],

            [
                'key'       => "{$prefix}_footer_tab",
                'label'     => __('Footer', '_SBB'),
                'type'      => 'tab',
                'placement' => 'left',
            ],
            [
                'key'          => "{$prefix}_footer_content",
                'name'         => 'footer_content',
                'label'        => __('Content', '_SBB'),
                'type'         => 'wysiwyg',
                'toolbar'      => 'contentcenter',
                'tabs'         => 'visual',
                'media_upload' => false,
            ],
            [
                'key'       => "{$prefix}_404_tab",
                'label'     => __('404', '_SBB'),
                'type'      => 'tab',
                'placement' => 'left',
            ],
            [
                'key'           => "{$prefix}_404_title",
                'name'          => '404_title',
                'label'         => __('Titel', '_SBB'),
                'type'          => 'text',
                'default_value' => __('Oeps! We hebben overal gezocht…', '_SBF'),
            ],
            [
                'key'           => "{$prefix}_404_content",
                'name'          => '404_content',
                'label'         => __('Content', '_SBB'),
                'type'          => 'wysiwyg',
                'toolbar'       => 'contentcenter',
                'tabs'          => 'visual',
                'media_upload'  => false,
                'default_value' => __('maar we konden de pagina nergens vinden. We helpen je graag de weg terug te vinden. ', '_SBF'),
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'theme_settings',
                ],
            ],
        ],
    ]);
}

add_action('acf/init', 'acf_theme_settings');
