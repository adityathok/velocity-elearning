<?php
/* 
Template Name: Page App Elearning
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
    require_once(VELOCITY_ELEARNING_PLUGIN_DIR . 'public/app/app.php');
get_footer();