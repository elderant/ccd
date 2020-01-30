<?php
/*
Plugin Name: ccd
Description: Functions and modifications to fix some site preferences
Version:     1.0
Author:      Sebastian Guerrero
*/

//include( plugin_dir_path( __FILE__ ) . 'includes/admin.php' );

// Script hooks.
add_action( 'wp_enqueue_scripts', 'ccd_scripts' );
add_filter( 'wc_get_template', 'ccd_wc_get_template', 11, 5 );

function ccd_scripts () {
	wp_enqueue_script ( 'ccd-js', plugins_url('/js/script.js', __FILE__), array('jquery'),  rand(111,9999), 'all' );
	wp_enqueue_style ( 'ccd',  plugins_url('/css/main.css', __FILE__), array(),  rand(111,9999), 'all' );

	// wp_localize_script( 'ccd-js', 'ajax_params', array('ajax_url' => admin_url( 'admin-ajax.php' )));

	// if(is_page(3671)) {
	// 	wp_enqueue_script('jquery-validate', 'https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js', array('jquery'), '1.10.0',	true);
	// }
		
}

/************************************************************/
/********************* Helper functions *********************/
/************************************************************/

function ccd_load_template($template, $folder = '') {
	// first check if this is the page where you want to render your own template
	// if ( !is_page($the_page_you_want)) {
		// return $template;
	// }

	// get the actual file name, like single.php or page.php
	$filename = basename($template);
	if(!empty($folder) && strpos($folder, '/') !== 0) {
		$folder = '/' . $folder;
	}

	// build a path for the filename in a folder named for our plugin "fisherman" in the theme folder
	$custom_template = sprintf('%s/%s%s/%s', get_stylesheet_directory(), 'ccd', $folder, $filename);

	// if the template is found, awesome! return it. that's what we'll use.
	if ( is_file($custom_template) ) {
		return $custom_template;
	}

	// otherwise, build a path for the filename in a folder named "templates" in our plugin folder
	$custom_template = ccd_file_build_path(plugin_dir_path( __FILE__ ), 'templates', $folder, $filename);
	//$custom_template = sprintf('%stemplates%s/%s', plugin_dir_path( __FILE__ ), $folder, $filename);

	// found? return our plugin's default template
	if ( is_file($custom_template) ) {
		return $custom_template;
	}

	// otherwise, build a path for the filename in a folder named "templates" in our plugin folder
	$custom_template = sprintf('%stemplates/%s', plugin_dir_path( __FILE__ ), $filename);

	// found? return our plugin's default template
	if ( is_file($custom_template) ) {
		return $custom_template;
	}

	return $template;
}

function ccd_file_build_path($plugin, $template_folder, $folder, $filename) {
  return $plugin . DIRECTORY_SEPARATOR .
          $template_folder . DIRECTORY_SEPARATOR .
          $folder . DIRECTORY_SEPARATOR .
          $filename;
}

function ccd_wc_get_template( $located, $template_name, $args, $template_path, $default_path ) {
	$plugin_template_path = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/templates/woocommerce/' . $template_name;

	if ( file_exists( $plugin_template_path ) ) {
		$located = $plugin_template_path;
	}

	return $located;
}

/************************************************************/
/*************************** ccd ****************************/
/************************************************************/

function ccd_get_insurance_form_html () {
  $template_url = ccd_load_template('activation.php', 'insurance');
	load_template($template_url, true);
}
//add_shortcode( 'ccd_insurance_activation_form', 'ccd_get_insurance_form_html' );