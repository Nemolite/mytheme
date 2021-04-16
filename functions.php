<?php
/**
 * Функции, хуки темы
 */

function mytheme_scripts_style() {

	wp_enqueue_style( 'mytheme-style', get_template_directory_uri() .'/css/main.css' );
	wp_enqueue_script( 'mytheme-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts_style' );


/**
 * Блок табов (произвольные типы записей)
 */


function myshop_main_slider(){
	$labels = array(
		'name'               => 'Табы', 
		'singular_name'      => 'Таб', 
		'add_new'            => 'Добавить таб',
		'add_new_item'       => 'Добавить новый таб',
		'edit_item'          => 'Редактировать таб',
		'new_item'           => 'Новый таб',
		'view_item'          => 'Посмотреть таб',
		'search_items'       => 'Найти таб',
		'not_found'          => 'Табов не найдено',
		'not_found_in_trash' => 'В корзине табов не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Табы'
	  );
	 
	  $args = array(
		'labels' => $labels,
		'public' => true,  
		'show_ui' => true, 
		'has_archive' => true, 
		'menu_icon' => 'dashicons-format-gallery', 
		'menu_position' => 20, 
		'supports' => array( 'title', 'editor')
	);	
	register_post_type('mytab', $args  );
}

add_action('init', 'myshop_main_slider');


?>