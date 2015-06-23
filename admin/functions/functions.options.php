<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
	

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr = wp_upload_dir();
		$all_uploads_path = $uploads_arr['path'];
		$all_uploads = get_option('of_uploads');
		$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		$of_options_select = array("one","two","three","four","five"); 
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

$url =  ADMIN_DIR . 'assets/images/';

/* ------------------------------------------------------------------------ */
/* General
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "General",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Disable Comments for all Content Pages (not Blog)",
					"desc" => "<strong>Be careful:</strong> Page specific Settings get overwritten.",
					"id" => "check_disablecomments",
					"std" => 0,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics Code (or other) here.",
					"id" => "textarea_trackingcode",
					"std" => "",
					"type" => "textarea"); 
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Favicons",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Favicon Upload (16x16)",
					"desc" => "Upload your Favicon (16x16px ico/png - use <a href='http://www.favicon.cc/' target='_blank'>favicon.cc</a> to make sure it's fully compatible)",
					"id" => "media_favicon",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPhone Icon Upload (57x57)",
					"desc" => "Upload your Apple Touch Icon (57x57px png)",
					"id" => "media_favicon_iphone",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPhone Retina Icon Upload (114x114)",
					"desc" => "Upload your Apple Touch Retina Icon (114x114px png)",
					"id" => "media_favicon_iphone_retina",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPad Icon Upload (72x72)",
					"desc" => "Upload your Apple Touch Retina Icon (144x144px png)",
					"id" => "media_favicon_ipad",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Apple iPad Retina Icon Upload (144x144px)",
					"desc" => "Upload your Apple Touch Retina Icon (144x144px png)",
					"id" => "media_favicon_ipad_retina",
					"std" => "",
					"mod" => "min",
					"type" => "media");

/* ------------------------------------------------------------------------ */
/* Layout
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Layout",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Layout Options",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Enable Responsive Layout",
					"desc" => "Check to enable Responsive Layout",
					"id" => "check_responsive",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Enable to Zoom on Mobile Devices",
					"desc" => "Check to enable Zoom on Mobile Devices (If Responsive Mode is active I would recommend to leave it disabled.)",
					"id" => "check_mobilezoom",
					"std" => 0,
					"type" => "checkbox"); 
					
					
$of_options[] = array( "name" => "Default Background Color",
					"desc" => "Select Color for default Background",
					"id" => "color_bg",
					"std" => "#ffffff",
					"type" => "color"); 
																
/* ------------------------------------------------------------------------ */
/* Header
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Header",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Select Header Layout",
					"icon" => false,
					"type" => "info");	
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "header_layout",
					"std" => "v1",
					"type" => "images",
					"options" => array(
						"v1" => get_bloginfo('template_directory')."/framework/images/headers/header1.jpg",
						"v2" => get_bloginfo('template_directory')."/framework/images/headers/header2.jpg",
						"v3" => get_bloginfo('template_directory')."/framework/images/headers/header3.jpg",
						"v4" => get_bloginfo('template_directory')."/framework/images/headers/header4.jpg",
						"v5" => get_bloginfo('template_directory')."/framework/images/headers/header5.jpg",
						"v6" => get_bloginfo('template_directory')."/framework/images/headers/header6.jpg"
					));
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Top Bar Options",
					"icon" => false,
					"type" => "info");				

$of_options[] = array( "name" => "Show Topbar",
					"desc" => "Check to show Topbar (Callus Text & Login Register)",
					"id" => "check_topbar",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Call Us Text",
					"desc" => "Enter your Call us Text (HTML allowed)",
					"id" => "text_callus",
					"std" => "Call Us: (1)118 234 678",
					"type" => "textarea"); 
					
$of_options[] = array( "name" => "Mail Us Text",
					"desc" => "Enter your Mail address (HTML allowed)",
					"id" => "text_mailus",
					"std" => "Mail info@example.com",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General Logo & Search Options",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Logo Upload",
					"desc" => "Upload your Logo",
					"id" => "media_logo",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Show Searchform",
					"desc" => "Check to show Searchform in Navigation Bar",
					"id" => "check_searchform",
					"std" => 1,
					"type" => "checkbox");
					

/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header-V2 Options",
					"icon" => false,
					"type" => "info");
					
				
$of_options[] = array( "name" => "Banner",
					"desc" => "Enter your google advertisement Code",
					"id" => "text_hv2banner",
					"std" => "",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */

					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Optional: Retina Logo Options",
					"icon" => false,
					"type" => "info");
				
