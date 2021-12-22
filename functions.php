<?php

/*
	==========================================
	 Include scripts
	==========================================
*/
function theme_script_enqueue() {
	//css
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css', array(), 'all');
	wp_enqueue_style( 'dashicons' );
	//js
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/fedev.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'theme_script_enqueue');

/*
	==========================================
		Theme support function
	==========================================
*/
add_theme_support('custom-background');


/*
	==========================================
	    Activate menus
	==========================================
*/
function theme_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'theme_theme_setup');


/*
	==========================================
	    Head function
	==========================================
*/

function theme_remove_function() {

	return '';

}

add_filter( 'the_generator', 'theme_remove_function' );

/*
	==========================================
	 Sidebar function
	==========================================
*/
function theme_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);

}
add_action('widgets_init','theme_widget_setup');

