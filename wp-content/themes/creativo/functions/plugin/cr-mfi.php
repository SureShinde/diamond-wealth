<?php
/**
 * Handles multiple featured images.
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
global $data;
/**
 * Handles multiple featured images.
 */
class CR_Multiple_Featured_Images {
	
	/**
	 * Constructor.
	 *
	 * @access  public
	 */
	public function __construct() {
		if ( is_admin() ) {
			add_action( 'after_setup_theme', array( $this, 'generate' ) );
		}
	}

	/**
	 * Generates the multiple images.
	 *
	 * @access  public
	 */
	public function generate() {
		$post_types = array(
			'post',
			'page',
			'creativo_portfolio',
		);
		global $data;

		$i = 2;

		while ( $i <= $data['featured_images_count'] ) {

			foreach ( $post_types as $post_type ) {
				new Cr_Featured_Image(
					array(
						'id'           => 'featured-image-' . $i,
						'post_type'    => $post_type,
						'name'         => sprintf( __( 'Featured image %s', 'Creativo' ), $i ),
						'label_set'    => sprintf( __( 'Set featured image %s', 'Creativo' ), $i ),
						'label_remove' => sprintf( __( 'Remove featured image %s', 'Creativo' ), $i ),
					)
				);
			}

			$i++;

		}

	}
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
