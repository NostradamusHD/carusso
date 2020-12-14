<div class="header__top">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell auto">
                <?php
                    if(get_field('mesage_top','theme-info-contact')):
                        ?>
                        <h1 class="message-sale message-sale--light">
                            <?= get_field('mesage_top','theme-info-contact')?> <a href="<?= get_field('mesage_top_link','theme-info-contact')?>" class="link link--light">comprar ahora</a>
                        </h1>
                        <?php
                    endif;
                ?>
            </div>
            <div class="cell medium-2 large-3 show-for-large">
                <div class="grid-x align-right">

                    <?php if( class_exists("WooCommerce") ): ?>
                        <?php if( is_user_logged_in() ): ?>

                            <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="link link--light"><small><span class="">MI CUENTA</span></small></a>

                            <a style="margin-left:1rem" href="<?= wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ) ?>" class="link link--light"><small><span class="">SALIR</span></small></a>

                        <?php else: ?>

                            <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="link link--light"><small><span class="">LOGIN / REGISTRO</span></small></a>

                        <?php endif; ?>

                        <a class="button-cart button-cart--light" id="button-minicart-desktop"><i class="fal fa-shopping-cart"></i><span class="button-cart__badge"><?= WC()->cart->get_cart_contents_count() ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
