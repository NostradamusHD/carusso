<section class="section">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-3">
                <h1 class="section__title-primary">categorías</h1>
                <nav class="categories-menu">
                <?php 

                    $category = "";

                    if( is_page( 'hombre' ) ):
                        $parent = "hombres";
                    else:
                        $parent = "mujeres";
                    endif;
                        $subcats = get_categories_woocommerce($parent);
                        echo '<ul class="categories-menu__container">';
                            foreach ($subcats as $sc) {
                            $link = get_term_link( $sc->slug, $sc->taxonomy );
                                echo '<li class="categories-menu__item" ><a href="'. $link .'" class="categories-menu__link">'.$sc->name.'</a></li>';
                            }
                        echo '</ul>';
                ?>
                    
                </nav>
            </div>
            
            <div class="cell large-9">
                <div class="grid-x grid-margin-y grid-margin-x">
                    <div class="cell medium-6">
                    <?php $first_column = get_field('first_column'); ?>
                        <figure class="card-theme card-theme--small">
                            <img src="<?= $first_column['background_image']['url'] ?>">
                            <div class="card-theme__caption">
                                <h1 class="card-theme__title"><?= $first_column['category_name'] ?></h1>
                                <a href="<?= $first_column['button_url'] ?>" class="button-theme--outline-light"><?= $first_column['button_text'] ?></a>
                            </div>
                        </figure>
                    </div>
                    <div class="cell medium-6">
                    <?php $second_column = get_field('second_column'); ?>
                        <figure class="card-theme card-theme--small">
                            <img src="<?= $second_column['background_image'] ?>">
                            <div class="card-theme__caption">
                                <h1 class="card-theme__title"><?= $second_column['category_name'] ?></h1>
                                <a href="<?= $second_column['button_url'] ?>" class="button-theme--outline-light"><?= $second_column['button_text'] ?></a>
                            </div>
                        </figure>
                    </div>
                    <div class="cell large-12">
                    <?php $column_bottom = get_field('column_bottom'); ?>
                        <figure class="card-theme card-theme--small">
                            <img src="<?= $column_bottom['background_image']['url'] ?>">
                            <div class="card-theme__caption">
                                <h1 class="card-theme__title"><?= $column_bottom['category_name'] ?></h1>
                                <a href="<?= $column_bottom['button_url'] ?>" class="button-theme--outline-light"><?= $column_bottom['button_text'] ?></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
