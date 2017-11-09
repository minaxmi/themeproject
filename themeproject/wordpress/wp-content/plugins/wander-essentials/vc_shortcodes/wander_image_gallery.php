<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_image_gallery extends WPBakeryShortCode {
		
		/*
		 * Thi methods returns HTML code for frontend representation of your shortcode.
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
					'gallery_img' => '',
					
			), $atts ) );
			
			

			$images = explode ( ',', esc_html ( $gallery_img ) );
			if (! empty ( $images )) {				
				foreach ( $images as $gallery_img ) {
					$img_src = wp_get_attachment_image_src ( $gallery_img, 'full' );
					$gallery_html .= '<div class="cbp-item print branding">
                            <a href="'.esc_url($img_src[0]).'" class="cbp-lightbox cbp-caption"><div class="cbp-caption-defaultWrap">
                                    <img src="'.esc_url($img_src[0]).'">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="icon-magnifying-glass size-1x"></i></div> 
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>';
				}
				
			}else{
				$gallery_html='';
			}
			
			$html ='<section class="portfolio">
			            <div class="container-fluid">
			                <div class="row">
			                <div class="portfolio-no-gutter-fullwidth cbp" id="js-grid-no-gutter">
													
								' . $gallery_html . '

							</div>	
							</div>
						</div>
					</section>';
			
			
			
			
			return $html;
		}
	}
}