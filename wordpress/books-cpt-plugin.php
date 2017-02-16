<?php
/*
Plugin Name: Books Custom Post Type
Plugin URI:  http://mascore.dev
Description: Basic WordPress Plugin Header Comment
Version:     20170114
Author:      Manson
Author URI:  http://mascore.dev
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Create custom post type: books
// Custom taxonomies: 
// 		gen [hierarchical, like category]
//		an si autor [non-hierarchical, like tags]

if ( ! function_exists('books_post_type') ) {

// Register Custom Post Type
function books_post_type() {

	$labels = array(
		'name'                  => _x( 'Books', 'Post Type General Name', 'mascore_domain' ),
		'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'mascore_domain' ),
		'menu_name'             => __( 'Books', 'mascore_domain' ),
		'name_admin_bar'        => __( 'Books', 'mascore_domain' ),
		'archives'              => __( 'Books Archives', 'mascore_domain' ),
		'attributes'            => __( 'Book Attributes', 'mascore_domain' ),
		'parent_item_colon'     => __( '', 'mascore_domain' ),
		'all_items'             => __( 'All Books', 'mascore_domain' ),
		'add_new_item'          => __( 'Add New Book', 'mascore_domain' ),
		'add_new'               => __( 'Add New Book', 'mascore_domain' ),
		'new_item'              => __( 'New Book', 'mascore_domain' ),
		'edit_item'             => __( 'Edit Book', 'mascore_domain' ),
		'update_item'           => __( 'Update Book', 'mascore_domain' ),
		'view_item'             => __( 'View Book', 'mascore_domain' ),
		'view_items'            => __( 'View Books', 'mascore_domain' ),
		'search_items'          => __( 'Search Books', 'mascore_domain' ),
		'not_found'             => __( 'Not found', 'mascore_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mascore_domain' ),
		'featured_image'        => __( 'Featured Image', 'mascore_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'mascore_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'mascore_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'mascore_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'mascore_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'mascore_domain' ),
		'items_list'            => __( 'Items list', 'mascore_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'mascore_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'mascore_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'books',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Book', 'mascore_domain' ),
		'description'           => __( 'Books Custom Post Type', 'mascore_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'gen', ' an', ' autor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'books',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'books',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'books', $args );

}
add_action( 'init', 'books_post_type', 0 );

}

// Custom Taxonomies: gen [like category]

if ( ! function_exists( 'gen_custom_taxonomy' ) ) {

// Register Custom Taxonomy
function gen_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Genuri', 'Taxonomy General Name', 'mascore_domain' ),
		'singular_name'              => _x( 'Gen', 'Taxonomy Singular Name', 'mascore_domain' ),
		'menu_name'                  => __( 'Gen', 'mascore_domain' ),
		'all_items'                  => __( 'All Items', 'mascore_domain' ),
		'parent_item'                => __( 'Parent Item', 'mascore_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'mascore_domain' ),
		'new_item_name'              => __( 'New Item Name', 'mascore_domain' ),
		'add_new_item'               => __( 'Add New Item', 'mascore_domain' ),
		'edit_item'                  => __( 'Edit Item', 'mascore_domain' ),
		'update_item'                => __( 'Update Item', 'mascore_domain' ),
		'view_item'                  => __( 'View Item', 'mascore_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'mascore_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'mascore_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mascore_domain' ),
		'popular_items'              => __( 'Popular Items', 'mascore_domain' ),
		'search_items'               => __( 'Search Items', 'mascore_domain' ),
		'not_found'                  => __( 'Not Found', 'mascore_domain' ),
		'no_terms'                   => __( 'No items', 'mascore_domain' ),
		'items_list'                 => __( 'Items list', 'mascore_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'mascore_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'gen',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'gen', array( 'books' ), $args );

}
add_action( 'init', 'gen_custom_taxonomy', 0 );

}

// Custom Taxonomy: an [non-hierarchical, like tags]

if ( ! function_exists( 'an_custom_taxonomy' ) ) {

// Register Custom Taxonomy
function an_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Ani', 'Taxonomy General Name', 'mascore_domain' ),
		'singular_name'              => _x( 'An', 'Taxonomy Singular Name', 'mascore_domain' ),
		'menu_name'                  => __( 'An', 'mascore_domain' ),
		'all_items'                  => __( 'Toti anii', 'mascore_domain' ),
		'parent_item'                => __( '', 'mascore_domain' ),
		'parent_item_colon'          => __( '', 'mascore_domain' ),
		'new_item_name'              => __( 'New Item Name', 'mascore_domain' ),
		'add_new_item'               => __( 'Add New Item', 'mascore_domain' ),
		'edit_item'                  => __( 'Edit Item', 'mascore_domain' ),
		'update_item'                => __( 'Update Item', 'mascore_domain' ),
		'view_item'                  => __( 'View Item', 'mascore_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'mascore_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'mascore_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'mascore_domain' ),
		'popular_items'              => __( 'Popular Items', 'mascore_domain' ),
		'search_items'               => __( 'Search Items', 'mascore_domain' ),
		'not_found'                  => __( 'Not Found', 'mascore_domain' ),
		'no_terms'                   => __( 'No items', 'mascore_domain' ),
		'items_list'                 => __( 'Items list', 'mascore_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'mascore_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'an',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'an', array( 'books' ), $args );

}
add_action( 'init', 'an_custom_taxonomy', 0 );

}