<?php
class Visual_Composer {
	static function wander_param_settings_field($settings, $value) {
		
		$html = '';
		return $html;
	}
	

	static function add_shortcode_to_VC() {
		vc_add_param("vc_row", array(
				"type" => "dropdown",
				"group" => "Wander Additions",
				"class" => "",
				"heading" => "Type",
				"param_name" => "type",
				"value" => array(
						"Container" => "container",
						"Container Fluid" => "container_fluid"
				)
		));
		vc_add_param("vc_row", array(
				"type" => "checkbox",
				"group" => "Wander Additions",
				"class" => "",
				"heading" => "Vertical Align",
				"param_name" => "is_vertical_align"
		));
		vc_add_param("vc_row", array(
				"type" => "checkbox",
				"group" => "Wander Additions",
				"class" => "",
				"heading" => "No Column Padding",
				"param_name" => "no_padding_margin"
		));
		/***********************Title*******************************/
		
		
			vc_map(array(

	    		'name'                    => "Wander Title Block",

	    		'base'                    => "wander_title_block",

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
				
	    		'params'                  => array(

	    			
					array(

						"type"       => "textarea_html",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					array (
							"type" => "dropdown",
							"heading" => __ ( "Select Title Size", 'wander-essentials' ),
							"param_name" => "title_size",
							"value" => array (
								'Default' => 'h5',
								'H1' => 'h1',
								'H2' => 'h2',
								'H3' => 'h3',
								'H4' => 'h4',
								'H5' => 'h5',
								'H6' => 'h6',
							)
					),
					array (
							"type" => "dropdown",
							"heading" => __ ( "Select Title Align", 'wander-essentials' ),
							"param_name" => "title_align",
							"value" => array (
								'Default' => '',
								'Left' => 'text-left',
								'Right' => 'text-right',
								'Center' => 'text-center',
							)
					),
					array(

	    				"type"       => "checkbox",

						"heading"    => "Seperator?",

						"param_name" => "is_seperator",

					),
					array(

						"type"       => "textfield",

						"heading"    => "Exrta Class",

						"param_name" => "class",

						"value"      => ''

					),
					
	    		)

	    	));
			
			
/***********************Wander Video*******************************/
		
		
			vc_map(array(

	    		'name'                    => "Wander Video",

	    		'base'                    => "wander_video",

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

	    		'params'                  => array(

	    			
					array(

						"type"       => "textfield",

						"heading"    => "Video Url",

						"param_name" => "url",

						"value"      => ''

					)
	    		)

	    	));
				
			
/***********************Wander Gap*******************************/	
			
			
			vc_map(array(

	    		'name'                    => "Wander Gap",

	    		'base'                    => "wander_gap",

	    		"content_element"         => true,

	    		'params'                  => array(

	    			
					array(

						"type"       => "textfield",

						"heading"    => "Gap in Pixel",

						"param_name" => "height",

						"value"      => ''

					)
	    		)

	    	));
			

					
	/**
		 * ******** ===================== TEAM ===================== *************
		 */
		
		
			vc_map(array(

				'name'                    => "Wander Team Carousel",

				'base'                    => "wander_team_section",

				"as_parent"               => array('only' => 'wander_team'),
				

				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',

				'description'             => 'Insert icon-based boxes with columns',
			));
			
			vc_map(array(

	    		'name'                    => "Wander Team",

	    		'base'                    => "wander_team",
				
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

	    		"content_element"         => true,

	    		'params'                  => array(

	    			array (
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __ ( "Team Member Name", 'wander-essentials' ),
							"param_name" => "name",
							"description" => __ ( "Name of Team Member", 'wander-essentials' )
					),
					array (
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __ ( "Designation of Team Member", 'wander-essentials' ),
							"param_name" => "designation",
							"description" => __ ( "Designation of Team Member,", 'wander-essentials' )
					),
					array (
							"type" => "attach_image",
							"class" => "",
							"heading" => __ ( "Team Image", 'wander-essentials' ),
							"param_name" => "team_img",
							"description" => __ ( "Images for Team Member", 'wander-essentials' ) 
					),
					array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Social Link", 'wander-essentials' ),
							"param_name" => "social_link",
							"value" => array (
									'',
									'yes',
									'no' 
							),
							"description" => __ ( "Social Link shows or not", 'wander-essentials' ) 
					),
					array (
							"type" => "exploded_textarea",
							"holder" => "h3",
							"class" => "",
							"heading" => __ ( "Social Icon Classes", 'wander-essentials' ),
							"param_name" => "social_icons",
							"description" => __ ( "Social Icon Classes multiple seperated by 'new line'.", 'wander-essentials' ),
							'dependency' => array (
									'element' => 'social_link',
									'value' => 'yes' 
							) 
					),
					array (
							"type" => "exploded_textarea",
							"holder" => "h3",
							"class" => "",
							"heading" => __ ( "Social Links", 'wander-essentials' ),
							"param_name" => "social_links",
							"description" => __ ( "Social links multiple seperated by 'new line'.", 'wander-essentials' ),
							'dependency' => array (
									'element' => 'social_link',
									'value' => 'yes' 
							) 
					)

	    		)

	    	));

		
		
					
	/**
		 * ******** ===================== Grid Slider ===================== *************
		 */
		
		
			vc_map(array(

				'name'                    => "Wander Grid Slider Section",

				'base'                    => "wander_grid_slider_section",

				"as_parent"               => array('only' => 'wander_grid_slider'),
				

				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',

				'description'             => 'Insert icon-based boxes with columns',
				
				
			));
			
			vc_map(array(

	    		'name'                    => "Wander Slider Item",

	    		'base'                    => "wander_grid_slider",
				
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
				
				"as_child"               => array('only' => 'wander_grid_slider_section'),
	    		
				"content_element"         => true,

	    		'params'                  => array(

					array (
							"type" => "attach_image",
							"class" => "",
							"heading" => __ ( "Grid Slide Image", 'wander-essentials' ),
							"param_name" => "slider_img",
							"description" => __ ( "Images for Team Member", 'wander-essentials' ) 
					)

	    		)

	    	));

		
		
		
	/**
		 * ******** ===================== Progress Bar ===================== *************
		 */
		
		
			vc_map(array(

				'name'                    => "Wander Progress Bar Section",

				'base'                    => "wander_progress_bars_section",

				"as_parent"               => array('only' => 'wander_progress_bar'),
				

				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',

				'description'             => 'Insert icon-based boxes with columns',
				
				'params'                  => array(

					array(

						"type"       => "dropdown",

						"heading"    => "Progress Bar Style",

						"param_name" => "style",

						"value" => array (
							'Select Style' => '',
							'Style 1' => '1',
							'Style 2' => '2',
							'Style 3' => '3',
						),

					)
				)
			));
			
			vc_map(array(

	    		'name'                    => "Item",

	    		'base'                    => "wander_progress_bar",

	    		"as_child"                => array('only' => 'wander_progress_bars_section'),

	    		"content_element"         => true,
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
	    		'params'                  => array(

	    			array (
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __ ( "Item Name", 'wander-essentials' ),
							"param_name" => "name",
					),
					array (
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __ ( "Percentage of Progress", 'wander-essentials' ),
							"param_name" => "percentage",
							"description" => __ ( "Percentage of Progress,", 'wander-essentials' )
					)					
	    		)

	    	));

					
	/**
		 * ******** ===================== Progress Circles ===================== *************
		 */
			
			
			vc_map(array(

	    		'name'                    => "Wander Progress Circle",

	    		'base'                    => "wander_progress_circle",
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
	    		"content_element"         => true,

	    		'params'                  => array(

	    			array(

						"type"       => "dropdown",

						"heading"    => "Style",

						"param_name" => "style",

						"value" => array (
							'Select Style' => '',
							'Style 1' => 'style-1',
							'Style 2' => 'style-2',
							'Style 3' => 'style-3',
							'Style 4' => 'style-4',
						),

					),
					array (
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __ ( "Item Name", 'wander-essentials' ),
							"param_name" => "name",
					),
					array (
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => __ ( "Percentage of Progress", 'wander-essentials' ),
							"param_name" => "percentage",
							"description" => __ ( "Percentage of Progress,", 'wander-essentials' )
					),
					array(

	    				"type"       => "checkbox",

						"heading"    => "Icon?",

						"param_name" => "is_icon",

					),
					
					array(

						"type"       => "textfield",

						"heading"    => "Icon Class",

						"param_name" => "icon_class",
						
						"dependency" => array(
						
							"element" => "is_icon",
							
							"value" => "true"
							
						)
						
					),
					array(

						"type"       => "textfield",

						"heading"    => "Icon Color",

						"param_name" => "icon_color",

						"value"      => ''

					),					
	    		)

	    	));

		
		
		
		
		
		
		/**
		 * ******** ===================== Services ===================== *************
		 */		
		
		vc_map(array(

				'name'                    => "Wander Service Section",

				'base'                    => "wander_service_section",

				"as_parent"               => array('only' => 'wander_service'),
				

				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',
				
				'params'                  => array(

					array (
							"type" => "attach_image",
							"class" => "",
							"heading" => __ ( "Service Background", 'wander-essentials' ),
							"param_name" => "background",
							"description" => __ ( "Images for Service section's Background", 'wander-essentials' ) 
					)

				),
				'description'             => 'Insert icon-based boxes with columns'

			));
					

			vc_map(array(

	    		'name'                    => "Wander Service",

	    		'base'                    => "wander_service",

	    		"as_child"                => array('only' => 'wander_service_section'),

	    		"content_element"         => true,

	    		'params'                  => array(

				
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					
					array(

						"type"       => "textfield",

						"heading"    => "Icon",

						"param_name" => "icon",

						"value"      => ''

					),
					
					array(

						"type"       => "dropdown",

						"heading"    => "Layout Background Color",

						"param_name" => "layout_color",

						"value" => array (
							'Select Color' => '',
							'White' => 'light-color white-bg',
							'Black' => 'dark-color white light-black-bg',
						),

					),	
					
					array(

						"type"       => "textarea_html",

						"heading"    => "Description",

						"param_name" => "description",

						"value"      => ''

					)
	    		)

	    	));
			
		
		/**
		 * ******** ===================== SPONSOR ===================== *************
		 */		
		
			vc_map(array(

						'name'                    => "Wander Sponsor Section",

						'base'                    => "wander_sponsor_section",

						"as_parent"               => array('only' => 'wander_sponsor'),

						"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',

				'params'                  => array(

							
							
					array(

						"type"       => "dropdown",

						"heading"    => "Style",

						"param_name" => "style",

						"value" => array (
							'Select Style' => '',
							'Style 1' => '2',
							'Style 2' => '3',
							//'Style 3' => '3',
						),

					)

				),

				'description'             => 'Insert icon-based boxes with columns'

			));

			vc_map(array(

	    		'name'                    => "Wander Sponsor",

	    		'base'                    => "wander_sponsor",

	    		"as_child"                => array('only' => 'wander_sponsor_section'),

	    		"content_element"         => true,

	    		'params'                  => array(

	    			array (
							"type" => "attach_image",
							"class" => "",
							"heading" => __ ( "Sponsor's Image", 'wander-essentials' ),
							"param_name" => "sponsor_img",
							"description" => __ ( "Images for Sponsor", 'wander-essentials' ), 
							"value"      => ''
				)

	    		)

	    	));
			
	
		
/* ============= BLOG POSTS ========== */
		vc_map ( array (
				"name" => __ ( "Wander Blog", 'wander-essentials' ),
				"base" => "wander_blog_post",
				"class" => "",
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
				'admin_enqueue_js' => array (
						get_template_directory_uri () . '/vc_extend/bartag.js' 
				),
				'admin_enqueue_css' => array (
						get_template_directory_uri () . '/vc_extend/bartag.css' 
				),
				"params" => array (
							
						array (
								"type" => "textfield",
								"class" => "",
								"heading" => __ ( "Number Of posts", 'wander-essentials' ),
								"param_name" => "posts_per_page",
								"description" => __ ( "Number of posts should be shown in this section, numeric value", 'wander-essentials' ) 
						),
						array(

								"type"       => "checkbox",

								"heading"    => "Post Carousel?",

								"param_name" => "post_carousel",

							),
						array(

								"type"       => "dropdown",

								"heading"    => "Filter",

								"param_name" => "filter",

								"description" => __ ( "Filter", 'sparklin-essentials' ), 
								
								"value"      => array(
									"",
									"on",
									"off",
								),
								

							),
							
				) 
		) );	
		
		
	
		
/* ============= Feature Box ========== */
		vc_map ( array (
				"name" => __ ( "Wander Feature Box", 'wander-essentials' ),
				"base" => "wander_feature_box",
				"class" => "",
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
				'admin_enqueue_js' => array (
						get_template_directory_uri () . '/vc_extend/bartag.js' 
				),
				'admin_enqueue_css' => array (
						get_template_directory_uri () . '/vc_extend/bartag.css' 
				),
				"params" => array (
							
						array (
								"type" => "dropdown",
								"heading" => __ ( "Select Text Alignment", 'wander-essentials' ),
								"param_name" => "text_align",
								"value" => array (
									'Default' => 'text-left',
									'Left' => 'text-left',
									'Right' => 'text-right',
									'Center' => 'text-center',
										
								)
						),	
						array (
								"type" => "dropdown",
								"heading" => __ ( "Select Box Style", 'wander-essentials' ),
								"param_name" => "box_style",
								"value" => array (
									'Default' => 'feature-left',
									'Feature Style 1' => 'feature-left',
									'Feature Style 2' => 'feature-center',
									'Feature Style 3' => 'feature-left-stack',
									'Box Style 1' => 'box box-style1',
									'Box Style 2' => 'box box-style2',
									'Box Style 3' => 'box box-style3',
									'Box Style 4' => 'box box-style4',
									'Box Style 5' => 'box box-style5',
									'Box Style 6' => 'box box-style6',
									'Box Style 7' => 'box box-style7',
									'Box Style 8' => 'box box-style8',
									'Box Style 9' => 'box box-style9',
									'Box Style 10' => 'box box-style10',
									'Box Style 11' => 'box box-style11',
									'Box Style 12' => 'box box-style7b',
									'Box Style 13' => 'box box-style8b',
										
								)
						),
						array(

							"type"       => "checkbox",

							"heading"    => "Custom Background?",

							"param_name" => "custom_background",

						),
						
						
						
						array (
								"type" => "colorpicker",
								"class" => "",
								"heading" => __ ( "Background", 'wander-essentials' ),
								"param_name" => "background_color",
								"dependency" => array(
						
									"element" => "custom_background",
									
									"value" => "true"
									
								),
								"description" => __ ( "Background Color", 'wander-essentials' ),  
						),
						array(

							"type"       => "textfield",

							"heading"    => "Icon",

							"param_name" => "icon",

							"value"      => ''

						),
						array(

							"type"       => "textfield",

							"heading"    => "Icon Link",

							"param_name" => "icon_link",

						),
						array(

							"type"       => "checkbox",

							"heading"    => "Background Icon?",

							"param_name" => "is_back_icon",

						),
						array(

							"type"       => "textfield",

							"heading"    => "Back Icon",

							"param_name" => "back_icon",

							"dependency" => array(
						
								"element" => "is_back_icon",
								
								"value" => "true"
								
							),

						),
						array(

							"type"       => "textfield",

							"heading"    => "Title",

							"param_name" => "title",

							"value"      => ''

						),
						array (
								"type" => "dropdown",
								"heading" => __ ( "Select Title Size", 'wander-essentials' ),
								"param_name" => "title_size",
								"value" => array (
									'Default' => 'h5',
									'H1' => 'h1',
									'H2' => 'h2',
									'H3' => 'h3',
									'H4' => 'h4',
									'H5' => 'h5',
									'H6' => 'h6',
								)
						),
						array (
								"type" => "colorpicker",
								"class" => "",
								"heading" => __ ( "Title Color", 'wander-essentials' ),
								"param_name" => "title_color",
								"description" => __ ( "Title Color", 'wander-essentials' ),  
						),
						array(

							"type"       => "textarea",

							"heading"    => "Description",

							"param_name" => "description",

							"value"      => ''

						),
				) 
		) );	
		
		
		
/***********************Projects*******************************/
		
		
			vc_map(array(

						'name'                    => "Wander Projects",

						'base'                    => "wander_projects",					
						
						"content_element"         => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						'params'                  => array(

							
							array(

								"type"       => "textfield",

								"heading"    => "Posts Per Page",

								"param_name" => "posts_per_page",

								"value"      => ''

							),														
								
							array(

									"type"       => "dropdown",

									"heading"    => "Filter",

									"param_name" => "filter",

									"description" => __ ( "Filter", 'sparklin-essentials' ), 
									
									"value"      => array(
										"",
										"on",
										"off",
									),
									

							),
							array (
									"type" => "dropdown",
									"heading" => __ ( "Select Style", 'wander-essentials' ),
									"param_name" => "portfolio_style",
									"value" => array (
										'Default' => 'grid',
										'Grid' => 'grid',
										'Mesonary' => 'mesonary',
										'No Gutter' => 'no_gutter',
										'Metro' => 'metro',
										'Video Gallery' => 'video_gallery',
										'Audio Gallery' => 'audio_gallery',
										'Image Gallery' => 'image_gallery',
										'Gallery Carousel' => 'gallery_carousel',
									)
							),
							

						),

						'description'             => 'Insert icon-based boxes with columns'

					));
	
	
		
/***********************Shop*******************************/
		
		
			vc_map(array(

						'name'                    => "Wander Shop",

						'base'                    => "wander_shop",					
						
						"content_element"         => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						'params'                  => array(

							
							array(

								"type"       => "textfield",

								"heading"    => "Posts Per Page",

								"param_name" => "posts_per_page",

								"value"      => ''

							),
							
							array(

								"type"       => "dropdown",

								"heading"    => "Filter",

								"param_name" => "filter",

								"description" => __ ( "Filter", 'sparklin-essentials' ), 
								
								"value"      => array(
									"",
									"on",
									"off",
								)

							),	
							array(

								"type"       => "checkbox",

								"heading"    => "Mesonary Grid?",

								"param_name" => "is_mesonary",

							),

						),

						'description'             => 'Insert icon-based boxes with columns'

					));
	
	
/***********************Alert Box*******************************/
		
		
			vc_map(array(

						'name'                    => "Wander Google Map",

						'base'                    => "wander_gmap",					
						
						"content_element"         => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						'params'                  => array(

							
							array(

								"type"       => "textarea_html",

								"heading"    => "Map Info",

								"param_name" => "map_info",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "Map Coordinate",

								"param_name" => "coordinate",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "Map Height",

								"param_name" => "height",

								"value"      => ''

							),
							array (
									"type" => "dropdown",
									"heading" => __ ( "Select Map Style", 'wander-essentials' ),
									"param_name" => "map_style",
									"value" => array (
										'Default' => 'map-style-1',
										'Map Style 1' => 'map-style-1',
										'Map Style 2' => 'map-style-2',
										'Map Style 3' => 'map-style-3',
									)
							),
							

						),

						'description'             => 'Insert icon-based boxes with columns'

					));

	
/***********************Alert Box*******************************/
		
		
			vc_map(array(

						'name'                    => "Wander Alert Box",

						'base'                    => "wander_alert",					
						
						"content_element"         => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						'params'                  => array(

							
							array(

								"type"       => "textarea_html",

								"heading"    => "Message",

								"param_name" => "message",

								"value"      => ''

							),
							array(

								"type"       => "textfield",

								"heading"    => "Icon",

								"param_name" => "icon",

								"value"      => ''

							),
							array (
								"type" => "dropdown",
								"heading" => __ ( "Select Alert Type", 'wander-essentials' ),
								"param_name" => "alert_type",
								"value" => array (
									'Default' => 'alert-info',
									'Info' => 'alert-info',
									'Warning' => 'alert-warning',
									'Success' => 'alert-success',
									'Danger' => 'alert-danger',
								)
						),
							

						),

						'description'             => 'Insert icon-based boxes with columns'

					));

/***********************Subscription*******************************/
		
		
			vc_map(array(

						'name'                    => "Wander Subscription",

						'base'                    => "wander_subscription",					
						
						"content_element"         => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),					

						'description'             => 'Insert icon-based boxes with columns'

					));

