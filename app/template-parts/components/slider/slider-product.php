
<?php if( !empty( get_field('products_caroussel') ) ): ?>
<section class="section" >
    <div class="grid-container" >

        <h1 class="section__subtitle" ><?= get_field('text_small') ?></h1>
        <h1 class="section__title" ><?= get_field('text_large') ?></h1>

        <div class="slider-products" ><!-- start//Slider Products -->

            <div class="swiper-container" id="slider-products">
                <div class="swiper-wrapper">

                <?php foreach ( get_field('products_caroussel') as $product ): ?>
                    <div class="swiper-slide">

                        <div class="card-product-theme"><!-- start//Card Product -->

                            <a href="<?= $product['product_url']?>">
                                <figure class="card-product-theme__img">
                                    <img src="<?= $product['product_image']['url'] ?>" alt="">
                                </figure>
                            </a>

                            <div class="card-product-theme__description">
                                <h1 class="card-product-theme__name"><?= $product['product_name'] ?></h1>
                                <h1 class="card-product-theme__price">S/. <?= $product['product_price'] ?></h1>
                            </div>
                            
                        </div><!-- end//Card Product -->
                    </div>
                <?php endforeach; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- start//Slider Controllers -->
            <button type="button" class="slider-controller slider-controller--left" id="slider-products-left">
                <i class="fal fa-chevron-left"></i>
            </button>
            <button type="button" class="slider-controller slider-controller--right" id="slider-products-right">
                <i class="fal fa-chevron-right"></i>
            </button>
            <!-- end//Slider Controllers -->
        </div><!-- start//Slider Products -->
    </div>
</section>
<?php endif; ?>
