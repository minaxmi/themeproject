<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_accordion_item extends WPBakeryShortCode {
		
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
					'description' => '',										'html_id' => ''
			), $atts ) );
			

			$output = '					<div class="panel panel-default">						<div class="panel-heading">							 <button class="panel-title collapsed" data-toggle="collapse" data-target="#'.$html_id.'">								 ' . esc_html ( $title ) . '							 </button>						</div>						<div id="'.$html_id.'" class="panel-collapse collapse">							<div class="panel-body">							   ' . esc_html ( $description ) . '							</div>						</div>					</div>';

			return $output;
		}
	}
}