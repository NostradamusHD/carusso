<?php
/**
 * Get Advance Custom Field - Datos Home / Sección Categorías
 */
?>

<?php if( !empty(get_field('category') ) ):  ?>

<section class="section home-section-1" 
        style="background:linear-gradient(0deg, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
            url(<?= get_theme_file_uri('/static/images/')?>img-background-section-1.jpg);
            filter: grayscale(100%);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;"><!-- start//Section 1 -->

    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y">
            
            <?php
            /**
             * Get Advance Custom Field - Field Group (Datos Home)
             * @return array
             */            
            foreach( get_field('category')  as $category ):
            ?>

            <div class="cell medium-6">
                <figure class="card-theme"><!-- start//Card -->

                    <img src="<?= esc_url($category['background_image']['url']); ?>">

                    <div class="card-theme__caption">
                        <h1 class="card-theme__title"><?= $category['category_name'] ?></h1>
                        <a href="<?= esc_url($category['category_link']); ?>" class="button-theme--outline-light">
                            <?= $category['button_name'] ?>
                        </a>
                    </div>

                </figure><!-- end//Card -->
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</section><!-- end//Section 1 -->

<?php endif; ?>