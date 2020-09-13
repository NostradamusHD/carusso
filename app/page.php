<?php

if( is_page('hombre') ):

    get_header('slider');
    get_template_part('template-parts/pages/hombre');

elseif( is_page('mujer') ):

    get_header('slider');
    get_template_part('template-parts/pages/mujer');

elseif( is_page('nosotros') ):

    get_header();
    get_template_part('template-parts/pages/nosotros');
    
elseif( is_page('contacto') ):
    
    get_header('headband');
    get_template_part('template-parts/pages/contacto');

elseif( is_page('guia-de-tallas') ):

    get_header('account');
    get_template_part('template-parts/pages/guia-de-tallas');

elseif( is_page('ofertas') || is_page('novedades') ):

    get_header('account');
    get_template_part('template-parts/pages/ofertas');

elseif( is_cart() || is_checkout() ):

    get_header('woocommerce');
    get_template_part('template-parts/content/woocommerce');

elseif( is_account_page() ):

    get_header('account');
    get_template_part('template-parts/content/woocommerce');

else:

    get_header('account');
    get_template_part('template-parts/content/content');

endif;

get_footer();
