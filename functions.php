<?php

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