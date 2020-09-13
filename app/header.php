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
        <header class="header">
            <?php
            /**
             * Component - Header Top
             * @return component
             */
            get_template_part('template-parts/components/header-top');
            ?>

            <?php
            /**
             * Component - Header Nav
             * @return component
             */
            get_template_part('template-parts/components/header-nav');
            ?>

            <?php
            /**
             * Component - Mini Cart
             * @return component
             */
            get_template_part('template-parts/components/minicart');
            ?>
        </header>
    </div>
    <!-- Header | End -->

    <!-- Main | Start -->
    <main class="page__main">
