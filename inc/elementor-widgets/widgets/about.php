<?php
namespace Sintecelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Sintec elementor section widget.
 *
 * @since 1.0
 */
class Sintec_About extends Widget_Base {

	public function get_name() {
		return 'sintec-about';
	}

	public function get_title() {
		return __( 'About', 'sintec' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'sintec-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_content',
			[
				'label' => __( 'About Us', 'sintec' ),
			]
		);
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Content', 'sintec' ),
                'description'   => esc_html__('Use <br> tag for line break', 'sintec'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h1>We can fix all types<br> of computer & mobiles</h1> inappropriate behaviour is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.', 'sintec' )
            ]
        );
        $this->add_control(
            'about_img',
            [
                'label'         => esc_html__( 'About Featured Image', 'sintec' ),
                'type'          => Controls_Manager::MEDIA,
                                
            ]
        );
        $this->add_control(
            'button_label',
            [
                'label'         => esc_html__( 'Button Label', 'sintec' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__('Learn More', 'sintec')
            ]
        );
        $this->add_control(
            'button_url',
            [
                'label'         => esc_html__( 'Button URL', 'sintec' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                
            ]
        );
        
		$this->end_controls_section(); // End about content

        


        // Feature Style ==============================
        $this->start_controls_section(
            'stylecolor', [
                'label' => __( 'Style Featuer', 'sintec' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );        
        $this->add_control(
            'btn_color', [
                'label'     => __( 'Button label Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .about-content .main_btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button Background Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .about-content .main_btn' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_color', [
                'label'     => __( 'Button Hover label Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .about-content .main_btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_color', [
                'label'     => __( 'Button Hover Background Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .about-content .main_btn:hover' => 'background: {{VALUE}};',
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
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'sintec' ),
                'label_off' => __( 'Hide', 'sintec' ),
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Overlay Color', 'sintec' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
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
                'selector' => '{{WRAPPER}} .home-about-area .overlay-bg',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'sintec' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'sintec' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .search-course-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $content  = !empty( $settings['content'] ) ? $settings['content'] : '';
        $button_label = !empty( $settings['button_label'] ) ? $settings['button_label'] : '';
        $button_url  = !empty( $settings['button_url']['url'] ) ? $settings['button_url']['url'] : '';
        $feature_img = !empty( $settings['about_img']['url'] ) ? $settings['about_img']['url'] : '';

        ?>
        <section class="about-area area-padding">
            <div class="container">
                <div class="row align-items-center">
                    <?php
                    if( $feature_img ){ ?>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="about-img">
                                <?php echo '<img src="'. esc_url( $feature_img ) .'" alt="'. esc_html__( 'About feature image', 'sintec' ) .'">'; ?>
                            </div>
                        </div>
                        <?php 
                    } ?>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <?php
                            if( $content ){
                                echo wp_kses_post( wpautop( $content ) );
                            }

                            if( $button_label ){
                                echo '<a class="main_btn" href="'. esc_url( $button_url ) .'">'. esc_html( $button_label ) .'</a>';
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php

    }

}
