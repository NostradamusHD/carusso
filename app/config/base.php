<?php

return [

    'resources' => [
        /**
         * Fontawesome
         * */
        'fontawesome' => [
            'cdn' => [
                'base' => 'https://pandora-space-america.nyc3.digitaloceanspaces.com/statics/icons/5.6.3/js/fontawesome.min.js',
                'style' => 'https://pandora-space-america.nyc3.digitaloceanspaces.com/statics/icons/5.6.3/js/light.min.js',
                'brands' => 'https://pandora-space-america.nyc3.digitaloceanspaces.com/statics/icons/5.6.3/js/brands.min.js'
            ],

            'local' => [
                'base' => get_theme_file_uri('/static/fonts/awesome/fontawesome.min.js'),
                'style' => get_theme_file_uri('/static/fonts/awesome/light.min.js'),
                'brands' => get_theme_file_uri('/static/fonts/awesome/brands.min.js')
            ]
        ],

        /**
         * Packages
         * */
        'package_jquery' => [
            'cdn' => 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
            'local' => get_theme_file_uri('/static/js/libs/jquery/jquery.min.js')
        ],

        'package_foundation' => get_theme_file_uri('/static/js/package.foundation-sites.bundle.js'),

        'package_fancyapps' => get_theme_file_uri('/static/js/package.fancyapps.bundle.js'),

        'package_dom7' => get_theme_file_uri('/static/js/package.dom7.bundle.js'),

        'package_swiper' => get_theme_file_uri('/static/js/package.swiper.bundle.js'),

        'package_aos' => get_theme_file_uri('/static/js/package.aos.bundle.js'),

        /**
         * Styles
         * */
        'style_main' => get_theme_file_uri('/static/css/main.css'),

        /**
         * Scripts
         * */
        'script_main' => get_theme_file_uri('/static/js/main.bundle.js'),

        'script_map' => get_theme_file_uri('/static/js/map.bundle.js'),

        'script_galleries' => get_theme_file_uri('/static/js/galleries.bundle.js'),

        'script_sliders_homepage' => get_theme_file_uri('/static/js/sliders-homepage.bundle.js'),

        'script_slider_contact' => get_theme_file_uri('/static/js/slider-contact.bundle.js'),

        'script_animation' => get_theme_file_uri('/static/js/animation.bundle.js'),

        'script_slideshow_shop' => get_theme_file_uri('/static/js/slideshow-shop.bundle.js')
    ]
];
