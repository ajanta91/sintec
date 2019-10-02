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
class Sintec_Testimonial extends Widget_Base {

	public function get_name() {
		return 'sintec-testimonial';
	}

	public function get_title() {
		return __( 'Testimonial', 'sintec' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'sintec-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // Testimonial Heading
		$this->start_controls_section(
			'section_heading',
			[
				'label' => __( 'Section Heading', 'sintec' ),
			]
		);
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Title', 'sintec' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Customer reviews', 'sintec' )
            ]
        );
        $this->add_control(
            'sec_subtitle', [
                'label'         => esc_html__( 'Sub Title', 'sintec' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Together female let signs for for fish fowl may first.', 'sintec' )
                                
            ]
        );
		$this->end_controls_section(); 


		// ----------------------------------------  Customers review content ------------------------------
		$this->start_controls_section(
			'customersreview_content',
			[
				'label' => __( 'Customers Review', 'sintec' ),
			]
		);

		$this->add_control(
            'review_slider', [
                'label' => __( 'Create Review', 'sintec' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'sintec' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => esc_html__( 'Name', 'sintec' )
                    ],
                    [
                        'name'  => 'designation',
                        'label' => __( 'Designation', 'sintec' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => esc_html__( 'Chief Customer', 'sintec' )
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'sintec' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default'   => __('Accessories Here you can find the best computeraccessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory', 'sintec')
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Image', 'sintec' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content

        /**
         * Style Tab
         *
         */
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
				'default'   => '#888888',
				'selectors' => [
					'{{WRAPPER}} .area-heading p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'style_item',
			[
				'label' => __( 'Style Item', 'sintec' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
			$this->start_controls_tabs(
				'style_tabs'
			);
				$this->start_controls_tab(
					'style_normal_tab',
					[
						'label' => __( 'Normal', 'sintec' ),
					]
				);
				$this->add_control(
					'testimonial_title_color', [
						'label'     => __( 'Testimonial Title Color', 'sintec' ),
						'type'      => Controls_Manager::COLOR,
						'default'   => '#202e31',
						'selectors' => [
							'{{WRAPPER}} .single-testimonial h4' => 'color: {{VALUE}};',
						],
					]
				);
				$this->end_controls_tab();


				$this->start_controls_tab(
					'style_hover_tab',
					[
						'label' => __( 'Hover', 'sintec' ),
					]
				);
				$this->add_control(
					'testimonial_title_hover_color', [
						'label'     => __( 'Testimonial Title Hover Color', 'sintec' ),
						'type'      => Controls_Manager::COLOR,
						'default'   => '#e22104',
						'selectors' => [
							'{{WRAPPER}} .single-testimonial h4:hover' => 'color: {{VALUE}};',
						],
					]
				);
				$this->end_controls_tab();


			$this->end_controls_tabs();
			$this->add_control(
				'more_options',
				[
					'label' => __( 'Description Color', 'sintec' ),
					'type' => Controls_Manager::HEADING,
					'separator' => 'before',
				]
			);
			$this->add_control(
				'testimonial_desc_color', [
					'label'     => __( 'Testimonial Description Color', 'sintec' ),
					'type'      => Controls_Manager::COLOR,
					'default'   => '#888888',
					'selectors' => [
						'{{WRAPPER}} .single-testimonial p' => 'color: {{VALUE}};',
					],
				]
			);
	

		$this->end_controls_section();



        /*------------------------------ Background Style ------------------------------*/
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
                'selector' => '{{WRAPPER}} .testimonial-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
	$this->load_widget_script();
	$secTitle = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $subTitle = !empty( $settings['sec_subtitle'] ) ? $settings['sec_subtitle'] : '';
	$reviews = !empty( $settings['review_slider'] ) ? $settings['review_slider'] : '';

    ?>

	<section class="testimonial-area area-padding">
		<div class="container">
			<div class="area-heading">
                <?php
                // Section Title =========
                if( $secTitle ){
                    echo '<h3 class="line">'. esc_html( $secTitle ) .'</h3>';
                }
                // Section Sub Title=====
                if( $subTitle ){
                    echo '<p>'. esc_html( $subTitle ) .'</p>';
                }
                ?>
            </div>
			<div class="row">
				<div class="active-testimonial-carusel owl-carousel">
					<?php
					if( is_array( $reviews ) && count( $reviews ) > 0 ){
						foreach ($reviews as $review ) {
							$aName = !empty( $review['label'] ) ? $review['label'] : '';
							$desig = !empty( $review['designation'] ) ? $review['designation'] : '';
							$desc  = !empty( $review['desc'] ) ? $review['desc'] : '';
							$image = !empty( $review['img']['id'] ) ? wp_get_attachment_image( $review['img']['id'], 'review_img' ) : '';
							?>
							<div class="single-testimonial item d-flex flex-row">
								<div class="thumb">
									<?php
									if( $image ){
										echo wp_kses_post( $image );
									}
									?>
								</div>
								<div class="desc">
									<?php
									// Name ------------
									if( $aName ){
										echo '<h4>'. esc_html( $aName ) .'</h4>';
									}
									// Designation -----
									if( $desig ){
										echo '<p class="designation">'. esc_html( $desig ) .'</p>';
									}
									// Description -----
									if( $desc ){
										echo '<p>'. esc_html( $desc ) .'</p>';
									}

									?>   
								</div>
							</div>
							<?php
						}
					} ?>
				</div>
			</div>
		</div>
	</section>

    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){

			$('.active-testimonial-carusel').owlCarousel({
				items: 2,
				loop: true,
				margin: 30,
				autoplayHoverPause: true,
				smartSpeed:500,
				dots: true,
				// autoplay: true,
				responsive: {
					0: {
						items: 1
					},
					480: {
						items: 1,
					},
					992: {
						items: 2,
					}
				}
			});
            
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
