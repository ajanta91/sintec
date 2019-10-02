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
 * elementor projects section widget.
 *
 * @since 1.0
 */
class Sintec_projects extends Widget_Base {

	public function get_name() {
		return 'sintec-projects';
	}

	public function get_title() {
		return __( 'Projects', 'sintec' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'sintec-elements' ];
	}

	protected function _register_controls() {

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
                'default'       => esc_html__( 'Our Recent Project', 'sintec' )
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


        // ----------------------------------------  Projects Content ------------------------------
        $this->start_controls_section(
            'menu_tab_sec',
            [
                'label' => __( 'Projects', 'sintec' ),
            ]
        );

        $this->add_control(
            'menu_tabs', [
                'label'         => __( 'Create Menu Tab Item', 'sintec' ),
                'type'          => Controls_Manager::REPEATER,
                'title_field'   => '{{{ label }}}',
                'fields' => [
                    [
                        'name'        => 'label',
                        'label'       => __( 'Tag', 'sintec' ),
                        'type'        => Controls_Manager::TEXT,
                        'default'     => esc_html__( 'Building', 'sintec' )
                    ],
                    [
                        'name'        => 'title',
                        'label'       => __( 'Title', 'sintec' ),
                        'type'        => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default'     => esc_html__( 'CONSTRUCTION', 'sintec' )
                    ],
                    [
                        'name'        => 'title_url',
                        'label'       => __( 'Title URL', 'sintec' ),
                        'type'        => Controls_Manager::URL,
                        'label_block' => true,
                        'default'     => ''
                    ],
                    [
                        'name'        => 'location',
                        'label'       => __( 'Location', 'sintec' ),
                        'type'        => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default'     => esc_html__( 'Desert Work, Dubai', 'sintec' )
                    ],
                    [
                        'name'        => 'image',
                        'label'       => __( 'Featured Image', 'sintec' ),
                        'type'        => Controls_Manager::MEDIA,
                    ]

                ],
            ]
        );

        $this->end_controls_section(); // End projects content

        //------------------------------ Style title ------------------------------
        $this->start_controls_section(
            'style_title', [
                'label' => __( 'Style Category', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#202e31',
                'selectors' => [
                    '{{WRAPPER}} .area-heading h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_subtitle_color', [
                'label'     => __( 'Section Sub Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#888888',
                'selectors' => [
                    '{{WRAPPER}} .area-heading p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Category Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .portfolio_area .filters ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'cat_title_hover', [
                'label'     => __( 'Category Item Hover Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .portfolio_area .filters ul li:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_cat_title_color', [
                'label'     => __( 'Active Category Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .portfolio_area .filters ul li.active' => 'color: {{VALUE}};',
                ],
            ]
        );
        

        $this->end_controls_section();



        //------------------------------ Style Tab  ------------------------------
        $this->start_controls_section(
            'style_tab', [
                'label' => __( 'Style Menu Item', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_menu_item_color', [
                'label'     => __( 'Menu Item Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-menu-list'  => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_menu_item', [
                'label'     => __( 'Menu Item Background Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-menu-list' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_menu_item_hover', [
                'label'     => __( 'Menu Item Hover Background Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-menu-list:hover'  => 'background-color: {{VALUE}};',
                ],
            ]
        );
        

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $this->load_widget_script();


    $title = '';
    if( !empty( $settings['title'] ) ){
        $title = $settings['title'];
    }

    $menu_tabs = $settings['menu_tabs'];

    $tags = array_column( $menu_tabs, 'label' );
    $getTags = array_unique( $tags );
    // Total items count
    $totalItems = count( $menu_tabs );
    $tab_data = return_tab_data( $getTags , $menu_tabs );

    $secTitle = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $subTitle = !empty( $settings['sec_subtitle'] ) ? $settings['sec_subtitle'] : '';
    ?>
    <section class="portfolio_area area-padding" id="portfolio">
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

            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    <?php
                    if( is_array( $menu_tabs ) && $totalItems > 0 ){

                        $tags = array_column( $menu_tabs, 'label' );
                        $getTags = array_unique( $tags );
                        $tabs = '';
                        foreach( $getTags as $tag ) {
                            $tagforfilter = sanitize_title_with_dashes( $tag );
                            $tabs .= '<li data-filter=".'.esc_attr( $tagforfilter ).'">'.esc_html( $tag ).'</li>';
                        }
                        echo $tabs;
                    } ?>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-md-3 col-lg-6"></div>
                    <?php
                    if( !empty( $tab_data ) ) {
                        // $i= 0;
                        foreach ( $tab_data as $key => $val ) {

                            $tagforfilter = sanitize_title_with_dashes( $key );
                            // $i++;
                            // $active = $i==1 ? 'active' : '';
                            
                            foreach( $val as $data ){ 
                                $title      = !empty( $data['title'] ) ? $data['title'] : '';
                                $location   = !empty( $data['location'] ) ? $data['location'] : '';
                                $image      = !empty( $data['image']['id'] ) ? wp_get_attachment_image( $data['image']['id'], 'project_image' ) : '';

                                ?>
                                <div class="col-lg-6 col-md-6 all <?php echo esc_attr( $tagforfilter ); ?>">
                                    <div class="single_portfolio">
                                        <?php echo wp_kses_post( $image ); ?>
                                        <div class="short_info">
                                            <?php
                                            if( $title ){
                                                echo '<p>'.esc_html( $title ).'</p>';
                                            }
                                            
                                            if( $location ){
                                                echo '<h4><a href="">'. esc_html( $location ) .'</a></h4>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                    

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


                $('.portfolio-filter ul li').on('click', function () {
                    $('.portfolio-filter ul li').removeClass('active');
                    $(this).addClass('active');

                    var data = $(this).attr('data-filter');
                    $workGrid.isotope({
                        filter: data
                    });
                });

                if (document.getElementById('portfolio')) {
                    var $workGrid = $('.portfolio-grid').isotope({
                        itemSelector: '.all',
                        percentPosition: true,
                        masonry: {
                            columnWidth: '.grid-sizer'
                        }
                    });
                }
            

        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
