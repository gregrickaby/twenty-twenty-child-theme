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

	// Include asset file.
	$asset_file = include 'build/index.asset.php';

	// Enqueue parent theme style.
	wp_enqueue_style( 'twentytwenty', get_template_directory_uri() . '/style.css', null, $asset_file['version'] );

	// Enqueue child theme style.
	wp_enqueue_style( 'twentytwenty-child-style', get_stylesheet_directory_uri() . '/build/index.css', [], $asset_file['version'] );

	// Enqueue child theme script.
	wp_enqueue_script( 'twentytwenty-child-script', get_stylesheet_directory_uri() . '/build/index.js', $asset_file['dependencies'], $asset_file['version'], true );
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
