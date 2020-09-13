<?php
/**
 * Get Advance Custom Field - Datos Nosotros 
 */
?>
<section class="section">
    <div class="grid-container">
        <div class="grid-x align-center">
            <div class="cell large-6">
                <h1 class="section__title--center" >
                    la vida de
                </h1>
                <figure class="section__logo" >
                    <img src="<?=get_theme_file_uri('/static/images/') ?>img-carusso.svg" alt="">
                </figure>
                <p class="section__paragraph section__paragraph--center" >
                     <?= get_field('about_paragraph_primary')?>
                </p>
            </div>
        </div>
    </div>
</section>