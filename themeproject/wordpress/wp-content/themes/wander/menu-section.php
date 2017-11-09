

<div id="navbar" class="navbar-collapse collapse">
	<div class="container">
	<div class="desktop-display">
	<ul class="nav navbar-nav menu-right">
		<li class="nav-separator"></li>
		<li class="nav-icon"><a class="popup-with-zoom-anim search" href="#search-modal"><i class="flaticon-search"></i> <span class="hidden-md"><?php esc_html_e('Search','wander');?></span></a></li>
		
		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
		<li class="nav-icon dropdown nav-shop-cart">
			<a class="dropdown-toggle"><i class="flaticon-shop"></i><span class="label-items-in-cart"><?php echo sprintf ( '%d', WC()->cart->get_cart_contents_count() ); ?></span><span class="hidden-md"><?php esc_html_e('Your Bag','wander');?></span></a>
			<ul class="dropdown-menu">    
				<li>
					<?php
					
						foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						
						
						
							$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
							$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

							if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
								$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
								?>
								 <span class="nav-cart-item">
										<?php
											$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

											if ( ! $product_permalink ) {
												echo $thumbnail;
											} else {
												printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
											}
										?>
									<span class="nav-cart-item-info">
										<span><?php
											if ( ! $product_permalink ) {
												echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
											} else {
												echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
											}
										?></span>
										<span class="bold"><?php
											echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
										?></span>
										
									</span>
									
									<?php
										echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
											'<a href="%s" class="nav-cart-remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
											esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
											__( 'Remove this item', 'woocommerce' ),
											esc_attr( $product_id ),
											esc_attr( $_product->get_sku() )
										), $cart_item_key );
									?>
									</span>
									<?php
							}
						} ?>
					<span class="nav-cart-total">
						<span class="bold white"><?php esc_html_e('Subtotal:','wander');?><span class="nav-cart-amount"><?php wc_cart_totals_subtotal_html(); ?></span></span>
						<a href="<?php echo esc_url(home_url('/cart/')); ?>" class="btn btn-xs btn-nav-cart"><?php esc_html_e('View Cart','wander');?></a>
						<a href="<?php echo esc_url(home_url('/checkout/')); ?>" class="btn btn-xs btn-primary btn-nav-checkout"><?php esc_html_e('Checkout','wander');?></a>
					</span>
			  </li>
			</ul>
		</li>
		
		<?php } ?>
	</ul>	
<?php
	$fornt_page = 'scrollto';
	$object;
	if (is_front_page ()) {
		$object = new wander_one_page_walker ( $fornt_page );
	} else {
		$object = new wander_one_page_walker ( $fornt_page = '' );
	}
	$defaults = array (
			'theme_location' => 'onepage',
			'menu' => '',
			'container' => '',
			'menu_class' => 'nav navbar-nav menu-right',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 4,
			'walker' => $object 
	);
	
	$defaults_multi = array (
			'theme_location' => 'primary',
			'menu' => '',
			'container' => '',
			'menu_class' => 'nav navbar-nav menu-right',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 0,
			'walker' => new wander_one_page_walker ( $fornt_page = 'alter' ) 
	);	
	if (is_page(138)){
		wp_nav_menu ( $defaults );
	}elseif (has_nav_menu ( 'primary' )) {
		wp_nav_menu ( $defaults_multi );
	} elseif (has_nav_menu ( 'onepage' )) {
		wp_nav_menu ( $defaults );
	}else{
		echo esc_html__('No Menu Assaigned!','wander');
	}
?> 

	
	</div>
	<div class="mobile-display">
	
	
<?php
	$fornt_page = 'scrollto';
	$defaults_responsive = array (
			'theme_location' => 'responsive',
			'menu' => '',
			'container' => '',
			'menu_class' => 'nav navbar-nav menu-right',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 0,
			'walker' => new wander_responsive_walker ( $fornt_page = 'alter' ) 
	);
	
	if (has_nav_menu ( 'responsive' )) {
		wp_nav_menu ( $defaults_responsive );
	}else{
		echo esc_html__('No Menu Assaigned!','wander');
	}
	
?> 

	<ul class="nav navbar-nav menu-right">
		<li class="nav-separator"></li>
		<li class="nav-icon"><a class="popup-with-zoom-anim search" href="#search-modal"><i class="flaticon-search"></i> <span class="hidden-md"><?php esc_html_e('Search','wander');?></span></a></li>
		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
		<li class="nav-icon dropdown nav-shop-cart">
			<a class="dropdown-toggle"><i class="flaticon-shop"></i><span class="label-items-in-cart"><?php echo sprintf ( '%d', WC()->cart->get_cart_contents_count() ); ?></span><span class="hidden-md"><?php esc_html_e('Your Bag','wander');?></span></a>
			<ul class="dropdown-menu">    
				<li>
					<?php
						foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						
						
						
							$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
							$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

							if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
								$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
								?>
								 <span class="nav-cart-item">
										<?php
											$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

											if ( ! $product_permalink ) {
												echo $thumbnail;
											} else {
												printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
											}
										?>
									<span class="nav-cart-item-info">
										<span><?php
											if ( ! $product_permalink ) {
												echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
											} else {
												echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
											}
										?></span>
										<span class="bold"><?php
											echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
										?></span>
										
									</span>
									
									<?php
										echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
											'<a href="%s" class="nav-cart-remove" title="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
											esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
											__( 'Remove this item', 'woocommerce' ),
											esc_attr( $product_id ),
											esc_attr( $_product->get_sku() )
										), $cart_item_key );
									?>
									</span>
									<?php
							}
						}?>
					<span class="nav-cart-total">
						<span class="bold white"><?php esc_html_e('Subtotal:','wander');?><span class="nav-cart-amount"><?php wc_cart_totals_subtotal_html(); ?></span></span>
						<a href="<?php echo esc_url(home_url('/cart/')); ?>" class="btn btn-xs btn-nav-cart"><?php esc_html_e('View Cart','wander');?></a>
						<a href="<?php echo esc_url(home_url('/checkout/')); ?>" class="btn btn-xs btn-primary btn-nav-checkout"><?php esc_html_e('Checkout','wander');?></a>
					</span>
			  </li>
			</ul>
		</li>
		<?php } ?>
	</ul>
	</div>
	</div>
</div>



	
	