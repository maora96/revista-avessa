<?php
    function avessa_files() {
        wp_enqueue_script('avessa_main_script', get_theme_file_uri('main.js'), NULL, '1.0', true);
        wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=EB+Garamond:400,700|Zilla+Slab');
        wp_enqueue_style('avessa_main_style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'avessa_files');


    function avessa_features() {
        register_nav_menu('header-menu', 'Header Menu Location');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'avessa_features');

    function avessa_post_types() {
        register_post_type('equipe', array(
            'public' => true,
            'menu_icon' => 'dashicons-groups',
            'labels' => array(
                'name' => 'Equipe',
                'add_new_item' => 'Novo membro',
                'all_items' => 'Todos membros'
            )
        ));

        register_post_type('parceiros', array(
            'public' => true,
            'menu_icon' => 'dashicons-thumbs-up',
            'labels' => array(
                'name' => 'Parceiros',
                'add_new_item' => 'Novo parceiro',
                'all_items' => 'Todos membros'
            )
        ));
    }

    add_action('init', 'avessa_post_types');


    function wphierarchy_widgets_init() {
        register_sidebar([
            'name' => 'Main Sidebar',
            'id' => 'main-sidebar',
            'description' => ('Adicionar widgets em sidebar'),
            'before_widget' => '<div class="widget-true">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ]);
    }

    add_action('widgets_init', 'wphierarchy_widgets_init');
?>