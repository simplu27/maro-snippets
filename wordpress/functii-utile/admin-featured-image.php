<?php

//////////////////////////////////////////////////////////////////////

// Display featured image in admin page
// functions.php
// http://crunchify.com/how-to-show-wordpress-featured-image-in-wordpress-admin-panel/

add_image_size( 'custom-admin-post-featured-image', 120, 140, false );
 
// Add the posts and pages columns filter. They can both use the same function.
add_filter('manage_posts_columns', 'custom_add_post_admin_thumbnail_column', 2);
add_filter('manage_pages_columns', 'custom_add_post_admin_thumbnail_column', 2);
 
// Add the column
function custom_add_post_admin_thumbnail_column($custom_columns){
	$custom_columns['custom_thumb'] = __('Featured Image');
	return $custom_columns;
}
 
// Manage Post and Page Admin Panel Columns
add_action('manage_posts_custom_column', 'custom_show_post_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'custom_show_post_thumbnail_column', 5, 2);
 
// Here we are grabbing featured-thumbnail size post thumbnail and displaying it
function custom_show_post_thumbnail_column($custom_columns, $custom_id){
	switch($custom_columns){
		case 'custom_thumb':
		if( function_exists('the_post_thumbnail') )
			echo the_post_thumbnail( 'custom-admin-post-featured-image' );
		else
			echo 'Not support for featured image...';
		break;
	}
}

//////////////////////////////////////////////////////////////////////