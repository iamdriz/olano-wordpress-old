<?php

require get_stylesheet_directory() . '/blocks/section/index.php';
require get_stylesheet_directory() . '/blocks/card/index.php';

/**
 * Add Menus
 */
function olano_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action('init', 'olano_menus');

/**
 * Add CSS and JS files
 * TODO: we should use Webpack to build two packs instead!
 */
function olano_css_js() {
	// get_stylesheet_directory_uri() => child theme
	// get_template_directory_uri() => parent theme
	// remove uri for filemtime as we want server rather than web address
	wp_enqueue_style('olana', get_stylesheet_directory_uri() . '/style.css', array(),
	 filemtime(get_stylesheet_directory() . '/style.css'), 'all');
	wp_enqueue_script( 'dark-mode', get_stylesheet_directory_uri() . '/assets/js/dark-mode.js', array(),
	 filemtime(get_stylesheet_directory() . '/assets/js/dark-mode.js'), true );
}
add_action('wp_enqueue_scripts', 'olano_css_js');

/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
function olano_custom_logo() {
	$logo_width  = 300;
	$logo_height = 100;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);
}
add_action( 'after_setup_theme', 'olano_custom_logo');


// MIGHT BE BETTER TO DEFINE TWO IMAGES LIKE BELOW
// THEN ADD HTML TO USE BOTH LOGOS VIA GET_THEME_MOD WITH CSS MEDIA PREFERS

function olano_custom_logo_dark_mode($wp_customize) {
	// add a setting 
	$wp_customize->add_setting('custom_logo_dark_mode');
	// Add a control to upload the hover logo
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_logo_dark_mode', array(
		'label' => 'Logo - Dark Mode',
		'section' => 'title_tagline', // this is the section where the custom-logo above lives
		'settings' => 'custom_logo_dark_mode',
		'priority' => 8 // show it just below the custom-logo
	)));
}
add_action('customize_register', 'olano_custom_logo_dark_mode');






//load_theme_textdomain( 'olano', get_template_directory() . '/languages' );

// Load up our theme options page and related code.
// require get_template_directory() . '/inc/theme-options.php';


add_theme_support( 'editor-styles' );
add_theme_support( 'dark-editor-style' );
$editor_stylesheet_path = './assets/css/style-editor.css';
// Enqueue editor styles.
add_editor_style( $editor_stylesheet_path );