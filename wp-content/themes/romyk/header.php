<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); // This will load necessary scripts and styles ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <nav>
            <!-- Example of WordPress menu -->
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'nav-menu',
                ));
            ?>
        </nav>
    </header>
