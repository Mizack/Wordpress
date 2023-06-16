<?php

function teste_add_recurso()
{
    add_theme_support('custom-logo');
}
add_action("after_setup_theme", "teste_add_recurso");

function teste_registrando_menu()
{
    register_nav_menu('menu-navegacao', 'Menu');
}
add_action("init", "teste_registrando_menu");