		/* ============= Contact Us ========== */
		vc_map ( array (
				"name" => __ ( "Wander Contact Us", 'wander-essentials' ),
				"base" => "wander_contact_us",
				
				"content_element"         => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						
		) );

			
/***********************Counter*******************************/
vc_map(array(

	    		'name'                    => "Wander Counter",

	    		'base'                    => "wander_counter",

	    		"content_element"         => true,
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
	    		'params'                  => array(

	    			array(

						"type"       => "textfield",

						"heading"    => "Item Name",

						"param_name" => "item_name",

						"value"      => ''

					),    			
	    			array(

						"type"       => "textfield",

						"heading"    => "Upto",

						"param_name" => "item_upto",

						"value"      => ''

					)
					
	    		)

	    	));
			
			
					
/***********************CountDown Timer*******************************/
vc_map(array(

	    		'name'                    => "Wander CountDown Timer",

	    		'base'                    => "wander_countdown_timer",

	    		"content_element"         => true,
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
	    		'params'                  => array(

	    			array(

						"type"       => "textfield",

						"heading"    => "Date",

						"param_name" => "date",
						
						"description" => __ ( "Use this format: December 26, 2016 12:00:00 ", 'wander-essentials' ),

					),
					array (
								"type" => "dropdown",
								"heading" => __ ( "Select Counter Size", 'wander-essentials' ),
								"param_name" => "counter_size",
								"value" => array (
									'Default' => '',
									'Small' => 'countdown-small',
									'Big' => 'countdown-big',
								)
						),					
	    			
	    		)

	    	));
			
						
/***********************Button*******************************/
			
