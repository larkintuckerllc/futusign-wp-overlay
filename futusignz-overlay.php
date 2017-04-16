<?php
/**
 * The plugin bootstrap file
 *
 * @link             https://bitbucket.org/futusign/futusign-wp-overlay
 * @since            0.1.0
 * @package          futusign_overlay
 * @wordpress-plugin
 * Plugin Name:      futusign Overlay
 * Plugin URI:       https://www.futusign.com
 * Description:      Add futusign Overlays feature
 * Version:          0.1.2
 * Author:           John Tucker
 * Author URI:       https://github.com/larkintuckerllc
 * License:          Custom
 * License URI:      https://www.futusign.com/license
 * Text Domain:      futusign-overlay
 * Domain Path:      /languages
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
//Use version 3.1 of the update checker.
require 'plugin-update-checker/plugin-update-checker.php';
$MyUpdateChecker = new PluginUpdateChecker_3_1 (
	'http://futusign-wordpress.s3-website-us-east-1.amazonaws.com/futusignz-overlay.json',
	__FILE__
);
function activate_futusign_overlay() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-futusign-overlay-activator.php';
	Futusign_Overlay_Activator::activate();
}
function deactivate_futusign_overlay() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-futusign-overlay-deactivator.php';
	Futusign_Overlay_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_futusign_overlay' );
register_deactivation_hook( __FILE__, 'deactivate_futusign_overlay' );
require_once plugin_dir_path( __FILE__ ) . 'includes/class-futusign-overlay.php';
/**
 * Begins execution of the plugin.
 *
 * @since    0.1.0
 */
function run_futusign_overlay() {
	$plugin = new Futusign_Overlay();
	$plugin->run();
}
run_futusign_overlay();
