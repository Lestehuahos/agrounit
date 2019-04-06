<?php

add_theme_support('menus');

register_nav_menu('primary', 'Primary menu');

function true_style_frontend() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'true_style_frontend' );
