<?php
/**
 * Fired during plugin deactivation
 *
 * @link       https://bitbucket.org/futusign/futusign-wp-overlay
 * @since      0.1.0
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/includes
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Fired during plugin deactiviation.
 *
 * @since      0.1.0
 * @package    futusign_overlay
 * @subpackage futusign_overlay/includes
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Deactivator {
	/**
	 * Fired during plugin deactivation.
	 *
	 * @since    0.1.0
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}
}
