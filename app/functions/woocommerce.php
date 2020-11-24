<?php

if(class_exists("Woocommerce")):

    /**
     * Añadiendo soporte de woocommerce al tema Carusso
     */
    add_theme_support('woocommerce');

    /**
     * Resetear estilos de woocommerce
     */
    add_filter('woocommerce_enqueue_styles', '__return_empty_array');

    /**
     * Quitar código postal
     */
    add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

    function custom_override_checkout_fields( $fields ) {
      unset($fields['billing']['billing_postcode']);

      return $fields;
    }

    /**
     * Quitar la función de método de pago
     */
    //add_filter('woocommerce_cart_needs_payment', '__return_false');

    /**
     * Agregando lightbox al detallo del producto
     */

    add_theme_support("wc-product-gallery-zoom");
    add_theme_support("wc-product-gallery-lightbox");
    add_theme_support("wc-product-gallery-slider");

    /**
     * Remover contador, breadcrumb, paginación por defecto
     */
    remove_action("woocommerce_before_main_content", "woocommerce_breadcrumb", 20);
    remove_action("woocommerce_before_shop_loop", "woocommerce_result_count", 20);
    remove_action("woocommerce_after_shop_loop", "woocommerce_pagination", 10);

    /**
     * Agrega paginación personalizada
     */
    function carusso_pagination()
    {
        global $wp_query;

        if ($wp_query->max_num_pages <= 1) return;

        $big = 999999999;

        $pages = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'array',
            'prev_next' => true,
            'prev_text' => __('<i class="fal fa-chevron-left"></i>'),
            'next_text' => __('<i class="fal fa-chevron-right"></i>'),
        ));

        if (is_array($pages)) {
            $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
            echo '<div class="pagination-wrap"><ul class="pagination">';
            foreach ($pages as $page) {
                echo "<li>$page</li>";
            }
            echo '</ul></div>';
        }
    }

    /**
     * Agregar dropdown product per page personalizado
     */
    function carusso_woocommerce_catalog_page_ordering()
    {
        $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);

        echo '<div class="woocommerce-perpage"><span>ver</span>';
        echo '<select onchange="if (this.value) window.location.href=this.value">';

        $orderby_options = array(
            '6' => '6 items',
            '9' => '9 items',
            '12' => '12 items',
            '24' => '24 items',
            '50' => 'All items'
        );

        foreach ($orderby_options as $value => $label) {

            echo "<option " . selected($per_page, $value) . " value='?perpage=$value'>$label</option>";
        }

        echo '</select>';
        echo '</div>';
    }

    add_action('pre_get_posts', 'pro_pre_get_products_query');

    function pro_pre_get_products_query($query)
    {
        $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);

        if ($query->is_main_query() && !is_admin() && is_post_type_archive('product')) {
            $query->set('posts_per_page', $per_page);
        }
    }

    /**
     * Boton carrito Ajax
     */
    add_filter( 'woocommerce_add_to_cart_fragments', 'carusso_add_to_cart_fragments' );

    function carusso_add_to_cart_fragments( $fragments ) {
        global $woocommerce;

        ob_start();
        ?>

        <span class="button-cart__badge"><?= WC()->cart->get_cart_contents_count() ?></span>

        <?php
        $fragments['span.button-cart__badge'] = ob_get_clean();
        return $fragments;
    }

    
    /**
     * Change several of the breadcrumb defaults
     */
    add_filter( 'woocommerce_breadcrumb_defaults', 'carusso_woocommerce_breadcrumbs' );
    function carusso_woocommerce_breadcrumbs() {
        return array(
                'delimiter'   => ' &#47; ',
                'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
                'wrap_after'  => '</nav>',
                'before'      => '',
                'after'       => '',
                'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
            );
    }

    /**
     * Change Num colums on page shop
     */

    add_filter('loop_shop_columns', 'loop_columns', 999);

    if (!function_exists('loop_columns')) {
    
         function loop_columns() {
        
         return 3;
        
         }
    
    }

    /** Variaciones de productos en la página principal de la tienda **/

    /*
    function change_loop_add_to_cart() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    add_action( 'woocommerce_after_shop_loop_item', 'template_loop_add_to_cart', 10 );
    }
    
    add_action( 'init', 'change_loop_add_to_cart', 10 );
    
    function template_loop_add_to_cart() {
        global $product;
        
        if ( ! $product->is_type( 'variable' ) ) {
        woocommerce_template_loop_add_to_cart();
        return;
        }
        
        remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
        add_action( 'woocommerce_single_variation', 'loop_variation_add_to_cart_button', 20 );
        
        woocommerce_template_single_add_to_cart();
    }
    
    function loop_variation_add_to_cart_button() {
        global $product;
        
        ?>
        <div class="woocommerce-variation-add-to-cart variations_button">
            <button type="submit" class="single_add_to_cart_button button"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
            <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
            <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
            <input type="hidden" name="variation_id" class="variation_id" value="0" />
        </div>
        <?php
        }
        */
endif;
