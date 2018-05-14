<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

include_once 'shortcodes.php';

add_action( 'wp_enqueue_scripts', 'wg_scripts' );
function wg_scripts() {

//	wp_enqueue_script('amcharts',
//		get_stylesheet_directory_uri() . '/scripts/amcharts.js',
//		array(),
//		'1.0',
//		true
//	);
//
//	wp_enqueue_script('serialjs',
//		get_stylesheet_directory_uri() . '/scripts/serial.js',
//		array(),
//		'1.0',
//		true
//	);
//
//	wp_enqueue_script('trex-calc',
//		get_stylesheet_directory_uri() . '/scripts/trex-calc.js',
//		array( 'serialjs', 'amcharts' ),
//		'1.0',
//		true
//	);
//
//	wp_enqueue_script('html2canvas',
//		get_stylesheet_directory_uri() . '/scripts/html2canvas.js',
//		array(),
//		'1.0',
//		true
//	);
//
//	wp_enqueue_script('canvas2image',
//		get_stylesheet_directory_uri() . '/scripts/canvas2image.js',
//		array(),
//		'1.0',
//		true
//	);

	wp_enqueue_script( 'amcharts', get_stylesheet_directory_uri() . '/scripts/amcharts.js', array( 'jquery' ), '1.0.16', true );
	wp_enqueue_script( 'serial', get_stylesheet_directory_uri() . '/scripts/serial.js', array( 'jquery' ), '1.0.16', true );
	wp_enqueue_script( 'export', get_stylesheet_directory_uri() . '/scripts/export.js', array( 'jquery' ), '1.0.16', true );
	wp_enqueue_script( 'html2canvas', get_stylesheet_directory_uri() . '/scripts/html2canvas.js', true );
	wp_enqueue_script( 'canvas2image', get_stylesheet_directory_uri() . '/scripts/canvas2image.js', true );
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/scripts/trex-calc.js', array( 'jquery' ), '1.0.16', true );

}

function cr_post_meta() {
	global $data, $post;
	$content = $author_icon = $date_icon = $categ_icon = '';
	$cat_output = '';

	if( $data['post_meta_design'] != 'modern' ) {
		$author_icon = '<i class="fa fa-user"></i>';
		$date_icon = '<i class="fa fa-clock-o"></i>';
		$categ_icon = '<i class="fa fa-bookmark"></i>';
	}

	if( $data['show_categories'] ) {
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			foreach( $categories as $category ) {
				$cat_output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . esc_attr( sprintf( __( 'View all posts in %s', 'Creativo' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . ', ';
			}
		}
	}

	if( $data['show_categories'] && ($data['post_meta_category_pos'] == 'above' )){
		$content .= '<ul class="post_meta above_title">';
		$content .= '<li class="category_output">' . $categ_icon . trim( $cat_output, ', ' ) . '</li>';
		$content .= '</ul>';
	}

	/* Render the Title tag and Title Content */
	$content .= cr_post_meta_title();

	if( !is_page_template('page-blog-grid.php') ) {

		if( $data['show_date'] || $data['show_author'] || $data['show_categories'] || $data['show_comments'] ) {
			$content .= '<ul class="post_meta ' . ( $post_meta_position != 'above' ? 'default' : 'style2' ) . '">';

			if($data['show_author'] && !is_single()) {
				$content .= '<li>' . $author_icon . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
			}

			if($data['show_author_single'] && is_single()) {
				$content .= '<li>' . $author_icon . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
			}

			if( $data['show_date'] ) {
				$content .= '<li>' . $date_icon . get_the_time( get_option('date_format') ) . '</li>';
			}

			if( $data['show_categories'] && ($data['post_meta_category_pos'] != 'above' ) ) {
				$content .= '<li>' . $categ_icon . trim( $cat_output, ', ' ) . '</li>';
			}

			if($data['show_comments']) {
				$content .= '<li><a href="' . get_comments_link() .'" class="comments_count"><i class="icon-message"></i>'. get_comments_number() . '</a></li>';
			}

			$content .= '</ul>';
		}

	}

	echo '<div class="post_meta_wrap">'.$content.'</div>';
}

function cr_post_lower_meta() {
	global $data, $post;
	$content = $author_icon = $date_icon = $categ_icon = '';


	if( $data['show_date'] || $data['show_author'] || $data['show_categories'] || $data['show_comments'] ) {
		$content .= '<ul class="post_meta lower ' . ( $post_meta_position != 'above' ? 'default' : 'style2' ) . '">';

		if($data['show_author'] && !is_single()) {
			$content .= '<li>' . $author_icon . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
		}

		if($data['show_author_single'] && is_single()) {
			$content .= '<li>' . $author_icon . __('by ','Creativo') . get_the_author_posts_link() . '</li>';
		}

		if( $data['show_date'] ) {
			$content .= '<li>' . $date_icon . get_the_time( get_option('date_format') ) . '</li>';
		}

		if( $data['show_categories'] && ($data['post_meta_category_pos'] != 'above' ) ) {
			$content .= '<li>' . $categ_icon . trim( $cat_output, ', ' ) . '</li>';
		}

		if($data['show_comments']) {
			$content .= '<li><a href="' . get_comments_link() .'" class="comments_count"><i class="icon-message"></i>'. get_comments_number() . '</a></li>';
		}

		$content .= '</ul>';
	}

	echo '<div class="post_meta_wrap">'.$content.'</div>';
}