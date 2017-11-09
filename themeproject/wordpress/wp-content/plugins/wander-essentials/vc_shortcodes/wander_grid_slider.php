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
				$src = wp_get_attachment_image_src ( $slider_img, 'full' );
			} else {
				$slider_img_src = 'http://placehold.it/750x1334';
			}
			
			$output = '

			return $output;
		}
	}
}