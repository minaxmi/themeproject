<?php 

add_action( 'init', 'wander_project_init' );
/**
 * Register a project post type.
 *
 */
function wander_project_init() {
	$labels = array(
		'name'               => _x( 'Projects', 'Wander Projects', 'wander-essentials' ),
		'singular_name'      => _x( 'Project', 'Wander Project', 'wander-essentials' ),
		'menu_name'          => _x( 'Wander Projects', 'admin menu', 'wander-essentials' ),
		'name_admin_bar'     => _x( 'project', 'add new on admin bar', 'wander-essentials' ),
		'add_new'            => _x( 'Add New', 'project', 'wander-essentials' ),
		'add_new_item'       => __( 'Add New Project', 'wander-essentials' ),
		'new_item'           => __( 'New Project', 'wander-essentials' ),
		'edit_item'          => __( 'Edit Project', 'wander-essentials' ),
		'view_item'          => __( 'View Project', 'wander-essentials' ),
		'all_items'          => __( 'All Projects', 'wander-essentials' ),
		'search_items'       => __( 'Search Projects', 'wander-essentials' ),
		'parent_item_colon'  => __( 'Parent Projects:', 'wander-essentials' ),
		'not_found'          => __( 'No Projects found.', 'wander-essentials' ),
		'not_found_in_trash' => __( 'No Projects found in Trash.', 'wander-essentials' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'wander-essentials' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,		
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
register_taxonomy('project_category', 'project', array('hierarchical' => true, 'label' => 'Wander Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
	register_post_type( 'project', $args );
}