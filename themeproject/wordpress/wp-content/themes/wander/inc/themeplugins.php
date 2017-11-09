<?php
class wander_ThemePlugins{

public static function wander_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(       
        array(
            'name'               => 'Theme Option',
            'slug'               => 'redux-framework',
			'required'           => true, 
        ),
		
		array(
            'name'               => 'Max Mega Menu',
            'slug'               => 'megamenu',
			'required'           => true, 
        ),

        array(
            'name'               => 'Visual Composer',
            'slug'               => 'js_composer',
            'source'             => 'https://www.dropbox.com/s/pvjg99yi4kl4741/js_composer.zip?dl=1', 
            'required'           => true,
        ),
        array(
            'name'               => 'Wander Essentials',
            'slug'               => 'wander-essentials',
            'source'             => 'https://www.dropbox.com/s/mcmb4y8joh1r1q1/wander-essentials.zip?dl=1',
            'required'           => true,
            'version'            => '',
        ),
        array(
            'name'               => 'Meta Box',
            'slug'               => 'meta-box',          
            'required'           => true,
           
        ),
        array(
            'name'               => 'Contact Form 7',
            'slug'               => 'contact-form-7',       
            'required'           => true,
           
        ),
        array(
            'name'               => 'Woocommerce',
            'slug'               => 'woocommerce',
            'required'           => true,           
        ),
        array(
            'name'               => 'Widget Importer & Exporter',
            'slug'               => 'widget-importer-exporter',
            'required'           => true,           
        )
    );

    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

       
    );

    tgmpa( $plugins, $config );
}

}