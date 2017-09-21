<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);
// Widget fot logo
function logo_widgets_init() {

	register_sidebar( array(
		'name'          => 'Логотип SVG',
		'id'            => 'logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden"',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'logo_widgets_init' );

// Load up our awesome theme options
require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support( 'post-thumbnails' ); 
