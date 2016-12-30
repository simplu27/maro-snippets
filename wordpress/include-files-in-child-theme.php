<?php

// Referencing / Including Files in Your Child Theme

// https://codex.wordpress.org/Child_Themes

// When you need to include files that reside within your child theme's directory structure, you will use get_stylesheet_directory(). Because the parent template's style.css is replaced by your child theme's style.css, and your style.css resides in the root of your child theme's subdirectory, get_stylesheet_directory() points to your child theme's directory (not the parent theme's directory).

// Here's an example, using require_once, that shows how you can use get_stylesheet_directory when referencing a file stored within your child theme's directory structure.

require_once( get_stylesheet_directory() . '/my_included_file.php' );