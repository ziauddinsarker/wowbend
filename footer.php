<!-- footer -->
          <footer class="footer b-pad0">
                  <div class="container">
                       
                       <div class="row">                  
                           <div class="col-sm-4 t-pad20 ">
                                <div class="widget r-pad30">
                                     <h3 class="widget-title"><a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="" /></a>&nbsp;</h3>
                                     <div class="clearfix"></div>
                                     <p>Blend porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci nobis est eligendi optio cumque nihil impedit.</p>
                                     <p class="bold">900-321-4568 | contact@blend.com</p>
                                     <p class="bold">6545 Gulberg St. Abbort Road</p>
                                     <p class="bold">www.blend.com</p>
                                </div>
                          </div>                      
                          <div class="col-sm-4 t-pad50 ">
                                <div class="widget r-pad30">
                                     <h4 class="fw600 b-mgr40">Latest Posts</h4>
                                     <p><a href="#">Most important things are not things - <span class="bold">December 23</span> </a></p>
                                     <hr>                                     
                                     <p><a href="#">Try hard you will get success - <span class="bold">December 18</span> </a></p>
                                     <hr>                                     
                                     <p><a href="#">Having a plan feels good - <span class="bold">November 29</span> </a></p>
                              </div>
                          </div>                      
                          <div class="col-sm-4 t-pad50 ">
                                <div class="widget r-pad30">
                                     <h4 class="fw600 b-mgr40">Newsletter Signup</h4>
                                     <div class="clearfix"></div>
                                     <p>Blend porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci.</p>
                                    
                                        <form method="post" id="contact-form" action="#"> 
                                              <input name="email" type="text" value="" placeholder="E-mail Address" class="alt"/>
                                              <input type="submit" class="btn-submit alt" value="Sign up"/>
                                              <div class="clearfix"></div>
                                        </form>
                                     <p class="small">* We don’t share your information with anyone. <br> Check out our <a href="#">Privacy Policy</a> for more details. </p>
                                </div>
                          </div>                  
                       </div>
                       
                  </div>           
          </footer>		  
          <!--/ footer -->
		  
          <div class="bg-white">                        
               <div class="container t-pad20 b-pad10">
                       
                    <div class="col-md-6 t-pad10">					
						<?php if($data['textarea_copyright'] != "") { ?>
							<?php echo $data['textarea_copyright']; ?>
						<?php } else { ?>
							<p class="bold">Copyright &copy;  <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
						<?php } ?>
                    </div>
					
                    <div class="col-md-6 text-right">
					<?php if($data['check_socialfooter'] == true) { ?>
                         <div class="social-icons">
                              <ul>
                                  	<?php if($data['social_facebook'] != "") { ?>										
										<li><a href="<?php echo $data['social_facebook']; ?>" class="facebook-alt" title="<?php _e( 'Facebook', 'wash' ) ?>" data-rel="tooltip" data-placement="top"><i class="icon-facebook"></i></a></li> 
									<?php } ?>
									<?php if($data['social_twitter'] != "") { ?>
										<li><a href="<?php echo $data['social_twitter']; ?>" class="twitter-alt" title="<?php _e( 'Twitter', 'wash' ) ?>" data-rel="tooltip" data-placement="top"><i class="icon-twitter"></i></a></li>
									<?php } ?>
									<?php if($data['social_linkedin'] != "") { ?>
										<li><a href="<?php echo $data['social_linkedin']; ?>" class="linkedin-alt" title="<?php _e( 'LinkedIn', 'wash' ) ?>" data-rel="tooltip" data-placement="top"><i class="icon-linkedin"></i></a></li>
									<?php } ?>
									<?php if($data['social_google_plus'] != "") { ?>
										<li><a href="<?php echo $data['social_google_plus']; ?>" class="google-alt" title="<?php _e( 'Google Plus', 'wash' ) ?>" data-rel="tooltip" data-placement="top"><i class="icon-gplus"></i></a></li>
									<?php } ?>
									<?php if($data['social_dribble'] != "") { ?>										
										<li><a href="<?php echo $data['social_dribble']; ?>" class="dribbble-alt" title="<?php _e( 'Dribble', 'wash' ) ?>" data-rel="tooltip" data-placement="top"><i class="icon-dribbble"></i></a></li>
									<?php } ?>
									<?php if($data['social_rss'] == true) { ?>
										<li><a href="<?php bloginfo('rss2_url'); ?>" class="rss-alt" title="<?php _e( 'RSS', 'wash' ) ?>" data-rel="tooltip" data-placement="top"><i class="icon-rss"></i></a></li>
									<?php } ?>
                              </ul>
                         </div>
					 <?php } ?>
                    </div>
                       
               </div>      
           </div>	
        
	 </div>
</div>
<!--/content wrapper -->
		<!-- search -->
		<div class="overlay overlay-slidedown">
			 <button type="button" class="overlay-close">Close</button>
             <div class="container">
                  <div class="row">
                       <div class="col-sm-12" style="margin-top:30%;">
                            <form action="http://okathemes.com/themes/blend/search-results.html" class="center-block" id="header-search-form" method="get">
                                  <input type="text"  id="header-search" name="s" value="Start Typing..." style="height:150px;" autocomplete="off" onFocus="if (this.value == 'Start Typing...')this.value = '';" onBlur="if (this.value == '')this.value = 'Start Typing...';"  />
                            </form>
                       </div>
                  </div>
             </div>
		</div>
		<!--/ search -->
        
<!-- JS Files
================================================== -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easytabs.min.js"></script>	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easytabs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.zflickrfeed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/twitter-bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easy-pie-chart.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/search.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/gizmo.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<!-------- Analytics Code ------->
<?php if($data['textarea_trackingcode'] != '') { echo $data['textarea_trackingcode']; } ?>
<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
</body>
</html>