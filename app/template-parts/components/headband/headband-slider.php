<div class="headband"> <!-- start//Headband Slider-->
    <div class="grid-x">
        <div class="cell large-6">

            <figure class="headband__slider"><!-- start//Swiper-->
                <div class="swiper-container" id="slider-contact" style="height: 100%;">
                    <div class="swiper-wrapper">
                        <?php
                            if( is_page('contacto') ):
                                $slider = get_field('headband_slider');
                            else:
                                $slider = get_field('headband_slider','theme-info-contact');
                            endif;

                            foreach ($slider as $slide):
                        ?>
                            <div class="swiper-slide">
                                <img src="<?= $slide['url'] ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </figure><!-- end//Swiper-->

        </div>
        <div class="cell large-6">
            <div class="grid-x align-middle align-center" style="height: 100%;">

                <div class="headband__caption"><!-- start//Headband Caption -->
                    
                    <h1 class="headband__title">
                        <?php
                            if( is_shop() ): 
                                echo 'tienda';
                            elseif( is_product_category() ):
                                echo single_cat_title();
                            else: 
                                echo the_title();
                            endif; 
                        ?>
                    </h1>

                    <?php if ( is_page('contacto') || is_shop()): ?>
                        <p class="headband__paragraph">
                        <?php
                            /**
                             * Get Advance Custom Field (Información General)
                             * @return string
                             */
                            echo get_field('headband_text', 'theme-info-contact');
                        ?>
                        </p>

                        <?php
                        else:
                            /**
                             * Print Category Description
                             * @return string
                             */
                            echo( category_description(get_the_category()) );
                        endif;
                    ?>

                    
                </div><!-- end//Headband Caption -->

            </div>
        </div>
    </div>
</div><!-- end//Headband Slider-->