$of_options[] = array( "name" => "Logo Upload Retina",
					"desc" => "Upload your Retina Logo. This should be your Logo in double size (If your logo is 100 x 20px, it should be 200 x 40px)",
					"id" => "media_logo_retina",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Original Logo Width",
					"desc" => "If Retina Logo uploaded, please enter the width of the Standard Logo you've uploaded (not the Retina Logo)",
					"id" => "logo_width",
					"std" => "",
					"type" => "text");
					
$of_options[] = array( "name" => "Original Logo Height",
					"desc" => "If Retina Logo uploaded, please enter the height of the Standard Logo you've uploaded (not the Retina Logo)",
					"id" => "logo_height",
					"std" => "",
					"type" => "text");

/* ------------------------------------------------------------------------ */
/* Footer
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Footer",
					"type" => "heading");				
					
$of_options[] = array( "name" => "Enable Widgetized Footer",
					"desc" => "Check to show widgetized Footer.",
					"id" => "check_footerwidgets",
					"std" => 1,
					"type" => "checkbox"); 
					
$of_options[] = array( "name" => "Footer Widget Columns",
					"desc" => "Select how many columns you want in the footer.",
					"id" => "select_footercolumns",
					"std" => "4",
					"type" => "select",
					"options" => array(
						'4' => '4',
						'3' => '3',
						'2' => '2',
						'1' => '1'
					));

$of_options[] = array( "name" => "Copyright Text",
					"desc" => "Enter your Copyright Text (HTML allowed)",
					"id" => "textarea_copyright",
					"std" => "Theme by <a href='http://www.ziauddins.com'>Wash IT</a>",
					"type" => "textarea"); 

$of_options[] = array( "name" => "Show Social Icons in Footer",
					"desc" => "Check to show Social Icons in Footer (Configure Icons in Social Media)",
					"id" => "check_socialfooter",
					"std" => 1,
					"type" => "checkbox"); 
					
/* ------------------------------------------------------------------------ */
/* Typography
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Typography",
					"type" => "heading");
									
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Body",
					"icon" => false,
					"type" => "info");

$of_options[] = array( "name" => "Body Text Font",
					"desc" => "Specify the Body font properties",
					"id" => "font_body",
					"std" => array('size' => '13px','face' => 'Muli','style' => 'normal','color' => '#6d6d6d'),
					"type" => "typography");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Headlines",
					"icon" => false,
					"type" => "info");
				
$of_options[] = array( "name" => "H1 - Headline Font",
					"desc" => "Specify the H1 Headline font properties",
					"id" => "font_h1",
					"std" => array('size' => '28px','face' => 'Oswald','style' => 'normal','color' => '#2f2f2f'),
					"type" => "typography");  

$of_options[] = array( "name" => "H2 - Headline Font",
					"desc" => "Specify the H2 Headline font properties",
					"id" => "font_h2",
					"std" => array('size' => '23px','face' => 'Oswald','style' => 'normal','color' => '#2f2f2f'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "H3 - Headline Font",
					"desc" => "Specify the H3 Headline font properties",
					"id" => "font_h3",
					"std" => array('size' => '18px','face' => 'Oswald','style' => 'normal','color' => '#2f2f2f'),
					"type" => "typography");  

$of_options[] = array( "name" => "H4 - Headline Font",
					"desc" => "Specify the H4 Headline font properties",
					"id" => "font_h4",
					"std" => array('size' => '16px','face' => 'Oswald','style' => 'normal','color' => '#2f2f2f'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "H5 - Headline Font",
					"desc" => "Specify the H5 Headline font properties",
					"id" => "font_h5",
					"std" => array('size' => '15px','face' => 'Oswald','style' => 'normal','color' => '#2f2f2f'),
					"type" => "typography");  

$of_options[] = array( "name" => "H6 - Headline Font",
					"desc" => "Specify the H6 Headline font properties",
					"id" => "font_h6",
					"std" => array('size' => '14px','face' => 'Oswald','style' => 'normal','color' => '#2f2f2f'),
					"type" => "typography"); 
					
/* ------------------------------------------------------------------------ */
/* Styling
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Styling",
					"type" => "heading");
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "General",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Accent Color",
					"desc" => "Default: #dc2a0b",
					"id" => "color_accent",
					"std" => "#dc2a0b",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Links",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Link Color",
					"desc" => "Default: #333333",
					"id" => "color_link",
					"std" => "#333333",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Link Hover Color",
					"desc" => "Default: #dc2a0b",
					"id" => "color_hover",
					"std" => "#dc2a0b",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Top Bar",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Top Bar Background Color",
					"desc" => "Default: #2f2f2f",
					"id" => "color_topbarbg",
					"std" => "#2f2f2f",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Callus Text Font",
					"desc" => "Default: #999999",
					"id" => "font_callus",
					"std" => array('size' => '13px','face' => 'Helvetica','style' => 'normal','color' => '#ffffff'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Top bar Icon Color",
					"desc" => "Default: #999999",
					"id" => "icon_topbar",
					"std" => '#999999',
					"type" => "color"); 					
					
$of_options[] = array( "name" => "Top Bar Link Color",
					"desc" => "Default: #ffffff",
					"id" => "color_topbarlink",
					"std" => "#ffffff",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Top Bar Link Hover Color",
					"desc" => "Default: #dc2a0b",
					"id" => "color_topbarlinkhover",
					"std" => "#dc2a0b",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Header",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Header Background Color",
					"desc" => "Default: #ececec",
					"id" => "color_headerbg",
					"std" => "#ececec",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Navigation",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Link Color",
					"desc" => "Default: #656464",
					"id" => "font_nav",
					"std" => array('size' => '16px','face' => 'Oswald','style' => '400','color' => '#656464'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Link Hover Color",
					"desc" => "Default: #333333",
					"id" => "color_navlinkhover",
					"std" => "#333333",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Link Active Color",
					"desc" => "Default: #289dcc",
					"id" => "color_navlinkactive",
					"std" => "#289dcc",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Link Upper Border Color",
					"desc" => "Default: #dc2a0b",
					"id" => "color_navlink_upper",
					"std" => "#dc2a0b",
					"type" => "color"); 
/* ------------------------------------------------------------------------ */

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Sub-Menu Styling",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Sub-Menu Background Color",
					"desc" => "Default: #ffffff",
					"id" => "color_submenubg",
					"std" => "#ffffff",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Sub-Menu Link Color",
					"desc" => "Default: #2f2f2f",
					"id" => "color_submenulink",
					"std" => "#2f2f2f",
					"type" => "color");  
					
