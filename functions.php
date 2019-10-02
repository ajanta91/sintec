<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'SINTEC_DIR_URI' ) )
		define( 'SINTEC_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'SINTEC_DIR_ASSETS_URI' ) )
		define( 'SINTEC_DIR_ASSETS_URI', SINTEC_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'SINTEC_DIR_CSS_URI' ) )
		define( 'SINTEC_DIR_CSS_URI', SINTEC_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'SINTEC_DIR_JS_URI' ) )
		define( 'SINTEC_DIR_JS_URI', SINTEC_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('SINTEC_DIR_ICON_IMG_URI') )
		define( 'SINTEC_DIR_ICON_IMG_URI', SINTEC_DIR_URI.'img/core-img/' );
	
	//DIR inc
	if( !defined( 'SINTEC_DIR_INC' ) )
		define( 'SINTEC_DIR_INC', SINTEC_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'SINTEC_DIR_ELEMENTOR' ) )
		define( 'SINTEC_DIR_ELEMENTOR', SINTEC_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'SINTEC_DIR_PATH' ) )
		define( 'SINTEC_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'SINTEC_DIR_PATH_INC' ) )
		define( 'SINTEC_DIR_PATH_INC', SINTEC_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'SINTEC_DIR_PATH_LIB' ) )
		define( 'SINTEC_DIR_PATH_LIB', SINTEC_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'SINTEC_DIR_PATH_CLASSES' ) )
		define( 'SINTEC_DIR_PATH_CLASSES', SINTEC_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'SINTEC_DIR_PATH_WIDGET' ) )
		define( 'SINTEC_DIR_PATH_WIDGET', SINTEC_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'SINTEC_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'SINTEC_DIR_PATH_ELEMENTOR_WIDGETS', SINTEC_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( SINTEC_DIR_PATH_INC . 'sintec-breadcrumbs.php' );
	// Sidebar register file include
	require_once( SINTEC_DIR_PATH_INC . 'sintec-widgets-reg.php' );
	// Post widget file include
	require_once( SINTEC_DIR_PATH_INC . 'sintec-recent-post-thumb.php' );
	// News letter widget file include
	require_once( SINTEC_DIR_PATH_INC . 'sintec-newsletter-widget.php' );
	// Nav walker file include
	require_once( SINTEC_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( SINTEC_DIR_PATH_INC . 'sintec-functions.php' );

	// Theme Demo file include
	require_once( SINTEC_DIR_PATH_INC . 'demo/demo-import.php' );

	// Inline css file include
	require_once( SINTEC_DIR_PATH_INC . 'sintec-commoncss.php' );
	// Post Like
	require_once( SINTEC_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( SINTEC_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( SINTEC_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( SINTEC_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( SINTEC_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( SINTEC_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( SINTEC_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( SINTEC_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( SINTEC_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class sintec dashboard
	require_once( SINTEC_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );


	if( class_exists( 'WooCommerce' ) ){
		// WooCommerce Function
		require_once( SINTEC_DIR_PATH_INC . 'sintec_woocommerce_function.php' );
	}
	

	// Admin Enqueue Script
	function sintec_admin_script(){
		wp_enqueue_style( 'sintec-admin', get_template_directory_uri().'/assets/css/sintec_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'sintec_admin', get_template_directory_uri().'/assets/js/sintec_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'sintec_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );




	/**
	 * Instantiate Sintec object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Sintec Dashboard .
	 *
	 */
	
	$Sintec = new Sintec();
	
