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
                <!-- Start | Main Header -->
                <header class="header">
                    <?php
                        /**
                         * Component - Nav Main
                         * @return component
                         */
                        get_template_part('template-parts/components/nav/main/nav-main');
                    ?>

                    <?php
                        /**
                         * Component - Mini Cart
                         * @return component
                         */
                        get_template_part('template-parts/components/mini-cart/mini-cart');
                    ?>
                </header>
                <!-- End | Main Header -->

                <?php
                    /**
                     * Component - Header Slider
                     * @return component
                     */
                    get_template_part('template-parts/components/slider/slider-header');
                ?>
            </div>
            <!-- Page Header | End -->

            <!-- Main | Start -->
            <main class="page__main">
