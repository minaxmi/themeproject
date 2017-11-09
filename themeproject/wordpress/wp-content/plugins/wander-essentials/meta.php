<?php
/*************Post Meta*****************/
add_filter( 'rwmb_meta_boxes', 'wander_slider_meta_boxes' );
function wander_slider_meta_boxes( $meta_boxes ) {
    $prefix = 'wander_';
    $meta_boxes[] = array(
        'title'      => __( 'Slider / Banner', 'wander' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'id'   => "{$prefix}slider",
                'name' => __( 'Want to Show Slider?', 'wander' ),
                'type' => 'select',
                'options' => array(
                    'slider_1' => __( 'FullScreen Slider', 'wander' ),
                    'slider_2' => __( 'FullWidth Slider', 'wander' ),
                    'slider_3' => __( 'FullScreen Video', 'wander' ),
                    'slider_4' => __( 'FullWidth Video', 'wander' ),
                    'slider_5' => __( 'FullScreen Content', 'wander' ),
                    'slider_6' => __( 'FullWidth Content', 'wander' ),
                    'slider_7' => __( 'FullWidth Parallax', 'wander' ),
                    'slider_8' => __( 'Comming Soon', 'wander' ),
                    'banner' => __( 'Show Banner', 'wander' ),
                ),
                'multiple'    => false,
                'std'         => 'no',
                'placeholder' => __( 'Select an Item', 'wander' ),
            ),

            array(
                'name' => __( 'Banner Text', 'your-prefix' ),
                'desc' => __( 'Banner Text Area If Page Slider was Hide', 'wander' ),
                'id'   => "{$prefix}bn_text",
                'type' => 'textarea',
                'cols' => 20,
                'rows' => 3,
            ),
            array(
                'name'             => __( 'Dark Menu', 'wander' ),
                'id'               => "dark_menu",
                'type'             => 'checkbox',
            ),
            array(
                'name'             => __( 'Banner Background Image', 'wander' ),
                'id'               => "bg_img",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ), 
            
        ),
    );
    
    $meta_boxes[] = array(
        'title'      => __( 'Project Options', 'wander' ),
        'post_types' => 'project',
        'fields'     => array(

            array(
                'name'             => __( 'Project Video Url', 'wander' ),
                'desc'             => __( 'Write Project Video link if you select Video Formate', 'wander' ),
                'id'               => "p_vid",
                'type'             => 'oembed',
                'max_file_uploads' => 1,
            ),             
            array(
                'name'             => __( 'Project Client Name', 'wander' ),
                'desc'             => __( 'Write your Client Name', 'wander' ),
                'id'               => "p_name",
                'type'             => 'text',
                'max_file_uploads' => 1,
            ),
            array(
                'name'             => __( 'Project Date', 'wander' ),
                'desc'             => __( 'Write Project Date', 'wander' ),
                'id'               => "p_date",
                'type'             => 'text',
                'max_file_uploads' => 1,
            ),
            array(
                'name'             => __( 'Project Link', 'wander' ),
                'desc'             => __( 'Write your Project link', 'wander' ),
                'id'               => "p_link",
                'type'             => 'text',
                'max_file_uploads' => 1,
            ), 
			array(
                'name'             => __( 'Project Gallery Image', 'wander' ),
                'desc'             => __( 'Upload Image For Project Gallery', 'wander' ),
                'id'               => "p_img",
                'type'             => 'image_advanced',
                'max_file_uploads' => 10,
            ),            
            
        ),
    );

    $meta_boxes[] = array(
        'title'      => __( 'Blog Options', 'wander' ),
        'post_types' => 'post',
        'fields'     => array(            
            array(
                'name'             => __( 'Blog Gallery Image', 'wander' ),
                'desc'             => __( 'Upload Image For Blog Gallery', 'wander' ),
                'id'               => "b_img",
                'type'             => 'image_advanced',
                'max_file_uploads' => 10,
            ),
            array(
                'name'             => __( 'Blog Video Url', 'wander' ),
                'desc'             => __( 'Write Blog Video link if you select Video Formate', 'wander' ),
                'id'               => "b_vid",
                'type'             => 'oembed',
                'max_file_uploads' => 1,
            ),             
            
        ),
    );

    return $meta_boxes;
}