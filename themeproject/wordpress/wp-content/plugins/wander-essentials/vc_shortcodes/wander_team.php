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
				$src = wp_get_attachment_image_src ( $team_img, 'full' );								if ($src) {					$team_img_src = esc_url ( $src [0] );									}else{					$team_img_src = 'http://placehold.it/720x876';				}
			} else {
				$team_img_src = 'http://placehold.it/720x876';
			}
			
			$icons = explode ( ',', esc_html ( $social_icons ) );
			$links = explode ( ',', esc_url ( $social_links ) );
			
			if ($social_links != 'no') {
				
				$social_html = '<ul>';									
				foreach ( $icons as $key => $icon ) {
					$link = $links [$key] == null ? '#' : $links [$key];
					$social_html .= '					 <li class="social-icon"><a href="' . esc_url ( $link ) . '"><i class="'. esc_attr ( $icon ) . '"></i></a></li>';
				}
				$social_html .= '</ul>';
			} else {
				$social_html = '';
			}

			$output = '
				<div class="team">					<div class="team-container">						<div class="team-image">							<img src="' . esc_url ( $team_img_src ) . '" class="img-responsive" alt="team-image" />						</div> 						<div class="team-caption">							<div>								<div>									<h4>' . esc_html ( $name ) . '</h4>									<p>' . esc_html ( $designation ) . '</p>									' . $social_html . '								</div>							</div>						</div>  					</div>  				</div>';

			return $output;
		}
	}
}