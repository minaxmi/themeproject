<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_title_block extends WPBakeryShortCode {
		
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
					'title_size' => '',
					'is_seperator' => '',
					'title_align' => '',
					'class' => '',
			), $atts ) );
						
				if($title_size == '' || $title_size == null){
					$title_size = 'h5';
				}
				
				if($title_align == "text-left"){
					$seperator_align = 'left';
					$title_align = 'text-left';
				}elseif($title_align == "text-right"){
					$seperator_align = 'right';
					$title_align = 'text-right';
				}else{
					$seperator_align = 'center';
					$title_align = 'text-center';
				}
			
				$output = '<div class="'.$title_align.'">   
                        <'.$title_size.' class="'.$class.'">'.$title.'</'.$title_size.'>';
                
				if($is_seperator){
					$output .= ' <hr class="separator '.$seperator_align.'"> ';
				}
				
                $output .= ' </div>';
				
			return $output;
		}
	}
}



