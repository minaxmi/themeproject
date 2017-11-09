<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_wander_event_tab extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					extract ( shortcode_atts ( array (

						'title' => '',
						'tab_id' => '',

					), $atts ) );
					
					$id = "tab-c".$tab_id;
					if($id == "tab-c1"){
						$in = "active in";
					}else{
						$in = "";
					}
					
					$output = 
					'<div class="text-left tab-pane fade '.$in.'" id="tab-c' . ( isset( $tab_id ) ? $tab_id : sanitize_title( $title ) ) . '"> 
						<div class="timeline">'.do_shortcode($content).'</div>
					</div>';
				
					return $output;

				}
		}

	}