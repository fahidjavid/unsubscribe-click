<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.fahidjavid.com/
 * @since             1.0.0
 * @package           Unsubscribe_Click
 *
 * @wordpress-plugin
 * Plugin Name:       Unsubscription Click
 * Plugin URI:        http://www.fahidjavid.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Fahid Javid
 * Author URI:        http://www.fahidjavid.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       unsubscribe-click
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-unsubscribe-click-activator.php
 */
function activate_unsubscribe_click() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-unsubscribe-click-activator.php';
	Unsubscribe_Click_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-unsubscribe-click-deactivator.php
 */
function deactivate_unsubscribe_click() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-unsubscribe-click-deactivator.php';
	Unsubscribe_Click_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_unsubscribe_click' );
register_deactivation_hook( __FILE__, 'deactivate_unsubscribe_click' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-unsubscribe-click.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_unsubscribe_click() {

	$plugin = new Unsubscribe_Click();
	$plugin->run();

}
run_unsubscribe_click();
