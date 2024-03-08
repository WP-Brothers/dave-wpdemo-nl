<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$icon = get_field('trustpilot_icon', 'options');
$icon_background = get_field('icon_background', 'options');
$trustpilot_raiting = get_field('trustpilot_raiting', 'options');

render_twig('molecules/review.twig', [
	'review_icon' => $icon,
	'bg_color' => $icon_background,
	'rating' => $trustpilot_raiting,
]);

