<?php

/**
* Tema Paladio
*/

function theme_setup() {

    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( "menus" );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );

    set_post_thumbnail_size( 1200, 9999 );

    register_nav_menus( array(
        'primary' => 'Menu Principal',
        'footer' => 'Menu Rodapé'
    ) );

}
add_action( 'after_setup_theme', 'theme_setup' );

function paladio_scripts() {

    // Frameworks CSS
    wp_enqueue_style("bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css', array(), "3.3.6", 'all');
    wp_enqueue_style("bootstrap-theme", get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), "3.3.6", 'all');
    wp_enqueue_style("fontawesome", get_template_directory_uri() . '/css/font-awesome.min.css', array(), "4.5.0", 'all');

    // Estilo do Tema
    wp_enqueue_style('paladio-bootstrap-override', get_template_directory_uri() . '/css/paladio-custom.css', array('bootstrap', 'bootstrap-theme') );

    // Frameworks JS
    wp_deregister_script('jquery');
    wp_enqueue_script("jquery", get_template_directory_uri() . '/js/jquery-2.2.0.min.js', array(), "2.2.0", true);
    wp_enqueue_script("bootstrapjs", get_template_directory_uri() . '/js/bootstrap.min.js', array("jquery"), "3.3.6", true);

    //Compatibilidade IE
    wp_enqueue_script("respond", get_template_directory_uri() . '/js/respond.min.js', array("jquery"), "1.4.2", true);
    wp_enqueue_script("html5", get_template_directory_uri() . '/js/html5shiv.js', array("jquery"), "3.7.3", true);

    // JS Scripts do Tema
    wp_enqueue_script("html5", get_template_directory_uri() . '/js/main.js', array("jquery"), "1.0.0", true);

}
add_action( 'wp_enqueue_scripts', 'paladio_scripts' );


function add_sidebars() {

    register_sidebar(array(
        "name"  => "Sidebar Esquerda",
        "id"    => "esquerda",
        "class" => "",
        "description" => "Barra lateral esquerda",
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar(array(
        "name"  => "Sidebar Direita",
        "id"    => "direita",
        "class" => "",
        "description" => "Barra lateral direita",
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

    register_sidebar(array(
        "name"  => "Rodapé",
        "id"    => "rodapé",
        "class" => "",
        "description" => "Widget no rodapé",
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ));

}

add_action( 'after_setup_theme', 'add_sidebars' );





