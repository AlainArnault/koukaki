<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
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
//Ajout script skrollr
    wp_enqueue_script( 'skrollr-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js');
    wp_enqueue_script( 'skrollr', get_stylesheet_directory_uri() . '/js/skrollr.js', array(), '1.0.0', true);
    
// Ajout des fichiers Swiper et aimations
function enqueue_child_theme_scripts() {
    // Enregistrer et charger le CSS de Swiper depuis un CDN
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css');

    // Enregistrer et charger le JS de Swiper depuis un CDN
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js', array('jquery'), null, true);

    // Enregistrer et charger le fichier animation.js
    wp_enqueue_script('animations-js', get_stylesheet_directory_uri() . '/js/animations.js', array('jquery', 'swiper-js'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');
