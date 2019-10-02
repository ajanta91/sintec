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
class Sintec_Statistics extends Widget_Base {

	public function get_name() {
		return 'sintec-statistics';
	}

	public function get_title() {
		return __( 'Statistics', 'sintec' );
	}

	public function get_icon() {
		return 'eicon-sort-amount-desc';
	}

	public function get_categories() {
		return [ 'sintec-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Section Heading ------------------------------
        $this->start_controls_section(
            'statistics_heading', [
                'label' => __( 'Statistics Section Heading', 'sintec' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Section Title', 'sintec' ),
                'type'  => Controls_Manager::WYSIWYG,
                'label_block' => true,
                'default'   => __( '<h4>PROVIDING PERSONALIZED AND <br> HIGH QUALITY SERVICE.</h4>
                                <p>Grass bearing make open multiply that may fly cattle gathering be unto void moving. Blessed one evening had them heaven divide said heaven whose brought he. Give It fowl green.</p>', 'sintec' )

            ]
        );
        $this->add_control(
            'stat_feature_img', [
                'label' => __( 'Featured Image', 'sintec' ),
                'type'  => Controls_Manager::MEDIA,
                'label_block' => true,
                
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ---------------------------------- Statistics content ------------------------------
		$this->start_controls_section(
			'stat_feature', [
				'label' => __( 'Statistics', 'sintec' ),
			]
		);
		$this->add_control(
            'statistics_content', [
                'label' => __( 'Create Statistic', 'sintec' ),
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
                        'name'  => 'value',
                        'label' => __( 'Value', 'sintec' ),
                        'type'  => Controls_Manager::NUMBER,
                        'min'   => 1,
                        'max'   => 100,
                        'step'  => 1
                    ],
                    [
                        'name'  => 'after_val',
                        'label' => esc_html__( 'Unit', 'sintec' ),
                        'type'  => Controls_Manager::SELECT,
                        'options'=> [
                            'k' => __( 'K+', 'sintec' ),
                            '10' => __( 'Out of 10', 'sintec' ),
                        ]
                    ]
                    
                ],
            ]
		);

		$this->end_controls_section(); // End Statistics content


        //------------------------------ Style statistics Box ------------------------------
        $this->start_controls_section(
            'style_statistics', [
                'label' => __( 'Style Statistics Content', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_statisticstitle', [
                'label' => __( 'Title Color', 'sintec' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-number p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'color_statistics_value', [
                'label' => __( 'Statistics Value Color', 'sintec' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-number h5' => 'color: {{VALUE}};',
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
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .number-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings   = $this->get_settings();
    $content    = !empty( $settings['sect_title'] ) ? $settings['sect_title'] : '';
    $statistics = !empty( $settings['statistics_content'] ) ? $settings['statistics_content'] : '';
    $featuredImg= !empty( $settings['stat_feature_img']['url'] ) ? $settings['stat_feature_img']['url'] : '';

    ?>
    <section class="number-area" id="number-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-5">
                    <div class="number-img">
                        <?php
                        if( $featuredImg ){
                            echo '<img src="'.esc_url( $featuredImg ).'" alt="">';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <div class="number-content">
                        <?php
                        if( $content ){
                            echo wp_kses_post( wpautop( $content ) );
                        }
                        ?>
                        <div class="number-wrapper">
                            <?php
                            if( is_array( $statistics ) && count( $statistics ) > 0 ){ 
                                foreach ($statistics as $statistic) {
                                    $countVlaue = !empty( $statistic['value'] ) ? $statistic['value'] : '';
                                    $label      = !empty( $statistic['label'] ) ? $statistic['label'] : '';
                                    
                                    if( $statistic['after_val'] == 'k' ){
                                        $afterVal = 'K+';
                                    }else {
                                        $afterVal = '/10';
                                    }
                                    ?>
                                    <div class="single-number">
                                        <?php
                                        if( $countVlaue ){
                                            echo '<h5><span class="counter">'. absint( $countVlaue ) .'</span>'. esc_html( $afterVal ) .'</h5>';
                                        }
                                        
                                        if( $countVlaue ){
                                            echo '<p>'. esc_html( $label ) .'</p>';
                                        }
                                        ?>
                                        
                                    </div>
                                    <?php
                                }
                            }
                            ?>                        
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </section>    

    <?php

    }

}
