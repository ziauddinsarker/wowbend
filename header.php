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

<title>
	   <?php
		  if (function_exists('is_tag') && is_tag()) {
			 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		  elseif (is_archive()) {
			 wp_title(''); echo ' Archive - '; }
		  elseif (is_search()) {
			 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		  elseif (!(is_404()) && (is_single()) || (is_page())) {
			 wp_title(''); echo ' - '; }
		  elseif (is_404()) {
			 echo 'Not Found - '; }
		  if (is_home()) {
			 bloginfo('name'); echo ' - '; bloginfo('description'); }
		  else {
			  bloginfo('name'); }
		  if ($paged>1) {
			 echo ' - page '. $paged; }
	   ?>
</title>
<!-- Favicon
    ============================================== -->
<link rel="shortcut icon" href="images/favicon.png">
<!-- Mobile Specific
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- loader -->
<div class="loader">
     <div class="spinner">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
	 </div>
</div>
<!-- /loader -->
<!-- wrapper -->
<nav id="main-nav">
     <div class="widget">
          <p>Blend elementum consequat lacus, sit amet pulvinar urna hendrerit sit amet. Sed aliquam eu ante a ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce elementum felis lorem, eget scelerisque enim blandit quis.</p>
          <p>Massa turpis ornare nec commodo non, auctor vel  cursus vestibulum varius hendrerit turpis quiseam cursus.</p>
     </div>
     <div class="social-nav-block">
          <a href="#" class="twitter-alt"><i class="icon-twitter"></i></a>
          <a href="#" class="facebook-alt"><i class="icon-facebook"></i></a> 
          <a href="#" class="google-alt"><i class="icon-gplus"></i></a> 
          <a href="#" class="linkedin-alt"><i class="icon-linkedin"></i></a> 
          <a href="#" class="pinterest-alt"><i class="icon-pinterest"></i></a> 
          <a href="#" class="dribbble-alt"><i class="icon-dribbble"></i></a> 
     </div>
</nav>    

<!-- content wrapper -->  
<div class="content-wrap">       
            
     <div class="content">
  
          <!-- header -->
          <div class="header-nav basic set yamm nobg">
   
               <div class="container">      
                    <div class="basic-wrapper"> 
                         <a class="btn mobile-menu right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a> 
                         <a class="logo-white" href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="" /></a>
                         <a class="logo-dark" href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
                    </div>

                    <div class="collapse navbar-collapse right">
                    <!-- navigation -->
                        <ul class="nav navbar-nav">
                            <li class="dropdown"><a href="#" class="dropdown-toggle js-activated white">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home - Business </a></li>
                                    <li><a href="index2.html">Home - Agency</a></li>
                                    <li><a href="index3.html">Home - Classic</a></li>
                                    <li><a href="index4.html">Home - Landing</a></li>
                                    <li><a href="index5.html">Home - Portfolio</a></li> 
                                    <li><a href="index6.html">Home - Education</a></li>
                                    <li><a href="index7.html">Home - Medical</a></li>
                                    <li><a href="index8.html">Home - Personal</a></li>
                               </ul>
            			   </li>
            	
               			   <li class="dropdown"><a href="#" class="dropdown-toggle js-activated white">Pages</a>
                               <ul class="dropdown-menu">
                                   <li><a href="about.html">About Us</a></li>
                                   <li><a href="services.html">Services</a></li>
                                   <li><a href="contact.html">Contact Us</a></li>
                                   <li><a href="full-width.html">Full Width</a></li>
                                   <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                   <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                   <li><a href="404.html">404 Page</a></li>
                              </ul>
          	              </li>
            
           	   			  <li class="dropdown yamm-fullwidth"><a href="#" class="dropdown-toggle js-activated white">Features</a>
             	  			  <ul class="dropdown-menu yamm-dropdown-menu">
              	 	  			  <li>
                                      <div class="yamm-content">
                                      
                                           <div class="col-sm-3">                                    
                                                <ul>  
                                                    <li><a href="accordion.html">Accordion & Toggles</a></li>
                                                    <li><a href="tabs.html">Tabs</a></li>
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="columns.html">Columns</a></li>
                                                    <li><a href="pricing.html">Pricing Tables</a></li>
                                                </ul>
                                           </div>
                                           <div class="col-sm-3">
                                                <ul>
                                                    <li><a href="icons.html">Font Icons</a></li>
                                                    <li><a href="progress-bar.html">Progress Bar</a></li>
                                                    <li><a href="icon-boxes.html">Icon Boxes</a></li>
                                                    <li><a href="counter.html">Fact Counter</a></li>
                                                    <li><a href="pie-chart.html">Pie Chart</a></li>
                                               </ul>
                                          </div>                            
                                          <div class="col-sm-3">
                                               <ul>
                                                   <li><a href="gallery.html">Photo Gallery</a></li>
                                                   <li><a href="page-slider.html">Page Slider</a></li>
                                                   <li><a href="parallax.html">Parallax Background</a></li>
                                                   <li><a href="gmap.html">Google Map</a></li>
                                                   <li><a href="alert.html">Alert Boxes</a></li>
                                               </ul>
                                         </div>
                                         <div class="col-sm-3">
                                              <ul class="last">
                                                  <li><a href="typography.html">Typography</a></li>
                                                  <li><a href="testimonials.html">Testimonials</a></li>
                                                  <li><a href="team.html">Team Members</a></li>
                                                  <li><a href="tables.html">Tables</a></li>
                                                  <li><a href="video.html">Video Backgrounds</a></li>
                                              </ul>
                                        </div>
                                    </div>
                			     </li>
              			     </ul>
            		     </li>           
                         <li class="dropdown yamm-fullwidth"><a href="#" class="dropdown-toggle js-activated white">Portfolio</a>
             	  			  <ul class="dropdown-menu yamm-dropdown-menu">
              	 	  			  <li>
                                      <div class="yamm-content">
                                      
                                           <div class="col-sm-3">                                    
                                                <ul> 
                                                    <li><a href="portfolio4.html">Portfolio boxed 4 column</a></li>
                                                    <li><a href="portfolio4-wide.html">Portfolio wide 4 column</a></li>
                                                    <li><a href="portfolio4-masonry.html">Portfolio Masonry 4 column</a></li>
                                                    <li><a href="portfolio4-wide-titles.html">Portfolio wide titles 4 column</a></li>
                                                    <li><a href="portfolio4-whitebg.html">Portfolio boxed whitebg 4 column</a></li>
                                                </ul>
                                           </div>
                                           <div class="col-sm-3">
                                                <ul>
                                                     <li><a href="portfolio3.html">Portfolio boxed 3 column</a></li>
                                                     <li><a href="portfolio3-wide.html">Portfolio wide 3 column</a></li>
                                                     <li><a href="portfolio3-masonry.html">Portfolio Masonry 3 column</a></li>
                                                     <li><a href="portfolio3-wide-titles.html">Portfolio wide titles 3 column</a></li>
                                                     <li><a href="portfolio3-whitebg.html">Portfolio boxed whitebg 3 column</a></li>
                                               </ul>
                                          </div>                            
                                          <div class="col-sm-3">
                                               <ul>
                                                     <li><a href="portfolio2.html">Portfolio boxed 2 column</a></li>
                                                     <li><a href="portfolio2-wide.html">Portfolio wide 2 column</a></li>
                                                     <li><a href="portfolio2-masonry.html">Portfolio Masonry 2 column</a></li>
                                                     <li><a href="portfolio2-wide-titles.html">Portfolio wide titles 2 column</a></li>
                                                     <li><a href="portfolio2-whitebg.html">Portfolio boxed whitebg 2 column</a></li>
                                               </ul>
                                         </div>
                                         <div class="col-sm-3">
                                              <ul class="last">
                                                     <li><a href="portfolio-half.html">Portfolio with Half Slider</a></li>
                                                     <li><a href="portfolio-full.html">Portfolio with Full Slider</a></li>
                                                     <li><a href="portfolio-parallax.html">Portfolio with Parallax</a></li>
                                                     <li><a href="portfolio-images.html">Portfolio with Images</a></li>
                                                     <li><a href="portfolio-video.html">Portfolio with Video</a></li>
                                              </ul>
                                        </div>
                                    </div>
                			     </li>
              			     </ul>
            		    </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated white">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-large.html">Blog Large Images</a></li>
                                <li><a href="blog-medium.html">Blog Medium Images</a></li>
                                <li><a href="blog-grid.html">Blog Grid Style</a></li>
                                <li><a href="blog-grid-sidebar.html">Blog Grid Style Sidebar</a></li>
                                <li><a href="blog-single-post.html">Blog Single Post</a></li>
                            </ul>
                        </li>            
                        <li class="dropdown"><a href="#" class="dropdown-toggle js-activated white">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="product-fullwidth.html">Product Fullwidth</a></li>
                                <li><a href="product-sidebar.html">Product Sidebar</a></li>
                                <li><a href="product-single.html">Product Single</a></li>
                                <li><a href="product-cart.html">Product Cart </a></li>
                                <li><a href="product-login.html">Product Login </a></li>
                                <li><a href="product-checkout.html">Product Checkout </a></li>
                            </ul>
                        </li>
                        <li>
                           <ul class="social-top">
                               <li><a href="#" id="trigger-overlay"><i class="icon-search-1 white"></i></a></li>
                               <li><a href="#" class="nav-trigger"><i class="icon-menu-1 white"></i></a></li>
                           </ul>
                        </li>
        			</ul>
        		   <!-- /navigation -->
     		    </div>
    		 </div>
 		  </div>
         <!-- / header -->