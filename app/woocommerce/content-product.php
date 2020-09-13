<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class('', $product); ?>>

<div class="product-container">
	<?php 
		/**
		 * Onsale product
		 */		
		get_template_part('woocommerce/loop/sale-flash');
	?>

	<?php
	if( $product->get_image_id() != null ):

		if( !$product->is_type('variable')):
			$image_url = wp_get_attachment_image_url( $product->get_image_id(), 'full' );
			?>
			<a href="<?= esc_url($product->get_permalink()); ?>">
				<img src="<?= esc_url($image_url); ?>" alt="" class="product__single">
			</a>

			<?php
			
			if( $product->get_stock_quantity() > 0 || $product->get_stock_quantity() == null  ):
				?>
				<a href="?add-to-cart=<?= esc_attr( $product->get_id() ); ?>" 
				data-quantity="1" 
				class="button product_type_simple add_to_cart_button ajax_add_to_cart"
				data-product_id="<?= esc_attr( $product->get_id() ); ?>"
				data-product_sku="<?= esc_attr( $product->get_sku() );?>"
				aria-label="Añade <?= $product->get_name(); ?> a tu carrito"
				rel="nofollow">
				Añadir al carrito
				</a>	
				<?php
			else:
				?>
				<a href="<?= esc_url($product->get_permalink()); ?>"
				class="button product_type_simple add_to_cart_button">
				Leer más</a>
				<?php
			endif;
		else:
			$attributes = $product->get_attributes();

			foreach ($attributes as $name => $options):
				if( $name == 'pa_color' ):
					if( $product && taxonomy_exists( $name )):
						$terms = array();
						$terms = wc_get_product_terms( $product->get_id() , $name, array('fields' => 'all') );
						$variations = [];
						$available_variations = $product->get_available_variations();						
						if(!empty($available_variations)): //Start variations
							foreach ($available_variations as $variation):
								$variations[$variation["attributes"]["attribute_pa_color"]] = $variation["image"]["thumb_src"];
							endforeach;
							?>
								<div class="product__slideshow" id="product-slideshow-<?= esc_attr( $product->get_id() ); ?>"> <!-- Start | SlideShow Shop Product -->

									<a href="<?= esc_url($product->get_permalink());?>" class="">
										<div class="product__slideshow-wrapper"> <!-- Start | SlideWrapper -->
											<?php foreach ($variations as $color => $variation) : ?>
												<img class="" src="<?= esc_url($variation) ?>" alt="" attr-color = "<?= esc_attr($color); ?>"> <!-- Slide Product -->
											<?php endforeach; ?>											
										</div>
									</a><!-- End | SlideWrapper -->

									<div class="product__slideshow-pagination"> <!-- Start | Slide Pagination -->
										<?php foreach ($terms as $term) : ?>											
											<button type="button" 
													attr-color="<?= esc_attr($term->slug); ?>"
													class="product__slideshow-pagination-item"
													data-tooltip
													tabindex="1" 
													title="<?= esc_attr($term->name); ?>"
													data-position="top"
													data-alignment="center"
													style="background: <?= ywccl_get_term_meta( $term->term_id, $name.'_yith_wccl_value' ); ?>"
													></button>
										<?php endforeach; ?>
									</div><!-- End | Slide Pagination -->

								</div><!-- End | SlideShow Shop Product -->
								<a href="<?= esc_url( $product->get_permalink() )?>" 
									data-quantity="1"
									class="button product_type_variable add_to_cart_button"
									data-product_id="<?= esc_attr( $product->get_id() );?>"
									data-product_sku="<?= esc_attr($product->get_sku()) ?>"
									aria-label="Elige las opciones para “<?= $product->get_name(); ?>”"
									rel="nofollow">Seleccionar opciones</a>
							<?php
						else:
							echo 'No tiene Stock';
						endif; // End variations		
					endif;
				endif;
			endforeach;
		endif;
	else: ?>
		<img src="<?= esc_url(get_home_url().'/wp-content/uploads/woocommerce-placeholder.png'); ?>" alt="" class="product__single">
	<?php 
	endif;
	?>
	</div>
	
    <h1 class="woocommerce-loop-product__title"><?= $product->get_name(); ?></h1>
	
	<?php
		/**
		 * Categories
		 */
		$product_id = $product->get_id();
		$categories = wc_get_product_category_list( $product_id );

	?>
		<span class="carusso-wc-category"><?= $categories ?></span>
		
	<?php
		/**
		 * Get Template Part Rating
		 */
		get_template_part('woocommerce/loop/rating');
	?>
	
	<?php
		/**
		 * Get Template Part Price
		 */
		get_template_part('woocommerce/loop/price');
	?>

</li>
