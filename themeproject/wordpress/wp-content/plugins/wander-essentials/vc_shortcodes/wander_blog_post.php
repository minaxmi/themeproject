<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_blog_post extends WPBakeryShortCode {
		
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
				'post_carousel' => '',
				'is_mesonary' => '',
					
			), $atts ) );
			
			
			if($post_carousel){
				
				$output = '';
				
			$numberOfPost = $posts_per_page != '' ? $posts_per_page : -1;
			$args = array (
					'posts_per_page' => $numberOfPost,
					'include' => '',
					'exclude' => '',
					'meta_key' => '',
					'meta_value' => '',
					'post_type' => 'post',
					'post_mime_type' => '',
					'post_parent' => '',
					'author' => '',
					'post_status' => 'publish',
					'suppress_filters' => true 
			);
			$posts_array = get_posts ( $args );	
			
			$output .= '<div class="blog-carousel blog-columns cbp" id="js-blog-carousel">';
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ){ 	


				
					$the_query->the_post();
					if (has_post_thumbnail ()) {					
						if($is_mesonary){
							
							$src = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'full');
					
						}else{
						
							$src = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'blog_grid');
						}
						
					
						if ($src) {
							$img_src = esc_url ( $src [0] );
							
						}else{
							$img_src = 'http://placehold.it/770x433';
						}
					
					} else {
						
						$img_src = 'http://placehold.it/770x433';
					}
					
					
					$cats = array();
					$cat_name = array();
					$categories = get_the_category();
					foreach($categories as $category){								
						array_push($cats,$category->slug);
						array_push($cat_name,$category->name);
					}

					$post_categories = implode(' ',$cats);
				
				
				
				
				$output .= '
					 <div class="cbp-item '.$post_categories.'">
                                <div class="post-date">
                                    <h4 class="month">'.get_the_date('M').'</h4>
                                    <h3 class="day">'.get_the_time('d').'</h3>
                                    <span class="year">'.get_the_date('Y').'</span>
                                </div>
                                <a href="'.get_permalink().'" class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="' . esc_url ( $img_src ) . '">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body"> 
                                                <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="blog-thumb-desc"> 
                                    <a class="link-to-post" href="'.get_permalink().'"><h4>'.get_the_title().'</h4></a>
                                    <p class="blog-post-categories">
                                        <span><i class="ion-ios-pricetags-outline"></i></span>
                                        <a href="#">Lifestyle</a>  
                                        <span>,</span>
                                        <a href="#">Travel</a> 
                                    </p> 
                                    <p class="excerpt">'.get_the_excerpt().'</p>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>'.esc_html('Read More', 'wander-essentials').'<i class="ion-android-arrow-forward"></i></span></a>  
                                </div>
                            </div>';
					
					
					}
					wp_reset_postdata();
				}
					
					
				$output .= '</div>';
				
			}else{
			
				$output = '';
			
				if($filter == "on"){
				
				
				$output .= '<div class="portfolio-filters-center cbp-l-filters-button" id="js-filters">';
				
				$output .= '
				<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                           '.esc_html__('All','wander-essentials').' 
                        </div>';

				$args = array(
					'type'   => 'post',
				); 

				$categories = get_categories( $args );
				foreach($categories as $category) { 
					
					if(($category->slug)!="uncategorized"){
						$output .= '
						<div data-filter=".'.$category->slug.'" class="cbp-filter-item">
                            '.$category->name.'
                        </div>';
					}									
				}
				
					$output .= '</div>';
					
				}				
				
				
			$numberOfPost = $posts_per_page != '' ? $posts_per_page : -1;
			$args = array (
					'posts_per_page' => $numberOfPost,
					'include' => '',
					'exclude' => '',
					'meta_key' => '',
					'meta_value' => '',
					'post_type' => 'post',
					'post_mime_type' => '',
					'post_parent' => '',
					'author' => '',
					'post_status' => 'publish',
					'suppress_filters' => true 
			);
			$posts_array = get_posts ( $args );	
			
			$output .= '<div class="blog-grid blog-columns cbp" id="blog-grid">';
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ){ 	


				
					$the_query->the_post();
					if (has_post_thumbnail ()) {					
						if($is_mesonary){
							
							$src = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'full');
					
						}else{
						
							$src = wp_get_attachment_image_src ( get_post_thumbnail_id(), 'blog_grid');
						}
					
						if ($src) {
							$img_src = esc_url ( $src [0] );
							
						}else{
							$img_src = 'http://placehold.it/770x433';
						}
					
					} else {
						
						$img_src = 'http://placehold.it/770x433';
					}
					
					
					$cats = array();
					$cat_name = array();
					$categories = get_the_category();
					foreach($categories as $category){								
						array_push($cats,$category->slug);
						array_push($cat_name,$category->name);
					}

					$post_categories = implode(' ',$cats);
				
				
				
				
				$output .= '
					 <div class="cbp-item '.$post_categories.'">
                                <div class="post-date">
                                    <h4 class="month">'.get_the_date('M').'</h4>
                                    <h3 class="day">'.get_the_time('d').'</h3>
                                    <span class="year">'.get_the_date('Y').'</span>
                                </div>
                                <a href="'.get_permalink().'" class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="' . esc_url ( $img_src ) . '">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body"> 
                                                <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="blog-thumb-desc"> 
                                    <a class="link-to-post" href="'.get_permalink().'"><h4>'.get_the_title().'</h4></a>
                                    <p class="blog-post-categories">
                                        <span><i class="ion-ios-pricetags-outline"></i></span>
                                        <a href="#">Lifestyle</a>  
                                        <span>,</span>
                                        <a href="#">Travel</a> 
                                    </p> 
                                    <p class="excerpt">'.get_the_excerpt().'</p>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span>'.esc_html('Read More', 'wander-essentials').'<i class="ion-android-arrow-forward"></i></span></a>  
                                </div>
                            </div>';
					
					
					}
					wp_reset_postdata();
				}
					
					
				$output .= '</div>';

				}
					return $output;



				}

		}



	}