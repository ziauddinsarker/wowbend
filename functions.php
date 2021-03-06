<?php

	/**
	 * Deregister WordPress default jQuery
	 * Register and Enqueue Google CDN jQuery
	 */
	function textdomain_jquery_enqueue() {
	   wp_deregister_script( 'jquery' );
	   wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, null );
	   wp_enqueue_script( 'jquery' );
	}
	if ( !is_admin() ) {
		add_action( 'wp_enqueue_scripts', 'textdomain_jquery_enqueue', 11 );
	}



	/* ------------------------------------------------------------------------ */
	/* Inlcudes
	/* ------------------------------------------------------------------------ */
	   
	/* ------------------------------------------------------------------------ */
	/* Include SMOF */
	require_once('admin/index.php'); // Slightly Modified Options Framework

	/* ------------------------------------------------------------------------ */
	/* Misc Includes */
	
	include_once('framework/inc/enqueue.php'); // Enqueue JavaScripts & CSS


/* Navigation Menu*/
	if ( ! function_exists( 'register_wash_menus' ) ) {

	// Register Navigation Menus
	function register_wash_menus() {

		$locations = array(
			'primary' => __( 'Primary Menu', 'wash' ),
			'secondary' => __( 'Secondary Menu', 'wash' ),
		);
		register_nav_menus( $locations );

	}

	// Hook into the 'init' action
	add_action( 'init', 'register_wash_menus' );

	}
	
	/* ------------------------------------------------------------------------ */
	/* Automatic Feed Links */
	add_theme_support( 'automatic-feed-links' );
	
	
	
?>