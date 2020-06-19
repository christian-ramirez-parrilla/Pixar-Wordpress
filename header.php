<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&family=Neuton:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



    <header>

        <div class="entrada">

            <div class="logo">

                <h1>PIXAR</h1>

            </div>




            <nav class="menu">
                <?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
            </nav>

        </div>




    </header>

<div id="container"> 