			vc_map(array(

	    		'name'                    => "Wander Button",

	    		'base'                    => "wander_button",

	    		"content_element"         => true,
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
	    		'params'                  => array(

	    			array(

						"type"       => "textfield",

						"heading"    => "Button Text",

						"param_name" => "button_text",
						
					), 
	    			array(

						"type"       => "textfield",

						"heading"    => "Button Link",

						"param_name" => "button_link",
						
					),
					array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Button Shapes", 'wander-essentials' ),
							"param_name" => "button_shape",
							"value" => array (
									"Default" => "",
									"Square" => "btn-square",
									"Round" => "btn-round",
									"Circle" => "btn-circle",
									
							)
					),
					array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Button Styles", 'wander-essentials' ),
							"param_name" => "button_style",
							"value" => array (
									"Default" => "",
									"Dark Button" => "btn-dark",
									"Primary Color" => "btn-primary",
									"Light Button" => "btn-light",
									"Dark Ghost" => "btn-ghost",
									"Color Ghost" => "btn-ghost-color",
									
							)
					), 
					array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Button Styles", 'wander-essentials' ),
							"param_name" => "button_size",
							"value" => array (
									"default" => "",
									"Small" => "btn-sm",
									"Medium" => "btn-md",
									"Large" => "btn-lg",
									"Extra Large" => "btn-xl",
									
							)
					), 
	    			array(

	    				"type"       => "checkbox",

						"heading"    => "Button Icon?",

						"param_name" => "is_icon",

					),
					
