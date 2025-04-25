<?php

function mi_tema_enqueue_styles() {
    wp_enqueue_style(
        'estilos-principales',
        get_stylesheet_uri()
    );
}

function mi_tema_scripts() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),    // Dependencias (vacío por ahora)
        null,       // Versión (puedes poner '1.0.0' o usar filemtime para cache busting)
        true        // Carga en el footer
    );
}

add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');
add_action('wp_enqueue_scripts', 'mi_tema_scripts');

function mi_tema_menu(){
    register_nav_menus(
        array(
            'mi-menu' => __( 'Mi menú' )
        )
    );
}
add_action( 'init', 'mi_tema_menu' );