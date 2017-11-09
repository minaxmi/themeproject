<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	class WPBakeryShortCode_wander_event_tab_section extends WPBakeryShortCodesContainer {
		
		protected function content($atts, $content = null) {
			preg_match_all( '/wander_event_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
					$tab_titles = array();

					if ( isset( $matches[1] ) ) {
						$tab_titles = $matches[1];
					}
					
					
					$tabs_nav = '';
					$tabs_nav .= '<ul id="buttonTabs" class="nav nav-tabs nav-tabs-center">';
					foreach ( $tab_titles as $tab ) {
						$tab_atts = shortcode_parse_atts( $tab[0] );												
						$id = "tab-c".$tab_atts['tab_id'];
						if($id == "tab-c1"){
							$active = "active";
						}else{
							$active = "";
						}
						
						if ( isset( $tab_atts['title'] ) ) {							
							$tabs_nav .= '
							<li class="'.$active.'"><a href="#tab-c' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '" data-toggle="tab">' . $tab_atts['title'] . '</a></li>';						
						}
						
					}
					$tabs_nav .= '</ul>';


					
					$output = '
						<div class="buttons-tabs-centered text-center">'.$tabs_nav.'
							<div id="myTabContent2" class="tab-content">';
								$output .= do_shortcode($content)
							.'</div>
						</div>';
			return $output;
		}
	}

}