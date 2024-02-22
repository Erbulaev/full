<?php

// правильный способ подключить стили и скрипты
function theme_add_scripts()
{
    // подключаем файл стилей темы
    wp_enqueue_style('style-mane', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style-mane', get_template_directory_uri() . '/assets/css/mobile.css');
    wp_enqueue_style('style-mane', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
//    wp_enqueue_style('style-splide', get_template_directory_uri() . '/assets/css/slick.css');

    // подключаем js файл темы
    wp_enqueue_script('script-splide', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), 'null', true);
    wp_enqueue_script('script-splide', get_template_directory_uri() . '/assets/js/img.js', array('jquery'), 'null', true);
    wp_enqueue_script('script-splide', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 'null', true);
}
