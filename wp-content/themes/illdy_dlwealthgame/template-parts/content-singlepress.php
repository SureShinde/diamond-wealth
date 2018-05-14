<?php
/**
 *    The template for displaying the single press content.
 *
 * @package    WordPress
 * @subpackage illdy
 */

$jumbotron_single_image  = get_theme_mod( 'illdy_jumbotron_enable_featured_image', true );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<?php if ( has_post_thumbnail() && $jumbotron_single_image != true ) { ?>
		<div class="blog-post-image">
			<?php the_post_thumbnail( 'illdy-blog-list' ); ?>
		</div><!--/.blog-post-image-->
	<?php } ?>

	
	<div class="blog-post-entry markup-format">
        <?php the_field("date"); ?>
        <?php the_field("publication"); ?>
		<?php
		the_content();
		?>
	</div><!--/.blog-post-entry.markup-format-->
	<?php do_action( 'illdy_single_after_content' ); ?>
</article><!--/#post-<?php the_ID(); ?>.blog-post-->