$of_options[] = array( "name" => "Sub-Menu Link Hover Color",
					"desc" => "Default: #f2f2f2",
					"id" => "color_submenulinkhover",
					"std" => "#f2f2f2",
					"type" => "color");
					
/* ------------------------------------------------------------------------ */					

$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Titlebar",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Title Background Color",
					"desc" => "Default: #2f2f2f",
					"id" => "color_titlebg",
					"std" => "#2f2f2f",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Title Border Top Color",
					"desc" => "Default: 6px solid #d4d4d4",
					"id" => "border_titletop",
					"std" => array('width' => '6','style' => 'solid','color' => '#d4d4d4'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Title Border Bottom Color",
					"desc" => "Default: 6px solid #d4d4d4",
					"id" => "border_titlebottom",
					"std" => array('width' => '6','style' => 'solid','color' => '#d4d4d4'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Title h1 Text Font",
					"desc" => "Default: #ffffff",
					"id" => "font_titleh1",
					"std" => array('size' => '25px','face' => 'Oswald','style' => 'normal','color' => '#ffffff'),
					"type" => "typography"); 
					
$of_options[] = array( "name" => "Title Breadcrumb Color",
					"desc" => "Default: #aaaaaa",
					"id" => "color_titlebreadcrumb",
					"std" => "#aaaaaa",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Title Breadcrumb Hover Color",
					"desc" => "Default: #dc2a0b",
					"id" => "color_titlebreadcrumbhover",
					"std" => "#dc2a0b",
					"type" => "color"); 

/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Sidebar",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Sidebar Widgets Headline",
					"desc" => "Default: #666666",
					"id" => "font_sidebarwidget",
					"std" => array('size' => '18px','face' => 'Oswald','style' => 'normal','color' => '#2f2f2f'),
					"type" => "typography"); 
					

/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Footer & Infobar",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Footer Background Color",
					"desc" => "Default: #2f2f2f",
					"id" => "color_footerbg",
					"std" => "#2f2f2f",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Border Top Color",
					"desc" => "Default: 10px solid #333333",
					"id" => "border_footertop",
					"std" => array('width' => '10','style' => 'solid','color' => '#333333'),
					"type" => "border"); 
					
$of_options[] = array( "name" => "Footer Text Color",
					"desc" => "Default: #999999",
					"id" => "color_footertext",
					"std" => "#999999",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Headline",
					"desc" => "Default: #ffffff",
					"id" => "font_footerheadline",
					"std" => array('size' => '15px','face' => 'Oswald, sans-serif','style' => 'normal','color' => '#ffffff'),
					"type" => "typography");
					
$of_options[] = array( "name" => "Footer Headline Border Color",
					"desc" => "Default: 1px solid #555555",
					"id" => "border_footerheadline",
					"std" => array('width' => '1','style' => 'none','color' => '#555555'),
					"type" => "border");
					
