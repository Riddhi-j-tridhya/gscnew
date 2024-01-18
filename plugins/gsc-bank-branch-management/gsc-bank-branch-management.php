<?php

/**
 *
 * @link              https://www.quanticedgesolutions.com
 * @since             1.0.0
 * @package           Gsc_Bank_Branch_Management
 *
 * @wordpress-plugin
 * Plugin Name:       GSC Bank Branch Management
 * Plugin URI:        https://www.quanticedgesolutions.com
 * Description:       This plugin allows the branch management for GSC Bank
 * Version:           1.0.0
 * Author:            QuanticEdge
 * Author URI:        https://www.quanticedgesolutions.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gsc-bank-branch-management
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'GSC_BANK_BRANCH_MANAGEMENT_VERSION', '1.0.0' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gsc-bank-branch-management.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gsc_bank_branch_management() {

	$plugin = new Gsc_Bank_Branch_Management();
	$plugin->run();

}
run_gsc_bank_branch_management();
