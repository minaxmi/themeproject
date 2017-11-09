<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_service extends WPBakeryShortCode {
		
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
					'title' => '',					'description' => '',					'icon' => '',					'layout_color' => ''
			), $atts ) );												if( $layout_color == 'light-color white-bg' ){								$color = 'light-black';							}else{							$color = 'white';								}			
			$output = '							<a href="#" class="services-content-block ' . esc_html ( $layout_color ) . '">					<i class=" '.$color.' services-content-icon ' . esc_html ( $icon ) . '"></i>					<h5 class="services-content-head '.$color.' font2">' . esc_html ( $title ) . '</h5>					<p class="services-content-text '.$color.' font3">						' . esc_html ( $description ) . '					</p>				</a>';

			return $output;
		}
	}
}