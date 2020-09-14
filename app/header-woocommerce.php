<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    /**
     * Partial - Head
     * @return partial
     */
    get_template_part('template-parts/partials/head/head');
    ?>
</head>

<body <?php body_class(); ?> >
<!-- Page container | Start -->
<div class="page" id="page">

    <!-- Page Header | Start -->
    <div class="page__header">
        <!-- Start | Main Header Light -->
        <header class="header header--light">
            <?php 
            /**
             * Component - Header Nav Light
             * @return component
             */
            get_template_part('template-parts/components/nav/main/nav-main-light');
            ?>

            <?php
            /**
             * Component - Headband Woocommerce
             * @return component
             */
            get_template_part('template-parts/components/headband/headband-woocommerce');
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
    <!-- Page Header | End -->

    <!-- Main | Start -->
    <main class="page__main">