$of_options[] = array( "name" => "Footer Link Color",
					"desc" => "Default: #ffffff",
					"id" => "color_footerlink",
					"std" => "#ffffff",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Footer Link Hover Color",
					"desc" => "Default: #ffffff",
					"id" => "color_footerlinkhover",
					"std" => "#ffffff",
					"type" => "color"); 
					
/* ------------------------------------------------------------------------ */
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Copyright",
					"icon" => false,
					"type" => "info");
					
$of_options[] = array( "name" => "Copyright Background Color",
					"desc" => "Default: #222222",
					"id" => "color_copyrightbg",
					"std" => "#222222",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Text Color",
					"desc" => "Default: #777777",
					"id" => "color_copyrighttext",
					"std" => "#777777",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Link Color",
					"desc" => "Default: #888888",
					"id" => "color_copyrightlink",
					"std" => "#888888",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Copyright Link Hover Color",
					"desc" => "Default: #dc2a0b",
					"id" => "color_copyrightlinkhover",
					"std" => "#dc2a0b",
					"type" => "color");
					
/* ------------------------------------------------------------------------ */
/* Blog
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Blog",
					"type" => "heading");
					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Blog Options",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Blog Layout",
					"desc" => "Choose your Default Blog Layout",
					"id" => "select_bloglayout",
					"std" => "Blog Medium",
					"type" => "select",
					"options" => array('Blog Fullwidth', 'Blog Medium','Blog Large', 'Blog Timeline'));	
					

					
$of_options[] = array( "name" => "",
					"desc" => "",
					"id" => "general_heading",
					"std" => "Blog Title Settings",
					"icon" => false,
					"type" => "info"); 
					
$of_options[] = array( "name" => "Blog Title",
					"desc" => "",
					"id" => "text_blogtitle",
					"std" => "Blog",
					"type" => "text");

$of_options[] = array( "name" => "Disable Breadcrumbs for Blog",
					"desc" => "Check to disable Breadcrumbs for Blog & Blog Posts.",
					"id" => "check_blogbreadcrumbs",
					"std" => 0,
					"type" => "checkbox"); 		

					
/* ------------------------------------------------------------------------ */
/* Portfolio
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Portfolio",
					"type" => "heading");
					
$of_options[] = array( "name" => "Portfolio Slug",
					"desc" => "Enter the URL Slug for your Portfolio (Default: portfolio-item) <br /><strong>Go save your permalinks after changing this.</strong>",
					"id" => "text_portfolioslug",
					"std" => "portfolio-item",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Items on Portfolio Overview",
					"desc" => "Enter how many items you want to show on Portfolio Overview before Pagination shows up (Default: 16)",
					"id" => "text_portfolioitems",
					"std" => "16",
					"type" => "text"); 
			
/* ------------------------------------------------------------------------ */
/* Social
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Social Media",
					"type" => "heading");
					

					
$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "introduction",
					"std" => "Enter your USERNAME / URL to show or leave blank to hide Social Media Icons",
					"icon" => true,
					"type" => "info");


$of_options[] = array( "name" => "Facebook URL",
					"desc" => "Enter URL to your Facebook Account",
					"id" => "social_facebook",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Twitter URL",
					"desc" => "Enter URL to your Twitter Account",
					"id" => "social_twitter",
					"std" => "",
					"type" => "text"); 
			
					
$of_options[] = array( "name" => "Instagram URL",
					"desc" => "Enter URL to your Instagram Account",
					"id" => "social_instagram",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "LinkedIn URL",
					"desc" => "Enter URL to your LinkedIn Account",
					"id" => "social_linkedin",
					"std" => "",
					"type" => "text"); 
					
$of_options[] = array( "name" => "Show RSS",
					"desc" => "Check to Show RSS Icon",
					"id" => "social_rss",
					"std" => 1,
					"type" => "checkbox"); 
				
/* ------------------------------------------------------------------------ */
/* Custom CSS
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Custom CSS",
					"type" => "heading");
					
$of_options[] = array( "name" => "Custom CSS",
					"desc" => "Advanced CSS Options. Paste your CSS Code.",
					"id" => "textarea_csscode",
					"std" => "",
					"type" => "textarea"); 
					
/* ------------------------------------------------------------------------ */
/* Backup
/* ------------------------------------------------------------------------ */
$of_options[] = array( "name" => "Backup Options",
					"type" => "heading");
					
$of_options[] = array( "name" => "Backup and Restore Options",
                    "id" => "of_backup",
                    "std" => "",
                    "type" => "backup",
					"desc" => 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
					);
					
$of_options[] = array( "name" => "Transfer Theme Options Data",
                    "id" => "of_transfer",
                    "std" => "",
                    "type" => "transfer",
					"desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".
						',
					);
					
	}
}
?>
