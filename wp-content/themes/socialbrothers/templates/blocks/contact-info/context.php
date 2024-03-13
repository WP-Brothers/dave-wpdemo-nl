<?php

add_filter(
    'wpb_twig_contact-info_context',
    function (array $context): array {
        if (isset($context['company_socials'])) {
            $contact_links = [];

            foreach ($context['company_socials'] as $item) {
                $contact_links[] = $item;
            }

            $context['company_socials'] = $contact_links;
        }

        return $context;
    }
);
