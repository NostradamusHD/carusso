<div class="header__top"><!-- start//Header Top -->
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell auto">

                <h1 class="message-sale">
                    <?= get_field('mesage_top','theme-info-contact')?> <!-- Message Top -->
                    <a href="<?= get_field('mesage_top_link','theme-info-contact')?>" class="link">comprar ahora</a> <!-- Message Top Link -->
                </h1>

            </div>
            <div class="cell medium-2 large-3 show-for-large">
                <div class="grid-x align-right"><!-- start//Links User -->

                <?php if( class_exists("WooCommerce") ): ?>
                    <?php if( is_user_logged_in() ): ?>
                        
                        <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="link"><small><span class="">MI CUENTA</span></small></a> 
                        
                        <a style="margin-left:1rem" href="<?= wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ) ?>" class="link"><small><span class="">SALIR</span></small></a>

                    <?php else: ?>

                        <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="link"><small><span class="">LOGIN / REGISTRO</span></small></a>

                    <?php endif; ?>

                    <a class="button-cart" id="button-minicart-desktop"><!-- Button Mini Cart Desktop -->
                        <i class="fal fa-shopping-cart"></i>
                        <span class="button-cart__badge"><?= WC()->cart->get_cart_contents_count() ?></span>
                    </a>
                <?php endif; ?>

                </div><!-- ennd//Links User -->
            </div>
        </div>
    </div>
</div><!-- end//Header Top -->

<div class="header__main"><!-- start//Header Nav -->
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell small-3 hide-for-large">

                <button type="button" class="button-menu" id="button-open-menu"><!-- Button Open Menu -->
                    <div class="fal fa-bars"></div>
                </button>

            </div>
            <div class="cell small-6 large-2">

                <figure class="logo" ><!-- Logo Carusso -->
                    <a href="<?= get_home_url() ?>"><img src="<?= get_theme_file_uri('/static/images/')?>img-carusso-2.svg" alt=""></a>
                </figure>

            </div>
            <div class="cell small-3 hide-for-large" style="text-align: right;">

                <a href="" class="button-cart" id="button-minicart-mobile"> <!-- Button Mini Cart -->
                    <i class="fal fa-shopping-cart"></i><span class="button-cart__badge">0</span>
                </a>

            </div>
            <div class="cell large-7">

                <div class="main-menu__background"></div><!-- Background Dark -->

                <nav class="main-menu" id="main-menu"><!-- start//Menu Container -->

                    <?php
                        /**
                         * Component Woocommerce - Product SearchForm
                         * @return template
                         */
                        get_template_part('woocommerce/product-searchform');
                    ?>

                    <ul class="main-menu__container" id="main-menu"> <!-- start//Main Menu -->

                        <li class="main-menu__item">
                            MENÚ
                            <span class="close-button close-button--mobile" id="button-close-menu"></span><!-- Button Close Menu -->
                        </li>

                            <?php
                            /**
                             * Get Menu custom (App/functions/helpers)
                             * @return array
                             */
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

                                            <ul class="main-children"> <!-- start//Main Menu Children -->
                                            <?php
                                                $parent = "";
                                                
                                                ( $item->title == 'Hombre' ) ? $parent = 'hombres' : $parent = 'mujeres';                                                   

                                                $categories = get_categories_woocommerce($parent);

                                                foreach( $categories as $categorie ):
                                            ?>
                                                    <li class="main-children__title">
                                                        
                                                        <a href="<?= esc_url(get_term_link( $categorie->slug, $categorie->taxonomy)); ?>">
                                                            <?= $categorie->name ?>
                                                        </a>
                                                        
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

                                            </ul> <!-- end//Main Menu Children -->
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

                        <li class="main-menu__item hide-for-large"> <!-- Button WhatsApp -->
                            <a target="_blank" href="https://wa.me/51<?= get_field('whatsapp','theme-info-contact')?>" class="button-header">
                                <i class="fab fa-whatsapp"></i> CONTACTAR
                            </a>
                        </li>
                    </ul><!-- end//Main Menu -->
                </nav><!-- end//Menu Container-->

            </div>
            <div class="cell large-3 show-for-large">
                <div class="grid-x align-right">

                    <div class="buscador"><!-- Button Search -->
                        <button type="button" class="button-search" id="button-open-search">
                            <i class="fal fa-search"></i>
                        </button>
                    </div>

                    <a target="_blank" href="https://wa.me/51<?= get_field('whatsapp','theme-info-contact')?>" class="button-header"><!-- Button WhatsApp -->
                        <i class="fab fa-whatsapp"></i> CONTACTAR
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- end//Header Nav -->