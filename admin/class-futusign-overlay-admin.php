<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://bitbucket.org/futusign/futusign-wp-overlay
 * @since      0.1.0
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/admin
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The admin-specific functionality of the plugin.
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/admin
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Admin {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
	}
	/**
	 * Display settings page
	 *
	 * @since    0.4.0
	 * @param    array      $query     query
	 * @return   array      filtered query
	 */
	public function wp_link_query_args( $query ) {
		$cpt_to_remove = 'futusign_overlay';
		$key = array_search( $cpt_to_remove, $query['post_type'] );
		if( $key ) unset( $query['post_type'][$key] );
		return $query;
	}
}
