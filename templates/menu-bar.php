<!-- ***** Header Area Start ***** -->
<header class="header">
    <div class="header__content row">

        <div class="header__logo">
            <?php 
            // Site Logo
            echo sintec_theme_logo('logo');
            ?>
        </div> <!-- end header__logo -->
            <?php 
            if( has_nav_menu( 'social-menu' ) && sintec_opt('sintec_headersocial_toggle') ){
                $args = array(
                    'theme_location' => 'social-menu',
                    'container'      => '',
                    'depth'          => 1,
                    'menu_class'     => 'header__social',
                    'fallback_cb'    => 'sintec_social_navwalker::fallback',
                    'walker'         => new sintec_social_navwalker(),
                );  
                wp_nav_menu( $args );
            }
            ?>
        <?php 
        if( sintec_opt( 'sintec_hsearchform_toggle' ) ):
        ?>
        <a class="header__search-trigger" href="#0"></a>

        <div class="header__search">
            <form role="search" method="get" class="header__search-form" action="<?php echo esc_url( site_url('/') ); ?>">
                <label>
                    <span class="hide-content"><?php esc_html_e( 'Search for:', 'sintec' ); ?></span>
                    <input type="search" class="search-field" placeholder="<?php esc_html_e( 'Type Keywords', 'sintec' ); ?>" name="s" title="<?php esc_html_e( 'Search for:', 'sintec' ); ?>" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="<?php esc_html_e( 'Search', 'sintec' ); ?>">
            </form>

            <a href="#0" title="<?php esc_html_e( 'Close Search', 'sintec' ); ?>" class="header__overlay-close"><?php esc_html_e( 'Close', 'sintec' ); ?></a>

        </div>  <!-- end header__search -->
        <?php 
        endif;
        ?>

        <a class="header__toggle-menu" href="#0" title="Menu"><span><?php esc_html_e( 'Menu', 'sintec' ); ?></span></a>

        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6"><?php esc_html_e( 'Site Navigation', 'sintec' ); ?></h2>
                <?php 
                if( has_nav_menu( 'primary-menu' ) ){
                    $args = array(
                        'theme_location' => 'primary-menu',
                        'container'      => '',
                        'depth'          => 2,
                        'menu_class'     => 'header__nav',
                        'fallback_cb'    => 'sintec_bootstrap_navwalker::fallback',
                        'walker'         => new sintec_bootstrap_navwalker(),
                    );  
                    wp_nav_menu( $args );
                }
                ?>

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php esc_html_e( 'Close', 'sintec' ); ?></a>

        </nav> <!-- end header__nav-wrap -->

    </div> <!-- header-content -->
</header> <!-- header -->