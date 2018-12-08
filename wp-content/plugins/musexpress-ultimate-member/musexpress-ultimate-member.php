<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.musegain.com
 * @since             1.0.0
 * @package           Musexpress_Ultimate_Member
 *
 * @wordpress-plugin
 * Plugin Name:       Ultimate Member for Muse
 * Plugin URI:        https://www.musegain.com/adobe-muse/login-area/
 * Description:       MusexPress Ultimate Member allows you to add a complete login and restricted area to your Muse site.
 * Version:           1.0.2
 * Author:            MuseGain
 * Author URI:        https://www.musegain.com
 * License:           MuseGain.com
 * License URI:       https://www.musegain.com/terms-conditions-of-use/
 * Text Domain:       musexpress-ultimate-member
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'MUSEXPRESS_UM_VERSION', '1.0.0' );
define( 'MUSEXPRESS_UM_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

function mxp_um_plugin_error() {
	?>
	<div class="notice notice-warning">
		<p><?php _e( 'You have to install Ultimate Member in order to use Ultimate Member for Muse!', 'musexpress-ultimate-member' ); ?></p>
	</div>
	<?php
}

if ( !in_array( 'ultimate-member/ultimate-member.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && !in_array( 'ultimate-member/index.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	add_action( 'admin_notices', 'mxp_um_plugin_error' );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-musexpress-ultimate-member-activator.php
 */
function activate_musexpress_ultimate_member() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-musexpress-ultimate-member-activator.php';
	Musexpress_Ultimate_Member_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-musexpress-ultimate-member-deactivator.php
 */
function deactivate_musexpress_ultimate_member() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-musexpress-ultimate-member-deactivator.php';
	Musexpress_Ultimate_Member_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_musexpress_ultimate_member' );
register_deactivation_hook( __FILE__, 'deactivate_musexpress_ultimate_member' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-musexpress-ultimate-member.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_musexpress_ultimate_member() {

	$plugin = new Musexpress_Ultimate_Member();
	$plugin->run();

}
run_musexpress_ultimate_member();
