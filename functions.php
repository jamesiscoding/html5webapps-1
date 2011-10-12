<?php

	// Add a function to size thumbnail size in different configurations
	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) ) { 
		// To call this configuration : the_post_thumbnail('index-thumb');
		add_image_size( 'index-thumb', 150, 150, false );
	}

	// Add social javascript file
	function load_social_scripts() {
    	wp_register_script( 'social', get_stylesheet_directory_uri().'/js/social.js');
    	wp_enqueue_script( 'social' );
	}    
 
	//add_action('wp_enqueue_scripts', 'load_social_scripts');

	function load_googleplus_button_style() {
    	wp_register_style( 'googleplusbutton', get_stylesheet_directory_uri().'/css/css3-buttons.css');
    	wp_enqueue_style( 'googleplusbutton' );
	}    
 
	add_action('wp_print_styles', 'load_googleplus_button_style');
?>