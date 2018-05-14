<?php
/**
 *    The template for displaying the header.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$logo_id                   = get_theme_mod( 'custom_logo' );
$logo_image                = wp_get_attachment_image_src( $logo_id, 'full' );
$text_logo                 = get_theme_mod( 'illdy_text_logo', __( 'Illdy', 'illdy' ) );
$jumbotron_general_image   = get_theme_mod( 'illdy_jumbotron_general_image', esc_url( get_template_directory_uri() . '/layout/images/front-page/front-page-header.png' ) );
$jumbotron_single_image    = get_theme_mod( 'illdy_jumbotron_enable_featured_image', false );
$jumbotron_parallax_enable = get_theme_mod( 'illdy_jumbotron_enable_parallax_effect', true );
$preloader_enable          = get_theme_mod( 'illdy_preloader_enable', 1 );

$style = '';

if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ) {
	if ( $jumbotron_general_image ) {
		$style = 'background-image: url(' . esc_url( $jumbotron_general_image ) . ');';
	}
} else if ( ( is_single() || is_page() ) && $jumbotron_single_image == true ) {

	global $post;
	if ( has_post_thumbnail( $post->ID ) ) {
		$style = 'background-image: url(' . esc_url( get_the_post_thumbnail_url( $post->ID, 'full' ) ) . ');';
	}
} else {
	$style = 'background-image: url(' . get_header_image() . ');';
}

// append the parallax effect
if ( $jumbotron_parallax_enable == true ) {
	$style .= 'background-attachment: fixed;';
}

if ( ( is_single() || is_page() || is_archive() ) && get_theme_mod( 'illdy_archive_page_background_stretch' ) == 2 ) {
	$style .= 'background-size:contain;background-repeat:no-repeat;';
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="google-site-verification" content="H9P07dhwsEXoUx1HK8Vs-t20__83aSdCmgGY8q_Vbks" />
	<?php wp_head(); ?>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<style>
.blog-post-button {
    height: 45px;
    line-height: 45px;
    background-color: #4a6491;
    padding: 0 30px;
    display: inline-block;
    border-radius: 3px;
    font-weight: 700;
    font-size: 18px;
    color: #ffffff;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    text-transform: uppercase;
}
</style>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<?php if ( $preloader_enable == 1 ): ?>
	<div class="pace-overlay"></div>
<?php endif; ?>
<header id="header" class="<?php if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ): echo 'header-front-page';
elseif (is_page (24) ): echo 'press-page';
else: echo 'header-blog'; endif; ?>" style="<?php echo $style ?>">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-6">

					<?php if ( ! empty( $logo_image ) ) { ?>
						<?php echo '<a href="' . esc_url( home_url() ) . '"><img src="http://wealthgame.ca/wp-content/uploads/2017/01/cropped-dino-footprint-1.png" /></a>'; ?>
					<?php } else { ?>
						<?php if ( get_option( 'show_on_front' ) == 'page' ) { ?>
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $text_logo ); ?>" class="header-logo"><?php echo esc_html( $text_logo ); ?></a>
						<?php } else { // front-page option ?>
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
						<?php } ?>
					<?php } ?>

				</div><!--/.col-sm-2-->
				<div class="col-sm-10 col-xs-6">
					<nav class="header-navigation">
						<ul class="clearfix">
							<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary-menu',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'items_wrap'      => '%3$s',
								'walker'          => new Illdy_Extended_Menu_Walker(),
								'fallback_cb'     => 'Illdy_Extended_Menu_Walker::fallback',
							) );
							?>
						</ul><!--/.clearfix-->
					</nav><!--/.header-navigation-->
					<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
				</div><!--/.col-sm-10-->
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.top-header-->
	<nav class="responsive-menu">
		<ul>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary-menu',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'items_wrap'      => '%3$s',
				'walker'          => new Illdy_Extended_Menu_Walker(),
				'fallback_cb'     => 'Illdy_Extended_Menu_Walker::fallback',
			) );
			?>
		</ul>
	</nav><!--/.responsive-menu-->
	<?php
	if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ):
		get_template_part( 'sections/front-page', 'bottom-header' );
	else:
		get_template_part( 'sections/blog', 'bottom-header' );
	endif;
	?>
</header><!--/#header-->