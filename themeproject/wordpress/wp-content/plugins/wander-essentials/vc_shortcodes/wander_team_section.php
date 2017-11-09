<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_wander_team_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {

					$output = '
						<div class="team-slider owl-carousel dark-pagination"> 
							'.do_shortcode($content).'
						 </div>';
				return $output;

				}
		}

	}