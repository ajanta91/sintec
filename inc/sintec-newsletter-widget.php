<?php
/**
 * @version  1.0
 * @package  Repair
 *
 */
 
 
/**************************************
*Creating Newsletter Widget
***************************************/
 
class Sintec_newsletter_widget extends WP_Widget {


    function __construct() {

        parent::__construct(
        // Base ID of your widget
        'sintec_newsletter',


        // Widget name will appear in UI
        esc_html__( '[ Sintec ] Newsletter Form', 'sintec' ),

        // Widget description
        array( 'description' => esc_html__( 'Add footer newsletter signup form.', 'sintec' ), )
        );

    }

    // This is where the action happens
    public function widget( $args, $instance ) {
        
    $title 		= apply_filters( 'widget_title', $instance['title'] );
    $actionurl 	= apply_filters( 'widget_actionurl', $instance['actionurl'] );
    $desc 		= apply_filters( 'widget_desc', $instance['desc'] );

    // mc validation
    wp_enqueue_script( 'mc-validate');

    // before and after widget arguments are defined by themes
    echo wp_kses_post( $args['before_widget'] );
    if ( ! empty( $title ) )
    echo wp_kses_post( $args['before_title'] . $title . $args['after_title'] );

    ?>
        <div id="mc_embed_signup">
            <form action="<?php echo esc_url( $actionurl ); ?>" id="mc-embedded-subscribe-form" class="form-inline" method="post">
                <div class="form-group row no-gutters">
                    <div class="col-lg-8 col-md-8 col-7">
                        <input type="email" name="EMAIL" placeholder="<?php esc_html_e( 'Your Email Address', 'sintec' ); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required>
                    </div>

                    <div class="col-lg-4 col-md-4 col-5">
                        <button type="submit" class="nw-btn main_btn circle"><?php echo esc_html__( 'Subscribe', 'sintec' ); ?>
                            <span class="lnr lnr-arrow-right"></span>
                        </button>
                    </div>
                </div>
                <div class="info"></div>
            </form>
        </div>
        <?php
        if( $desc ){
            echo '<p>'.esc_html( $desc ).'</p>';
        } ?>


    <?php
    echo wp_kses_post( $args['after_widget'] );
    }
		
    // Widget Backend 
    public function form( $instance ) {
        
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }else {
            $title = esc_html__( 'Newsletter', 'sintec' );
        }


        //	Action Url
        if ( isset( $instance[ 'actionurl' ] ) ) {
            $actionurl = $instance[ 'actionurl' ];
        }else {
            $actionurl = '';
        }

        //	Text Area
        if ( isset( $instance[ 'desc' ] ) ) {
            $desc = $instance[ 'desc' ];
        }else {
            $desc = '';
        }


        // Widget admin form
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:' ,'sintec'); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'actionurl' ) ); ?>"><?php esc_html_e( 'Action URL:' ,'sintec'); ?></label>
            <p class="description"><?php esc_html_e( 'Enter here your MailChimp action URL.' ,'sintec'); ?> </p>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'actionurl' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'actionurl' ) ); ?>" type="text" value="<?php echo esc_attr( $actionurl ); ?>" />

        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>"><?php esc_html_e( 'Short Description:' ,'sintec'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'desc' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'desc' ) ); ?>"><?php echo esc_textarea( $desc ); ?></textarea>
        </p>

    <?php 
    }

	
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {

        $instance = array();
        $instance['title'] 	  = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['actionurl'] = ( ! empty( $new_instance['actionurl'] ) ) ? strip_tags( $new_instance['actionurl'] ) : '';
        $instance['desc'] = ( ! empty( $new_instance['desc'] ) ) ? strip_tags( $new_instance['desc'] ) : '';

        return $instance;

    }

} // Class repair_newsletter_widget ends here


// Register and load the widget
function repair_newsletter_load_widget() {
	register_widget( 'Sintec_newsletter_widget' );
}
add_action( 'widgets_init', 'repair_newsletter_load_widget' );