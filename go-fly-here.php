<?php

/**
 *
 * @link              http://michaeltorbert.com/
 * @since             1.0.0
 * @package           Go_Fly_Here
 *
 * @wordpress-plugin
 * Plugin Name:       Go Fly Here
 * Plugin URI:        https://github.com/semperfiwebdesign/goflyhere
 * Description:       Master Plugin for goflyhere.com
 * Version:           .1
 * Author:            Michael Torbert, Aaron Brodney
 * Author URI:        http://michaeltorbert.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       go-fly-here
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-go-fly-here-activator.php
 */
function activate_go_fly_here() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-go-fly-here-activator.php';
	Go_Fly_Here_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-go-fly-here-deactivator.php
 */
function deactivate_go_fly_here() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-go-fly-here-deactivator.php';
	Go_Fly_Here_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_go_fly_here' );
register_deactivation_hook( __FILE__, 'deactivate_go_fly_here' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-go-fly-here.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_go_fly_here() {

	$plugin = new Go_Fly_Here();
	$plugin->run();

}
run_go_fly_here();
