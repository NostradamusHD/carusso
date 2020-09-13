<?php
/**
 * Get Advance Custom Field - Datos Home / Sección Novedades
 */
?>

<?php if( !empty(get_field('background_image')['url']) ): ?>

<section class="section section-caption" style="
            background:url(<?= get_field('background_image')['url'] ?>);
            filter: grayscale(100%);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;"><!-- start//Section 3 -->

    <div class="grid-container">
        <div class="section-caption__container">

            <h1 class="section-caption__subtitle" ><?= get_field('small_text') ?></h1>

            <h1 class="section-caption__title" ><?= get_field('large_text') ?></h1>
            
            <a href="<?= get_home_url().'/novedades'?>" class="button-theme--outline" >EXPLORA LO NUEVO</a>
        </div>
    </div>

</section><!-- end//Section 3 -->

<?php endif; ?>