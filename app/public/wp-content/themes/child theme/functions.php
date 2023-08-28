<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
// Chargement du css/theme.css pour nos personnalisations
wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

function add_admin_link_to_menu($items, $args)
{
    // Check if the user is an administrator
    if (is_user_logged_in() && current_user_can('administrator') && $args->theme_location == 'main-menu') {
        $admin_url = admin_url();
        $items .= '<li class="admin"><a href="' . esc_url($admin_url) . '">Admin </a></li>';
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
register_nav_menus(array('menu-commander' => esc_html__('Menu Commander', 'blankslate')));
