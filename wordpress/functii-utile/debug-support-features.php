<?php

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