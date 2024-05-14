<?php
/**
 * Plugin Elearning by Velocity Developer
 *
 * @link              https://github.com/velocitydeveloper/velocity-elearning
 * @since             1.2.4
 * @package           velocity_elearning
 *
 * @wordpress-plugin
 * Plugin Name:       Velocity Elearning
 * Plugin URI:        https://velocitydeveloper.com/
 * Description:       Plugin Elearning by Velocity Developer
 * Version:           1.0.0
 * Author:            Velocity Developer
 * Author URI:        https://velocitydeveloper.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       velocity-elearning
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Define constants
 *
 * @since 1.0.0
 */
if (!defined('VELOCITY_ELEARNING_VERSION'))		define('VELOCITY_ELEARNING_VERSION', '1.0.0'); // Plugin version constant
if (!defined('VELOCITY_ELEARNING_PLUGIN'))		define('VELOCITY_ELEARNING_PLUGIN', trim(dirname(plugin_basename(__FILE__)), '/')); // Name of the plugin folder eg - 'velocity-elearning'
if (!defined('VELOCITY_ELEARNING_PLUGIN_DIR'))	define('VELOCITY_ELEARNING_PLUGIN_DIR', plugin_dir_path(__FILE__)); // Plugin directory absolute path with the trailing slash. Useful for using with includes eg - /var/www/html/wp-content/plugins/velocity-elearning/
if (!defined('VELOCITY_ELEARNING_PLUGIN_URL'))	define('VELOCITY_ELEARNING_PLUGIN_URL', plugin_dir_url(__FILE__)); // URL to the plugin folder with the trailing slash. Useful for referencing src eg - http://localhost/wp/wp-content/plugins/velocity-elearning/

// Load everything
$includes = [
    'admin/enqueue.php',
    'admin/register-page.php',
    'admin/cmb2-frontend.php',
    'inc/Elearning.php',
    'inc/Guru.php',
];
foreach ($includes as $include) {
	require_once(VELOCITY_ELEARNING_PLUGIN_DIR . $include);
}