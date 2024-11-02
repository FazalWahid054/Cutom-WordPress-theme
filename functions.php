<?php
    function my_theme_enqueue_styles(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


    function register_my_menu(){
        register_nav_menus(
            array(
                'primary-menu' => __('Header Menu')
            )
            );
    }
    add_action('init', 'register_my_menu');

    function my_theme_setup(){
        add_theme_support('post-thumbnails'); //enble featured image
    }
    add_action('after_setup_theme', 'my_theme_setup');
?>