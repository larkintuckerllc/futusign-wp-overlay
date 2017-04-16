<?php
/**
 * The inactive functionality of the plugin.
 *
 * @link       https://bitbucket.org/futusign/futusign-wp-overlay
 * @since      0.1.0
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/inactive
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The inactive functionality of the plugin.
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/inactive
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Inactive {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
	}
	/**
	 * Display missing plugin dependency notices.
	 *
	 * @since    0.3.0
	 */
	public function missing_plugins_notice() {
		if ( ! Futusign_Overlay::is_plugin_active( 'futusign' ) ) {
			include plugin_dir_path( __FILE__ ) . 'partials/futusign-overlay-missing-futusign.php';
		}
	}
	/**
	 * Register the widget post type.
	 *
	 * @since    0.1.0
	 */
	// DUPLICATED IN COMMON
	public function register_ov_widget() {
		register_post_type( 'futusign_ov_widget', // ABBREVIATED FOR WP
			array(
				'public' => false,
				'publicly_queryable' => true,
				'rewrite' => array('slug' => 'fs-ov-widgets'),
				'has_archive' => false,
				'show_in_rest' => true,
				'rest_base' => 'fs-ov-widgets',
			)
		);
	}
	// DUPLICATED IN COMMON
	/**
	 * Add rewrite rules
	 *
	 * @since    0.1.0
	 */
	public function add_rewrite_rules() {
		add_rewrite_rule( '^fs-ov-time/?', 'index.php?fs_ov_time=1', 'top' );
	}
}
