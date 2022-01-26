<?php

// Add Theme Support
add_theme_support('title-tag');
add_theme_support('post-thumbnails', ['post', 'page']);
add_theme_support('post-formats', [
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat',
]);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

//Load in out CSS
function base_enqueue_styles() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
}

add_action('wp_enqueue_scripts', 'base_enqueue_styles');

// Load in out JS
function wptags_enqueue_scripts() {
    wp_enqueue_script('jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', ['jquery'], time(), true);

    // Add reply btn in comments
    if (is_singular() && comments_open()) {
        wp_enqueue_script('comment-reply');
    }
}

?>