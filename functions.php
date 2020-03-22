<?php

include 'inc/post-type/loan.php';
include 'inc/api/all-loans.php';

// Enqueue stylesheet
function octane_api_style() {
	//Styles
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/public/css/app.css', '', filemtime(get_template_directory().'/public/css/app.css') );
	//Scripts
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/public/js/app.js', 'jquery', filemtime(get_template_directory().'/public/js/app.js'), true );
}
add_action( 'wp_enqueue_scripts', 'octane_api_style' );


// Disable admin bar
show_admin_bar(false);