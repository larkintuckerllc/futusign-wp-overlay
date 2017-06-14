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
if ( ! defined( 'WPINC' ) ) {
	die;
}
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
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'common/class-futusign-overlay-common.php';
		$plugin_common = new Futusign_Overlay_Common();
		$widget = $plugin_common->get_widget();
		$widget->register();
		flush_rewrite_rules();
	}
}
