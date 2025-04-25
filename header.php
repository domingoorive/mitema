<!DOCTYPE html>
<html <?php language_attributes()?>>
    <!-- aquí llama a cualquier lenguaje selecionado desde el editor de WP -->
<head>
    <meta charset="<?php bloginfo ("charsetTF-8")?>"> 
    <!-- esta es la manera de que entienda cualquier charset -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO</title>
    <?php wp_head ()?>
</head>

<body> 
    <?php wp_body_open();?>
    <header>
        <h1 class="bg-red-500 text-red-200" >holi</h1>
        <?php wp_nav_menu( array( 'theme_location' => 'mi-menu') ); ?>
    </header>
