<?php
/**
 * Get Advance Custom Field - Datos Nosotros 
 */
?>
<section class="section">
    <div class="grid-container">
        <div class="grid-x align-center align-middle grid-margin-x grid-margin-y">
            <div class="cell large-5">
                <figure class="section__figure">
                    <img src="<?= get_field('about_section_one_image')?>" alt="">
                </figure>
            </div>
            <div class="cell large-6">
                <h1 class="section__title-2"><?= get_field('about_section_one_title')?></h1>
                <h1 class="section__subtitle-2"><?= get_field('about_section_one_subtitle')?></h1>
                <p class="section__paragraph">
                    <?= get_field('about_section_one_text')?>
                </p>
            </div>
        </div>
    </div>
</section>