<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_team extends WPBakeryShortCode {
		
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
					'team_img' => '',
					'name' => '',
					'designation' => '',
					'social_icons' => '',
					'social_links' => ''
			), $atts ) );
			if ($team_img != null) {
				$src = wp_get_attachment_image_src ( $team_img, 'full' );
			} else {
				$team_img_src = 'http://placehold.it/720x876';
			}
			
			$icons = explode ( ',', esc_html ( $social_icons ) );
			$links = explode ( ',', esc_url ( $social_links ) );
			
			if ($social_links != 'no') {
				
				$social_html = '<ul>';									
				foreach ( $icons as $key => $icon ) {
					$link = $links [$key] == null ? '#' : $links [$key];
					$social_html .= '
				}
				$social_html .= '</ul>';
			} else {
				$social_html = '';
			}

			$output = '
				<div class="team">

			return $output;
		}
	}
}