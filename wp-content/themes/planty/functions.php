<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

/* HOOK FILTER */ 

add_filter( 'show_admin_bar', '__return_false' );

function my_wp_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
    // Logged in menu to display
    $args['menu'] = 3;
     
    } else {
    // Non-logged-in menu to display
    $args['menu'] = 2;
    }
    return $args;
    }
    add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );