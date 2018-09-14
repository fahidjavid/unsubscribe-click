<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.fahidjavid.com/
 * @since      1.0.0
 *
 * @package    Unsubscribe_Click
 * @subpackage Unsubscribe_Click/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Unsubscribe_Click
 * @subpackage Unsubscribe_Click/includes
 * @author     Fahid Javid <fahidjavid@gmail.com>
 */
class Unsubscribe_Click_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'unsubscribe-click',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
