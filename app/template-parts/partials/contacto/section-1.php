<section class="section">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell large-5">
                <div class="grid-x grid-margin-y">
                    <div class="cell medium-6 large-12">
                        <h1 class="section__title-secondary">información sobre nosotros</h1>
                        <h1 class="section__title-primary">más detalles de contacto</h1>
                        <p class="footer__text footer__text--contact">
                            <i class="footer__icon fab fa-whatsapp"></i><span>+51 <?= get_field('whatsapp','theme-info-contact')?></span>
                        </p>
                        <p class="footer__text footer__text--contact">
                            <i class="footer__icon fal fa-watch"></i><span>Lun. a Vie. <?= get_field('atention_hour_one','theme-info-contact')?><br>Sab. <?= get_field('atention_hour_two','theme-info-contact')?></span>
                        </p>
                        <p class="footer__text footer__text--contact">
                            <i class="footer__icon fal fa-envelope"></i><span><?= get_field('email','theme-info-contact')?></span>
                        </p>
                    </div>
                    <div class="cell medium-6 large-12">
                        <h1 class="section__title-primary">siguenos en:</h1>
                        <ul class="social-menu social-menu--left">
                            <?php
                            $menu_social = get_menu_custom('menu-social');

                            if( !empty($menu_social) ):
                                foreach ($menu_social as $item):
                                    echo '<li class="social-menu__item">
                                            <a href="'.$item->url.'" class="social-menu__link">
                                                <i class="fab fa-'.$item->title.'"></i>
                                            </a>
                                        </li>';
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cell large-7">
                <h1 class="section__title-secondary">envíanos tus comentarios</h1>
                <h1 class="section__title-primary">contáctanos para cualquier pregunta</h1>

                <?= do_shortcode('[contact-form-7 id="423" title="Formulario de contacto 1"]'); ?>
                
            </div>
        </div>
    </div>
</section>