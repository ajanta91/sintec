<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : Sintec
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function sintec_common_custom_css(){
    
    wp_enqueue_style( 'sintec-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background: url('.esc_url( $header_bg ).')' : '';

		$themeColor     		  = sintec_opt( 'sintec_theme_color', '#e22104' );

		$headerTop_bg     		  = sintec_opt( 'sintec_top_header_bg_color' );
		$headerTop_col     		  = sintec_opt( 'sintec_top_header_color' );

		$headerBg          		  = sintec_opt( 'sintec_header_bg_color', '#fff' );
		$menuColor          	  = sintec_opt( 'sintec_header_menu_color' );
		$menuHoverColor           = sintec_opt( 'sintec_header_menu_hover_color' );

		$dropMenuBgColor          = sintec_opt( 'sintec_header_menu_dropbg_color' );
		$dropMenuColor            = sintec_opt( 'sintec_header_drop_menu_color' );
		$dropMenuHovColor         = sintec_opt( 'sintec_header_drop_menu_hover_color' );
		$dropMenuHovItemBg        = sintec_opt( 'sintec_drop_menu_item_hover_bg' );


		$footerwbgColor     	  = sintec_opt('sintec_footer_widget_bdcolor');
		$footerwTextColor   	  = sintec_opt('sintec_footer_widget_textcolor');
		$footerwanchorcolor 	  = sintec_opt('sintec_footer_widget_anchorcolor');
		$footerwanchorhovcolor    = sintec_opt('sintec_footer_widget_anchorhovcolor');
		$widgettitlecolor  		  = sintec_opt('sintec_footer_widget_titlecolor');


		$fofbg  	  		  = sintec_opt('sintec_fof_bg_color');
		$foftonecolor  	  	  = sintec_opt('sintec_fof_textone_color');
		$fofttwocolor  	  	  = sintec_opt('sintec_fof_texttwo_color');


		$customcss ="
			.global-page-title{
				{$header_bg_img}
			}
			

			.header_area .navbar .logo_h,
			.header_area .navbar .nav .nav-item:hover .nav-link,
			.header_area .navbar .nav .nav-item.active .nav-link,
			.top_menu .header_social li:hover a,
			.top_menu .dn_btn:hover,
			.top_menu .dn_btn i,
			.banner_area .banner_inner .banner_content .page_link a:hover,
			.banner-breadcrumb .breadcrumb-item a:hover,
			.single-blog .short_details a:hover,
			.single-blog .meta-top a:hover,
			.l_blog_item .l_blog_text h4:hover,
			.blog_details a:hover,
			.blog_right_sidebar .post_category_widget .cat-list li:hover a,
			.blog_right_sidebar .popular_post_widget .post_item .media-body a:hover,
			.single-post-area .navigation-top .social-icons li:hover i,
			.single-post-area .navigation-top .social-icons li:hover span,
			.single-post-area .blog-author a:hover,
			.contact-info .media-body h3 a:hover,
			.wpcf7-form label,
			.modal-message .modal-dialog .modal-content .modal-header h2,
			.sample-text-area p b,
			.sample-text-area p i,
			.sample-text-area p sup,
			.sample-text-area p del,
			.sample-text-area p u,
			.link-border,
			.main_btn:hover,
			.submit_btn:hover,
			.black_btn,
			.single-testimonial h4:hover,
			.team_item .team_img .hover a:hover,
			.team_item:hover .team_name h4,
			.portfolio_area .filters ul li:hover,
			.portfolio_area .filters ul li.active,
			.single_portfolio .short_info p,
			.footer-area .footer-nav li a:hover,
			.copy-right-text i,
			.copy-right-text a,
			.single-footer-widget .footer-link,
			.footer-bottom .footer-text a,
			.footer-bottom .footer-text i,
			.footer-bottom .footer-text span,
			.single-footer-widget ul li:hover a,
			.number-content .number-wrapper .single-number h5,
			.wp-block-archives li:hover a,
			.blog_details .wp-block-categories-list li a:hover,
			.wp-block-latest-comments__comment-author:hover, 
			.wp-block-latest-comments__comment-link:hover,
			.blog_right_sidebar .widget_categories ul li:hover a,
			.blog_right_sidebar .widget_rss ul li:hover a,
			.blog_right_sidebar .widget_recent_entries ul li:hover a,
			.blog_right_sidebar .widget_recent_comments ul li:hover a,
			.blog_right_sidebar .widget_archive ul li:hover a,
			.blog_right_sidebar .widget_meta ul li:hover a,
			.blog_right_sidebar .widget_nav_menu ul li a:hover,
			.blog_right_sidebar .widget_pages ul li a:hover
			{
				color: {$themeColor}
			}			

			.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover > .nav-link,
			.right-button .shop-icon span,
			#search_input_box,
			.causes_slider .owl-dots .owl-dot.active,
			.blog_item_img .blog_item_date,
			.blog_right_sidebar .tag_cloud_widget ul li a:hover,
			.blog-pagination .page-link:hover,
			.link-border:before,
			.main_btn,
			.main_btn2:hover,
			.submit_btn,
			.white_bg_btn:hover,
			.black_btn:hover,
			.button,
			.button:hover,
			.button-header,
			.button-contactForm,
			.testimonial-area .owl-dot.active,
			.area-heading .line:after,
			.area-heading .line:before,
			.single-footer-widget .bb-btn,
			.footer-area .tagcloud a:hover,
			.single_sidebar_widget .tagcloud a:hover
			{
				background: {$themeColor}
			}

			.single-post-area .quotes,
			.link-border,
			.main_btn,
			.main_btn2:hover,
			.submit_btn,
			.white_bg_btn:hover,
			.button,
			.button-header,
			.button-contactForm,
			.service-area .single-service:hover,
			.about-area .about-content .main_btn:hover,
			blockquote p,
			.main_btn:hover		
			{
				border-color: {$themeColor}
			}



			.top_menu{
				background: {$headerTop_bg}
			}
			.top_menu .dn_btn,
			.top_menu .header_social li a,
			.top_menu .follow_us
			{
				color: {$headerTop_col}
			}

			.header_area .navbar {
			   background-color: {$headerBg};
			}
			.header_area .navbar .nav .nav-item .nav-link {
			   color: {$menuColor};
			}
			.header_area .navbar .nav .nav-item:hover .nav-link {
			   color: {$menuHoverColor};
			}
			.header_area .navbar .nav .nav-item.submenu ul {
			   background: {$dropMenuBgColor};
			}
			.header_area .navbar .nav .nav-item.submenu ul .nav-item .nav-link {
			   color: {$dropMenuColor};
			}
			
			.header_area .navbar .nav .nav-item.submenu ul .nav-item:hover .nav-link{
				background: {$dropMenuHovItemBg};
				color: {$dropMenuHovColor}
			}

			.footer-area {
				background-color: {$footerwbgColor};
			}
			footer.footer-area p{
				color: {$footerwTextColor}
			}
			.footer-area h6 {
				color: {$widgettitlecolor}
			}
			footer a,
			.single-footer-widget ul li a{
			   color: {$footerwanchorcolor};
			}
			footer a:hover,
			.single-footer-widget ul li:hover a{
			   color: {$footerwanchorhovcolor};
			}
			#f0f {
			   background-color: {$fofbg};
			}
			.f0f-content .h1 {
			   color: {$foftonecolor};
			}
			.f0f-content p {
			   color: {$fofttwocolor};
			}

        ";
       
    wp_add_inline_style( 'sintec-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'sintec_common_custom_css', 50 );