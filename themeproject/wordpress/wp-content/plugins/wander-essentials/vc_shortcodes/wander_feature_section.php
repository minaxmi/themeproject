<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_wander_feature_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					
					extract ( shortcode_atts ( array (

						'heading' => '',

						'subheading' => ''

					), $atts ) );
					
					
				
					$output = '
						<section class="pt130 pb120"> 
							<div class="container">    
								<div class="row">      

									<div class="col-md-12 section-heading">
										<h2>' . esc_html ( $heading ) . '</h2>
										<hr class="separator">
										<p>' . esc_html ( $subheading ) . '</p> 
									</div>  
									
									<div class="team-slider owl-carousel dark-pagination"> 
									
												'.do_shortcode($content).'
										
									 </div>
										
								</div>  
							</div>
						</section>';

			
				return $output;

				}
		}

	}