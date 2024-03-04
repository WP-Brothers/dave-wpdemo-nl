<?php

add_action('woocommerce_single_product_summary', function() {
    wpb_add_container("section", true, "sinlge_cta_container");
}, 24);

add_action('woocommerce_single_product_summary', function() {
    wpb_add_container("section", false);
}, 31);

function wpb_add_container($container, $open, $class = "") 
{
    ob_start();
    echo ($open) ? "<{$container} class='{$class}' >" : "</{$container}>";
    echo ob_get_clean();
}


add_action('woocommerce_after_single_product_summary', function() {
    wpb_add_container("section", true, "single_summary_container");
}, 9);

add_action('woocommerce_after_single_product_summary', function() {
    wpb_add_container("section", false);
}, 16);