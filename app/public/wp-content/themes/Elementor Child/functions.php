<?php

/*  a quel moment la fonction doit etre appele wp_enqueue_script, et quel fonciton doit etre appele theme_enqueue_style */

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/theme.css');
}