					array(

						"type"       => "textfield",

						"heading"    => "Button Icon",

						"param_name" => "button_icon",
						
						"dependency" => array(
						
							"element" => "is_icon",
							
							"value" => "true"
							
						)
						
					),	
					array(

	    				"type"       => "checkbox",

						"heading"    => "Appearing Icons?",

						"param_name" => "appering_icon",

					),	
					array(

	    				"type"       => "checkbox",

						"heading"    => "Fullwidth Buttons?",

						"param_name" => "is_fullwidth",

					),	
					array(

	    				"type"       => "checkbox",

						"heading"    => "Add Tooltip to Button?",

						"param_name" => "is_tooltip",

					),	
					array(

						"type"       => "textfield",

						"heading"    => "Tooltip Title",

						"param_name" => "tooltip_title",
						
						"dependency" => array(
						
							"element" => "is_tooltip",
							
							"value" => "true"
							
						)
						
					),		
					array(

						"type"       => "textfield",

						"heading"    => "Tooltip Position",

						"param_name" => "tooltip_position",
						
						"dependency" => array(
						
							"element" => "is_tooltip",
							
							"value" => "true"
							
						),
						"description" => __ ( "left, right, top or bottom", 'wander-essentials' ),  
						
					),						
	    			
	    		)

	    	));
			
			
			
