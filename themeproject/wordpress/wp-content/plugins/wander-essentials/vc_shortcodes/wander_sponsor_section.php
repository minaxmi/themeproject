<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	     class WPBakeryShortCode_wander_sponsor_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					
					
					extract ( shortcode_atts ( array (
						'style' => '2'
					), $atts ) );

					$output = '					<div id="clients-slider-'.$style.'" class="owl-carousel">						'.do_shortcode($content).'					</div>';

					return $output;

				}
		}
	}
