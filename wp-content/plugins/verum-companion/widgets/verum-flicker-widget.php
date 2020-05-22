<?php 

// Adds widget: VerumFlickrWidget
class Verumflickrwidget_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'verumflickrwidget_widget',
			esc_html__( 'VerumFlickrWidget', 'verum' ),
			array( 'description' => esc_html__( 'Flicker Widget', 'verum' ), ) // Args
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Flicker ID',
			'id' => 'verum_flicker_id',
			'type' => 'text',
		),
		array(
			'label' => 'Number of Photos',
			'id' => 'verum_number_photos',
			'default' => '12',
			'type' => 'text',
		),
	);

	public function widget( $args, $instance ) {
		echo wp_kses_post($args['before_widget']);

		// Output generated fields
		echo '<p>'.$instance['verum_flicker_id'].'</p>';
		echo '<p>'.$instance['verum_number_photos'].'</p>';
		
		echo wp_kses_post($args['after_widget']);
	}

	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'verum' );
			switch ( $widget_field['type'] ) {
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'verum' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.esc_attr($widget_field['type']).'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_verumflickrwidget_widget() {
	register_widget( 'Verumflickrwidget_Widget' );
}
add_action( 'widgets_init', 'register_verumflickrwidget_widget' );