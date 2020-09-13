<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'carusso-single', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php woocommerce_breadcrumb(); ?>
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>



		<?php
			$terms = get_the_terms($product->get_id(), 'product_cat');

			if($terms[0]->name == 'Calzado'):
		?>
			<i class="fal fa-ruler-combined"></i><a class="modal__link" data-open="exampleModal11">Guía de Tallas</a>

			<div class="reveal" id="exampleModal11" aria-labelledby="exampleModalHeader11" data-reveal>
			
			<div class="modal">
				<div class="modal__header">
					<figure class="modal__logo">
						<img src="<?= get_theme_file_uri('/static/images/img-carusso-2.svg'); ?>" alt="">
					</figure>
					<h1 class="modal__title"> Guía de Tallas</h1>
				</div>
				<div class="modal__body">
					<table class="modal-table">
						<thead>
							<tr>
								<th class="modal-table__title">Tallas Perú (Dama)</th>
								<th class="modal-table__title">Medidas del pie en centímetros *</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>35</td>
							<td>23</td>
							</tr>
							<tr>
							<td>36</td>
							<td>24</td>
							</tr>
							<tr>
							<td>37</td>
							<td>24.5</td>
							</tr>
							<tr>
							<td>38</td>
							<td>25.5</td>
							</tr>
							<tr>
							<td>39</td>
							<td>26</td>
							</tr>
							<tr>
							<td>40</td>
							<td>26.6</td>
							</tr>
						</tbody>
					</table>
					<table class="modal-table">
						<thead>
							<tr>
							<th class="modal-table__title">Tallas Perú (Varón)</th>
							<th class="modal-table__title">Medidas del pie en centímetros *</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
							<td>38</td>
							<td>25.5</td>
							</tr>
							<tr>
							<td>39</td>
							<td>26</td>
							</tr>
							<tr>
							<td>40</td>
							<td>26.6</td>
							</tr>
							<tr>
							<td>41</td>
							<td>27.5</td>
							</tr>
							<tr>
							<td>42</td>
							<td>28</td>
							</tr>
							<tr>
							<td>43</td>
							<td>28.5</td>
							</tr>
							<tr>
							<td>44</td>
							<td>29.5</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal__footer">
					<h1 class="modal__title">Sigue estos cinco pasos, para saber cuánto calzas</h1>
                    <figure>
                        <img src="<?= get_theme_file_uri('/static/images/como-medir-pie.jpg') ?>" alt="">
                    </figure>
                    <ol>
                        <li>Pon una hoja en blaco en el piso y contra la pared.</li>
                        <li>Pon tu pie encima de la hoja, de manera que tu talón esté contra la pared. Tú decides si haces la medida con o sin medidas, dependiendo de cómo uses generalmente tus zapatos. </li>
                        <li>
                            Marca donde empieza el talón, e igualmente donde termina la parte más larga de tu pie, luego mide la distancia entre los dos. El número que te dé, son los centímetros de largo de tu pie, ya sólo te queda consultar en nuestra guía de tallas.
                        </li>
                        <li>
                            Recomendación especial, para zapatos cerrados es ideal sumarle 0.5 cm, para que garantices que te quede mucho mejor.
                        </li>
                        <li>
                            Si quedas entre dos tallass, te recomendamos elegir la más grande. Si compras tu calzado y no es tu talla, puedes devolverlo y cambiarlo para la talla que mejor se acomode a tu pie.
                        </li>
                    </ol>
				</div>
			</div>
			<button data-close aria-label="Close Accessible Modal" type="button">
				<span aria-hidden="true"> <i class="close-button"></i> </span>
			</button>
			</div>
			<?php endif; ?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
