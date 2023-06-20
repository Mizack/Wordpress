<?php

function teste_taxonomia()
{
    register_taxonomy("paises", 'destinos', [
        "labels"=> [
            "name"=>"Países"
        ],
        "hierarchical"=>true
    ]);
}

add_action("init", "teste_taxonomia");

function teste_registrando_post()
{
    register_post_type('destinos', [
        "labels"=> [
            "name"=>"Destinos"
        ],
        "public"=>true,
        "menu_position"=>0,
        "suports"=>[
            "title", "editor", "thumbnail"
        ],
        "menu_icon"=>"dashicons-admin-site"
    ]);
}

add_action("init", "teste_registrando_post");

function teste_add_recurso()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action("after_setup_theme", "teste_add_recurso");

function teste_registrando_menu()
{
    register_nav_menu('menu-navegacao', 'Menu');
}
add_action("init", "teste_registrando_menu");