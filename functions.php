<?php

// активируем поддержку меню в теме
add_theme_support('menus');

// верхнее меню (регистрируем локацию)
register_nav_menu('primary', 'Primary menu');

// боковое меню
register_nav_menu('left_menu', 'Left menu');

// Вывод первой картинки поста
/*function first_post_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){
        $first_img = "/wp-content/themes/НАЗВАНИЕТЕМЫ/images/noimages.jpg";
    }
    return $first_img;
}*/


function true_style_frontend() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'true_style_frontend' );

function main_js() {
    wp_enqueue_script('new-jquery', get_template_directory_uri() . '/js/jquery-1.11.3.min.js');
    wp_enqueue_script( 'menu', get_stylesheet_directory_uri() . '/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'main_js' );


add_action( 'wp_enqueue_scripts', 'my_scripts_method', 11 );
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery' );
}

// Подключаем настройки Woocommerce
require get_template_directory() . '/includes/woocommerce.php';
require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
