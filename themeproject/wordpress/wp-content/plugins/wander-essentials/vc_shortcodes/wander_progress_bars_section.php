<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_wander_progress_bars_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					
					extract ( shortcode_atts ( array (

						'style' => '3'

					), $atts ) );
					
					
				
					$output = '
						<div class="progress-bars-'.esc_html($style).'">		
							'.do_shortcode($content).'
						 </div>';
				return $output;

				}
		}

	}