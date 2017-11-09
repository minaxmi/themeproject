<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_projects extends WPBakeryShortCode {
		
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
				'portfolio_style' => '',
				'filter' => '',
				
			), $atts ) );		
			$output = '';
				if($filter == "on"){
				
				
				$output .= '<div class="portfolio-filters-center cbp-l-filters-button" id="js-filters">';
				
				$output .= ' <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                            '.esc_html__('All','wander-essentials').'
                        </div>';

				$args = array(
					'type'   => 'project',
					'taxonomy'     => 'project_category',
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
				
				if($portfolio_style == 'grid'){
					$output .= '<div class="cbp" id="js-grid">';
				}elseif($portfolio_style == 'mesonary'){
					$output .= '<div class="cbp" id="js-masonry-boxed">';
				}elseif($portfolio_style == 'metro'){
					$output .= '<div class="cbp cbp-l-grid-mosaic" id="js-grid-mosaic">';
				}elseif($portfolio_style == 'no_gutter'){
					$output .= '<div class="cbp" id="js-grid-no-gutter">';
				}elseif($portfolio_style == 'video_gallery'){
					$output .= '<div class="portfolio-gallery-video cbp" id="js-masonry-fullwidth">';
				}elseif($portfolio_style == 'audio_gallery'){
					$output .= '<div class="portfolio-gallery-audio cbp" id="js-gallery-5">';
				}elseif($portfolio_style == 'image_gallery'){
					$output .= '<div class="portfolio-no-gutter-fullwidth cbp" id="js-grid-no-gutter">';
				}elseif($portfolio_style == 'gallery_carousel'){
					$output .= '<div class="portfolio-gallery-carousel cbp" id="js-grid-slider">';
				}else{
					$output .= '<div class="cbp" id="js-grid">';
				}
				
				
				$numberOfPost = $posts_per_page != '' ? $posts_per_page : -1;
				$args = array (
					'post_type' => 'project',
					'post_status' => 'publish',
					'posts_per_page' => $numberOfPost
				);
			
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
						$categories = get_the_terms( get_the_ID(), 'project_category' );
						if($categories){
							foreach($categories as $category){								
								array_push($cats,$category->slug);
								array_push($cat_name,$category->name);
							}

							$post_categories = implode(' ',$cats);
							$post_categories_name = implode(', ',$cat_name);
						}
						
						if($portfolio_style == 'audio_gallery'){			
							if ( has_post_format( 'audio' )) {										
								$urls = get_post_meta( get_the_ID(), 'p_vid', true );
								$output .= '<div class="cbp-item">
										<iframe width="100%" height="450" scrolling="no" frameborder="no" src="'.$urls.'"></iframe>
									</div> ';
							}
						}elseif($portfolio_style == 'video_gallery'){
						
							if ( has_post_format( 'video' )) {
								$urls = get_post_meta( get_the_ID(), 'p_vid', true );
								$output .= '
								 <div class="cbp-item">';
								 
									   $output .= ' <a href="' . $urls . '" class="cbp-caption">';
										
											$output .= '<div class="cbp-caption-defaultWrap">
												<img src="' . esc_url ( $img_src ) . '" alt="#">
											</div>
											<div class="cbp-caption-activeWrap">
												<div class="cbp-l-caption-alignCenter">
													<div class="cbp-l-caption-body">
														<div class="cbp-l-caption-title"><i class="ion-ios-play"></i></div> 
													</div>
												</div>';
												
											$output .= '</div>';
										$output .= '</a>
									</div>';
							}
						}elseif($portfolio_style == 'image_gallery'){
							if ( false == get_post_format() ) {
								$output .= '
								 <div class="cbp-item '.$post_categories.'">';
								 
									   $output .= ' <a href="' . esc_url ( $img_src ) . '" class="cbp-caption">';
										
											$output .= '<div class="cbp-caption-defaultWrap">
												<img src="' . esc_url ( $img_src ) . '" alt="#">
											</div>
											<div class="cbp-caption-activeWrap">
												<div class="cbp-l-caption-alignCenter">
													<div class="cbp-l-caption-body">
														<div class="cbp-l-caption-title">'.esc_html(get_the_title()).'</div>
														<div class="cbp-l-caption-desc">'.$post_categories_name.'</div>
													</div>
												</div>';
												
											$output .= '</div>';
										$output .= '</a>
									</div>';
								}
							}else{
								if ( false == get_post_format() ) {
									$output .= '
									 <div class="cbp-item '.$post_categories.'">';
									 
										   $output .= ' <a href="' . esc_url ( get_permalink() ) . '" class="cbp-caption">';
											
												$output .= '<div class="cbp-caption-defaultWrap">
													<img src="' . esc_url ( $img_src ) . '" alt="#">
												</div>
												<div class="cbp-caption-activeWrap">
													<div class="cbp-l-caption-alignCenter">
														<div class="cbp-l-caption-body">
															<div class="cbp-l-caption-title">'.esc_html(get_the_title()).'</div>
															<div class="cbp-l-caption-desc">'.$post_categories_name.'</div>
														</div>
													</div>';
													
												$output .= '</div>';
											$output .= '</a>
										</div>';
								}
							}	
						}						
					}
				
				$output .= '</div></div>';

					return $output;



		}
	}
}