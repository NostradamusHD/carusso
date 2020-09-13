
            </main>
            <!-- Main | End -->

            <!-- Footer | Start -->
            <footer class="page__footer">
                <div class="grid-container">
                    <div class="grid-x grid-margin-y grid-margin-x">
                        <div class="cell medium-6 large-3">
                            <figure class="logo logo--footer">
                                <img src="<?= get_theme_file_uri('/static/images/')?>/logo-carusso-white-2.svg" alt="">
                            </figure>
                            <h1 class="footer__title">SÍGUENOS EN:</h1>
                            <div class="group-icons">
                                <?php
                                $menu_social = get_menu_custom('menu-social');

                                if( !empty($menu_social) ):
                                    foreach ($menu_social as $item):
                                        echo '<a href="'.$item->url.'" class="group-icons__link">
                                            <i class="fab fa-'.$item->title.'"></i>
                                        </a>';
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="cell medium-6 large-3">
                            <h1 class="footer__title">ATENCIÓN AL CLIENTE</h1>
                            <p class="footer__text">
                                <i class="footer__icon fab fa-whatsapp"></i><span>+51 <?= get_field('whatsapp','theme-info-contact')?></span>
                            </p>
                            <p class="footer__text">
                                <i class="footer__icon fal fa-watch"></i><span>Lun. a Vie. <?= get_field('atention_hour_one','theme-info-contact')?><br>Sab. <?= get_field('atention_hour_two','theme-info-contact')?></span>
                            </p>
                            <p class="footer__text">
                                <i class="footer__icon fal fa-envelope"></i><span><?= get_field('email','theme-info-contact')?></span>
                            </p>
                            <a href="<?= get_home_url(); ?>/libro-de-reclamaciones" class="footer__link">
                                <i class="footer__icon fal fa-book"></i><span>Libro de Reclamaciones</span>
                            </a>
                        </div>
                        <div class="cell medium-6 large-3">
                            <h1 class="footer__title">ATENCIÓN ONLINE</h1>
                            <a href="<?= get_home_url(); ?>/como-comprar" class="footer__link">Cómo comprar</a>
                            <a href="<?= get_home_url(); ?>/guia-de-tallas" class="footer__link">Guía de Tallas</a>
                            <a href="<?= get_home_url() ;?>/cambio-y-devoluciones" class="footer__link">Cambio y Devoluciones</a>
                            <a href="<?= get_home_url() ;?>/politicas-de-envio" class="footer__link">Políticas de envío</a>
                        </div>
                        <div class="cell medium-6 large-3">
                            <h1 class="footer__title">MI CUENTA</h1>
                            <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="footer__link">Registrate</a>
                            <a href="<?= get_permalink( get_option('woocommerce_myaccount_page_id') );?>" class="footer__link">Inicia Sesión</a>
                            <a href="<?= wc_get_account_endpoint_url( 'orders' ); ?>" class="footer__link">Ver Pedidos</a>
                            <a href="<?= wc_get_account_endpoint_url( 'lost-password' );?>" class="footer__link">¿Olvidaste la contraseña?</a>
                        </div>
                    </div>
                    <div class="grid-x align-justify grid-padding-y">
                        <div class="cell large-6">
                            <p class="footer__copy">
                                CARUSSO © 2020 Todos los Derechos Reservados.
                            </p>
                        </div>
                        <div class="cell large-3">
                            <figure class="footer__cards">
                                <img src="<?= get_theme_file_uri('static/images/cards.png') ?>" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer | End -->
        </div>
        <!-- Page container | End -->
        <?php wp_footer(); ?>
    </body>
</html>
