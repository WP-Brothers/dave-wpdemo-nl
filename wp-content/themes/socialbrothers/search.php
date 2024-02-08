<?php

declare(strict_types=1);

use SocialBrothers\Theme\Helper\Theme;
use SocialBrothers\Theme\Helper\Twig;

global $wp_query, $post;

$found = $wp_query->post_count;

$search    = $_GET['s'];
$title     = get_field('search_page_title', 'options');
$post_type = 'news';

$sort = [
    'label'    => __('Sorteer op', '_SBF'),
    'name'     => 'sort',
    'selected' => $_GET['sort'] ?? 'date_desc',
    'options'  => [
        [
            'value' => 'date_asc',
            'label' => __('Datum - oplopend', '_SBF'),
        ],
        [
            'value' => 'date_desc',
            'label' => __('Datum - aflopend', '_SBF'),
        ],
        [
            'value' => 'title_asc',
            'label' => __('Titel - oplopend', '_SBF'),
        ],
        [
            'value' => 'title_desc',
            'label' => __('Titel - aflopend', '_SBF'),
        ],
    ],
];

$filter_terms = get_field("{$post_type}_setting_archive_filters", 'options');

$filters = [];
if (! empty($filter_terms)) {
    $filters = [
        'label'    => __('Filter op', '_SBF'),
        'name'     => 'category',
        'selected' => $_GET['category'] ?? '',
        'terms'    => [
            [
                'value' => '',
                'label' => __('Alles', '_SBF'),
                'id'    => 'all',
            ],
        ],
    ];

    foreach ($filter_terms as $filter_term) {
        $filters['terms'][] = [
            'value' => $filter_term->slug,
            'label' => $filter_term->name,
            'id'    => $filter_term->slug,
        ];
    }
}

$posts_data = [];
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $posts_data[] = wpb_build_post_card_context(get_the_ID());
    }
}

$pagination = get_the_posts_pagination([
    'prev_text' => '<span class="material-symbols-rounded">arrow_back</span>',
    'next_text' => '<span class="material-symbols-rounded">arrow_forward</span>',
]);

/**
 * @noinspection PhpUnhandledExceptionInspection
 */
Twig::render(
    'content/search.twig',
    Theme::filter(
        'index_context',
        compact('wp_query', 'post', 'title', 'found', 'search', 'filters', 'sort', 'posts_data', 'pagination')
    )
);
