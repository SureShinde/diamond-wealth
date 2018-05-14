<?php
/**
 *	The template for dispalying the archive.
 *  Template Name: Press Archive
 *	@package WordPress
 *	@subpackage illdy
 */
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<section id="blog">
				<?php do_action( 'illdy_above_content_after_header' ); ?>
				<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content-press' );
					endwhile;
					wp_reset_query();
				endif;
				?>
				<?php do_action( 'illdy_after_content_above_footer' ); ?>
			</section><!--/#blog-->
		</div><!--/.col-sm-7-->
		<?php get_sidebar(); ?>
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>

<!--<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<section id="blog">
				<?php do_action( 'illdy_above_content_after_header' ); ?>
				<?php $loop = new WP_Query( array('post_type' => 'press', 'posts_per_page' => 10));
                    while ($loop-> have_posts() ) : $loop->the_post(); ?>
                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                    <p><?php the_field('date'); ?></p>
                    <p><?php the_field('publication'); ?></p>
                    <?php the_content(); ?>
                <?php endwhile; wp_reset_query(); ?>
				<?php do_action( 'illdy_after_content_above_footer' ); ?>
			</section>
		</div>
	</div>
</div>-->