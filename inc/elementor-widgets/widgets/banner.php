<?php
namespace Sintecelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
//use Elementor\Scheme_Color;
//use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
//use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;  
}


/**
 *
 * Sintec elementor about us section widget.
 *
 * @since 1.0
 */
class Sintec_Banner extends Widget_Base {

	public function get_name() {
		return 'sintec-banner';
	}

	public function get_title() {
		return __( 'Banner', 'sintec' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'sintec-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_section',
            [
                'label' => __( 'Banner Section Content', 'sintec' ),
            ]
        );
        $this->add_control(
            'banner_title',
            [
                'label'         => esc_html__( 'Banner Title ', 'sintec' ),
                'type'          => Controls_Manager::TEXTAREA,
                'default'       => __( 'Make your dream home <br> with sintac', 'sintec' ),
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_subtitle',
            [
                'label'         => esc_html__( 'Banner Sub Title ', 'sintec' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => __( 'Future construction', 'sintec' ),
                'label_block'   => true
            ]
        );

        $this->add_control(
            'banner_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'sintec' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Get Started', 'sintec' )
            ]
        );
        $this->add_control(
            'banner_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'sintec' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );

        $this->end_controls_section(); // End content

        //------------------------------ Style title ------------------------------
        $this->start_controls_section(
            'style_textcolor', [
                'label' => __( 'Style Content', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_titleone', [
                'label'     => __( 'Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_content h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_title',
                'label'     => esc_html__( 'Title Typography', 'sintec' ),
                'selector'  => '{{WRAPPER}} .banner_content h3',
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Sub Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_content span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_subtitle',
                'label'     => esc_html__( 'Sub-title Typography', 'sintec' ),
                'selector'  => '{{WRAPPER}} .banner_content span',
            ]
        );
        $this->end_controls_section();

        //------------------------------ Style button ------------------------------
        $this->start_controls_section(
            'style_btn', [
                'label' => __( 'Style Button', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_btnlabel', [
                'label'     => __( 'Button Label Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .banner_content .main_btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhoverlabel', [
                'label'     => __( 'Button Hover Label Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .banner_content .main_btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnbg', [
                'label'       => __( 'Button Background Color', 'sintec' ),
                'type'        => Controls_Manager::COLOR,
                'default'     => '',
                'selectors'   => [
                    '{{WRAPPER}} .banner_content .main_btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovbg', [
                'label'     => __( 'Button Hover Background Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_content .main_btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'sintec' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_overlay',
            [
                'label' => __( 'Overlay', 'sintec' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'sintec' ),
                'label_off' => __( 'Hide', 'sintec' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Overlay Color', 'sintec' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionoverlaybg',
                'label' => __( 'Overlay', 'sintec' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .banner-area .overlay-bg',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'sintec' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'sintec' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .home_banner_area .banner_inner .overlay',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $ban_title = !empty( $settings['banner_title'] ) ? $settings['banner_title'] : '';
        $sub_title = !empty( $settings['banner_subtitle'] ) ? $settings['banner_subtitle'] : '';
        $btn_label = !empty( $settings['banner_btnlabel'] ) ? $settings['banner_btnlabel'] : '';
        $buttonUrl = !empty( $settings['banner_btnurl']['url'] ) ? $settings['banner_btnurl']['url'] : '';
        ?>
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <?php
                        // Sub Title ===============
                        if( $sub_title ){
                            echo '<span>'. esc_html( $sub_title ) .'</span>';
                        }
                        // Title =============
                        if( $ban_title ){
                            echo '<h3>'. wp_kses_post( $ban_title ) .'</h3>';
                        }
                        // Button ============
                        if( $btn_label ){
                            echo '<a class="main_btn" href="'. esc_url( $buttonUrl ) .'">'. esc_html( $btn_label ) .'</a>';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php

    }
	
}
