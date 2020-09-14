<div class="grid-container"><!-- start//Headband Purchase Flow-->
    <div class="header__main-list">

        <ul class="header__main-list-container">
        
            <li class="header__main-list-item <?= ( is_cart() ) ? 'active' : '' ?>">
                <a href="<?= wc_get_cart_url();?> " class="header__main-list-link">Carrito</a>
            </li>

            <li class="header__main-list-item <?= ( is_checkout() ) ? 'active' : '' ?>">
                <a href="<?= wc_get_checkout_url();?> " class="header__main-list-link">Finalizar Compra</a>
            </li>

            <li class="header__main-list-item <?= ( is_wc_endpoint_url( 'order-received' ) ) ? 'active' : '' ?>">
                <a href="" class="header__main-list-link">Orden Completa</a>
            </li>
        </ul>

    </div>
</div><!-- end//Headband Purchase Flow-->