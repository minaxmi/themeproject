<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_sponsor extends WPBakeryShortCode {
		
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
					'sponsor_img' => ''
			), $atts ) );
						
			

			if ($sponsor_img != null) {
				$src = wp_get_attachment_image_src ( $sponsor_img, 'full' );				if ($src) {					$sponsor_img_src = esc_url ( $src [0] );									}else{					$sponsor_img_src = 'http://placehold.it/100x50';				}
				
			} else {
				$sponsor_img_src = 'http://placehold.it/100x50';
			}

			$output = '
					<div class="item">						<img src="' . esc_url ( $sponsor_img_src ) . '" class="img-responsive" alt="partner-image" data-no-retina>					</div>';

			return $output;
		}
	}
}