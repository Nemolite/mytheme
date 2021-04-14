<?php
/**
 * Функции, хуки темы
 */

function mytheme_scripts_style() {

	wp_enqueue_style( 'mytheme-style', get_template_directory_uri() .'/css/main.css' );
	wp_enqueue_script( 'mytheme-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts_style' );
?>