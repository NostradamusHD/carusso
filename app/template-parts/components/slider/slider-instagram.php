<?php
/**
 * Get Advance Custom Field - Datos Home ó Datos Hombre ó Datos Mujer / Slider Instagram
 */
$slider_instagram = get_field('slider_instagram');

$images = $slider_instagram['slider_images'];

if( !empty($images) ):
?>
<section class="section" >
    <div class="grid-container" >

        <h1 class="section__subtitle" ><?= $slider_instagram['title_large']?></h1>
        <h1 class="section__text" ><?= $slider_instagram['title_small']?></h1>

        <div class="slider-instagram" >
            <div class="swiper-container" id="slider-instagram">
                <div class="swiper-wrapper"><!-- start//Slider Wrapper-->
                    
                    <?php foreach ($images as $image): ?>

                    <div class="swiper-slide">
                        <div class="card-product-theme">
                            <figure class="card-product-theme__img">
                                <a href="<?= $image['url_image'] ?>" target="_blank"><img src="<?= $image['item_image'] ?>" alt="Ver en Instagram"></a>
                            </figure>
                        </div>
                    </div>
                    
                    <?php endforeach; ?>

                </div><!-- end//Slider Wrapper-->
                
                <!-- start//Slider Pagination -->
                <div class="swiper-pagination"></div>

            </div>
            <!-- start//Slider Controller -->
            <button type="button" class="slider-controller slider-controller--left" id="slider-instagram-left">
                <i class="fal fa-chevron-left"></i>
            </button>
            <button type="button" class="slider-controller slider-controller--right" id="slider-instagram-right">
                <i class="fal fa-chevron-right"></i>
            </button>
            <!-- end//Slider Pagination -->
        </div>
    </div>
</section>
<?php    
endif;
