<?php
 if ( class_exists( 'WPBakeryShortCode' ) ) {

	class WPBakeryShortCode_wander_testimonial extends WPBakeryShortCode {						protected function content($atts, $content = null) {
				extract(shortcode_atts( array(							'name' => '',							'description' => '',							'designation' => '',						), $atts)					);															$output = '						<div> 							<i class="vossen-quote color"></i>							<h4>'.$description.'</h4>  							<h5 class="subheading">'.esc_html($name).'</h5>							<p>'.esc_html($designation).'</p>						</div>';
		return $output;
}
		}
	}