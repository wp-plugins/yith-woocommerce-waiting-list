<?php
/**
 * YITH WooCommerce Waiting List Mail Template Plain
 *
 * @author Yithemes
 * @package YITH WooCommerce Waiting List
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WCWTL' ) ) exit; // Exit if accessed directly

echo $email_heading . "\n\n";

echo _x( "Hi there,", 'Email greetings', 'yith-wcwtl' ) . "\n\n";

echo sprintf( __( '%1$s is now back in stock at %2$s.', 'yith-wcwtl' ), $product_title, get_bloginfo( 'name' ) ) . " ";
echo __( 'You have been sent this email because your email address was registered in a waiting list for this product.', 'yith-wcwtl' ) . "\n\n";
echo sprintf( __( 'If you want to purchase %s, please visit the following link: %s', 'yith-wcwtl' ), $product_title, $product_link ) . "\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );