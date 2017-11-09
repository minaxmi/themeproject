<?php
if (class_exists ( 'WPBakeryShortCodescontainer' )) {
	class WPBakeryShortCode_wander_contact_us extends WPBakeryShortCode {
		
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

			wp_register_script( 'script', esc_url( get_template_directory_uri().'/js/map.js' ) );	
			
			wp_localize_script( 'script', 'map_pin', esc_url( get_template_directory_uri().'/images/map-pin.png' ));
			
			wp_localize_script( 'script', 'latitude', wander_return_theme_option('latitude'));
			wp_localize_script( 'script', 'longitude', wander_return_theme_option('longitude'));

			wp_enqueue_script( 'script' );	  
			
			$output ='
			<div class="contact-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 col-sm-7 col-xs-7 no-padding">

							<div id="address-block" class="address-block pad-top-half pad-bottom-half white-bg">
								<div class="address-section text-center">
									<div class="address">
										'.wander_return_theme_option('address').'
									</div>
								</div>
							</div>

								<div id="map-container" class="map-container light-grey-bg"></div>
						</div>

						<div class="col-md-4 col-sm-5 col-xs-5 no-padding">

							<div class="contact-block light-black-bg">
								<div class="vertical-align">

									<div class="contact-form text-left">
										<form id="contactform" name="myform" action="'.plugins_url( 'sendmail.php', dirname(__FILE__) ).'" enctype="multipart/form-data" method="post">
											<input class="white font2" type="text" id="name" placeholder="Name" name="name" data-placeholder="Name">
											<input class="white font2" type="text" id="email" placeholder="Email" name="email" data-placeholder="Email">
											<input type="hidden" value="'.esc_html(wander_return_theme_option('receiver')).'" name="receiver">
											<input type="hidden" value="contactform" name="subject">
											<input type="text" value="" class="website_url" name="website_url">
											<textarea class="white font2" rows="4" id="message" name="message" placeholder="Message" data-placeholder="Message"></textarea>
											<div class="button-style-01-container add-min-top-half">
												<button type="submit" name="submit" id="submit" class="button-style-01 white-button light-black font2">Send Now</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<button class="md-trigger launch_modal hidden-lg hidden-md hidden-sm hidden-xs" data-modal="modal-5">Launch modal</button>
					<div class="md-modal md-effect-5" id="modal-5">
						<div class="md-content">
							<h3>'.wander_return_theme_option('thankyou_title').'</h3>
							<div>
								<p class="align-center">'.wander_return_theme_option('thankyou_subtitle').'</p>
								<div class="clear add-top-small"></div>
								<button class="md-close btn">Close</button>
							</div>
						</div>
					</div>
					<div class="md-overlay"></div>
				</div>
			</div>';
					
			return $output;
		}				
	}
}



?>