/***********************Slider*******************************/
			vc_map(array(

	    		'name'                    => "Wander Slider",

	    		'base'                    => "wander_slider",

	    		"content_element"         => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

	    		'params'                  => array(

					array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Select Slider", 'wander-essentials' ),
							"param_name" => "slider_opts",
							"value" => array (
									"Default" => "slider_1",
									"FullScreen Slider" => "slider_1",
									"FullWidth Slider" => "slider_2",
									"FullScreen Video" => "slider_3",
									"FullWidth Video" => "slider_4",
									"FullScreen Content" => "slider_5",
									"FullWidth Content" => "slider_6",
									"FullWidth Parallax" => "slider_7",
									"Comming Soon" => "slider_8",
									
							)
					)
	    		)

	    	));


			
/***********************Section*******************************/
			vc_map(array(

	    		'name'                    => "Wander Section",

	    		'base'                    => "wander_section",

	    		"content_element"         => true,

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

	    		'params'                  => array(

					array (
							"type" => "colorpicker",
							"class" => "",
							"heading" => __ ( "Background", 'wander-essentials' ),
							"param_name" => "background",
							"description" => __ ( "Background Color", 'wander-essentials' ),  
					),
	    			array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
	    			array(

						"type"       => "textfield",

						"heading"    => "ID",

						"param_name" => "id",

						"value"      => ''

					),
					array (
							"type" => "dropdown",
							"class" => "",
							"heading" => __ ( "Container", 'wander-essentials' ),
							"param_name" => "has_container",
							"value" => array (
									"" => "",
									"Yes" => "yes",
									"No" => "no",
									
							)
					)
	    		)

	    	));



