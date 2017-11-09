<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_progress_bar extends WPBakeryShortCode {
		
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
					'name' => '',
					'percentage' => ''
			), $atts ) );			
			
			$output = '			<p>' . esc_html ( $name ) . '</p>			<div class="progress white" data-percent="' . esc_html ( $percentage ) . '%">				<div class="progress-bar">					<span class="progress-bar-tooltip">' . esc_html ( $percentage ) . '%</span>				</div>			</div>';

			return $output;
		}
	}
}