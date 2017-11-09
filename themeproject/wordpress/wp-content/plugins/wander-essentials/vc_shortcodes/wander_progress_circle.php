<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_progress_circle extends WPBakeryShortCode {
		
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
					'style' => '',										'name' => '',
					'percentage' => '',										'is_icon' => '',										'icon_class' => '',										'icon_color' => ''
			), $atts ) );			$output = "";
			if($is_icon){$output .='<div class="progress-circle-icon">';}
						$output .= '							<div class="progress-circle '.$style.'"  data-circle-percent="' . esc_html ( $percentage ) . '" data-circle-text="' . esc_html ( $name ) . '">';							if($is_icon){$output .= '<i class="'.$icon_class.'"></i>';}															$output .= '<svg class="progress-svg"><circle r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle><circle class="bar" r="80" cx="90" cy="90" fill="transparent" stroke-dasharray="502.4" stroke-dashoffset="0"></circle></svg>				</div>';
if($is_icon){$output .='</div>';}
			return $output;
		}
	}
}