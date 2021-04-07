<?php

// Função para registrar os scripts e o css
function tiago_scripts()
{
    wp_register_script('origamid-menu', get_template_directory_uri() . '/js/origamid-menu.js', [], false, true);
    wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', [], false, true);
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', ['origamid-menu', 'slick'], false, true);

    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'tiago_scripts');

function tiago_css()
{
    wp_register_style('tiago-style', get_template_directory_uri() . '/style.css', array(), false, false);
    wp_enqueue_style('tiago-style');
}
add_action('wp_enqueue_scripts', 'tiago_css');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//desativar barra de ferramentas
function hide_admin_bar()
{return false;}
add_filter('show_admin_bar', 'hide_admin_bar');

//Habilitar Menus
