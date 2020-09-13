<?php

add_action( 'after_setup_theme', function() {
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'menu-header' => esc_html__( 'Menu Principal', 'pandoramarketing' ),
        'menu-footer' => esc_html__( 'Menu Pie de pagina', 'pandoramarketing' ),
        'menu-social' => esc_html__( 'Menu Redes sociales', 'pandoramarketing' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    add_theme_support( 'wp-block-styles' );

    add_theme_support( 'align-wide' );

    add_theme_support( 'editor-styles' );

    /**
     * Register Sidebar
     */
    add_action('widgets_init', 'carusso_sidebar_woocommerce');
    function carusso_sidebar_woocommerce()
    {
        register_sidebar(
            array(
                'id' => 'primary',
                'name' => __('Primary Sidebar'),
                'description' => __('Sidebar para woocommerce.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
    }
});
