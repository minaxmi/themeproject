<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_shop extends WPBakeryShortCode {
		
		/*
		 * This methods returns HTML code for frontend representation of your shortcode.
		 * You can use your own html markup.
		 *
		 * @param $atts - shortcode attributes
		 * @param @content - shortcode content
		 *
		 * @access protected
		 * vc_filter: VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG vc_shortcodes_css_class - hook to edit element class
		 * @return string
		 */
		protected function content($atts, $content = null) {
			extract ( shortcode_atts ( array (
				
				'posts_per_page' => '',
				'filter' => '',
				'is_mesonary' => '',
				
			), $atts ) );
			
			ob_start();
			?>
			<div class="shop">
			
				<?php if($filter == "on"){ ?>
				
				
				<div class="portfolio-filters-center cbp-l-filters-button" id="js-filters">
				
				
				<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
					<?php echo esc_html__('All','wander-essentials'); ?> 
				</div>
				<?php
				$args = array(
					'type'   => 'product',
					'taxonomy'     => 'product_cat',
				); 

				$categories = get_categories( $args );
				foreach($categories as $category) { 
					
					if(($category->slug)!="uncategorized"){
					?>
						<div data-filter=".<?php echo $category->slug; ?>" class="cbp-filter-item">
                           <?php echo $category->name; ?>
                        </div>
					<?php 
					}									
				} 
				?>
				
				</div>
				
				<?php }				
				
				$numberOfPost = $posts_per_page != '' ? $posts_per_page : -1;
				$args = array (
					'post_type' => 'product',
					'post_status' => 'publish',
					'posts_per_page' => $numberOfPost
				);
			
				?><div class="shop-grid cbp" id="shop-grid"><?php
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ){ 	


					
						$the_query->the_post();
						if (has_post_thumbnail ()) {					
							$src = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'full');
						
							if ($src) {
								$img_src = esc_url ( $src [0] );
								
							}else{
								$img_src = 'http://placehold.it/600x600';
							}
						
						} else {
							
							$img_src = 'http://placehold.it/600x600';
						}
						
						
						$cats = array();
						$cat_name = array();
						$categories = get_the_terms( get_the_ID(), 'product_cat' );
							foreach($categories as $category){								
								array_push($cats,$category->slug);
								array_push($cat_name,$category->name);
							}

							$post_categories = implode(' ',$cats);
					
						?>
						
						<div class="cbp-item <?php echo $post_categories?>">
							<div class="product-details"><?php
								/**
								 * woocommerce_after_shop_loop_item_title hook.
								 *
								 * @hooked woocommerce_template_loop_rating - 5
								 * @hooked woocommerce_template_loop_price - 10
								 */
								do_action( 'woocommerce_after_shop_loop_item_title' );
							?>
							</div>
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
								<?php if($is_mesonary){?>
								
									<img src="<?php echo esc_url ( $img_src ); ?>" alt="#">
									
								<?php }else{
								
										do_action( 'woocommerce_before_shop_loop_item_title' );
									
									} ?>
									
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">  
											<?php
											
											/**
											 * woocommerce_after_shop_loop_item hook.
											 *
											 * @hooked woocommerce_template_loop_product_link_close - 5
											 * @hooked woocommerce_template_loop_add_to_cart - 10
											 */
											do_action( 'woocommerce_after_shop_loop_item' );
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
				
					}
				}
				
				?></div></div><?php
					
					$output = ob_get_contents();
					
				}

		}



	}