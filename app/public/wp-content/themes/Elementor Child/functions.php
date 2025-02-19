<?php

/*  a quel moment la fonction doit etre appele wp_enqueue_script, et quel fonciton doit etre appele theme_enqueue_style */

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/theme.css');
}

/* fonction qui permet d'enregister les menus créé via l'interface de wordpress et de les assigner */

function wpb_menu()
{
    /* utilisation de esc_html pour échapper les caractères HTML et prévenir les attaque XSS */
    register_nav_menus( [ 'menu-1' => esc_html__( 'Header', 'child-elementor' ) ] );
    register_nav_menus( [ 'menu-2' => esc_html__( 'Footer', 'child-elementor' ) ] );
}
add_action('init', 'wpb_menu');