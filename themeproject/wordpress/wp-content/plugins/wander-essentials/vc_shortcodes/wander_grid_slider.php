<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_grid_slider extends WPBakeryShortCode {
		
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
					'slider_img' => ''
			), $atts ) );
			if ($slider_img != null) {								
				$src = wp_get_attachment_image_src ( $slider_img, 'full' );								if ($src) {					$slider_img_src = esc_url ( $src [0] );									}else{					$slider_img_src = 'http://placehold.it/750x1334';				}
			} else {
				$slider_img_src = 'http://placehold.it/750x1334';
			}
			
			$output = '				<div class="cbp-item">					<a href="' . esc_url ( $slider_img_src ) . '" class="cbp-lightbox cbp-caption">						<div class="cbp-caption-defaultWrap">							<img src="' . esc_url ( $slider_img_src ) . '" alt="#">						</div>						<div class="cbp-caption-activeWrap">							<div class="cbp-l-caption-alignCenter">								<div class="cbp-l-caption-body">									<div class="cbp-l-caption-title"><i class="icon-magnifying-glass size-1x"></i></div> 								</div>							</div>						</div>					</a>				</div>';

			return $output;
		}
	}
}