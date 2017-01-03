<?php

//////////////////////////////////////////////////////////////////////

// Add Toolbar Menus
// functions.php
// Adauga un link in Toolbar

function custom_toolbar_email_support() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'email_id_support',
		'title'  => __( 'myemail@gmail.com', 'mascore_text_domain' ),
		'href'   => 'http://www.google.com',
		'group'  => false,
	);
	$wp_admin_bar->add_menu( $args );

}
add_action( 'wp_before_admin_bar_render', 'custom_toolbar_email_support', 999 );


//////////////////////////////////////////////////////////////////////