<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Pega o título de maneira dinâmico -->
    <title><?php bloginfo("name"); ?></title>
    <!-- A função wp_head() no WordPress é usada para exibir a seção <head> do código HTML com metadados, estilos e scripts-->
    <?php wp_head(); ?>
</head>
<body>
<?php
the_custom_logo();
wp_nav_menu([
    "menu"=>'menu-navegacao'
]);
?>
