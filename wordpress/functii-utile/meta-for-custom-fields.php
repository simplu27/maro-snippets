<?php

//////////////////////////////////////////////////////////////////////

// Display meta for all custom fields in php vardump
// Result apears in edit page or post, on top
// Info: http://wpsnipp.com/index.php/functions-php/show-absolutely-custom-fields-post/

add_action( 'all_admin_notices', 'wpsnipp_show_all_custom_fields' );
function wpsnipp_show_all_custom_fields() {
    if ( isset( $_GET['post'] ) ) {
        $post_id = absint( $_GET['post'] );
        ?>
        <div id="message" class="updated">
            <h3>All post meta:</h3>
            <!-- <xmp><?php print_r( get_post_meta( $post_id ) ); ?></xmp> -->
           <?php
	           	echo "<pre>";
	            	var_dump(get_post_meta( $post_id ));
	            echo "</pre>";
            ?>
        </div>
        <?php
    }
}

//////////////////////////////////////////////////////////////////////