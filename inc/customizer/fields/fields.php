<?php 
/**
 * @Packge     : Sintec
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/
// Header top background color
Epsilon_Customizer::add_field(
    'sintec_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_general_section',
        'default'     => '#e22104',
    )
);

/***********************************
 * Header Section Fields =====================================
 ***********************************/
//Header Top
Epsilon_Customizer::add_field(
    'header_top_sec',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Top', 'sintec' ),
        'section'     => 'sintec_header_section',
        
    )
);
// Header top phone number
Epsilon_Customizer::add_field(
    'sintec_top_phone',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Phone Number', 'sintec' ),
        'description' => esc_html__( 'Empty field would be display none', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => esc_html__( '+0123 456 789', 'sintec' ),
    )
);
// Header top email
Epsilon_Customizer::add_field(
    'sintec_top_address',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Address', 'sintec' ),
        'description' => esc_html__( 'Empty field would be display none', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => esc_html__( '4256 Marshville Road, Poughkeepsie, NY 12601', 'sintec' ),
    )
);


Epsilon_Customizer::add_field(
    'social_pro_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile', 'sintec' ),
        'section'     => 'sintec_header_section',

    )
);

// Social Profile Show/Hide
Epsilon_Customizer::add_field(
    'sintec_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'sintec' ),
        'section'     => 'sintec_header_section',
        'default'     => false,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'sintec_footer_social',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'sintec_header_section',
		'label'        => esc_html__( 'Social Profile Links', 'sintec' ),
		'button_label' => esc_html__( 'Add new social link', 'sintec' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'sintec' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'sintec' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'https://twitter.com',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'sintec' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-twitter',
			),
			
		),
	)
);

// Header top background color
Epsilon_Customizer::add_field(
    'sintec_top_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Background Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#f6f6f6',
    )
);
// Header top background color
Epsilon_Customizer::add_field(
    'sintec_top_header_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Text Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#888888',
    )
);

// Header navbar============================================
Epsilon_Customizer::add_field(
    'header_sec',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Navbar', 'sintec' ),
        'section'     => 'sintec_header_section',
        
    )
);

// Header search form toggle field
Epsilon_Customizer::add_field(
    'sintec_hsearchform_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Show header search form', 'sintec' ),
        'description' => esc_html__( 'Toggle to show header search form.', 'sintec' ),
        'section'     => 'sintec_header_section',
        'default'     => false,
    )
);

// Header background color field
Epsilon_Customizer::add_field(
    'sintec_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'sintec' ),
        'description' => esc_html__( 'Select the header background color.', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#fff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'sintec_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#2a2a2a',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'sintec_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#e22104',
    )
);
// Header menu dropdown background color field
Epsilon_Customizer::add_field(
    'sintec_header_menu_dropbg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu dropdown background color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#fff',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'sintec_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#2a2a2a',
    )
);
// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'sintec_drop_menu_item_hover_bg',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu item hover background', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#e22104',
    )
);
// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'sintec_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_header_section',
        'default'     => '#ffffff',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'sintec_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'sintec' ),
        'description' => esc_html__( 'Set post excerpt length.', 'sintec' ),
        'section'     => 'sintec_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);



// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'sintec_blog_layout',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'sintec' ),
        'section'  => 'sintec_blog_section',
        'description' => esc_html__( 'Select the option to set blog page layout.', 'sintec' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
            '2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
            '3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
        ),
        'default'  => array(
            'columnsCount' => 2,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'sintec_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'sintec' ),
        'section'     => 'sintec_blog_section',
        'default'     => false
    )
);
Epsilon_Customizer::add_field(
    'sintec_blog_single_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog single post meta show/hide', 'sintec' ),
        'section'     => 'sintec_blog_section',
        'default'     => false
    )
);






/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'sintec_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'sintec' ),
        'section'           => 'sintec_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'sintec_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'sintec' ),
        'section'           => 'sintec_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'sintec_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'sintec_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'sintec_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'sintec_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'sintec' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'sintec' ),
        'section'     => 'sintec_footer_section',
        'default'     => false,
    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'sintec' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'sintec_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'sintec' ),
        'section'     => 'sintec_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'sintec_footer_widget_bdcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_footer_section',
        'default'     => '#19191b',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'sintec_footer_widget_textcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_footer_section',
        'default'     => '#888888',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'sintec_footer_widget_titlecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_footer_section',
        'default'     => '#FFFFFF',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'sintec_footer_widget_anchorcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_footer_section',
        'default'     => '#888888',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'sintec_footer_widget_anchorhovcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'sintec' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'sintec_footer_section',
        'default'     => '#e22104',
    )
);



