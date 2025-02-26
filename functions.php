<?php
function floating_cow_theme_enqueue_styles() {
    wp_enqueue_style( 'pico-css', 'https://unpkg.com/@picocss/pico@1.5.7/css/pico.min.css', array(), '1.5.7' );
}
add_action( 'wp_enqueue_scripts', 'floating_cow_theme_enqueue_styles' );
