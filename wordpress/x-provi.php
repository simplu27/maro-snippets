<?php

// Provi

// Load Custom Post Type: Produs
// Load custom taxonomies for Produs: categorie, brand
require get_template_directory() . '/custom-post-type/produs.php';

// Excerpt More Custom

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 * https://developer.wordpress.org/reference/functions/the_excerpt/
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Custom image size in select size admin media

//* Add new image sizes
add_image_size( 'front-page-icon', 90, 90, false );
 
function post_image_sizes($sizes){
    $custom_sizes = array(
        'front-page-icon' => 'Front Page'
    );
    return array_merge( $sizes, $custom_sizes );
}
add_filter('image_size_names_choose', 'post_image_sizes');

////////////////////////////////////////////////////////

// WPAlchemy

include_once 'metaboxes/setup.php';
include_once 'metaboxes/simple-spec.php';
// Custom meta for produse CPT
include_once 'metaboxes/custom-meta-produse.php';
// include_once 'metaboxes/full-spec.php';
// include_once 'metaboxes/checkbox-spec.php';
// include_once 'metaboxes/radio-spec.php';
// include_once 'metaboxes/select-spec.php';

///////////////////////////////////////////////////////////

// Add Toolbar Menus & Remove menus from toolbar
function custom_toolbar() {

	global $wp_admin_bar;

	//Remove the WordPress logo...
	// $wp_admin_bar->remove_menu('wp-logo');
	// $wp_admin_bar->remove_menu('site-name');
			// Sub menu for site-name:
			// $wp_admin_bar->remove_menu('dashboard');
			// dashboard, appeareance, themes, widgets, menus, background, header
	// $wp_admin_bar->remove_menu('customize');
	// $wp_admin_bar->remove_menu('updates');
	// $wp_admin_bar->remove_menu('new-content');
	// $wp_admin_bar->remove_menu('edit');
	// $wp_admin_bar->remove_menu('comments');

	// intreg meniul din dreapta [search and my-account]
	// $wp_admin_bar->remove_menu('top-secondary');

	// $wp_admin_bar->remove_menu('search');
	// $wp_admin_bar->remove_menu('my-account');


	// CUSTOM MENU IN TOOLBAR

	$args = array(
		'id'     => 'site-menu',
		'title'  => __( 'Mascore.dev', 'text_domain' ),
		'href'  => admin_url(),
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'parent-menu',
		'title'  => __( 'Admin URL', 'text_domain' ),
		'href'  => admin_url(),
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'child-menu',
		'parent' => 'parent-menu',
		'title'  => __( 'mascore.dev', 'text_domain' ),
		'href'  => 'http://www.mascore.dev'
	);
	$wp_admin_bar->add_menu( $args );

	$args = array(
		'id'     => 'child-menu-phpmyadmin',
		'parent' => 'parent-menu',
		'title'  => __( 'PHP My Admin', 'text_domain' ),
		'href'  => 'http://localhost/phpmyadmin/'
	);
	$wp_admin_bar->add_menu( $args );

}

add_action( 'wp_before_admin_bar_render', 'custom_toolbar', 999 );

///////////////////////////////////////////////////////////