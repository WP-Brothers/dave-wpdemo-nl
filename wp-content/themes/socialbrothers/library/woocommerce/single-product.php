<?php
    /**
     * Hook: woocommerce_single_product_summary.
     *
     * @hooked woocommerce_template_single_meta - 5
     * @hooked woocommerce_template_single_title - 10
     * @hooked woocommerce_template_single_excerpt - 20
     * <div> -24
     * @hooked woocommerce_template_single_price - 25
     * @hooked woocommerce_template_single_add_to_cart - 30
     * <div> -31
     * @hooked woocommerce_template_single_sharing - 50
     * @hooked woocommerce_template_single_rating - 50
     * @hooked WC_Structured_Data::generate_product_data() - 60
     */

    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);	
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5);

    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);	
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 10);
    
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);	
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);


    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);	
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 50);	
    
    remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);	
?>