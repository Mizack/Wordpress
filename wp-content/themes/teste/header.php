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
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/normalize.css'?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css'?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/footer.css'?>">
</head>
<body <?= body_class()?>>
<header class="site-header">
    <div class="container-alura">
        <?php
        the_custom_logo();
        ?>
        <nav>
            <?php
            wp_nav_menu([
                "menu"=>'menu-navegacao',
                "menu_id"=>'menu-principal',
            ]);
            ?>
        </nav>
    </div>
</header>
