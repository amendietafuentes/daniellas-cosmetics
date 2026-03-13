<?php

function daniellas_enqueue_assets() {

wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500&display=swap',
    array(),
    null
);

wp_enqueue_style(
    'daniellas-main-style',
    get_stylesheet_directory_uri() . '/assets/css/main.css',
    array(),
    '1.0'
);

}

add_action('wp_enqueue_scripts', 'daniellas_enqueue_assets');


function daniellas_menus(){

    register_nav_menus(array(

        'primary' => 'Primary Menu'

    ));

}

add_action('after_setup_theme','daniellas_menus');


function daniellas_icons(){

    wp_enqueue_style(
    'fontawesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'
    );
}

add_action('wp_enqueue_scripts','daniellas_icons');


function daniellas_swiper_assets(){

wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
);

wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    array(),
    null,
    true
);

wp_enqueue_script(
    'daniellas-main-js',
    get_stylesheet_directory_uri().'/assets/js/main.js',
    array('swiper-js'),
    '1.0',
    true
);

}

add_action('wp_enqueue_scripts','daniellas_swiper_assets');

function theme_scripts(){

    wp_enqueue_script(
        'header-scroll',
        get_template_directory_uri() . '/assets/js/header.js',
        array(),
        '1.0',
        true
    );

}

add_action('wp_enqueue_scripts','theme_scripts');