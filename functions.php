<?php

function extendable_child_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'extendable-child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}

add_action( 'wp_enqueue_scripts', 'extendable_child_enqueue_styles' );

function sitch_after_theme_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'sitch_after_theme_setup' );

function sitch_add_google_tag_script() {
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16613363396"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-16613363396');
    </script>
    <?php
}

add_action( 'wp_head', 'sitch_add_google_tag_script' );