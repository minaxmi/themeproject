<?phpif (class_exists ( 'WPBakeryShortCode' )) {	class WPBakeryShortCode_wander_button extends WPBakeryShortCode {				/*		 * This methods returns HTML code for frontend representation of your shortcode.		 * You can use your own html markup.		 *		 * @param $atts - shortcode attributes		 * @param @content - shortcode content		 *		 * @access protected		 * vc_filter: VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG vc_shortcodes_css_class - hook to edit element class		 * @return string		 */		protected function content($atts, $content = null) {			extract ( shortcode_atts ( array (					'button_text' => '',										'button_link' => '',										'button_shape' => '',										'button_style' => '',										'button_size' => '',										'button_icon' => '',										'appering_icon' => '',										'is_tooltip' => '',										'tooltip_title' => '',										'tooltip_position' => '',										'is_fullwidth' => '',			), $atts ) );			$full = "";						if($is_fullwidth){							$full = 'btn-fullwidth';						}			$appering = '';			if($appering_icon){							$appering = 'btn-appear';						}										$output = '				<a href="'.esc_url($button_link).'" data-toggle="tooltip" data-placement="'.$tooltip_position.'" title="" data-original-title="'.$tooltip_title.'"  class="btn '.$appering.' '.$full.' '.$button_shape.' '.$button_size.' '.$button_style.'">';							if($appering_icon){$output .= '<span>';}													$output .= esc_html($button_text);								if($appering_icon){					$output .= '<i class="'.$button_icon.'"></i>';				}			if($appering_icon){$output .= '</span>';}									$output .= '</a>';							return $output;		}	}}