<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "wander_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Wander Options', 'wander-essentials' ),
        'page_title'           => __( 'Wander Options', 'wander-essentials' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
		
		'forced_dev_mode_off' => true,		
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'wander-essentials' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'wander-essentials' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'wander-essentials' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'wander-essentials' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'wander-essentials' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'wander-essentials' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'wander-essentials' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'wander-essentials' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'wander-essentials' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'wander-essentials' ),
        'icon'   => 'el el-home',
        /*  'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'wander-essentials' ),
                'desc'     => __( 'Example description.', 'wander-essentials' ),
                'subtitle' => __( 'Example subtitle.', 'wander-essentials' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            ) 
        ) */
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'wander-essentials' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'wander-essentials' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Header', 'wander-essentials' ),
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(				
			array (
				'id' => 'logo_light',
				'type' => 'media',
				'title' => __ ( 'Upload Light Logo', 'wander-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ) 
			),
			array (
				'id' => 'logo_dark',
				'type' => 'media',
				'title' => __ ( 'Upload Dark Logo', 'wander-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ) 
			),
			array (
				'id' => 'favicon',
				'type' => 'media',
				'title' => __ ( 'Upload Favicon', 'wander-essentials' ),
				'full_width' => true,
				'mode' => false,
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ) 
			),
			array (
						'id' => 'social_icons',
						'type' => 'sortable',
						'mode' => 'checkbox',
						'title' => __ ( 'Multi Social Options', 'wander-essentials' ),
						'subtitle' => __ ( 'Select Social Networks that show on Footer ', 'wander-essentials' ),
						'desc' => __ ( 'Select Social Networks that show on Footer', 'wander-essentials' ),
						'options' => array (
								
								'ion-social-facebook' => 'Facebook',
								'ion-social-twitter' => 'Twitter',
								'ion-social-googleplus' => 'Google Plus',
								'ion-social-linkedin' => 'LinkedIn',
								'ion-social-instagram' => 'Instagram',
								'ion-social-pinterest' => 'Pinterest',
								'ion-social-youtube' => 'Youtube',
								'ion-social-yahoo' => 'Yahoo'

						) 
				),
				array (
						'id' => 'social_links',
						'type' => 'textarea',
						'title' => __ ( 'Social Links', 'wander-essentials' ),
						'subtitle' => __ ( 'Sequentialy added selected social links', 'wander-essentials' ),
						'desc' => __ ( 'Sequentialy added selected social links, Seperated links with ","', 'wander-essentials' ),
						'default' => '#tw, #fb, #ins, #pin, #link, #drop'
				),					
        )
    ) );
	
	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Slider / Banner', 'wander-essentials' ),
		'id' => 'slider_settings',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
			
			array (
			'id' => 'slider_opts',
			'type'     => 'button_set',
			'title' => __ ( 'Select Slider', 'wander-essentials' ),
			'full_width' => true,
			'mode' => false,					
			'desc' => __ ( '', 'wander-essentials' ),
			'subtitle' => __ ( '', 'wander-essentials' ), 
			'options'  => array(							
					'slider_1' => 'FullScreen Slider',
					'slider_2' => 'FullWidth Slider',
					'slider_3' => 'FullScreen Video ',
					'slider_4' => 'FullWidth Video',
					'slider_5' => 'FullScreen Content',
					'slider_6' => 'FullWidth Content',
					'slider_7' => 'FullWidth Parallax',
					'slider_8' => 'Comming Soon'
				),
				'default'  => 'slider_1'
			),	
			
			// Content for slider 1
			array (
				'id' => 'slider_1_image_1',
				'type' => 'media',
				'title' => __ ( 'First Parallax Image', 'wander-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),	
			array(
				'id'       => 'slider_1_subtitletitle_1',
				'type'     => 'text',
				'title'    => __( '1st Slider Text style 1', 'wander-essentials' ),
				'default'  => 'We Set You Apart To Grow Online',
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),
			array(
				'id'       => 'slider_1_title_1',
				'type'     => 'editor',
				'title'    => __( '1st Slider Test Style 2', 'wander-essentials' ),
				'default'  => 'Bring your <span class="bold">business</span> to life',
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),
			array(
				'id'       => 'slider_1_content_1',
				'type'     => 'textarea',
				'title'    => __( '1st Slider Content', 'wander-essentials' ),
				'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),
			array(
				'id'       => 'slider_1_btn_content_1',
				'type'     => 'text',
				'title'    => __( '1st Slider Button Content', 'wander-essentials' ),
				'default'  => 'We are Creative',
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),
			array(
				'id'       => 'slider_1_btn_link_1',
				'type'     => 'text',
				'title'    => __( '1st Slider Button Link', 'wander-essentials' ),
				'default'  => '#features',
				'required' => array( 'slider_opts', '=', 'slider_1' )
			),		
			
            array (
                'id' => 'slider_1_image_2',
                'type' => 'media',
                'title' => __ ( 'Second Parallax Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_1' )
            ),  
            array(
                'id'       => 'slider_1_subtitletitle_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_1' )
            ),
            array(
                'id'       => 'slider_1_title_2',
                'type'     => 'editor',
                'title'    => __( '2nd Slider Test Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_1' )
            ),
            array(
                'id'       => 'slider_1_content_2',
                'type'     => 'textarea',
                'title'    => __( '2nd Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_1' )
            ),
            array(
                'id'       => 'slider_1_btn_content_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Button Content', 'wander-essentials' ),
                'default'  => 'We are Creative',
                'required' => array( 'slider_opts', '=', 'slider_1' )
            ),
            array(
                'id'       => 'slider_1_btn_link_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Button Link', 'wander-essentials' ),
                'default'  => '#features',
                'required' => array( 'slider_opts', '=', 'slider_1' )
            ),
			
           
			// Content for slider 2
			array (
                'id' => 'slider_2_image_1',
                'type' => 'media',
                'title' => __ ( 'First Parallax Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),  
            array(
                'id'       => 'slider_2_subtitletitle_1',
                'type'     => 'text',
                'title'    => __( '1st Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_title_1',
                'type'     => 'editor',
                'title'    => __( '1st Slider Test Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_content_1',
                'type'     => 'textarea',
                'title'    => __( '1st Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_btn_content_1',
                'type'     => 'text',
                'title'    => __( '1st Slider Button Content', 'wander-essentials' ),
                'default'  => 'We are Creative',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_btn_link_1',
                'type'     => 'text',
                'title'    => __( '1st Slider Button Link', 'wander-essentials' ),
                'default'  => '#features',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),

            array (
                'id' => 'slider_2_image_2',
                'type' => 'media',
                'title' => __ ( '2nd Parallax Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),  
            array(
                'id'       => 'slider_2_subtitletitle_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_title_2',
                'type'     => 'editor',
                'title'    => __( '2nd Slider Test Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_content_2',
                'type'     => 'textarea',
                'title'    => __( '2nd Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_btn_content_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Button Content', 'wander-essentials' ),
                'default'  => 'We are Creative',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
            array(
                'id'       => 'slider_2_btn_link_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Button Link', 'wander-essentials' ),
                'default'  => '#features',
                'required' => array( 'slider_opts', '=', 'slider_2' )
            ),
			
			
			
			// Content for slider 3
			
			array (
                'id' => 'slider_3_video_1',
                'type' => 'text',
                'title' => __ ( 'YouTube Video ID', 'wander-essentials' ),                            
                'desc' => __ ( 'Write YouTube Video ID', 'wander-essentials' ),
                'subtitle' => __ ( 'You can get ID from youTube url', 'wander-essentials' ),
                'default'  => 'rrNL9RlPDk0',
                'required' => array( 'slider_opts', '=', 'slider_3' )
            ),  
            array(
                'id'       => 'slider_3_subtitletitle_1',
                'type'     => 'text',
                'title'    => __( 'Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_3' )
            ),
            array(
                'id'       => 'slider_3_title_1',
                'type'     => 'editor',
                'title'    => __( 'Slider Test Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_3' )
            ),
            array(
                'id'       => 'slider_3_content_1',
                'type'     => 'textarea',
                'title'    => __( 'Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_3' )
            ),
            array(
                'id'       => 'slider_3_btn_content_1',
                'type'     => 'text',
                'title'    => __( 'Slider Button Content', 'wander-essentials' ),
                'default'  => 'We are Creative',
                'required' => array( 'slider_opts', '=', 'slider_3' )
            ),
            array(
                'id'       => 'slider_3_btn_link_1',
                'type'     => 'text',
                'title'    => __( 'Slider Button Link', 'wander-essentials' ),
                'default'  => '#features',
                'required' => array( 'slider_opts', '=', 'slider_3' )
            ),
			
			
			// Content for slider 4
			
			array (
                'id' => 'slider_4_video_1',
                'type' => 'text',
                'title' => __ ( 'YouTube Video ID', 'wander-essentials' ),                            
                'desc' => __ ( 'Write YouTube Video ID', 'wander-essentials' ),
                'subtitle' => __ ( 'You can get ID from youTube url', 'wander-essentials' ),
                'default'  => 'rrNL9RlPDk0',
                'required' => array( 'slider_opts', '=', 'slider_4' )
            ),  
            array(
                'id'       => 'slider_4_subtitletitle_1',
                'type'     => 'text',
                'title'    => __( 'Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_4' )
            ),
            array(
                'id'       => 'slider_4_title_1',
                'type'     => 'editor',
                'title'    => __( 'Slider Test Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_4' )
            ),
            array(
                'id'       => 'slider_4_content_1',
                'type'     => 'textarea',
                'title'    => __( 'Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_4' )
            ),
            array(
                'id'       => 'slider_4_btn_content_1',
                'type'     => 'text',
                'title'    => __( 'Slider Button Content', 'wander-essentials' ),
                'default'  => 'We are Creative',
                'required' => array( 'slider_opts', '=', 'slider_4' )
            ),
            array(
                'id'       => 'slider_4_btn_link_1',
                'type'     => 'text',
                'title'    => __( 'Slider Button Link', 'wander-essentials' ),
                'default'  => '#features',
                'required' => array( 'slider_opts', '=', 'slider_4' )
            ),			
			
			
			// Content for slider 5
			array (
                'id' => 'slider_5_image_1',
                'type' => 'media',
                'title' => __ ( 'Parallax Background Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),
            array (
                'id' => 'slider_5_video_1',
                'type' => 'text',
                'title' => __ ( 'YouTube Video Url', 'wander-essentials' ),                            
                'desc' => __ ( 'Write YouTube Video Url', 'wander-essentials' ),                
                'default'  => 'https://www.youtube.com/watch?v=4Wkr0eXiUNw',
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),  
            array(
                'id'       => 'slider_5_subtitletitle_1',
                'type'     => 'text',
                'title'    => __( '1st Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),
            array(
                'id'       => 'slider_5_title_1',
                'type'     => 'editor',
                'title'    => __( '1st Slider Text Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),
            array(
                'id'       => 'slider_5_content_1',
                'type'     => 'textarea',
                'title'    => __( '1st Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),
            array(
                'id'       => 'slider_5_subtitletitle_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),
            array(
                'id'       => 'slider_5_title_2',
                'type'     => 'editor',
                'title'    => __( '2nd Slider Test Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),
            array(
                'id'       => 'slider_5_content_2',
                'type'     => 'textarea',
                'title'    => __( '2nd Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_5' )
            ),
			
			
			
			// Content for slider 6
			array (
                'id' => 'slider_6_image_1',
                'type' => 'media',
                'title' => __ ( 'Parallax Background Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_6' )
            ),           
            array(
                'id'       => 'slider_6_subtitletitle_1',
                'type'     => 'text',
                'title'    => __( '1st Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_6' )
            ),
            array(
                'id'       => 'slider_6_title_1',
                'type'     => 'editor',
                'title'    => __( '1st Slider Text Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_6' )
            ),
            array(
                'id'       => 'slider_6_content_1',
                'type'     => 'textarea',
                'title'    => __( '1st Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_6' )
            ),
            array(
                'id'       => 'slider_6_subtitletitle_2',
                'type'     => 'text',
                'title'    => __( '2nd Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_6' )
            ),
            array(
                'id'       => 'slider_6_title_2',
                'type'     => 'editor',
                'title'    => __( '2nd Slider Test Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_6' )
            ),
            array(
                'id'       => 'slider_6_content_2',
                'type'     => 'textarea',
                'title'    => __( '2nd Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_6' )
            ),
			
			
			// Content for slider 7
			array (
                'id' => 'slider_7_image_1',
                'type' => 'media',
                'title' => __ ( 'Parallax Background Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_7' )
            ),           
            array(
                'id'       => 'slider_7_subtitletitle_1',
                'type'     => 'text',
                'title'    => __( '1st Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_7' )
            ),
            array(
                'id'       => 'slider_7_title_1',
                'type'     => 'editor',
                'title'    => __( '1st Slider Text Style 2', 'wander-essentials' ),
                'default'  => 'Bring your <span class="bold">business</span> to life',
                'required' => array( 'slider_opts', '=', 'slider_7' )
            ),
            array(
                'id'       => 'slider_7_content_1',
                'type'     => 'textarea',
                'title'    => __( '1st Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_7' )
            ),
			
			
			// Content for slider 8
			array (
                'id' => 'slider_8_image_1',
                'type' => 'media',
                'title' => __ ( 'Parallax Background Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_8' )
            ),           
            array(
                'id'       => 'slider_8_subtitletitle_1',
                'type'     => 'text',
                'title'    => __( '1st Slider Text style 1', 'wander-essentials' ),
                'default'  => 'We Set You Apart To Grow Online',
                'required' => array( 'slider_opts', '=', 'slider_8' )
            ),
            array (
                'id' => 'slider_8_image_2',
                'type' => 'media',
                'title' => __ ( 'Comming Soon Image', 'wander-essentials' ),
                'full_width' => true,
                'mode' => false,                
                'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
                'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
                'required' => array( 'slider_opts', '=', 'slider_8' )
            ),
            array(
                'id'       => 'slider_8_re_1',
                'type'     => 'text',
                'title'    => __( 'Release Date & time ', 'wander-essentials' ),
                'default'  => 'December 26, 2016 12:00:00',
                'required' => array( 'slider_opts', '=', 'slider_8' )
            ),
            array(
                'id'       => 'slider_8_content_1',
                'type'     => 'textarea',
                'title'    => __( '1st Slider Content', 'wander-essentials' ),
                'default'  => 'We create experiences that transform brands, grow businesses and makepeople’s lives<br>better. Awesome interdisciplinary team dedicated to your success!',
                'required' => array( 'slider_opts', '=', 'slider_8' )
            ),
            array(
                'id'       => 'slider_8_btn_content_1',
                'type'     => 'text',
                'title'    => __( 'Button Content', 'wander-essentials' ),
                'default'  => 'Back to home page',
                'required' => array( 'slider_opts', '=', 'slider_8' )
            ),
			
		) 
	) );
	
	
	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Contact Form', 'wander-essentials' ),
		'id' => 'contact_form',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
			array(
				'id'       => 'latitude',
				'type'     => 'text',
				'title'    => __( 'Map\'s Latitude', 'wander-essentials' ),
				'default'  => '52.507351',
			),
			array(
				'id'       => 'longitude',
				'type'     => 'text',
				'title'    => __( 'Map\'s Longitude', 'wander-essentials' ),
				'default'  => '-0.227758',
			),
			array(
				'id'       => 'receiver',
				'type'     => 'text',
				'title'    => __( 'Email Receiver', 'wander-essentials' ),
				'default'  => '-0.227758',
			),
			array(
				'id'       => 'thankyou_title',
				'type'     => 'text',
				'title'    => __( 'Thank you message title', 'wander-essentials' ),
				'default'  => 'Thanks For Your Comment',
			),
			array(
				'id'       => 'thankyou_subtitle',
				'type'     => 'text',
				'title'    => __( 'Thank you message subtitle', 'wander-essentials' ),
				'default'  => 'Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor. Quisque nec est id ante consectetur tristique. Suspendisse potenti.',
			),		
			array (
				'id' => 'address',
				'type' => 'editor',
				'title' => __ ( 'Address', 'wander-essentials' ),
				'subtitle' => __ ( 'Use any of the features of WordPress editor inside your panel!', 'wander-essentials' ),										
			)			
						
		) 
	) );
	
	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Blog', 'wander-essentials' ),
		'id' => 'blog_opts',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
				array (
				'id' => 'blog_banner',
				'type' => 'media',
				'title' => __ ( 'Upload Hero Banner For Blog Page', 'wander-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
			),			
						
		) 
	) );
	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Search Page', 'wander-essentials' ),
		'id' => 'search_opts',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
				array (
				'id' => 'search_banner',
				'type' => 'media',
				'title' => __ ( 'Upload Hero Banner For Blog Page', 'wander-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
			),			
						
		) 
	) );
	
	Redux::setSection ( $opt_name, array (
		'title' => __ ( '404 Page', 'wander-essentials' ),
		'id' => 'opts_404',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
				array (
				'id' => 'banner_404',
				'type' => 'media',
				'title' => __ ( 'Upload Hero Banner For 404 Page', 'wander-essentials' ),
				'full_width' => true,
				'mode' => false,				
				'desc' => __ ( 'Basic media uploader with disabled URL input field.', 'wander-essentials' ),
				'subtitle' => __ ( 'Upload any media using the WordPress native uploader', 'wander-essentials' ),
			),			
						
		) 
	) );
	
	Redux::setSection ( $opt_name, array (
		'title' => __ ( 'Footer', 'wander-essentials' ),
		'id' => 'footer',
		'subsection' => true,
		'customizer_width' => '450px',
		'fields' => array (
				array (
						'id' => 'copyright',
						'type' => 'editor',
						'title' => __ ( 'Footer Copyright', 'wander-essentials' ),
						'subtitle' => __ ( 'Use any of the features of WordPress editor inside your panel!', 'wander-essentials' ),
						'default' => '© 2016 Wander, All Rights Reserved. ',						
				),
				array (
						'id' => 'footer_social_icons',
						'type' => 'sortable',
						'mode' => 'checkbox',
						'title' => __ ( 'Multi Social Options', 'wander-essentials' ),
						'subtitle' => __ ( 'Select Social Networks that show on Footer ', 'wander-essentials' ),
						'desc' => __ ( 'Select Social Networks that show on Footer', 'wander-essentials' ),
						'options' => array (
								
								'ion-social-facebook' => 'Facebook',
								'ion-social-twitter' => 'Twitter',
								'ion-social-googleplus' => 'Google Plus',
								'ion-social-linkedin' => 'LinkedIn',
								'ion-social-instagram' => 'Instagram',
								'ion-social-pinterest' => 'Pinterest',
								'ion-social-yahoo' => 'Yahoo'

						) 
				),
				array (
						'id' => 'footer_social_links',
						'type' => 'textarea',
						'title' => __ ( 'Social Links', 'wander-essentials' ),
						'subtitle' => __ ( 'Sequentialy added selected social links', 'wander-essentials' ),
						'desc' => __ ( 'Sequentialy added selected social links, Seperated links with ","', 'wander-essentials' ),
						'default' => '#tw, #fb, #ins, #pin, #link, #drop'
				),			
						
		) 
	) );

    /*
     * <--- END SECTIONS
     */
