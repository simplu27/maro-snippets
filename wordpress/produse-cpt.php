<?php

///////////////////////////////////////////////////////

// PRODUS Custom Post Type
// Categorie Taxonomies [like category]
// Brand Taxonomies [like tag]

// Search and replace for text-domain [ mrwp_theme ]

	// Register Custom Post Type
	function mrwp_custom_post_type() {

		$labels = array(
			'name'                  => _x( 'Produse', 'Post Type General Name', 'mrwp_theme' ),
			'singular_name'         => _x( 'Produs', 'Post Type Singular Name', 'mrwp_theme' ),
			'menu_name'             => __( 'Produse', 'mrwp_theme' ),
			'name_admin_bar'        => __( 'Produse', 'mrwp_theme' ),
			'archives'              => __( 'Arhiva Produse', 'mrwp_theme' ),
			'attributes'            => __( 'Atributele produsului', 'mrwp_theme' ),
			'parent_item_colon'     => __( 'Parent Item:', 'mrwp_theme' ),
			'all_items'             => __( 'Toate produsele', 'mrwp_theme' ),
			'add_new_item'          => __( 'Adauga produs nou', 'mrwp_theme' ),
			'add_new'               => __( 'Produs nou', 'mrwp_theme' ),
			'new_item'              => __( 'Produs nou', 'mrwp_theme' ),
			'edit_item'             => __( 'Editeaza produsul', 'mrwp_theme' ),
			'update_item'           => __( 'Actualizeaza produsul', 'mrwp_theme' ),
			'view_item'             => __( 'Vezi produsul', 'mrwp_theme' ),
			'view_items'            => __( 'Vezi produsele', 'mrwp_theme' ),
			'search_items'          => __( 'Cauta in produse', 'mrwp_theme' ),
			'not_found'             => __( 'Nu a fost gasit', 'mrwp_theme' ),
			'not_found_in_trash'    => __( 'Nu a fost gasit in Trash', 'mrwp_theme' ),
			'featured_image'        => __( 'Imaginea produsului', 'mrwp_theme' ),
			'set_featured_image'    => __( 'Seteaza ca imagine a produsului', 'mrwp_theme' ),
			'remove_featured_image' => __( 'Sterge imaginea produsului', 'mrwp_theme' ),
			'use_featured_image'    => __( 'Foloseste ca imagine a produsului', 'mrwp_theme' ),
			'insert_into_item'      => __( 'Insert into item', 'mrwp_theme' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'mrwp_theme' ),
			'items_list'            => __( 'Lista de produse', 'mrwp_theme' ),
			'items_list_navigation' => __( 'Items list navigation', 'mrwp_theme' ),
			'filter_items_list'     => __( 'Filter items list', 'mrwp_theme' ),
		);

		$rewrite = array(
				'slug'                  => 'produse',
				'with_front'            => false,
				'pages'                 => true,
				'feeds'                 => true,
			);

		$args = array(
			'label'                 => __( 'Produse', 'mrwp_theme' ),
			'description'           => __( 'Produse Custom Post Type', 'mrwp_theme' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', ),
			'taxonomies'            => array( 'categorie', ' brand' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-star-filled',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => 'produse',		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
			'rewrite'               => $rewrite,
			'show_in_rest'          => true,
		);
		register_post_type( 'produse', $args );

	}
	add_action( 'init', 'mrwp_custom_post_type', 0 );

// Custom taxonomy: categorie

	// Register Custom Brand Taxonomy
	function custom_categorie_taxomnomy() {

		$labels = array(
			'name'                       => _x( 'Categorii', 'Taxonomy General Name', 'mrwp_theme' ),
			'singular_name'              => _x( 'Categorie', 'Taxonomy Singular Name', 'mrwp_theme' ),
			'menu_name'                  => __( 'Categorie', 'mrwp_theme' ),
			'all_items'                  => __( 'Toate categoriile', 'mrwp_theme' ),
			'parent_item'                => __( 'Parent Item', 'mrwp_theme' ),
			'parent_item_colon'          => __( 'Parent Item:', 'mrwp_theme' ),
			'new_item_name'              => __( 'Adauga categorie noua', 'mrwp_theme' ),
			'add_new_item'               => __( 'Adauga categorie', 'mrwp_theme' ),
			'edit_item'                  => __( 'Editeaza categoria', 'mrwp_theme' ),
			'update_item'                => __( 'Actualizeaza categoria', 'mrwp_theme' ),
			'view_item'                  => __( 'Vezi categoria', 'mrwp_theme' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'mrwp_theme' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'mrwp_theme' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'mrwp_theme' ),
			'popular_items'              => __( 'Popular Items', 'mrwp_theme' ),
			'search_items'               => __( 'Search Items', 'mrwp_theme' ),
			'not_found'                  => __( 'Not Found', 'mrwp_theme' ),
			'no_terms'                   => __( 'No items', 'mrwp_theme' ),
			'items_list'                 => __( 'Items list', 'mrwp_theme' ),
			'items_list_navigation'      => __( 'Items list navigation', 'mrwp_theme' ),
		);
		$rewrite = array(
			'slug'                       => 'categorie-produse',
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
			'show_tagcloud'              => true,
			'query_var'                  => 'categorie',
			'rewrite'                    => $rewrite,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'categorie', array( 'produse' ), $args );

	}
	add_action( 'init', 'custom_categorie_taxomnomy', 0 );

	// Register Custom Taxonomy
	function custom_brand_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Branduri', 'Taxonomy General Name', 'mrwp_theme' ),
			'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'mrwp_theme' ),
			'menu_name'                  => __( 'Brand', 'mrwp_theme' ),
			'all_items'                  => __( 'Toate brandurile', 'mrwp_theme' ),
			'parent_item'                => __( 'Parent Item', 'mrwp_theme' ),
			'parent_item_colon'          => __( 'Parent Item:', 'mrwp_theme' ),
			'new_item_name'              => __( 'Brand nou', 'mrwp_theme' ),
			'add_new_item'               => __( 'Adauga rand nou', 'mrwp_theme' ),
			'edit_item'                  => __( 'Editeaza brandul', 'mrwp_theme' ),
			'update_item'                => __( 'Actualizeaza brandul', 'mrwp_theme' ),
			'view_item'                  => __( 'Vezi brandul', 'mrwp_theme' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'mrwp_theme' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'mrwp_theme' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'mrwp_theme' ),
			'popular_items'              => __( 'Popular Items', 'mrwp_theme' ),
			'search_items'               => __( 'Search Items', 'mrwp_theme' ),
			'not_found'                  => __( 'Not Found', 'mrwp_theme' ),
			'no_terms'                   => __( 'No items', 'mrwp_theme' ),
			'items_list'                 => __( 'Items list', 'mrwp_theme' ),
			'items_list_navigation'      => __( 'Items list navigation', 'mrwp_theme' ),
		);
		$rewrite = array(
			'slug'                       => 'branduri',
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
		register_taxonomy( 'brand', array( 'produse' ), $args );

	}
	add_action( 'init', 'custom_brand_taxonomy', 0 );

///////////////////////////////////////////////////////