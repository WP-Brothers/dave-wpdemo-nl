<?php

declare(strict_types=1);

use SocialBrothers\Theme\Helper\Theme;
use SocialBrothers\Theme\Helper\Twig;

$menu_classes = 'menu-main';

if (get_field('header_submenu_hover', 'options')) {
    $menu_classes = "{$menu_classes} menu-main--hover";
}

/**
 * Renders templates/twig/layout/header.twig.
 *
 * @filter `sb-starter-theme_header_context` to edit `$header_context` values.
 *
 * @noinspection PhpUnhandledExceptionInspection
 */

Twig::render(
    'header.twig',
    Theme::filter('header_context', [
        'language_attributes' => get_language_attributes(),
        'body_class'          => esc_attr(implode(' ', get_body_class('after:hidden after:fixed after:top-0 after:left-0 after:h-screen after:w-screen after:bg-black/30 after:z-[90]'))),
        'header'              => [
            'menu'    => wpb_menu('primary', 2, $menu_classes),
            'logo_id' => get_field('logo', 'options'),
            'header_meta' => get_field('header_meta', 'options') ?? '',
            'header_links' => get_field('header_meta_links', 'options') ?? '',
            'buttons'  => get_field('header_buttons', 'options'),
        ],
    ])
);