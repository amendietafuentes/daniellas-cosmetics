<?php

add_theme_support('custom-logo');

function daniellas_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ]);

}

add_action('after_setup_theme', 'daniellas_theme_setup');