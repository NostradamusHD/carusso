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

    <!-- Page Header | Start -->
    <div class="page__header">
        <!-- Header | Start -->
        <header class="header">
            <?php 
                /**
                 * Component - Header Top
                 * @return template
                 */
                get_template_part('template-parts/components/header-top'); 
            ?>

            <?php 
                /**
                 * Component - Header Nav
                 * @return template
                 */
                get_template_part('template-parts/components/header-nav'); 
            ?>

            <?php 
                /**
                 * Component - Mini Cart
                 * @return template
                 */
                get_template_part('template-parts/components/minicart'); 
            ?>
        </header>
        <!-- Header | Start -->

        <div class="headband"> <!-- start//Headband -->
            <div class="grid-x">
                <div class="cell large-6">
                    <figure class="headband__slider">
                        <div class="swiper-container" id="slider-contact" style="height: 100%;">
                            <div class="swiper-wrapper">
                                <?php
                                    if( is_page('contacto') ):
                                        $slider = get_field('headband_slider');
                                    else:
                                        $slider = get_field('headband_slider','theme-info-contact');
                                    endif;

                                    foreach ($slider as $slide):
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?= $slide['url'] ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="cell large-6">
                    <div class="grid-x align-middle align-center" style="height: 100%;">
                        <div class="headband__caption">
                            <h1 class="headband__title">
                                <?php 
                                    if( is_shop() ): 
                                        echo 'tienda';
                                    elseif( is_product_category() ):
                                        echo 'categoría';
                                    else: 
                                        echo the_title();
                                    endif; 
                                ?>
                             </h1>
                            <p class="headband__paragraph">
                                <?php
                                    /**
                                     * Get Advance Custom Field (Datos Contacto)
                                     */
                                ?>
                                <?= ( is_page('contacto') ) ? get_field('headband_text') : get_field('headband_text','theme-info-contact')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end//Headband -->

    </div>
    <!-- Page Header | End -->

    <!-- Main | Start -->
    <main class="page__main">
