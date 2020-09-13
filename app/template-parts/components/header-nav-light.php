<div class="header__main header__main--light"><!-- start//Header Nav -->
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell small-3 hide-for-large">

                <button type="button" class="button-menu button-menu--light" id="button-open-menu"><!-- Button Open Menu -->
                    <div class="fal fa-bars"></div>
                </button>

            </div>
            <div class="cell small-6 large-2">

                <figure class="logo" ><!-- Logo Carusso -->
                    <a href="<?= get_home_url() ?>"><img src="<?= get_theme_file_uri('/static/images/')?>logo-carusso-white-2.svg" alt=""></a>
                </figure>

            </div>
            <div class="cell small-3 hide-for-large" style="text-align: right;">

                <a href="" class="button-cart button-cart--light" id="button-minicart-mobile"> <!-- Button Mini Cart -->
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
                            <span class="close-button close-button--mobile" id="button-close-menu"></span>
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
                                                                <a href="<?= $link?>" class="main-children__link">
                                                                    <?= $subcategorie->name ?>
                                                                </a>
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
                            <a href="" class="button-header"><i class="fab fa-whatsapp"></i> CONTACTAR</a>
                        </li>
                    </ul><!-- end//Main Menu -->
                </nav><!-- end//Menu Container-->
            </div>
            <div class="cell large-3 show-for-large">
                <div class="grid-x align-right">

                    <div class="buscador"><!-- Button Search -->
                        <button type="button" class="button-search button-search--light" id="button-open-search">
                            <i class="fal fa-search"></i>
                        </button>
                    </div>

                    <a target="_blank" href="https://wa.me/51<?= get_field('whatsapp','theme-info-contact')?>" class="button-header button-header--light"><!-- Button WhatsApp -->
                        <i class="fab fa-whatsapp"></i> CONTACTAR
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="header__main-list">

                <ul class="header__main-list-container">
                    <?php if( is_account_page() ): ?>
                        <a class="header__main-list-link"> <?= the_title(); ?></a>
                    <?php elseif( is_page('politica-privacidad') ): ?>
                        <h3 class="header__main-list-link"><?= the_title(); ?></h3>
                    <?php elseif( is_page('ofertas') ): ?>
                        <h3 class="header__main-list-link"><?= the_title(); ?></h3>
                    <?php else: ?>
                    <li class="header__main-list-item <?= ( is_cart() ) ? 'active' : '' ?>">
                        <a href="<?= wc_get_cart_url();?> " class="header__main-list-link">Carrito</a>
                    </li>
                    <li class="header__main-list-item <?= ( is_checkout() ) ? 'active' : '' ?>">
                        <a href="<?= wc_get_checkout_url();?> " class="header__main-list-link">Finalizar Compra</a>
                    </li>
                    <li class="header__main-list-item <?= ( is_wc_endpoint_url( 'order-received' ) ) ? 'active' : '' ?>">
                        <a href="" class="header__main-list-link">Orden Completa</a>
                    </li>
                    <?php endif; ?>
                </ul>

        </div>
    </div>
</div><!-- end//Header Nav -->
