<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_wander_grid_slider_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					
					$output = '
						<div class="app-gallery cbp" id="js-grid-slider">
							'.do_shortcode($content).'
						 </div>';
				return $output;

				}
		}

	}