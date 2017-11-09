<?php 

add_action( 'init', 'wander_service_init' );
/**
 * Register a service post type.
 *
 */
function wander_service_init() {
	$labels = array(
		'name'               => _x( 'Services', 'Wander Services', 'wander-essentials' ),
		'singular_name'      => _x( 'Service', 'Wander Service', 'wander-essentials' ),
		'menu_name'          => _x( 'Wander services', 'admin menu', 'wander-essentials' ),
		'name_admin_bar'     => _x( 'service', 'add new on admin bar', 'wander-essentials' ),
		'add_new'            => _x( 'Add New', 'service', 'wander-essentials' ),
		'add_new_item'       => __( 'Add New Service', 'wander-essentials' ),
		'new_item'           => __( 'New Service', 'wander-essentials' ),
		'edit_item'          => __( 'Edit Service', 'wander-essentials' ),
		'view_item'          => __( 'View Service', 'wander-essentials' ),
		'all_items'          => __( 'All Services', 'wander-essentials' ),
		'search_items'       => __( 'Search Services', 'wander-essentials' ),
		'parent_item_colon'  => __( 'Parent Services:', 'wander-essentials' ),
		'not_found'          => __( 'No Services found.', 'wander-essentials' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'wander-essentials' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'wander-essentials' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'taxonomies' => array('category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'service', $args );
}