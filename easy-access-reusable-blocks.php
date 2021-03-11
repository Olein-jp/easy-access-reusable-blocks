<?php
/**
 * Plugin Name: Easy Access Reusable Blocks
 * Plugin URI: https://github.com/Olein-jp/easy-access-reusable-blocks
 * Description: You can access the Reusable Block(s) List screen with a single click from the admin.
 * Version: 1.0.4
 * Tested up to: 5.6
 * Requires at least: 5.6
 * Requires PHP: 5.6
 * Author: olein
 * Author URI: https://olein-design.com
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: easy-access-reusable-blocks
 *
 * @package easy-access-reusable-blocks
 * @author Olein-jp
 * @license GPL-2.0+
 */

define( 'EASY_ACCESS_REUSABLE_BLOCKS_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'EASY_ACCESS_REUSABLE_BLOCKS_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * Function : plugin loaded
 */
function earb_plugins_loaded() {
	load_plugin_textdomain( 'easy-access-reusable-blocks', false, basename( __DIR__ ) . '/languages' );
}
add_action( 'plugins_loaded', 'earb_plugins_loaded' );

/**
 * Function : add menu on sidebar
 */
function earb_register_menu_page() {
	add_menu_page(
		__( 'Reusable Blocks', 'easy-access-reusable-blocks' ),
		__( 'Reusable Blocks', 'easy-access-reusable-blocks' ),
		'edit_others_posts',
		'edit.php?post_type=wp_block',
		'',
		'dashicons-block-default',
		21
	);
}
add_action( 'admin_menu', 'earb_register_menu_page' );
