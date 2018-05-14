<?php
add_action('widgets_init', 'about_bus_widget');

function about_bus_widget()
{
	register_widget('about_bus_widget_cr');
}

class about_bus_widget_cr extends WP_Widget {
	
	function __construct()
	{
		$widget_ops = array('classname' => 'about_bus_widget', 'description' => __('Create a simple About Business widget', 'Creativo'));

		$control_ops = array('id_base' => 'about_bus-widget');
		
		parent::__construct( 'about_bus-widget', __('About Business', 'Creativo'), $widget_ops, $control_ops );
		//$this->WP_Widget('contact_info-widget', __('Contact us widget', 'Creativo'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		//$title = apply_filters('widget_title', $instance['title']);

		echo $before_widget;

		$img_class = '';

		/*if($title) {
			echo $before_title.$title.$after_title;
		}*/
		?>
        <div class="about_bus_widget">
        	
        	<?php
        	if( $instance['img_path'] !='' ) {
        		$img_class = 'widget_left_padding';
        		$output = '<img src="'. esc_url( $instance['img_path'] ) . '" class="about_business_img">';
        	?>
        		<div class="about_bus_img">
        			<?php echo $output; ?>
        		</div>
        	<?php } 
        	?>
        	<div class="about_bus_content <?php echo $img_class; ?>">
        		<?php
        		if( $instance['heading_text'] !='' ) {
        		?>        	
	        		<h3 class="footer-widget-title">
	        			<?php echo $instance['heading_text'] ?>
	        		</h3>
        		<?php 
        		} 

        		if( $instance['description'] !='' ) {        		
        			echo $instance['description'];            	 
            	} 
            	?>
        	</div>
        </div>
		<?php
		echo $after_widget;
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		//$instance['title'] = $new_instance['title'];
		$instance['img_path'] = $new_instance['img_path'];
		//$instance['img_shape'] = $new_instance['img_shape'];
		//$instance['img_link'] = $new_instance['img_link'];
		//$instance['target'] = $new_instance['target'];
		$instance['heading_text'] = $new_instance['heading_text'];
		$instance['description'] = $new_instance['description'];

		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Creativo Business');
		$instance = wp_parse_args((array) $instance, $defaults); 
		//$target = $instance['target'];
		//$img_shape = $instance['img_shape'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id('heading_text'); ?>"><?php _e('Heading Text:', 'Creativo');?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('heading_text'); ?>" name="<?php echo $this->get_field_name('heading_text'); ?>" value="<?php echo $instance['heading_text']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('img_path'); ?>"><?php _e('Image path URL:', 'Creativo');?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('img_path'); ?>" name="<?php echo $this->get_field_name('img_path'); ?>" value="<?php echo $instance['img_path']; ?>" />
			<span><?php _e('You can find the Image path URL by going to Media Library and clicking on the image you want to use. In the new window, grab the image path from the URL field.', 'Creativo') ?></span>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Description:', 'Creativo');?></label>
			<textarea class="widefat" rows="6" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" ><?php echo $instance['description']; ?></textarea>			
		</p>		
		
	<?php
	}
}
?>