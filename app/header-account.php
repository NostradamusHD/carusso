<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="<?= get_theme_file_uri('/static/images/icons/caruso-isotipo.png')?>">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?> >
<!-- Page container | Start -->
<div class="page" id="page">

    <!-- Header | Start -->
    <div class="page__header">
        <header class="header header--light">
            <?php get_template_part('template-parts/components/header-top-light'); ?>

            <?php get_template_part('template-parts/components/minicart'); ?>

            <div class="header__main header__main--light">
            <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell small-3 hide-for-large">
                <button type="button" class="button-menu button-menu--light" id="button-menu">
                    <div class="fal fa-bars"></div>
                </button>
            </div>
            <div class="cell small-6 large-2">
                <figure class="logo" >
                    <a href="<?= get_home_url() ?>"><img src="<?= get_theme_file_uri('/static/images/')?>logo-carusso-white-2.svg" alt=""></a>
                </figure>
            </div>
            <div class="cell small-3 hide-for-large" style="text-align: right;">
                <a href="" class="button-cart button-cart--light" id="button-minicart-mobile"><i class="fal fa-shopping-cart"></i><span class="button-cart__badge">1</span></a>
            </div>
            <div class="cell large-7">
                <div class="main-menu__background"></div>
                <nav class="main-menu main-menu--light" id="main-menu">
                    <?php get_template_part('woocommerce/product-searchform'); ?>

                    <ul class="main-menu__container" id="main-menu">
                        <li class="main-menu__item">
                            MENÚ
                            <span class="close-button close-button--mobile" id="close-button-menu"></span>
                        </li>
                        <?php // Main Menu
                            $menu_primary = get_menu_custom('menu-header');
                            if( !empty($menu_primary) ):
                                foreach ($menu_primary as $item) :
                                    if( $item->title == 'Hombre' || $item->title == 'Mujer'):
                                        ?>
                                        <li class="main-menu__item">
                                            <a href="<?= $item->url ?>" class="main-menu__link"> 
                                                <?= $item->title ?>                                                                                    
                                            </a>
                                            <span class="main-menu__button" ><i class="fal fa-chevron-right"></i></span>    
                                            <ul class="main-children">
                                                <?php 
                                                $parent = "";
                                                
                                                if( $item->title == 'Hombre'):
                                                    $parent = 'hombres';
                                                else:
                                                    $parent = 'mujeres';
                                                endif;

                                                $categories = get_categories_woocommerce($parent);

                                                foreach( $categories as $categorie ):
                                                    ?>
                                                    <li class="main-children__title"><?= $categorie->name ?>
                                                        <ul class="main-children__container">                                                    
                                                    <?php

                                                        $subcategories = get_categories_woocommerce($categorie->slug);
                                                        foreach( $subcategories as $subcategorie):
                                                            
                                                            $link = get_term_link( $subcategorie->slug, $subcategorie->taxonomy );
                                                            ?>
                                                            <li class="main-children__item">
                                                                <a href="<?= $link?>" class="main-children__link"><?= $subcategorie->name ?></a>
                                                            </li>
                                                            <?php
                                                        endforeach;
                                                    ?>
                                                        </ul>
                                                    </li>
                                                    <?php
                                                endforeach;
                                                ?>

                                            </ul>
                                        </li>
                                        <?php
                                    else:
                                        ?>
                                        <li class="main-menu__item">
                                            <a href="<?= $item->url ?>" class="main-menu__link"> 
                                                <?= $item->title ?>                                        
                                            </a>
                                        </li>
                                        <?php
                                    endif;
                        ?>
                        
                        <?php                                    
                                endforeach;
                            endif;
                        ?>
                        <?php // Woocommerce Conditional
                        if( class_exists("WooCommerce") ):
                            if( is_user_logged_in() ): ?>

                                <li class="main-menu__item hide-for-large">
                                    <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="main-menu__link">MI CUENTA</a>
                                </li>

                                <li class="main-menu__item hide-for-large">
                                    <a href="<?= wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ) ?>" class="main-menu__link">SALIR</a>
                                </li>

                            <?php else: ?>

                                <li class="main-menu__item hide-for-large">
                                    <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="main-menu__link">LOGIN / REGISTRO</a>
                                </li>

                            <?php endif; ?>
                        <?php endif; ?>
                        <li class="main-menu__item hide-for-large">
                            <a href="" class="button-header"><i class="fab fa-whatsapp"></i> CONTACTAR</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="cell large-3 show-for-large">
                <div class="grid-x align-right">
                    <div class="buscador">

                        <button type="button" class="button-search button-search--light" id="button-search">
                            <i class="fal fa-search"></i>
                        </button>
                    </div>
                    <a target="_blank" href="https://wa.me/51<?= get_field('whatsapp','theme-info-contact')?>" class="button-header button-header--light"><i class="fab fa-whatsapp"></i> CONTACTAR</a>
                </div>
            </div>
        </div>
    </div>
                <div class="grid-container">
                    <div class="header__main-page">
                        <h2 class="header__main-title"> <?= the_title(); ?> </h2>
                        <ul class="header__main-breadcum">
                            <li><a href="<?= get_home_url(); ?>">Inicio</a></li>
                            <li><?= the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Header | End -->

    <!-- Main | Start -->
    <main class="page__main">
