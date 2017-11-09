<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	     class WPBakeryShortCode_wander_service_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					
					
					extract ( shortcode_atts ( array (
						'background' => ''
					), $atts ) );
				if ($background != null) {					$src = wp_get_attachment_image_src ( $background, 'full' );					$background_src = esc_url ( $src [0] );				} else {					$background_src = get_template_directory_uri().'/images/services/bg-img.jpg';				}
					$output = '						<div class="services-content pad-top pad-bottom" style="background: url(' . esc_url ( $background_src ) . ')">							<div class="bg-overlay black-bg"></div>							<div class="container">								<div class="row">									<div class="col-md-12">										'.do_shortcode($content).'									</div>							</div>						</div>					</div>';

					return $output;

				}
		}
	}
