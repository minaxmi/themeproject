<?php
if (class_exists ( 'WPBakeryShortCode' )) {
	class WPBakeryShortCode_wander_subscription extends WPBakeryShortCode {
		
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
			$output = '				 <div class="subscription">                        <div class="input-group">                            <form action="'.dirname( __FILE__ ).'/php/subscribe-mailchimp.php" method="post" id="subscribe-form2">                                <div class="form-validation alert"></div>                                <div class="form-group subscribe-form-input">                                    <span class="input-group-btn subscribe-top">                                        <input type="email" name="email" id="subscribe-form-email" class="top-subscribe-input" placeholder="Enter email address" autocomplete="off"/>                                      </span>                                    <span class="input-group-btn sign-btn">                                        <button class="subscribe-form-submit btn btn-primary" data-loading-text="Loading...">Sign Up</button>                                    </span>                                </div>                            </form>                        </div>                    </div>';
			return $output;
		}
	}
}