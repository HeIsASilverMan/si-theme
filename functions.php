<?php
defined( 'ABSPATH' ) || exit;

function si_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
    register_nav_menus( array( 'primary' => 'Primary Navigation' ) );
}
add_action( 'after_setup_theme', 'si_theme_setup' );

// Force dark background - output first thing in head
add_action( 'wp_head', function() {
    echo '<style id="si-dark-root">
    html, body {
        background: #0D0D0F !important;
        background-color: #0D0D0F !important;
        color: #F0EDE6 !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    </style>';
}, 1 );

// Remove WordPress fluff
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
}, 100 );
