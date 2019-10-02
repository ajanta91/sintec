<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <header class="header_area">
        <?php
        $phone = !empty( sintec_opt( 'sintec_top_phone' ) ) ? sintec_opt( 'sintec_top_phone' ) : '';
        $address = !empty( sintec_opt( 'sintec_top_address' ) ) ? sintec_opt( 'sintec_top_address' ) : '';
        $social_links = !empty( sintec_opt( 'sintec_footer_social' ) ) ? sintec_opt( 'sintec_footer_social' ) : '';

        if( $phone || $address || $social_links ) {
	        ?>
            <div class="top_menu row m0">
                <div class="container">
                    <div class="float-left">
				        <?php
				        if ( $phone ) {
					        echo '<a class="dn_btn" href="tel:' . $phone . '"><i class="ti-mobile"></i>' . $phone . '</a>';
				        }
				        if ( $address ) {
					        echo '<span class="dn_btn"> <i class="ti-location-pin"></i>' . $address . '</span>';
				        }
				        ?>
                    </div>
			        <?php
			        if ( sintec_opt( 'sintec_social_profile_toggle' ) == 1 ) {
				        if ( is_array( $social_links ) && count( $social_links ) > 0 ) {
					        ?>
                            <div class="float-right">
                                <span class="follow_us">Follow us: </span>
                                <ul class="list header_social">
							        <?php
							        foreach ( $social_links as $link ) {
								        echo '<li><a href="' . esc_url( $link['social_url'] ) . '"><i class="' . esc_attr( $link['social_icon'] ) . '"></i></a></li>';
							        }
							        ?>
                                </ul>
                            </div>
					        <?php
				        }
			        } ?>
                </div>
            </div>
	        <?php
        } ?>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="header_logo">
                        <?php
                        echo sintec_theme_logo( 'navbar-brand logo_h' );
                        ?>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    
                        <?php
                        if(has_nav_menu('primary-menu')) {
                            wp_nav_menu(array(
                                'menu'           => 'primary-menu',
                                'theme_location' => 'primary-menu',
                                'menu_id'        => 'menu-main-menu',
                                'container_class'=> 'collapse navbar-collapse offset',
                                'container_id'   => 'navbarSupportedContent',
                                'menu_class'     => 'nav navbar-nav menu_nav ml-auto',
                                'walker'         => new sintec_bootstrap_navwalker,
                                'depth'          => 3
                            ));
                        }

                        // Search Icon
                        $searchIcon = sintec_opt( 'sintec_hsearchform_toggle' );
                        if( $searchIcon == 1 ) {
	                        ?>
                            <div class="right-button">
                                <ul>
                                    <li><a id="search" href="javascript:void(0)"><i class="ti-search"></i></a></li>
                                </ul>
                            </div>
	                        <?php
                        } ?>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner" action="<?php echo esc_url( site_url( '/' ) ); ?>">
                    <input type="text" class="form-control" id="search_input" name="s" placeholder="<?php echo esc_html__( 'Search Here', 'sintec' )?>">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>


    <?php
    //Page Title Bar
    if( function_exists( 'sintec_page_titlebar' ) ){
	    sintec_page_titlebar();
    }

