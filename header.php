<!DOCTYPE html>
	<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
	<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>>  <!--<![endif]-->

<head>

<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
	<meta name="description" content="WOWBEND">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php global $data; ?>
<!-- Mobile Specific Metas
	========================================================= -->
	<?php if($data['check_mobilezoom'] == 0) { ?><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"><?php } ?>

<!-- Google Web Fonts
	================================================== -->
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300'>
	<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Raleway:400,800,900,100,300'>
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700'>
	
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<!-- Favicons
	================================================== -->
	<?php if($data['media_favicon'] != "") { ?><link rel="shortcut icon" href="<?php echo $data['media_favicon']; ?>"><?php } ?>
	<?php if($data['media_favicon_iphone'] != "") { ?><link rel="apple-touch-icon" href="<?php echo $data['media_favicon_iphone']; ?>"><?php } ?>
	<?php if($data['media_favicon_ipad'] != "") { ?><link rel="apple-touch-icon" sizes="72x72" href="<?php echo $data['media_favicon_ipad']; ?>"><?php } ?>
	<?php if($data['media_favicon_iphone_retina'] != "") { ?><link rel="apple-touch-icon" sizes="114x114" href="<?php echo $data['media_favicon_iphone_retina']; ?>"><?php } ?>
	<?php if($data['media_favicon_ipad_retina'] != "") { ?><link rel="apple-touch-icon" sizes="144x144" href="<?php echo $data['media_favicon_ipad_retina']; ?>"><?php } ?>

<!-- WordPress Stuff
	========================================================= -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
	
</head>

	<body <?php body_class(); ?>>
	<?php
	include_once('framework/inc/headers/header-v1.php');
	
	/******* Show Revolution Slider if its front page *******/
	if(is_front_page()){ 			
			putRevSlider("homeslider");				
		}	
	?>


