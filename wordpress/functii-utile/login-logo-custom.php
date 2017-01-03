<?php

////////////////////////////////////////////////////////////////

// Custom login logo
// https://codex.wordpress.org/Customizing_the_Login_Form

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            padding-bottom: 10px;
            background-size: 140px 140px;
            width: 140px;
            height: 140px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Schimba url-ul logoului
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Schimba titlul din url-ul logoului la login page
function my_login_logo_url_title() {
    // return 'Your Site Name and Info';
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

////////////////////////////////////////////////////////////////