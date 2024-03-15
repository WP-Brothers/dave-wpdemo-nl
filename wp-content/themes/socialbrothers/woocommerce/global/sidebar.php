<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


function set_facetWP_filter_name($name, $additional_classes = '') {
	echo '<button class="title-size title-size__small-medium '.$additional_classes.'" id='. $name .'>' . esc_html(ucfirst(str_replace('_', ' ', __($name, '_SBF')))) . '</button>';
}

function display_facetWP_sidebar() {
	echo '<aside class="sidebar">';
		set_facetWP_filter_name('categorie');
		echo do_shortcode('[facetwp facet="categorie"]');

		echo '<div class="selections">';
		echo '<header>';
		set_facetWP_filter_name('Je gekozen filters', 'trash');
		echo do_shortcode('[facetwp facet="verwijder" selections="true"]');
		echo '</header>';
		echo do_shortcode('[facetwp selections="true"]');

		echo facetwp_display( 'verwijder' ); 
		echo '</div>';	

		set_facetWP_filter_name('merk');
		echo do_shortcode('[facetwp facet="merk"]'); 

		set_facetWP_filter_name('kleur');
		echo do_shortcode('[facetwp facet="kleur"]');

		set_facetWP_filter_name('prijs'); 
		echo do_shortcode('[facetwp facet="prijs"]'); 
	echo '</aside>';
}

if ( function_exists( 'facetwp_display' ) && !is_product()) {
	display_facetWP_sidebar();
}

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>