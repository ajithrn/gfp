<?php

/*
Gavity Forms - Placeholders add-on

Instructions:
Just add a "gplaceholder" CSS classname to the required fields or form, it will automatically display the field name as placeholder
*/

if ( isset( $GLOBALS['pagenow'] ) && $GLOBALS['pagenow'] == 'wp-login.php' )
	return;

add_action('wp_print_scripts', 'gf_placeholder_enqueue_scripts');

function gf_placeholder_enqueue_scripts() {
	$plugin_url =  get_template_directory_uri() . '/assets/plugins/gfp';
	echo "<script>var jquery_placeholder_url = '" . $plugin_url . "/jquery.placeholder.js';</script>";
	wp_enqueue_script('_gf_placeholders', $plugin_url . '/gf.placeholders.js', array('jquery'), '1.0' );
}