/***********************TESIMONIAL*******************************/	

				
					vc_map(array(

						'name'                    => "Wander Tesimonial Section",

						'base'                    => "wander_testimonial_section",

						"as_parent"               => array('only' => 'wander_testimonial'),

						
						"content_element"         => true,

						

						'show_settings_on_create' => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						'is_container'            => true,

						"js_view"                 => 'VcColumnView',

						//'icon'                    => 'icon-content-box',

						'params'                  => array(

							
							array(

								"type"       => "textfield",

								"heading"    => "Title",

								"param_name" => "title",

								"value"      => ''

							),
											
						),

						'description'             => 'Insert icon-based boxes with columns'

					));

					
					

			vc_map(array(

	    		'name'                    => "Tesimonial",

	    		'base'                    => "wander_testimonial",

	    		"as_child"                => array('only' => 'wander_testimonial_section'),

	    		"content_element"         => true,

	    		'params'                  => array(	    			
					
					array(

						"type"       => "textfield",

						"heading"    => "Name",

						"param_name" => "name",

						"value"      => ''

					),
					
					array(

						"type"       => "textarea_html",

						"heading"    => "Description",

						"param_name" => "description",

						"value"      => ''

					),
					array(

						"type"       => "textfield",

						"heading"    => "Designation",

						"param_name" => "designation",

						"value"      => ''

					)
	    		)

	    	));
			
			

