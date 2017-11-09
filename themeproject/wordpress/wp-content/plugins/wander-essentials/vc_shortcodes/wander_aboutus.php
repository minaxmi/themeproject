<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_aboutus extends WPBakeryShortCode {
		
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
				'title' => '',
				'description' => '',
				'background' => '',
				'video_link' => '',
			), $atts ) );
			$output = '		                <div class="vertical-align">                    <div class="col-md-6 text-left pr30 mt40 mb40">                           <h2>' . esc_html ( $title ) . '</h2>                           ' . esc_html ( $description ) . '                    </div>                    <div class="col-md-6  mt50 mb50">                          <div class="video-container">                            							<iframe src="' . esc_url ( $video_link ) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>													</div>                    </div>                </div>';
			return $output;
		}
	}
}