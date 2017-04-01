<?php
/**
 * The public-specific functionality of the plugin.
 *
 * @link       https://bitbucket.org/futusign/futusign-wp-overlay
 * @since      0.1.0
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/public
 */
/**
 * The public-specific functionality of the plugin.
 *
 * @package    futusign_overlay
 * @subpackage futusign_overlay/public
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Public {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
	}
	/**
	 * Return single templates
	 *
	 * @since    0.3.0
	 * @param    string      $single     path to template
	 * @return   string      path to template
	 */
	public function single_template( $single ) {
		global $post;
		if ($post->post_type == 'futusign_ov_widget' && $post->post_title == 'Clock'){
			return plugin_dir_path( __FILE__ ) . 'clock/index.php';
		}
		return $single;
	}
}
