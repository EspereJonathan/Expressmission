<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme Setup
if ( ! function_exists( 'basal_fse_theme_support' ) ) :
	function basal_fse_theme_support() {
		load_theme_textdomain( 'basal-fse', get_template_directory() . '/languages' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		// Enqueue editor styles.
		add_editor_style( 'editor-style.css' );
	}
endif;

add_action( 'after_setup_theme', 'basal_fse_theme_support' );

function basal_fse_style_load() {
  wp_register_style(
    'basal_fse_style_load',
    get_template_directory_uri() . '/editor-style.css',
    array(),
    'versionstring'
  );

  wp_enqueue_style( 'basal_fse_style_load' );
}

add_action( 'enqueue_block_editor_assets', 'basal_fse_style_load' );

function basal_fse_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'basal_fse_load_dashicons', 999);

// Load Styles/Scripts
if ( ! function_exists( 'basal_fse_theme_styles' ) ) :

	function basal_fse_theme_styles() {
		
		// Register theme stylesheet.
		wp_register_style('basal-fse-theme-style', get_template_directory_uri() . '/style.css', array());

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'basal-fse-theme-style' );

		if ( is_rtl() ) { 
			wp_enqueue_style('rtl-css',get_template_directory_uri().'/assets/css/rtl.css', 'rtl_css' ); 
		}
				
		// Enqueue jquery.
		wp_enqueue_script('jquery');		
	}
	
endif;

add_action( 'wp_enqueue_scripts', 'basal_fse_theme_styles' );

// Add block patterns
require get_template_directory() . '/includes/block-patterns.php';