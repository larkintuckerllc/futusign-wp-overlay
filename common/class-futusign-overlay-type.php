<?php
/**
 * Define the overlay functionality
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
 * Define the overlay functionality.
*
 * @since      0.1.0
 * @package    futusign_overlay
 * @subpackage futusign_overlay/common
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Overlay_Type {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
	}
	/**
	 * Register the overlay post type.
	 *
	 * @since    0.1.0
	 */
	public function register() {
		$labels = array(
			'name' => __( 'Overlays', 'futusign_overlay' ),
			'singular_name' => __( 'Overlay', 'futusign_overlay' ),
			'add_new' => __( 'Add New' , 'futusign_overlay' ),
			'add_new_item' => __( 'Add New Overlay' , 'futusign_overlay' ),
			'edit_item' =>  __( 'Edit Overlay' , 'futusign_overlay' ),
			'new_item' => __( 'New Overlay' , 'futusign_overlay' ),
			'view_item' => __('View Overlay', 'futusign_overlay'),
			'search_items' => __('Search Overlays', 'futusign_overlay'),
			'not_found' =>  __('No Overlays found', 'futusign_overlay'),
			'not_found_in_trash' => __('No Overlays found in Trash', 'futusign_overlay'),
		);
		register_post_type( 'futusign_overlay', // ABBREVIATED FOR WP
			array(
				'labels' => $labels,
				'public' => true,
				'exclude_from_search' => false,
				'publicly_queryable' => false,
				'show_in_nav_menus' => false,
				'has_archive' => false,
				'show_in_rest' => true,
				'rest_base' => 'fs-overlays',
				'menu_icon' => plugins_url( 'img/overlay.png', __FILE__ )
			)
		);
	}
	/**
	 * Define advanced custom fields for overlay.
	 *
	 * @since    0.1.0
	 */
	// TODO: DEPRECATED REPLACE WITH ACF_ADD_LOCAL_FIELD_GROUP
	public function register_field_group() {
		if( function_exists( 'register_field_group' ) ) {
			register_field_group(array (
				'id' => 'acf_futusign_overlays', // TODO: DEPRECATED
				'key' => 'acf_futusign_overlays',
				'title' => 'futusign Overlays',
				'fields' => array (
					array (
						'key' => 'field_acf_fs_ov_instructions',
						'label' => __('Instructions', 'futusign_overlay'),
						'name' => '',
						'type' => 'message',
						'message' => wp_kses(__( 'Select one or more widgets to display. Use the <i>Settings</i> admin menu to configure widgets. Use the <i>Screens</i> admin menu to assign to screen.', 'futusign_overlay' ), array( 'i' => array() ) ),
					),
					array (
						'key' => 'field_acf_fs_ov_upper_left',
						'label' => __('Upper-Left', 'futusign_overlay'),
						'name' => 'upper_left',
						'type' => 'post_object',
						'instructions' => __('Widget in upper-left corner.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_acf_fs_ov_upper_middle',
						'label' => __('Upper-Middle', 'futusign_overlay'),
						'name' => 'upper_middle',
						'type' => 'post_object',
						'instructions' => __('Widget in upper-middle side.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_acf_fs_ov_upper_right',
						'label' => __('Upper-Right', 'futusign_overlay'),
						'name' => 'upper_right',
						'type' => 'post_object',
						'instructions' => __('Widget in upper-right corner.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_acf_fs_ov_middle_left',
						'label' => __('Middle-Left', 'futusign_overlay'),
						'name' => 'middle_left',
						'type' => 'post_object',
						'instructions' => __('Widget in middle-left side.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_acf_fs_ov_middle_right',
						'label' => __('Middle-Right', 'futusign_overlay'),
						'name' => 'middle_right',
						'type' => 'post_object',
						'instructions' => __('Widget in middle-right side.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_acf_fs_ov_lower_left',
						'label' => __('Lower-Left', 'futusign_overlay'),
						'name' => 'lower_left',
						'type' => 'post_object',
						'instructions' => __('Widget in lower-left corner.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_acf_fs_ov_lower_middle',
						'label' => __('Lower-Middle', 'futusign_overlay'),
						'name' => 'lower_middle',
						'type' => 'post_object',
						'instructions' => __('Widget in lower-middle side.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
						),
						'taxonomy' => array (
						),
						'allow_null' => 1,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_acf_fs_ov_lower_right',
						'label' => __('Lower-Right', 'futusign_overlay'),
						'name' => 'lower_right',
						'type' => 'post_object',
						'instructions' => __('Widget in lower-right corner.', 'futusign_overlay'),
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
							0 => 'futusign_ov_widget',
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
							'value' => 'futusign_overlay',
							'order_no' => 0,
							'group_no' => 0,
						),
					),
				),
				'options' => array (
					'position' => 'normal',
					'layout' => 'no_box',
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
						9 => 'featured_overlay',
						10 => 'categories',
						11 => 'tags',
						12 => 'send-trackbacks',
					),
				),
				'menu_order' => 0,
			));
		}
	}
}
