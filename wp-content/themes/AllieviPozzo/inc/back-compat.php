<?php
/**
 * Allievi Pozzo back compat functionality.
 *
 * Prevents Allievi Pozzo from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backwards compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Allievi_Pozzo
 * @since Allievi Pozzo 1.0
 */

/**
 * Prevent switching to Allievi Pozzo on old versions of WordPress. Switches
 * to the default theme.
 *
 * @since Allievi Pozzo 1.0
 *
 * @return void
 */
function twentythirteen_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentythirteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentythirteen_switch_theme' );

/**
 * Prints an update nag after an unsuccessful attempt to switch to
 * Allievi Pozzo on WordPress versions prior to 3.6.
 *
 * @since Allievi Pozzo 1.0
 *
 * @return void
 */
function twentythirteen_upgrade_notice() {
	$message = sprintf( __( 'Allievi Pozzo requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Allievi Pozzo 1.0
 *
 * @return void
 */
function twentythirteen_customize() {
	wp_die( sprintf( __( 'Allievi Pozzo requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'twentythirteen_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Allievi Pozzo 1.0
 *
 * @return void
 */
function twentythirteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Allievi Pozzo requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'twentythirteen' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'twentythirteen_preview' );