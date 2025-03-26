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

function add_admin_menu($items, $args)
{
    

    if ( is_user_logged_in() && $args->menu->name=='Header'){
        $admin_url='<li class="admin"><a href="'.admin_url().'">Admin</a>';
        $menu=explode('</li>',$items);
        array_splice($menu, 1,0, $admin_url);
        $items=implode('</li>', $menu);
        
        /*$Menu[2]='><li><a class="admin" href="'.$admin_url.'">Admin</a>';
        $items=implode('/li',$Menu);*/
        /* explode fonction php qui va permettre de couper une chaine de caracter en tableau en fonction d'une chaine de caractere ici li
        inserer en suite dans le tableau une nouvelle balise li avec le lien vers le menu admin
        et operation inverse avec implode
        et enfin on retourne (return $items) sachant que items sera la reconstruction avec implode */
    }
   
    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_menu', 10, 2);