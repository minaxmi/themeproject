<?php


add_action('woocommerce_before_cart', 'wander_woocommerce_before_cart', 1);

function wander_woocommerce_before_cart() {
    echo '<section class="cart">
            <div class="container"> 
                <div class="row"> ';
}
add_action('woocommerce_after_cart', 'wander_woocommerce_after_cart', 1);

function wander_woocommerce_after_cart() {
    echo '</div></div></section>';
}
add_filter( 'woocommerce_output_related_products_args', 'wander_related_products_args' );
  function wander_related_products_args( $args ) {
	$args['posts_per_page'] = 3; 
	$args['columns'] = 3; 
	return $args;
}

function woocommerce_template_single_title(){
	echo '<h2>'.get_the_title().'</h2>';
}


//add_filter( 'woocommerce_get_price_html', 'wander_price_html', 100, 2 );

function wander_price_html( $price,$product ){
   // return $product->price;
    if ( $product->price > 0 ) {
      if ( $product->price && isset( $product->regular_price ) ) {
        $from = $product->regular_price;
        $to = $product->price;
        return '<h4 class="price">'.( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to ) .'<span class="old-price-single">'. ( ( is_numeric( $from ) ) ? woocommerce_price( $from ) : $from ) .' </span></h4>';
      } else {
        $to = $product->price;
        return '<h4 class="price">' . ( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to ) . '</span></h4>';
      }
   }
}



remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products',20);


function woocommerce_template_product_description() {
woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'woocommerce_after_shop_loop_item', 'wander_view_product_button', 10);
 
function wander_view_product_button() {
global $product;
$link = $product->get_permalink();
echo do_shortcode('<a href="'.$link.'" class="button addtocartbutton">View Product</a>');
}

add_filter('woocommerce_ajax_loader_url', 'woo_custom_cart_loader');
function woo_custom_cart_loader() {
  return __(get_template_directory_uri().'/img/assets/cbp-loading-popup', 'woocommerce');
}
  
  
?>