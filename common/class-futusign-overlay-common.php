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
if ( ! defined( 'WPINC' ) ) {
	die;
}
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
		$this->widget = new Futusign_Overlay_Widget();
	}
	/**
	 * Load the required dependencies for module.
	 *
	 * @since    0.1.0
	 * @access   private
	 */
	private function load_dependencies() {
		require_once plugin_dir_path( __FILE__ ) . 'class-futusign-overlay-type.php';
		require_once plugin_dir_path( __FILE__ ) . 'class-futusign-overlay-widget.php';
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
	/**
	 * Retrieve the widget.
	 *
	 * @since     0.1.0
	 * @return    Futusign_Overlay_Widget    The widget functionality.
	 */
	public function get_widget() {
		return $this->widget;
	}
	/**
	 * Define advanced custom fields for screen for overlay.
	 *
	 * @since    0.1.0
	 */
	// TODO: DEPRECATED REPLACE WITH ACF_ADD_LOCAL_FIELD_GROUP
	public function register_field_group_screen() {
		if( function_exists( 'register_field_group' ) ) {
			register_field_group(array (
				'id' => 'acf_futusign_overlay_screen', // TODO: DEPRECATED
				'key' => 'acf_futusign_overlay_screen',
				'title' => 'Overlay',
				'fields' => array (
					array (
						'key' => 'field_acf_fs_ov_sc_overlay',
						'label' => __('Overlay', 'futusign_overlay'),
						'name' => 'overlay',
						'type' => 'post_object',
						'instructions' => __('Optional screen overlay.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_overlay',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'futusign_screen',
						),
					),
				),
				'menu_order' => 1,
				'position' => 'normal',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => array (
					0 => 'permalink',
					1 => 'the_content',
					2 => 'excerpt',
					3 => 'discussion',
					4 => 'comments',
					5 => 'revisions',
					6 => 'slug',
					7 => 'author',
					8 => 'format',
					9 => 'page_attributes',
					10 => 'featured_image',
					11 => 'categories',
					12 => 'tags',
					13 => 'send-trackbacks',
				),
				'active' => 1,
				'description' => '',
			));
		}
	}
	// DUPLICATED IN INACTIVE
	/**
	 * Add rewrite rules
	 *
	 * @since    0.1.0
	 */
	public function add_rewrite_rules() {
		add_rewrite_rule( '^fs-ov-time/?', 'index.php?fs_ov_time=1', 'top' );
	}
}
