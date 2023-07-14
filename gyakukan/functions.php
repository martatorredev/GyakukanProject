<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gyakukan
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'GYAKUKAN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function gyakukan_styles() {
	wp_enqueue_style(
		'gyakukan-style',
		get_stylesheet_uri(),
		[],
		GYAKUKAN_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'gyakukan_styles' );