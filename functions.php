<?php
/**
 * Econex functions and definitions
 *
 *
 * @package WordPress
 * @subpackage econex
 * @since Econex 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 584;

/**
 * Tell WordPress to run econex_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'econex_setup' );

if ( ! function_exists( 'econex_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override econex_setup() in a child theme, add your own econex_setup to your child theme's
 * functions.php file.
 *
 * @uses register_nav_menus() To add support for navigation menus.
 *
 * @since Econex 1.0
 */
function econex_setup() {

	/* Make Econex available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Econex, use a find and replace
	 * to change 'econex' to the name of your theme in all the template files.
	 */
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'econex' ) );

}
endif; // econex_setup

/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function econex_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'econex_excerpt_length' );



/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function econex_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= econex_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'econex_custom_excerpt_more' );