<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme style
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/style.css', array('parent-style'), wp_get_theme()->get('Version'));

    
    // Enqueue custom scroll script
    wp_enqueue_script('custom-scroll', get_stylesheet_directory_uri() . '/js/scroll.js', array('jquery'), '0.1', true);


    // Enqueue the stylesheet
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"', array(), null);


    // Enqueue the SwiperJS script
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // Enqueue slider script
    wp_enqueue_script('swiper-slider', get_stylesheet_directory_uri() . '/js/slider.js', array(), '0.1', true);

    // Enqueue menu burger script
    wp_enqueue_script('Burger-script', get_stylesheet_directory_uri() . '/js/menuburger.js', array('jquery'), '1.0.0', true);
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

