<?php

add_action('woocommerce_before_shop_loop_item_title', 'wpb_product_meta_tag', 5);
function wpb_product_meta_tag() 
{
    global $product;
    echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( '', '', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); 
}