<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

/* HOOK FILTER */

add_filter('show_admin_bar', '__return_false');

add_filter('wp_nav_menu_items', 'admin_link', 10, 2);


function admin_link($items, $args)
{

    if (is_user_logged_in()) {
        $adminlink = admin_url();
        $siteurl = site_url();
        $items .= '<li class="menu-item"><a href="' . site_url('/nous-rencontrer') . '">Nous rencontrer</a></li>';
        $items .= '<li class="menu-item"><a href="' . $adminlink . '">Admin</a></li>';
        $items .= '<li class="menu-commander"><a href="' . site_url('/commander') . '">Commander</a></li>';
        return $items;

    } else {
        $items .= '<li class="menu-item"><a href="' . site_url('/nous-rencontrer') . '">Nous rencontrer</a></li>';
        $items .= '<li class="menu-commander"><a href="' . site_url('/commander') . '">Commander</a></li>';
        return $items;
    }
}
