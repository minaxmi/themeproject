<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_feature_tabs extends WPBakeryShortCode {
		
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
					'icon_1' => '',					'icon_2' => '',					'icon_3' => '',					'icon_4' => '',
					'title_1' => '',					'title_2' => '',					'title_3' => '',					'title_4' => '',
					'content_1' => '',					'content_2' => '',					'content_3' => '',					'content_4' => ''
			), $atts ) );			
			$output = '				<div class="icon-tabs-centered">					<ul id="iconTabs" class="nav nav-tabs nav-tabs-center">						<li class="active"><a href="#tab-i1" data-toggle="tab"><span class="icon-tab ' . esc_html ( $icon_1 ) . '"></span><span>' . esc_html ( $title_1 ) . '</span></a></li>						<li class=""><a href="#tab-i2" data-toggle="tab"><span class="icon-tab ' . esc_html ( $icon_2 ) . '"></span><span>' . esc_html ( $title_2 ) . '</span></a></li>						<li class=""><a href="#tab-i3" data-toggle="tab"><span class="icon-tab ' . esc_html ( $icon_3 ) . '"></span><span>' . esc_html ( $title_3 ) . '</span></a></li>						<li class=""><a href="#tab-i4" data-toggle="tab"><span class="icon-tab ' . esc_html ( $icon_4 ) . '"></span><span>' . esc_html ( $title_4 ) . '</span></a></li>					</ul>					<div id="myTabContent" class="tab-content">						<div class="tab-pane fade" id="tab-i1">   							<p>' . esc_html ( $content_1 ) . '</p>						</div> 						<div class="tab-pane fade" id="tab-i2"> 							<p>' . esc_html ( $content_2 ) . '</p>						</div> 						<div class="tab-pane fade" id="tab-i3"> 							<p>' . esc_html ( $content_3 ) . '</p>						</div> 						<div class="tab-pane fade" id="tab-i4"> 							<p>' . esc_html ( $content_4 ) . '</p>						</div>					</div>				</div>';

			return $output;
		}
	}
}