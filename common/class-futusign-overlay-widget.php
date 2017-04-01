<?php
/**
 * Define the widget functionality
 *
 * @since      0.1.0
 * @link       https://bitbucket.org/futusign/futusign-wp-overlay
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/common
 */
/**
 * Define the widget functionality.
*
 * @since      0.1.0
 * @package    futusign_overlay
 * @subpackage futusign_overlay/common
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Widget {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
	}
	/**
	 * Register the widget post type.
	 *
	 * @since    0.1.0
	 */
	// DUPLICATED IN INACTIVE
	public function register() {
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
}
