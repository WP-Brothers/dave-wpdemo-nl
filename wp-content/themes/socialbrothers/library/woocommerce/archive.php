<?php

add_action('woocommerce_before_shop_loop_item_title', 'wpb_product_meta_tag', );
function wpb_product_meta_tag() 
{
    global $product;
    $product_tags = wc_get_product_tag_list( $product->get_id(), ', ', '', '' );
    if ( ! empty( $product_tags ) ) : ?>
        <div class="tagged_as product-card__meta_tag">
            <?= $product_tags;?>
        </div>
    <?php endif;
}

add_action('woocommerce_shop_loop_item_title', 'wpb_product_meta_category', 5);
function wpb_product_meta_category() 
{
    global $product;

    $product_cats = wc_get_product_category_list( $product->get_id(), ', ', '', '' );
    if ( ! empty( $product_cats ) ) : ?>
        <div class="product_meta">
            <span class="posted_in">
                <?= $product_cats ?>
            </span>
        </div>

    <?php endif;
}

add_action('woocommerce_before_shop_loop', function() {
    wpb_add_container("section", true, "filter_panel");
}, 19);

add_action('woocommerce_before_shop_loop', function() {
    wpb_add_container("section", false);
}, 31);

add_filter('gettext', 'wpb_custom_facetwp_toggle_text', 10, 3);
function wpb_custom_facetwp_toggle_text($translated_text, $text, $domain) {
    if ('fwp-front' == $domain && 'See {num} more' == $translated_text) {
        $translated_text = sprintf(__('tool alle ({num})', '_SBF'));
    }
    return $translated_text;
}
