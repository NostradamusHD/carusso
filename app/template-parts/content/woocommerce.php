<?php

if( have_posts() ): while( have_posts() ): the_post();
?>
    <section class="section">
        <div class="grid-container">
            <?php the_content(); ?>
        </div>
    </section>
<?php
endwhile; endif;

