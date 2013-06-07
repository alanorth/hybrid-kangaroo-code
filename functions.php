<?php
/**
 * Functions File
 *
 * This is your child theme's functions.php file.  It is here for adding custom functions and
 * setting up default functionality for this child theme.  You are free to modify this file in
 * any way you like.
 *
 * @package HybridOriginal
 * @subpackage Functions
 */

function highlightjs_styles() {
	wp_enqueue_style( 'core', get_stylesheet_directory_uri() . '/highlight.default.min.css', false );
}

function highlightjs_scripts() {
	wp_enqueue_script( 'highlight-js', get_stylesheet_directory_uri() . '/highlight.min.js', array('jquery'), false, true);
	wp_enqueue_script( 'load-highlight-js', get_stylesheet_directory_uri() . '/highlight_all_the_things.js', false, true);
}

add_action( 'wp_enqueue_scripts', 'highlightjs_styles' );
add_action( 'wp_enqueue_scripts', 'highlightjs_scripts' );

?>
