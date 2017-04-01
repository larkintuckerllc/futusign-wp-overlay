<?php
/**
 * The common functionality of the plugin.
 *
 * @link       https://bitbucket.org/futusign/futusign-wp-overlay
 * @since      0.1.0
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/common
 */
/**
 * The common functionality of the plugin.
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/common
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Common {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
		$this->load_dependencies();
		$this->overlay = new Futusign_Overlay_Type();
	}
	/**
	 * Load the required dependencies for module.
	 *
	 * @since    0.1.0
	 * @access   private
	 */
	private function load_dependencies() {
		require_once plugin_dir_path( __FILE__ ) . 'class-futusign-overlay-type.php';
	}
	/**
	 * Retrieve the overlay.
	 *
	 * @since     0.1.0
	 * @return    Futusign_Overlay_Type    The overlay functionality.
	 */
	public function get_overlay() {
		return $this->overlay;
	}
}
