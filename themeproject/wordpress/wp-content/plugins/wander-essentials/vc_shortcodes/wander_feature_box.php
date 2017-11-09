<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_feature_box extends WPBakeryShortCode {
		
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
					'text_align' => '',										'custom_background' => '',										'background_color' => '',										'box_style' => '',										'title' => '',										'title_size' => '',										'title_color' => '',					
					'description' => '',
					'icon' => '',										'back_icon' => '',										'icon_link' => '',										'is_back_icon' => '',					
			), $atts ) );						if($box_style == null && $box_style == ""){				$box_style = 'feature-left';			}			if($title_size == null && $title_size == ""){				$title_size = 'h5';			}						if($custom_background){				$background = "style='background-color:".$background_color." !important'"; 			}else{				$background = "";			}			
			$output = '				<div class = "'.$box_style.' '.$text_align.'" '.$background.'>';										if($icon != null && $icon != ""){						$output .= '<a href="'.$icon_link.'"><i class="' . esc_html ( $icon ) . '"></i></a>';																		if($is_back_icon){							$output .= '<i class="' . esc_html ( $back_icon ) . ' back-icon"></i>'; 						}											}					if($box_style == "box box-style7b" || $box_style == "box box-style8b" || $box_style == "box box-style7" || $box_style == "box box-style8"){						$output .= '<div class="pl80">';					}										if($box_style == 'feature-left'){						$output .= '<div class="feature-left-content">';					}					$output .= '<'.$title_size.' style="color: '.$title_color.' !important">' . esc_html ( $title ) . '</'.$title_size.'>					<p>' . esc_html ( $description ) . '</p>';					if($box_style == 'feature-left'){						$output .= '</div>';					}					if($box_style == "box box-style7b" || $box_style == "box box-style8b" || $box_style == "box box-style7" || $box_style == "box box-style8"){						$output .= '</div> '; 					}				$output .= '</div>';

			return $output;
		}
	}
}