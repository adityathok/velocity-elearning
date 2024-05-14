<?php
/**
 * function register asset css and sj to frontend public.
 *
*/

if (!function_exists('velocityel_register_scripts')) {
	/**
	 * Load theme's JavaScript and Style sources.
	 */
	function velocityel_register_scripts()
	{

        if (get_page_template_slug( get_the_ID() ) !== 'velocityelearning-app')
        return false;

		// Get the version.
		$the_version = VELOCITY_ELEARNING_VERSION;
		if (defined('WP_DEBUG') && true === WP_DEBUG) {
			$the_version = $the_version.'.'.time();
		}

		wp_enqueue_style('velocityelearning-style', VELOCITY_ELEARNING_PLUGIN_URL . 'public/css/style.css', array(), $the_version, false);

		wp_enqueue_script('velocityelearning-script', VELOCITY_ELEARNING_PLUGIN_URL . 'public/js/script.js', array('jquery','jquery-ui-sortable'), $the_version, true);

		wp_localize_script(
			'velocityelearning-script',
			'vdel',
			array(
				'ajaxUrl'	=> admin_url('admin-ajax.php'),
				'restUrl'	=> rest_url(),
			),
		);
	}
	add_action('wp_enqueue_scripts', 'velocityel_register_scripts',25);
}