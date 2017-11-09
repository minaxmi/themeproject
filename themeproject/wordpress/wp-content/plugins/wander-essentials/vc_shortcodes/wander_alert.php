<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_alert extends WPBakeryShortCode {
		
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
					'icon' => '',
					'message' => '',										'alert_type' => ''
			), $atts ) );			if($alert_type == '' || $alert_type == null){				$alert_type = 'alert-info';			}
			$output = '				<div class="alert '.esc_html( $alert_type ).' fade in">				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="ion-ios-close-empty"></i></button>				  <i class="'.esc_html( $icon ) .'"></i> <strong> ' . esc_html ( $message ) . '</strong>				</div>';

			return $output;
		}
	}
}