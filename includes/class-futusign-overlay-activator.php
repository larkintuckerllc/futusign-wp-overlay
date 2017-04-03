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
		wp_insert_post(
			array(
				'post_type' => 'futusign_ov_widget',
				'post_status' => 'publish',
				'post_title' => 'Clock',
			)
		);
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'common/class-futusign-overlay-common.php';
		$plugin_common = new Futusign_Overlay_Common();
		$widget = $plugin_common->get_widget();
		$widget->register();
		$plugin_common->add_rewrite_rules();
		flush_rewrite_rules();
	}
}
