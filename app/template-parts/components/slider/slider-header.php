<!-- Start | Main Slider -->
<div class="slider-main" data-aos="fade-in" data-aos-delay="200">
    <div class="swiper-container" id="slider-main">
        <div class="swiper-wrapper"><!-- start//Wrapper -->
            <?php
                /**
                 * Get Advance Custom Field - Datos Home / Slider Home
                 */
                $slider = get_field('slider_primary');

                if( !empty($slider) ):
                    foreach ($slider as $item):
            ?>
                    <div class="swiper-slide">
                        <img src="<?= esc_url($item); ?>" />
                    </div>
            <?php
                    endforeach;
                endif;
            ?>
        </div><!-- start//Wrapper -->
        
        <div class="swiper-pagination"></div><!-- Pagination -->
        
        <!-- start//Controllers -->
        <div class="control-swiper control-swiper--left show-for-medium" id="slider-main-left">
            <i class="fal fa-chevron-left"></i>
        </div>
        <div class="control-swiper control-swiper--right show-for-medium" id="slider-main-right">
            <i class="fal fa-chevron-right"></i>
        </div>
        <!-- end//Controllers -->
    </div>
    <div class="slider-main__caption">

        <?php
            /**
             * Get Advance Custom Field - Datos Home / Slider Home
             */
            $caption = get_field('slider_caption');
        ?>

        <h1 class="subtitle"><?= $caption['title_small']?></h1>
        
        <h1 class="title"><?= $caption['title_large']?></h1>
        
        <div class="group-buttons">
            <?php
                $group_buttons = $caption['button_group'];

                if( !empty($group_buttons) ):
                    foreach ($group_buttons as $button):
                        echo '<a href="'.$button['button_url'].'" class="button-theme--outline-light">'.$button['button_text'].'</a>';
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</div>
<!-- End | Main Slider -->