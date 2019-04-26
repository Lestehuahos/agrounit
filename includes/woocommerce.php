<?php

function agrosouz_woocommerce_setup() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

/* Включаем поддержку woocommerce */
add_action('after_setup_theme', 'agrosouz_woocommerce_setup');