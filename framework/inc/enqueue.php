<?php


function wash_scripts_basic() {  
	
	/* ------------------------------------------------------------------------ */
	/* Register Scripts */
	/* ------------------------------------------------------------------------ */		
	
	/*Javascript Files*/
	/*==================================================*/
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '1.10.2', TRUE);	
	
	
	/*jQuery REVOLUTION Slider*/
	//wp_register_script('themepunch', get_template_directory_uri() . '/js/rs-plugin/js/jquery.themepunch.plugins.min.js', 'jquery', '1.0' , TRUE);
	//wp_register_script('revolution', get_template_directory_uri() . '/js/rs-plugin/js/jquery.themepunch.revolution.min.js', 'jquery', '4.3.6' , TRUE);	
	
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '3.1.1', TRUE);	
	wp_register_script('inview', get_template_directory_uri() . '/js/jquery.inview.js', 'jquery','1.0.0', TRUE);	
	wp_register_script('isotopepkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', 'jquery','2.0.0', TRUE);	
	wp_register_script('imagesloadedpkgd', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', 'jquery','3.1.8', TRUE);	
	wp_register_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', 'jquery', '2.1.5', TRUE);		
	wp_register_script('easytabs', get_template_directory_uri() . '/js/jquery.easytabs.min.js', 'jquery', '3.2.0', TRUE);	
	wp_register_script('jquerysticky', get_template_directory_uri() . '/js/jquery.sticky.js', 'jquery', '1.0.0', TRUE);	
	wp_register_script('easytabs', get_template_directory_uri() . '/js/jquery.easytabs.min.js', 'jquery', '3.2.0', TRUE);
	wp_register_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', '1.27', TRUE);	
	wp_register_script('jquerysticky', get_template_directory_uri() . '/js/jquery.sticky.js', 'jquery', '1.0.0', TRUE);	
	wp_register_script('zflickrfeed', get_template_directory_uri() . '/js/jquery.zflickrfeed.min.js', 'jquery', TRUE);	
	wp_register_script('hoverdropdown', get_template_directory_uri() . '/js/twitter-bootstrap-hover-dropdown.min.js', 'jquery','2.5.0', TRUE);	
	wp_register_script('easypiechart', get_template_directory_uri() . '/js/jquery.easy-pie-chart.js', 'jquery','1.6.3', TRUE);	
	wp_register_script('classie', get_template_directory_uri() . '/js/classie.js', 'jquery', '1.0.0', TRUE);	
	wp_register_script('search', get_template_directory_uri() . '/js/search.js','jquery', '2.5.0', TRUE);	
	wp_register_script('gizmo', get_template_directory_uri() . '/js/gizmo.js','jquery', '2.8.1', TRUE);
	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js','jquery', '1.0.0', TRUE);
	
	/* Head Libs*/
	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', 'jquery', '2.7.1');


	
	/* ------------------------------------------------------------------------ */
	/* Enqueue Scripts */
	/* ------------------------------------------------------------------------ */
	wp_enqueue_script('jquery');
	//wp_enqueue_script('themepunch');
	//wp_enqueue_script('revolution');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('inview');
  	wp_enqueue_script('isotopepkgd');
  	wp_enqueue_script('imagesloadedpkgd');
  	wp_enqueue_script('fancybox');
  	wp_enqueue_script('easytabs');
  	wp_enqueue_script('jquerysticky');
  	wp_enqueue_script('owlcarousel');
  	wp_enqueue_script('zflickrfeed');
  	wp_enqueue_script('hoverdropdown');
  	wp_enqueue_script('easypiechart');
  	wp_enqueue_script('classie');
  	wp_enqueue_script('search');
  	wp_enqueue_script('gizmo');
  	wp_enqueue_script('scripts');
  	wp_enqueue_script('modernizr');
}

add_action( 'wp_enqueue_scripts', 'wash_scripts_basic' );  


function wash_styles_basic()  
{  
	
	/* ------------------------------------------------------------------------ */
	/* Register Stylesheets */
	/* ------------------------------------------------------------------------ */
	
	/* CSS
	================================================== -->
	<!-- Base + Vendors CSS */
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1', 'all' );		
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1', 'all' );	
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1', 'all' );	
	wp_register_style( 'bluecolor', get_template_directory_uri() . '/css/color/blue.css', array(), '1', 'all' );	
	wp_register_style( 'settings', get_template_directory_uri() . '/css/settings.css', array(), '1', 'all' );	
	wp_register_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1', 'all' );	
	wp_register_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.html', array(), '1', 'screen' );
	wp_register_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1', 'all' );
	wp_register_style( 'fontello', get_template_directory_uri() . '/css/fonts/fontello.css', array(), '1', 'all' );
	wp_register_style( 'gizmo', get_template_directory_uri() . '/css/fonts/gizmo.css', array(), '1', 'all' );
	wp_register_style( 'picons', get_template_directory_uri() . '/css/fonts/picons.css', array(), '1', 'all' );
	wp_register_style( 'switcher', get_template_directory_uri() . '/switcher/switcher.css', array(), '1', 'all' );

	
	/* ------------------------------------------------------------------------ */
	/* Enqueue Stylesheets */
	/* ------------------------------------------------------------------------ */
	wp_enqueue_style( 'bootstrap' ); 
	wp_enqueue_style( 'style' ); 
	wp_enqueue_style( 'responsive' ); 
	wp_enqueue_style( 'bluecolor' ); 
	wp_enqueue_style( 'settings' ); 
	wp_enqueue_style( 'owl-carousel' ); 
	wp_enqueue_style( 'bxslider' ); 
	wp_enqueue_style( 'fancybox' ); 
	wp_enqueue_style( 'fontello' ); 
	wp_enqueue_style( 'gizmo' ); 
	wp_enqueue_style( 'picons' ); 
	wp_enqueue_style( 'switcher' ); 
	
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' ); // Main Stylesheet
	
}  
add_action( 'wp_enqueue_scripts', 'wash_styles_basic', 1 ); 

?>