<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	class WPBakeryShortCode_wander_testimonial_section extends WPBakeryShortCodesContainer {
		protected function content($atts, $content = null) {
			$output = '<div class="testimonials white owl-carousel">'.do_shortcode($content).'</div>';
			return $output;
		}
		}

}