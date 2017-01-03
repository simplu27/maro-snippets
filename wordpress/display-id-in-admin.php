<?php

// Display ID in post and pages in Admin
// http://wpsnipp.com/index.php/functions-php/add-post-id-to-posts-pages-admin-columns/

add_filter('manage_posts_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns_id', 5);
add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);

// Display ID for Custom Post Type
// add_filter('manage_edit-POSTTYPENAME_columns', 'posts_columns_id', 5);
// add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);

function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function posts_custom_id_columns($column_name, $id){
        if($column_name === 'wps_post_id'){
                echo $id;
    }
}