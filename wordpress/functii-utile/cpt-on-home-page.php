<?php

//////////////////////////////////////////////////////////////////////

// Display custom post type in home page
// functions.php
// http://crunchify.com/wordpress-custom-post-type-cpt-tips-and-tricks-rss-yarpp-post-meta-footer-homepage/

function custom_cpt_in_home_loop( $query ) {
    if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'produse') );  // replace produse with your CPT name
    return $query;
}
add_filter( 'pre_get_posts', 'custom_cpt_in_home_loop' );

//////////////////////////////////////////////////////////////////////