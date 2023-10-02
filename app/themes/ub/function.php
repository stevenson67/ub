<?php
add_action( 'wp_enqueue_scripts', 'ub_scripts' );
function ub_scripts() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . 'css/normalize.css' );
//    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
