<?php

add_filter('wpb_twig_info-box_context', function ($context) {
    if (isset($context['repeater'])) {
        $repeater_items = array();
        
        foreach ($context['repeater'] as $item) {
            $repeater_items[] = $item;
        }
        
        $context['repeater_items'] = $repeater_items;
    }
    return $context;
});
