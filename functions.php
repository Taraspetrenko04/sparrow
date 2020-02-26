<?php
    
    add_action('wp_enqueue_scripts', 'style_theme'); //добавляем дейстрвие подключения style
    add_action('wp_footer', 'script_theme'); //добавляем дейстрвие подключения script в футере
    add_action( 'after_setup_theme', 'nav_menu' );// Добавляем в админке одно меню nav_menu
    

    function script_theme() {
        wp_enqueue_script( 'inint', get_template_directory_uri() . '/assets/js/init.js' );
        wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js' );
    };
    // echo get_template_directory_uri() . '/assets/js/doubletaptogo.js';


    function style_theme() { //подключаем стили
        wp_enqueue_style( 'style', get_stylesheet_uri() ); // подключам корневой файл стилей
        wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css' );
        wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
        wp_enqueue_style( 'mediq-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
    };

    
    function nav_menu() {
        register_nav_menu( 'top', 'Top Menu' ); //theme location "top"
    };
    