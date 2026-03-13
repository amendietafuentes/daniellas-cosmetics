<?php

function daniellas_enqueue_assets() {

wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
);

wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    [],
    null,
    true
);

wp_enqueue_style(
    'daniellas-main',
    get_stylesheet_directory_uri() . '/assets/css/main.css'
);

wp_enqueue_script(
    'daniellas-js',
    get_stylesheet_directory_uri() . '/assets/js/main.js',
    ['swiper-js'],
    null,
    true
);

}

add_action('wp_enqueue_scripts', 'daniellas_enqueue_assets');