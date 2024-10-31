<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://planitappy.com
 * @since      1.0.0
 *
 * @package    Pia_WorkoutPlan
 * @subpackage Pia_WorkoutPlan/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pia_WorkoutPlan
 * @subpackage Pia_WorkoutPlan/includes
 * @author     PlanItAppy <info@planitappy.com>
 */
class Pia_WorkoutPlan_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pia-workout-plan',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}