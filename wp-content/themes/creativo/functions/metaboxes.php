<?php
class PyreThemeFrameworkMetaboxes {
	
	public function __construct()
	{
		add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
		add_action('save_post', array($this, 'save_meta_boxes'));
		add_action('admin_enqueue_scripts', array($this, 'admin_script_loader'));
	}

	// Load backend scripts
	function admin_script_loader() {
		global $pagenow;
		if (is_admin() && ($pagenow=='post-new.php' || $pagenow=='post.php')) {
			wp_register_script('creativo_cookie', get_template_directory_uri().'/js/jquery.biscuit.js');
	    	wp_register_script('creativo_upload', get_template_directory_uri().'/js/upload.js');	
	    	wp_enqueue_script('creativo_cookie');		
	    	wp_enqueue_script('creativo_upload');			
	    	wp_enqueue_script('media-upload');
	    	wp_enqueue_script('thickbox');
	   		wp_enqueue_style('thickbox');		
	   		wp_enqueue_style('creativo_admin_extra', get_template_directory_uri().'/js/admin-extra.css');	
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'creativo-page-tabs', get_template_directory_uri().'/js/page-tabs.js', array(), '6', TRUE );

			wp_enqueue_script( 'wp-color-picker-alpha', get_template_directory_uri().'/js/colorpicker/wp-color-picker-alpha.min.js', array( 'wp-color-picker' ), '1.2.2', TRUE );
		}
	}
	
	public function add_meta_boxes()
	{
		$this->add_meta_box('post_options', __('Advanced Customization','Creativo'), 'post');

		$this->add_meta_box('page_options', __('Advanced Customization','Creativo'), 'page');		

		$this->add_meta_box('portfolio_options', __('Advanced Customization','Creativo'), 'creativo_portfolio');	
			
		$this->add_meta_box('client_options', __('Client','Creativo'), 'clients');

		$this->add_meta_box('testimonial_options', __('Testimonial','Creativo'), 'testimonials');

		if( class_exists( 'WooCommerce' )) {
			$this->add_meta_box('product_options', __('Product Page Customization','Creativo'), 'product');
		}

	}
	
	public function add_meta_box($id, $label, $post_type)
	{
	    add_meta_box( 'pyre_' . $id, $label, array( $this, $id ), $post_type, 'advanced', 'high');
	}
	
	public function save_meta_boxes($post_id)
	{
		if(defined( 'DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return;
		}
		
		foreach($_POST as $key => $value) {
			if(strstr($key, 'pyre_')) {
				update_post_meta($post_id, $key, $value);
			}
		}
	}

	/**
	 * Handle rendering options.
	 *
	 * @access public
	 * @param array  $requested_tabs The requested tabs.
	 * @param string $post_type      The post-type.
	 */
	public function render_option_tabs( $requested_tabs, $post_type = 'default' ) {
		$screen = get_current_screen();

		$tabs_names = array(						
			'header'         => esc_html__( 'Header Options', 'Creativo' ),						
			'page_title'   => esc_html__( 'Page Title & Breadcrumb', 'Creativo' ),
			'page_options'           => esc_html__( 'Page Options', 'Creativo' ),
			'post_options'           => esc_html__( 'Post Options', 'Creativo' ),
			'revolution_slider'           => esc_html__( 'Revolution Slider', 'Creativo' ),
			'blog_options'           => esc_html__( 'Blog Options', 'Creativo' ),
			'portfolio_options'      => esc_html__( 'Portfolio Options', 'Creativo' ),
			'portfolio_details'		 => esc_html__( 'Portfolio Details', 'Creativo' ),
			'portfolio_general'		 => esc_html__( 'Portfolio Options', 'Creativo' ),
			'video_options'          => esc_html__( 'Video Options', 'Creativo' ),
			'audio_options'          => esc_html__( 'Audio Options', 'Creativo' ),
			'custom_style'           => esc_html__( 'Custom Styling', 'Creativo' ),
			'contact_info'           => esc_html__( 'Contact Info - Deprecated', 'Creativo' ),
			'footer_options'         => esc_html__( 'Footer Options', 'Creativo' ),
			'client_options'         => esc_html__( 'Client Details', 'Creativo' ),	
			'testimonial_options'    => esc_html__( 'Testimonial Details', 'Creativo' ),
			'product_options'    => esc_html__( 'Product Options', 'Creativo' )		
		);
		?>

		<div class="creativo_customization">

			<ul class="cr_metabox_tabs">

				<?php foreach ( $requested_tabs as $key => $tab_name ) : ?>
					
					<li class="<?php echo $tab_name; ?>"><a href="<?php echo $tab_name; ?>"><?php echo $tabs_names[ $tab_name ]; ?></a></li>
					
				<?php endforeach; ?>

			</ul>

			<div class="cr_metabox">

				<?php foreach ( $requested_tabs as $key => $tab_name ) : ?>
					<div class="pyre_metabox_tab" id="pyre_tab_<?php echo $tab_name; ?>">
						<?php require_once( 'metaboxes/' . $tab_name . '.php' ); ?>
					</div>
				<?php endforeach; ?>

			</div>

			<div class="clear"></div>

		</div>
		<?php

	}	


	public function page_options() {
		$this->render_option_tabs( array( 'header', 'page_title', 'page_options', 'blog_options', 'portfolio_options', 'custom_style', 'contact_info', 'footer_options' ) );
	}

	public function post_options() {
		$this->render_option_tabs( array( 'header', 'page_title', 'revolution_slider', 'post_options', 'video_options', 'audio_options', 'custom_style', 'footer_options' ) );
	}

	public function portfolio_options() {
		$this->render_option_tabs( array( 'header', 'page_title', 'portfolio_general', 'portfolio_details', 'video_options', 'custom_style', 'footer_options' ) );
	}

	public function client_options() {
		$this->render_option_tabs( array( 'client_options' ) );
	}

	public function testimonial_options() {
		$this->render_option_tabs( array( 'testimonial_options' ) );
	}

	public function product_options() {
		$this->render_option_tabs( array( 'header', 'page_title', 'product_options', 'custom_style', 'footer_options' ) );
	}


	public function text($id, $label, $desc = '')
	{
		global $post;
		
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<div class="desc_field">';	
				$html .= '<label for="pyre_' . $id . '">';
				$html .= $label;
				$html .= '</label>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
			$html .= '<div class="field">';
				$html .= '<input type="text" id="pyre_' . $id . '" name="pyre_' . $id . '" value="' . get_post_meta($post->ID, 'pyre_' . $id, true) . '" />';
				
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}
	
	public function select($id, $label, $options, $desc = '')
	{
		global $post;
		
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<div class="desc_field">';
				$html .= '<label for="pyre_' . $id . '">';
				$html .= $label;
				$html .= '</label>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
			$html .= '<div class="field">';
				$html .= '<select id="pyre_' . $id . '" name="pyre_' . $id . '">';
				foreach($options as $key => $option) {
					if(get_post_meta($post->ID, 'pyre_' . $id, true) == $key) {
						$selected = 'selected="selected"';
					} else {
						$selected = '';
					}
					
					$html .= '<option ' . $selected . 'value="' . $key . '">' . $option . '</option>';
				}
				$html .= '</select>';
				
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}

	public function textarea($id, $label, $desc = '')
	{
		global $post;

		$html = '';
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<div class="desc_field">';
				$html .= '<label for="pyre_' . $id . '">';
				$html .= $label;
				$html .= '</label>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
			$html .= '<div class="field">';
				$html .= '<textarea cols="120" rows="10" id="pyre_' . $id . '" name="pyre_' . $id . '">' . get_post_meta($post->ID, 'pyre_' . $id, true) . '</textarea>';				
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}

	public function upload($id, $label, $desc = '')
	{
		global $post;

		$html = '';
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<div class="desc_field">';
				$html .= '<label for="pyre_' . $id . '">';
				$html .= $label;
				$html .= '</label>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';
			$html .= '<div class="field">';
			    $html .= '<input name="pyre_' . $id . '" class="upload_field" id="pyre_' . $id . '" type="text" value="' . get_post_meta($post->ID, 'pyre_' . $id, true) . '" style="width:60%;" />';
			    $html .= '<input class="cr_upload_button" type="button" value="'.__('Browse','Creativo').'" />';
				
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}
	
	public function colorpicker($id, $label, $desc = '')
	{
		global $post;

		$html = '';
		$html = '';
		$html .= '<div class="pyre_metabox_field">';
			$html .= '<div class="desc_field">';
				$html .= '<label for="pyre_' . $id . '">';
				$html .= $label;
				$html .= '</label>';
				if($desc) {
					$html .= '<p>' . $desc . '</p>';
				}
			$html .= '</div>';	
			$html .= '<div class="field">';
			    $html .= '<div id="pyre_' . $id . '_picker" class="colorSelector" ><div></div></div>';
			    $html .= '<input type="text" id="pyre_' . $id . '" class="color-picker" data-alpha="true" name="pyre_' . $id . '" value="' . get_post_meta($post->ID, 'pyre_' . $id, true) . '" style="width:80px; margin-left:5px;" />';		
				?>
                
                <?php
				
			$html .= '</div>';
		$html .= '</div>';
		
		echo $html;
	}
	
}

$metaboxes = new PyreThemeFrameworkMetaboxes;