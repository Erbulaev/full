<?php
function japan_custom_logo_setup()
{
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);

    add_theme_support('menus');
}

add_action('after_setup_theme', 'japan_custom_logo_setup');
add_action('wp_enqueue_scripts', 'theme_add_scripts');

function theme_add_scripts()
{
    // подключаем файл стилей темы
    wp_enqueue_style('style-mane', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style-mob', get_template_directory_uri() . '/assets/css/mobile.css');
//    wp_enqueue_style('style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
//    wp_enqueue_style('style-splide', get_template_directory_uri() . '/assets/css/slick.css');

    // подключаем js файл темы
    wp_enqueue_script('script-splide', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), 'null', true);
    wp_enqueue_script('script-img', get_template_directory_uri() . '/assets/js/img.js', array('jquery'), 'null', true);
//    wp_enqueue_script('script-boot', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 'null', true);
}

function dnln_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'dnln_mime_types');

add_theme_support( 'title-tag' );



function portfolio_scripts_styles() {
    if ( is_page('335') or is_page('329') or is_page('333') or is_page('331') or is_page('337') or is_page('339'))
        wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/css/single.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts_styles' );

register_nav_menus(array(
    'top'    => 'Верхнее меню',
    'bottom' => 'Нижнее меню'
));


function portfolio_scripts() {
    if ( is_page('199'))
        wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/css/fulfillment-current.webflow.5df12d8ec.min.css', array(), '1.0' );
        wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/css/main_1.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );
