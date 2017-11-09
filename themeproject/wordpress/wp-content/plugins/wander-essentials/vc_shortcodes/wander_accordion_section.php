<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_wander_accordion_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					
					extract ( shortcode_atts ( array (

						'accordion_style' => ''

					), $atts ) );
							
					if($accordion_style != 'accordian-style1' && $accordion_style != 'accordian-style2' ){
						$accordion_style = 'accordian-style6';
					}
					$output = '
						<div class="panel-group '.$accordion_style.'" id="accordion"> 				
							'.do_shortcode($content).'
						 </div>';
				return $output;

				}
		}

	}