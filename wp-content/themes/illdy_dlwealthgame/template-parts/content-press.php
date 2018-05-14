<?php
/**
 *    The template for displaying the single content.
 *
 * @package    WordPress
 * @subpackage illdy
 */

$jumbotron_single_image  = get_theme_mod( 'illdy_jumbotron_enable_featured_image', true );

?>
<?php $loop = new WP_Query( array('post_type' => 'press', 'posts_per_page' => 10));
                    while ($loop-> have_posts() ) : $loop->the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog-post-title"><?php the_title(); ?></a>
	<?php if ( has_post_thumbnail() ): ?>
		<div class="blog-post-image">
			<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail( 'illdy-blog-list' ); ?></a>
		</div><!--/.blog-post-image-->
	<?php endif; ?>
	<?php do_action( 'illdy_archive_meta_content' ); ?>
	<div class="blog-post-entry">
		<?php the_excerpt(); ?>
	</div><!--/.blog-post-entry-->
	<a href="<?php the_permalink(); ?>" title="<?php _e( 'Read more', 'illdy' ); ?>" class="blog-post-button"><?php _e( 'Read more', 'illdy' ); ?></a>
</article>
<?php endwhile; wp_reset_query(); ?>