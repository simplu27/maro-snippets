<?php 
/*
* Make a flexslider for home page
* Inspirat din http://stackoverflow.com/questions/23180837/custom-post-type-slider
*/

 /**
 * Enqueue scripts and styles in functions.php
 */

function mytheme_scripts() {

	wp_enqueue_style( 'mytheme-flexslider-css', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/flexslider.min.css');
	
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );

	// Font-Awesome
	wp_enqueue_style( 'mytheme-fa', 'http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css' );

	wp_enqueue_script( 'mytheme-flexslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider-min.js', array(), '250', true );
	}
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

?>


<?php //////////////////////////////////////////////////////// ?>

<?php

// Daca se vrea sliderul pe Home Page, se includ urmatoarele in header.php
// Se poate include si in front-page.php daca se face un template pentru Home. In acest caz nu mai este nevoie de conditionalul is_front_page

if ( is_front_page() ) { ?>
    <script type="text/javascript">
(function($) {
    $(window).load(function() {
        $('#slider .flexslider').flexslider({
               animation: 'fade',
                slideshowSpeed: 5000,
                animationSpeed: 500,
                pauseOnAction: true,
                pauseOnHover: true,
                controlNav: true,
                directionNav: true, 
                controlsContainer: ".flexslider",
        });
    });
})(jQuery)
</script>

<section id="slider">
      <div class="flexslider">
        <ul class="slides">
        <?php query_posts(array('post_type' => 'home_slider','orderby' => 'rand')); if(have_posts()) : while(have_posts()) : the_post();?>
            <li class="slide">
            <div class="slide-image">
            	<?php the_post_thumbnail(); ?>
            	<div class="slide-text">
            		<h3 class="slide-title"><?php the_title(); ?></h3>
            		<?php the_excerpt(); ?>
            	</div>
            </div><!-- slide-image -->
            
          </li>
        <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
    </div>
</section>

<?php }
?>

<?php //////////////////////////////////////////////////////// ?>

<?php 

// Se creaza in functions.php un cutom post type numit home_slider
// Din el se va folosi title, content si the_post_thumbnail

// Home page slider Custom Post Type

// Register Custom Post Type
function custom_slider() {

	$labels = array(
		'name'                => 'Slides',
		'singular_name'       => 'Slide',
		'menu_name'           => 'Slider',
		'name_admin_bar'      => 'Slider',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Slides',
		'add_new_item'        => 'Add New Slide',
		'add_new'             => 'Add New',
		'new_item'            => 'New Slide',
		'edit_item'           => 'Edit Slide',
		'update_item'         => 'Update Slide',
		'view_item'           => 'View Slide',
		'search_items'        => 'Search Slides',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'home_slider',
		'description'         => 'Slider for Home Page',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt',
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,		
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'home_slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_slider', 0 );

// END Home page slider Custom Post Type

 ?>