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
	public function register() {
		$labels = array(
			'name' => __( 'Widgets', 'futusign_overlay' ),
			'singular_name' => __( 'Widget', 'futusign_overlay' ),
			'add_new' => __( 'Add New' , 'futusign_overlay' ),
			'add_new_item' => __( 'Add New Widget' , 'futusign_overlay' ),
			'edit_item' =>  __( 'Edit Widget' , 'futusign_overlay' ),
			'new_item' => __( 'New Widget' , 'futusign_overlay' ),
			'view_item' => __('View Widget', 'futusign_overlay'),
			'search_items' => __('Search Widgets', 'futusign_overlay'),
			'not_found' =>  __('No Widgets found', 'futusign_overlay'),
			'not_found_in_trash' => __('No Widgets found in Trash', 'futusign_overlay'),
		);
		register_post_type( 'futusign_ov_widget', // ABBREVIATED FOR WP
			array(
				'labels' => $labels,
				'public' => false,
				'has_archive' => false,
				'show_in_rest' => true,
				'rest_base' => 'fs-widgets',
			)
		);
	}
}
