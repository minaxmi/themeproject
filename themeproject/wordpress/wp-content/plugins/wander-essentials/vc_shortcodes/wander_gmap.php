<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_gmap extends WPBakeryShortCode {
		
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
		protected function content($atts, $content = null) {			extract ( shortcode_atts ( array (					'coordinate' => '',					'height' => '',										'map_style' => '',										'map_info' => ''			), $atts ) );			if($map_style != 'map-style-2' && $map_style != 'map-style-3' ){				$map_style = 'map-style-1';			}
			$output = '								<div 					data-map-coordinates="'.$coordinate.'" 					data-marker-coordinates="'.$coordinate.'" 					data-info="'.$map_info.'" 					id="map" class="'.$map_style.' height'.$height.'">				</div>';
			return $output;
		}
	}
}