<section class="section">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y">
            <div class="cell medium-4 large-3">
                <?php woocommerce_get_sidebar(); ?>
            </div>
            <div class="cell medium-8 large-9">
                <?php
                if( have_posts() ): while( have_posts() ): the_post();
                    the_content();
                endwhile; endif;
                ?>
            </div>
        </div>
    </div>
</section>
