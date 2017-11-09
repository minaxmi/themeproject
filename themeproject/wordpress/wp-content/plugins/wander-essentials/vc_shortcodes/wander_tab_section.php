<?php
 if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {

	    class WPBakeryShortCode_wander_tab_section extends WPBakeryShortCodesContainer {
			
				protected function content($atts, $content = null) {
					
					extract ( shortcode_atts ( array (

						'tab_style' => 'buttonTabs',
						'tab_align' => 'text-center'

					), $atts ) );
					

					preg_match_all( '/wander_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
					$tab_titles = array();
					$tab_contents = array();

					if ( isset( $matches[1] ) ) {
						$tab_titles = $matches[1];
					}
					//var_dump($tab_titles);
					if($tab_style == 'iconTabs'){
						$parent_class = 'icon-tabs-centered';
					}elseif($tab_style == 'buttonTabs'){
						$parent_class = 'buttons-tabs-centered';
					}else{
						$parent_class = 'buttons-tabs-centered';
					}
					
					
					$tabs_nav = '';
					$tabs_nav .= '<ul id="'.$tab_style.'" class="nav nav-tabs nav-tabs-center">';
					$i=1;
					foreach ( $tab_titles as $tab ) {
						$tab_atts = shortcode_parse_atts( $tab[0] );
						if($i==1){
							$active = 'active';
						}else{
							$active = '';
						}
						if ( isset( $tab_atts['title'] ) ) {
							if($tab_style == 'buttonTabs'){
								$tabs_nav .= '
								<li class="'.$active.'"><a href="#tab-' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '" data-toggle="tab">' . $tab_atts['title'] . '</a></li>';
							}else{
								$tabs_nav .= '
								<li class="'.$active.'"><a href="#tab-' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '" data-toggle="tab"><span class="icon-tab '.$tab_atts['tab_icon'].'"></span><span>' . $tab_atts['title'] . '</span></a></li>';
							}
							
						
						}
						$i++;
					}
					$tabs_nav .= '</ul>';




					
					$output = '
						<div class="'.$parent_class.' '.$tab_align.'">		
							'.$tabs_nav.'
							<div id="myTabContent" class="tab-content">		';				
								$j = 1;
								foreach ( $tab_titles as $tab ) {
									$tab_atts = shortcode_parse_atts( $tab[0] );
									if($j==1){
										$active = 'active in';
									}else{
										$active = '';
									}
									$output .= '<div class="tab-pane fade '.$active.'" id="tab-' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '"> 
										<p class="mb20">' . wpb_js_remove_wpautop($tab_atts['description']) . '</p> 
									</div>';
									$j++;
								}
								
								
							$output .= '
							</div>
						</div>';
				return $output;

				}
		}

	}