<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       Juan Santiago
 * @since      1.0.0
 *
 * @package    Papagayo_home
 * @subpackage Papagayo_home/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Papagayo_home
 * @subpackage Papagayo_home/includes
 * @author     Juan Santiago <jjsantiago50@gmail.com>
 */
class Papagayo_home_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'papagayo_home',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
