<?php

// excerpt_support_for_pages
// Adauga suport pentru excerpt in page
// https://wordpress.org/support/topic/excerpt-in-page-using-add_post_type_support/

////////////////////////////////////////////////////////////////

function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

////////////////////////////////////////////////////////////////

// Pentru a verifica supportul:
// https://wordpress.org/support/topic/excerpt-in-page-using-add_post_type_support/

add_action('wp_footer', 'bcw_debug', 999 );
function bcw_debug() {
   global $_wp_post_type_features;
   echo '<pre>';
   // print_r( $_wp_post_type_features);
   // page poate fi inlocuit cu: post, attachment, nav_menu_item, revision, etc
   print_r( $_wp_post_type_features['page']);
   echo '</pre>';
}

// Afiseaza in pagina, in partea de jos, un array cu functiile suportate

////////////////////////////////////////////////////////////////