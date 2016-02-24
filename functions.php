<?php
/*------------------------------------*\
 	Functions
 \*------------------------------------*/

// Load jQuery
function my_jquery_enqueue(){
	wp_deregister_script('jquery'); // this deregisters the current jquery included in wordpress
	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
}

// Load Bootstrap Files
function bootstrap_files(){
	if (!is_admin() ){
		wp_register_style('bootstrap_style', get_template_directory_uri() . '/css/bootstrap.min.css', false, NULL, 'all');
		wp_enqueue_style('bootstrap_style'); // Enqueue it!
		
		wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), NULL, true); // Conditional script(s)
		wp_enqueue_script('bootstrap_js'); // Enqueue it!
		
		//wp_register_style('slider_style', get_template_directory_uri() . '/css/full-slider.css', false, NULL, 'all');
		//wp_enqueue_style('slider_style'); // Enqueue it!
	}
}

// Załadowanie plików od slidera na głównej stronie
function slider_style_loader(){
	if ( is_front_page() ){
		wp_register_style('slider_style', get_template_directory_uri() . '/css/full-slider.css', false, NULL, 'all');
		wp_enqueue_style('slider_style'); // Enqueue it!
		
		wp_register_script('carousel_interval', get_template_directory_uri() . '/js/carousel.js', false, NULL, true); // Conditional script(s)
		wp_enqueue_script('carousel_interval'); // Enqueue it!
	}
}

// Załadowanie pliku od stylu offcanvas
function offcanvas_load(){
	if (!is_admin() ){
		wp_register_script('offcanvas_js', get_template_directory_uri() . '/js/offcanvas.js', array('jquery'), NULL, true); // Conditional script(s)
		wp_enqueue_script('offcanvas_js'); // Enqueue it!

		//wp_register_style('slider_style', get_template_directory_uri() . '/css/full-slider.css', false, NULL, 'all');
		//wp_enqueue_style('slider_style'); // Enqueue it!
	}
}

// Admin bar trick
function mbe_wp_head(){
	echo '<style>'.PHP_EOL;
	// Using custom CSS class name.
	echo 'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
	// Using WordPress default CSS class name.
	echo 'body.logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
	echo '</style>'.PHP_EOL;
}

// Rejestracja menu
function register_my_menus(){
	register_nav_menus(
			array(
					'main-menu' => 'Menu Główne',
					'zone-menu' => 'Strefa Zawodników'
			)
			);
}

/*------------------------------------*\
 	Actions + Filters + ShortCodes
 \*------------------------------------*/

// Add Actions
add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11); // Add jQuery
add_action('wp_enqueue_scripts', 'bootstrap_files'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'slider_style_loader'); // Load style for front-page
//add_action('wp_enqueue_scripts', 'offcanvas_load'); // Load offcanvas js
add_action('wp_head', 'mbe_wp_head'); // Admin menu nad menu strony
add_action('init', 'register_my_menus'); // Add menus

// Add Filters


// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
?>