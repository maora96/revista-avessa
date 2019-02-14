<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    


    <title>Avessa</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <nav>
            <img src="<?php echo get_theme_file_uri('/images/Menu.png') ?>" alt="" id="hamburguer">
            <a href="<?php echo site_url(); ?>"><h1>Avessa</h1></a>
            <div class="menu-desktop-true">

            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu'
                ));
            ?>
                <!--<ul>
                    <li><a href="<?php echo site_url('/sobre'); ?>">Sobre</a></li>
                    <li><a href="<?php echo site_url('/equipe'); ?>">Equipe</a></li>
                    <li><a href="<?php echo site_url('/edicoes'); ?>">Edições</a></li>
                    <li><a href="<?php echo site_url('/chamadas'); ?>">Chamadas</a></li>
                    <li><a href="<?php echo site_url('/servicos'); ?>">Serviços</a></li>
                    <li><a href="<?php echo site_url('/sobre'); ?>">Blog</a></li>
                    <li><a href="<?php echo site_url('/faq'); ?>">FAQ</a></li>
                    <li><a href="<?php echo site_url('/parceiros'); ?>">Parceiros</a></li>
                    <li><a href="<?php echo site_url('/contato'); ?>">Contato</a></li>
                </ul>
                -->
            </div>
            <img src="<?php echo get_theme_file_uri('/images/Search.png') ?>" alt="" id="search">
        </nav>
        <div class="menu-desktop none" id="nav">
        <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu'
                ));
            ?>
                <!--<ul>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="equipe.html">Equipe</a></li>
                    <li><a href="edicoes.html">Edições</a></li>
                    <li><a href="edicoes.html">Chamadas</a></li>
                    <li><a href="sobre.html">Serviços</a></li>
                    <li><a href="edicoes.html">Blog</a></li>
                    <li><a href="sobre.html">FAQ</a></li>
                    <li><a href="equipe.html">Parceiros</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>-->
            </div>

        <div class="search-bar none" id="bar">
            
            <?php get_search_form(); ?>
            
        </div>

        