/***********************Accordion*******************************/	

				
			vc_map(array(

				'name'                    => "Wander Accordion Section",

				'base'                    => "wander_accordion_section",

				"as_parent"               => array('only' => 'wander_accordion_item'),

				
				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',

				'params'                  => array(

					
					array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Container", 'wander-essentials' ),
						"param_name" => "accordion_style",
						"value" => array (
								"Default" => "accordian-style6",
								"Style 1" => "accordian-style1",
								"Style 2" => "accordian-style2",
								"Style 3" => "accordian-style6",
								
						)
					)
									
				),

				'description'             => 'Insert icon-based boxes with columns'

			));

					
					

			vc_map(array(

	    		'name'                    => "Accordion Item",

	    		'base'                    => "wander_accordion_item",

	    		"as_child"                => array('only' => 'wander_accordion_section'),

	    		"content_element"         => true,

	    		'params'                  => array(	    			
					
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					
					array(

						"type"       => "textarea_html",

						"heading"    => "Description",

						"param_name" => "description",

						"value"      => ''

					),
					array(

						"type"       => "textfield",

						"heading"    => "HTML ID",

						"param_name" => "html_id",

						"value"      => ''

					)
	    		)

	    	));
			
			
/***********************Tabs*******************************/	

				
			vc_map(array(

				'name'                    => "Wander Tab Section",

				'base'                    => "wander_tab_section",

				"as_parent"               => array('only' => 'wander_tab'),

				
				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',

				'params'                  => array(

					
					array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Tab Style", 'wander-essentials' ),
						"param_name" => "tab_style",
						"value" => array (
								"Default" => "buttonTabs",
								"Button Tabs" => "buttonTabs",
								"Icon Tabs" => "iconTabs",
								
						)
					),
					array (
						"type" => "dropdown",
						"class" => "",
						"heading" => __ ( "Tab Alignment", 'wander-essentials' ),
						"param_name" => "tab_align",
						"value" => array (
								"Default" => "text-left",
								"Center" => "text-center",
								"Left" => "text-left",
								
						)
					)
									
				),

				'description'             => 'Insert icon-based boxes with columns'

			));

					
					

			vc_map(array(

	    		'name'                    => "Tab Item",

	    		'base'                    => "wander_tab",

	    		"as_child"                => array('only' => 'wander_tab_section'),

	    		"content_element"         => true,

	    		'params'                  => array(	    			
					
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					
					array(

						"type"       => "textarea_html",

						"heading"    => "Description",

						"param_name" => "description",

						"value"      => ''

					),
					array(

						"type"       => "textfield",

						"heading"    => "Tab Icon",

						"param_name" => "tab_icon",

					),
					array(

						"type"       => "textfield",

						"heading"    => "Tab ID",

						"param_name" => "tab_id",

						"value"      => ''

					)
	    		)

	    	));
			
				
