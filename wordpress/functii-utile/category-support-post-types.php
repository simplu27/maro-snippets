<?php

//////////////////////////////////////////////////////////////////////

// Adds category Taxonomy support for all registered WordPress post types.
// http://darrinb.com/code/add-category-taxonomy-support-post-types/

function add_category_support() {
    $post_types = get_post_types();        
    foreach ($post_types as $post_type) {
        register_taxonomy_for_object_type('category', $post_type);
    }
}
add_action( 'init', 'add_category_support', 99 );

//////////////////////////////////////////////////////////////////////