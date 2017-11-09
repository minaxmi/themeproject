<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_event extends WPBakeryShortCode {
		
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
			extract ( shortcode_atts ( array (				'title' => '',				'mentor' => '',				'time' => ''			), $atts ) );					$output = '							<div class="timeline-block">					<div class="timeline-bullet"></div> 					<div class="timeline-content">						<h2>' . esc_html ( $title ) . '</h2>						<p>' . esc_html ( $mentor ) . '</p>						<span class="date">' . esc_html ( $time ) . '</span>					</div>				</div>';			return $output;
		}
	}
}