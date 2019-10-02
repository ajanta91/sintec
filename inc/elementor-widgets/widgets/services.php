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
 * Sintec elementor Team Member section widget.
 *
 * @since 1.0
 */
class Sintec_Services extends Widget_Base {

	public function get_name() {
		return 'sintec-services';
	}

	public function get_title() {
		return __( 'Services', 'sintec' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'sintec-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  training Section Heading ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Services Section Heading', 'sintec' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Section Title', 'sintec' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'What We Provide', 'sintec' )

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Section Sub Title', 'sintec' ),
                'type'  => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'Together female let signs for for fish fowl may first.', 'sintec' )

            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'sintec' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Training', 'sintec' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Title', 'sintec' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'sintec' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'sintec' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End Services content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#202e31',
                'selectors' => [
                    '{{WRAPPER}} .area-heading h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#8888888',
                'selectors' => [
                    '{{WRAPPER}} .area-heading p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        //------------------------------ Style services Box ------------------------------
        $this->start_controls_section(
            'style_trainingbox', [
                'label' => __( 'Style Services Content', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_servicestitle', [
                'label' => __( 'Title Color', 'sintec' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-content h5' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_serviceshovertitle', [
                'label' => __( 'Title Hover Color', 'sintec' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-content:hover h5' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_servicesdescription', [
                'label' => __( 'Description Color', 'sintec' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'service_hover_border', [
                'label' => __( 'Service Hover Border Color', 'sintec' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service:hover' => 'border-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .service-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();
    $title = !empty( $settings['sect_title'] ) ? $settings['sect_title'] : '';
    $subTitle = !empty( $settings['sect_subtitle'] ) ? $settings['sect_subtitle'] : '';
    $services = !empty( $settings['services_content'] ) ? $settings['services_content'] : '';

    ?>
    <section class="service-area area-padding">
        <div class="container">
            <div class="area-heading">
                <?php
                if( $subTitle ){
                    echo '<h3 class="line">'. esc_html( $title ) .'</h3>';
                }
                if( $subTitle ){
                    echo '<p>'. esc_html( $subTitle ) .'</p>';
                }
                ?>
            </div>
            <div class="row">
                <?php
                if( is_array( $services ) && count( $services ) > 0 ){
                    foreach ( $services as $service ) { 
                        $service_title = !empty( $service['label'] ) ? $service['label'] : '';
                        $service_desc  = !empty( $service['desc'] ) ? $service['desc'] : '';
                        $service_img   = !empty( $service['img']['url'] ) ? $service['img']['url'] : '';
                        ?>
                        <div class="col-md-6 col-xl-3">
                            <div class="single-service">
                                <div class="service-icon">
                                    <?php
                                    if( $service_img ){
                                        echo '<img src="'. esc_url( $service_img ) .'" alt="'. esc_html__( 'Service image', 'sintec' ) .'">';
                                    }
                                    ?>
                                </div>
                                <div class="service-content">
                                    <?php
                                    //Service Title
                                    if( $service_title ){
                                        echo '<h5>'. esc_html( $service_title ) .'</h5>';
                                    }
                                    
                                    // Service Desc
                                    if( $service_desc ){
                                        echo '<p>'. esc_html( $service_desc ) .'</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>                
            </div>
        </div>
    </section>

    

    <?php

    }

}
