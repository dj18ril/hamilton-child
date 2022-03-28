<?php
add_action( 'wp_enqueue_scripts', 'hamilton_child_enqueue_styles' );

function hamilton_child_enqueue_styles() {
 
    $parent_style = 'hamilton-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'hamilton-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

