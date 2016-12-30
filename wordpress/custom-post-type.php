<?php

// Custom Post Type Wordpress
// Produse

// Register Custom Post Type
function produse_post_type() {

	$labels = array(
		'name'                  => _x( 'Produse', 'Post Type General Name', 'mwp_text_domain' ),
		'singular_name'         => _x( 'Produs', 'Post Type Singular Name', 'mwp_text_domain' ),
		'menu_name'             => __( 'Produse', 'mwp_text_domain' ),
		'name_admin_bar'        => __( 'Produs', 'mwp_text_domain' ),
		'archives'              => __( 'Item Archives', 'mwp_text_domain' ),
		'attributes'            => __( 'Item Attributes', 'mwp_text_domain' ),
		'parent_item_colon'     => __( 'Parent Produs:', 'mwp_text_domain' ),
		'all_items'             => __( 'All Produse', 'mwp_text_domain' ),
		'add_new_item'          => __( 'Add New Produs', 'mwp_text_domain' ),
		'add_new'               => __( 'New Produs', 'mwp_text_domain' ),
		'new_item'              => __( 'New Item', 'mwp_text_domain' ),
		'edit_item'             => __( 'Edit Produs', 'mwp_text_domain' ),
		'update_item'           => __( 'Update Produs', 'mwp_text_domain' ),
		'view_item'             => __( 'View Produs', 'mwp_text_domain' ),
		'view_items'            => __( 'View Items', 'mwp_text_domain' ),
		'search_items'          => __( 'Search produse', 'mwp_text_domain' ),
		'not_found'             => __( 'No produse found', 'mwp_text_domain' ),
		'not_found_in_trash'    => __( 'No produse found in Trash', 'mwp_text_domain' ),
		'featured_image'        => __( 'Featured Image', 'mwp_text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'mwp_text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'mwp_text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'mwp_text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'mwp_text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mwp_text_domain' ),
		'items_list'            => __( 'Items list', 'mwp_text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'mwp_text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'mwp_text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Produs', 'mwp_text_domain' ),
		'description'           => __( 'Produs information pages.', 'mwp_text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'menu_icon'   			=> 'dashicons-star-filled',
		'capability_type'       => 'page',
	);
	register_post_type( 'produs', $args );

}
add_action( 'init', 'produse_post_type', 0 );