<?php

function load_css()
{
    wp_enqueue_style("style", get_stylesheet_uri());
}

function load_js()
{
    wp_enqueue_script("breakpoints", get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), false, true);
    wp_enqueue_script("browser", get_template_directory_uri() . '/assets/js/browser.min.js', array(), false, true);
    wp_enqueue_script("jquery-scrollex", get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'), false, true);
    wp_enqueue_script("jquery-scrolly", get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jquery'), false, true);
    wp_enqueue_script("main-js", get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
    wp_enqueue_script("util-js", get_template_directory_uri() . '/assets/js/util.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');