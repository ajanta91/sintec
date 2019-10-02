<?php
namespace Sintecelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Sintec elementor few words section widget.
 *
 * @since 1.0
 */

class Sintec_Blog extends Widget_Base {

	public function get_name() {
		return 'sintec-blog';
	}

	public function get_title() {
		return __( 'Blog', 'sintec' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'sintec-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Blog content ------------------------------
        $this->start_controls_section(
            'blog_content',
            [
                'label' => __( 'Latest Blog Post', 'sintec' ),
            ]
        );
        $this->add_control(
            'blog_sectiontitle',
            [
                'label'       => esc_html__( 'Section Title', 'sintec' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__( 'Our Recent News', 'sintec' )
            ]
        );
        $this->add_control(
            'blog_sectionsubtitle',
            [
                'label'       => esc_html__( 'Section Sub Title', 'sintec' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => esc_html__( 'Together female let signs for for fish fowl may first.', 'sintec' )
            ]
        );
        $this->add_control(
            'blog_limit',
            [
                'label'     => esc_html__( 'Post Limit', 'sintec' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 1,
                'max'       => 10,
                'step'      => 1,
                'default'   => 3
            ]
        );

        $this->end_controls_section(); // End few words content

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

        //------------------------------ Style text ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'sintec' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_blogtitle', [
                'label'     => __( 'Blog Title Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .single-blog h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blogtitlehov', [
                'label'     => __( 'Blog Title Hover Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .single-blog:hover h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'blog_meta_color', [
                'label'     => __( 'Blog Meta Color', 'sintec' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#999',
                'selectors' => [
                    '{{WRAPPER}} .single-blog .meta-top a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .single-blog .meta-top span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings  = $this->get_settings();
    $post_num  = !empty( $settings['blog_limit'] ) ? $settings['blog_limit'] : '3';
    $sec_title = !empty( $settings['blog_sectiontitle'] ) ? $settings['blog_sectiontitle'] : '';
    $sec_sbutitle = !empty( $settings['blog_sectionsubtitle'] ) ? $settings['blog_sectionsubtitle'] : '';
    ?>
    <section class="blog-area area-padding">
        <div class="container">
            <div class="area-heading">
                <?php
                if( $sec_title ){
                    echo '<h3 class="line">'. esc_html( $sec_title ) .'</h3>';
                }

                if( $sec_sbutitle ){
                    echo '<p>'. esc_html( $sec_sbutitle ) .'</p>';
                }
                ?>

            </div>

            <div class="row">
                <?php
                sintec_latest_blog( $post_num );
                ?>
            </div>
        </div>
    </section>
    <?php
	}
}
