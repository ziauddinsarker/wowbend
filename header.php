<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<!-- Basic Page Needs
================================================== -->
<meta charset="<?php bloginfo('charset'); ?>" />

<?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" /> 
<?php } ?>

<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>
<meta name="description" content="WOWBEND">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php global $data; ?>

<!-- Favicons
	================================================== -->
	<?php if($data['media_favicon'] != "") { ?><link rel="shortcut icon" href="<?php echo $data['media_favicon']; ?>"><?php } ?>
	<?php if($data['media_favicon_iphone'] != "") { ?><link rel="apple-touch-icon" href="<?php echo $data['media_favicon_iphone']; ?>"><?php } ?>
	<?php if($data['media_favicon_ipad'] != "") { ?><link rel="apple-touch-icon" sizes="72x72" href="<?php echo $data['media_favicon_ipad']; ?>"><?php } ?>
	<?php if($data['media_favicon_iphone_retina'] != "") { ?><link rel="apple-touch-icon" sizes="114x114" href="<?php echo $data['media_favicon_iphone_retina']; ?>"><?php } ?>
	<?php if($data['media_favicon_ipad_retina'] != "") { ?><link rel="apple-touch-icon" sizes="144x144" href="<?php echo $data['media_favicon_ipad_retina']; ?>"><?php } ?>
	
<!-- Mobile Specific
================================================== -->


<!-- Mobile Specific Metas
	========================================================= -->
	<?php if($data['check_mobilezoom'] == 0) { ?><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"><?php } ?>

<!-- CSS Files
================================================== -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/color/blue.css" id="colors">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.html" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300'>
<link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Raleway:400,800,900,100,300'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700'>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts/fontello.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts/gizmo.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts/picons.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/switcher.css">

<!--[if lt IE 9]>
	<script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>

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