/***********************Event Tabs*******************************/	

				
			vc_map(array(

				'name'                    => "Wander Event Tab Section",

				'base'                    => "wander_event_tab_section",

				"as_parent"               => array('only' => 'wander_event_tab'),

				
				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',
				'description'             => 'Insert icon-based boxes with columns'

			));

					
					

			vc_map(array(

	    		'name'                    => "Event Tab Item",

	    		'base'                    => "wander_event_tab",
				
				"as_parent"               => array('only' => 'wander_event'),
	    		
				"as_child"                => array('only' => 'wander_event_tab_section'),

	    		
				"content_element"         => true,

				

				'show_settings_on_create' => true,

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),

				'is_container'            => true,

				"js_view"                 => 'VcColumnView',

				//'icon'                    => 'icon-content-box',


	    		'params'                  => array(	    			
					
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					array(

						"type"       => "textfield",

						"heading"    => "Tab ID",

						"param_name" => "tab_id",

						"value"      => ''

					)
	    		)

	    	));
			
			vc_map(array(

	    		'name'                    => "Event Item",

	    		'base'                    => "wander_event",
				
				"as_child"                => array('only' => 'wander_event_tab'),

	    		
				"content_element"         => true,

				

				"category" => __ ( 'wander-essentials', 'wander-essentials' ),


	    		'params'                  => array(	    			
					
					array(

						"type"       => "textfield",

						"heading"    => "Title",

						"param_name" => "title",

						"value"      => ''

					),
					
					array(

						"type"       => "textfield",

						"heading"    => "Speaker",

						"param_name" => "mentor",

						"value"      => ''

					),
					array(

						"type"       => "textfield",

						"heading"    => "Time",

						"param_name" => "time",

					)
	    		)

	    	));
			
			
			/**********Pricing*******************/
			
			
			vc_map(array(

				'name'                 	  => "Wander Pricing",

				'base'                    => "wander_pricing_column",
				
				"category" => __ ( 'wander-essentials', 'wander-essentials' ),
	    		
				"content_element"         => true,

	    		'params'                  => array(

	    			array(

	    				"type"       => "textfield",

						"heading"    => "Plan Name",

						"param_name" => "plan_name",

					),
					
					array(

	    				"type"       => "checkbox",

						"heading"    => "Is it paid Plan?",

						"param_name" => "is_paid",

					),
					
					array(

	    				"type"       => "textfield",

						"heading"    => "Price",

						"param_name" => "price",
						
						"dependency" => array(
						
							"element" => "is_paid",
							
							"value" => "true"
							
						)

					),
					
					array(

	    				"type"       => "textfield",

						"heading"    => "Per",

						"param_name" => "per",
						
						"dependency" => array(
						
							"element" => "is_paid",
							
							"value" => "true"
							
						)

					),
					
	    			array(

						"type"       => "textarea",

						"heading"    => "Rows",

						"param_name" => "content",

						"value"      => '',

						'description' => 'Use line break (press Enter) to separate between items',

					),

					array(

	    				"type"       => "textfield",

						"heading"    => "Button Text",

						"param_name" => "button_text",

					),

					array(

	    				"type"       => "textfield",

						"heading"    => "Button link",

						"param_name" => "button_link",

					),
					array(

	    				"type"       => "checkbox",

						"heading"    => "Featured",

						"param_name" => "featured",

					)

	    		)

	    	));

/***********************Image Gallery*******************************/
			vc_map ( array (
				"name" => __ ( "Wander Image Gallery", "wander-essentials" ),
				"base" => "image_gallery",
				"class" => "",
				"category" => __ ( "wander-essentials", "wander-essentials" ),
				'admin_enqueue_js' => array (
						get_template_directory_uri () . '/vc_extend/bartag.js'
				),
				'admin_enqueue_css' => array (
						get_template_directory_uri () . '/vc_extend/bartag.css'
				),
				"params" => array (
						
						array (
								"type" => "attach_images",
								"class" => "",
								"holder" => "img",
								"heading" => __ ( "Client Logo", "wander-essentials" ),
								"param_name" => "gallery_img",
								"description" => __ ( "Upload images for Gallery", "wander-essentials" ) 
						),								

				)
		) );	
/***********************Project Gallery carousel*******************************/
			vc_map(array(

						'name'                    => "Wander Project Gallery Carousel",

						'base'                    => "portfolio_gallery_carousel",					
						
						"content_element"         => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						'params'                  => array(

							array(

								"type"       => "textfield",

								"heading"    => "Number of Project You Want to show",

								"param_name" => "p_number",

								"value"      => ''

							),						
													
						),
						

					));
/***********************Project Video Gallery*******************************/
			vc_map(array(

						'name'                    => "Wander Project Video Gallery",

						'base'                    => "project_video_gallery",					
						
						"content_element"         => true,

						"category" => __ ( 'wander-essentials', 'wander-essentials' ),

						'params'                  => array(

							array(

								"type"       => "textfield",

								"heading"    => "Number of Project You Want to show",

								"param_name" => "p_number",

								"value"      => ''

							),						
													
						),
						

					));	
		
	}
}