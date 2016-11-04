<?php

/**
* Enqueue styles
*/

function my_styles() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', false);
	wp_register_style('style', get_template_directory_uri() . '/style.css');
 	wp_enqueue_style( 'style' );
}

add_action('wp_enqueue_scripts', 'my_styles');

?>