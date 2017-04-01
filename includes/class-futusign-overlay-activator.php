<?php

/**
 * Fired during plugin activation
 *
 * @link       https://bitbucket.org/futusign/futusign-wp-overlay
 * @since      0.1.0
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/includes
 */
/**
 * Fired during plugin activation.
 *
 * @since      0.1.0
 * @package    futusign_overlay
 * @subpackage futusign_overlay/includes
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Activator {
	/**
	 * Fired during plugin activation.
	 *
	 * @since    0.1.0
	 */
	public static function activate() {
		flush_rewrite_rules();
	}
}
