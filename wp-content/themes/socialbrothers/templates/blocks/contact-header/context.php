<?php

add_filter(
    'wpb_twig_contact-header_context',
    function (array $context): array {
        if (isset($context['contact_links'])) {
            $contact_links = [];

            foreach ($context['contact_links'] as $item) {
                $contact_links[] = $item;
            }

            $context['contact_links'] = $contact_links;
        }

        return $context;
    }
);
