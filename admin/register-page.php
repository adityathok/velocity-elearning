<?php
/**
 * Register page default.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

//regsiter page template
add_filter( 'template_include', 'velocityel_register_page_template' );
function velocityel_register_page_template( $template ) {

    if ( is_singular() ) {
        $page_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
        if ( 'velocityelearning-app' === $page_template ) {
            $template = VELOCITY_ELEARNING_PLUGIN_DIR . 'public/page-app.php';
        }
    }

    return $template;
}
function velocityel_templates_page($post_templates) {

    $post_templates['velocityelearning-app'] = __( 'App Elearning', 'velocity-elearning' );

    return $post_templates;
}
add_filter( "theme_page_templates", 'velocityel_templates_page' );
