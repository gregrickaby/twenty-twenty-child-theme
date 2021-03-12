<?php
/**
 * Twenty Twenty Child functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Child
 * @since Twenty Twenty Child 1.0
 */

/**
 * Enqueue styles and scripts.
 *
 * @author Greg Rickaby <greg@webdevstudios.com>
 * @since 1.0.0
 */
function twentytwentychild_enqueue() {
	// Enqueue parent theme style.
	wp_enqueue_style( 'twentytwenty', get_template_directory_uri() . '/style.css', null, wp_get_theme()->parent()->get( 'Version' ) );

	// Enqueue child theme style.
	wp_enqueue_style( 'twentytwenty-child-style', get_stylesheet_directory_uri() . '/build/index.css', array( 'twentytwenty' ), wp_get_theme()->get( 'Version' ) );

	// Enqueue child theme script.
	wp_enqueue_script( 'twentytwenty-child-script', get_stylesheet_directory_uri() . '/build/index.js', array( 'twentytwenty-js' ), wp_get_theme()->get( 'Version' ), true );
	wp_script_add_data( 'twentytwenty-child-script', 'async', true );
}
add_action( 'wp_enqueue_scripts', 'twentytwentychild_enqueue' );

/**
 * Dequeue styles and scripts.
 *
 * @author Greg Rickaby <greg@webdevstudios.com>
 * @since 1.0.0
 */
function twentytwentychild_dequeue() {
	// Don't enqueue child theme style.css. Child theme uses a custom stylesheet.
	wp_dequeue_style( 'twentytwenty-style' );
}
add_action( 'wp_enqueue_scripts', 'twentytwentychild_dequeue', 11 );
