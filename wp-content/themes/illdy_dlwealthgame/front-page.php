<?php
/**
 *	The template for displaying the front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */


get_header();


if( get_option( 'show_on_front' ) == 'posts' ): ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<section id="blog">
					<?php do_action( 'illdy_above_content_after_header' ); ?>
					<?php
					if( have_posts() ):
						while( have_posts() ):
							the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					<?php do_action( 'illdy_after_content_above_footer' ); ?>
				</section><!--/#blog-->
			</div><!--/.col-sm-7-->
			<?php get_sidebar(); ?>
		</div><!--/.row-->
	</div><!--/.container-->

<?php
else:

	$sections_order_first_section = get_theme_mod( 'illdy_general_sections_order_first_section', 1 );
	$sections_order_second_section = get_theme_mod( 'illdy_general_sections_order_second_section', 2 );
	$sections_order_third_section = get_theme_mod( 'illdy_general_sections_order_third_section', 3 );
	$sections_order_fourth_section = get_theme_mod( 'illdy_general_sections_order_fourth_section', 4 );
	$sections_order_fifth_section = get_theme_mod( 'illdy_general_sections_order_fifth_section', 5 );
	$sections_order_sixth_section = get_theme_mod( 'illdy_general_sections_order_sixth_section', 6 );
	$sections_order_seventh_section = get_theme_mod( 'illdy_general_sections_order_seventh_section', 7 );
	$sections_order_eighth_section = get_theme_mod( 'illdy_general_sections_order_eighth_section', 8 );
	
	if( have_posts() ):
		while( have_posts() ): the_post();
			$static_page_content = get_the_content();
			if ( $static_page_content != '' ) : ?>
				<section class="front-page-section" id="static-page-content">
					<div class="section-header">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h3><?php the_title(); ?></h3>
								</div><!--/.col-sm-12-->
							</div><!--/.row-->
						</div><!--/.container-->
					</div><!--/.section-header-->
					<div class="section-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<?php echo $static_page_content; ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endif;
		endwhile;
	endif; ?>
<section class="pageLeadin"><?php the_field('frontLeadin'); ?></section>
    <section class="graph" id="printGraph">
        <h1>Determine your T-Rex Score</h1>
        <p class="calcLeadIn"><?php the_field('calcLeadin'); ?></p>
                <form name="Form1">
                    <div class="row">
                        <div class="col-xs-6 col-sm-2">
                            <p>You Invest</p>
                            <input type="text" name="YouInvest" value="10000">
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <p>Annual Return(%)</p>
                            <input type="text" name="AnnualReturn" value="6.4">
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <p>Annual Fees(%)</p>
                            <input type="text" name="AnnualFees" value="1.75">
                        </div>
                        <div class="col-xs-6 col-sm-2">
                            <p>Time (years)</p>
                            <input type="text" name="Years" value="25">
                        </div>
                        <div class="col-xs-12 col-sm-2">
                            <button class="trexButton" type="button" onclick="javascript: recalculateChart(YouInvest.value, Number(AnnualReturn.value), Number(AnnualFees.value), Years.value)">Update</button>
                        </div>
                    </div>
                    <div id="chartdiv"></div>
                    <div id="chartInformation">
                    <h2>T-Rex Score: <span id="tRexScoreOutput">0</span></h2>
                    <h3><span id="GrossIncome">$0</span><br />Total Gain</h3>
                    <h3><span id="LostIncome">$0</span><br />Lost in Fees</h3>
                    <h3><span id="NetIncome">$0</span><br />Gain You Keep</h3>
                    <h3><span id="TotalValue">$0</span><br />Total Value</h3>
                    </div>
                </form>
	       <div id="trexOut" ></div>
           <div id="print_button">Print Your T-Rex Score</div>
           <!--<div id="image_button">Image</div>-->
    </section>
    <section class="explanation">
        <h3><?php the_field('txTagline'); ?></h3>
        <?php the_field('txExplanation'); ?>
    </section>
    <section class="trexCTA">
        <h3>What does my result mean?</h3>
        <a type="button" href="/t-rex-score/" class="btn btn-outline-primary btn-lg">Learn More</a>
    </section>
	<?php if( $sections_order_first_section ):
		illdy_sections_order( $sections_order_first_section );
	endif;

	if( $sections_order_second_section ):
		illdy_sections_order( $sections_order_second_section );
	endif;

	if( $sections_order_third_section ):
		illdy_sections_order( $sections_order_third_section );
	endif;

	if( $sections_order_fourth_section ):
		illdy_sections_order( $sections_order_fourth_section );
	endif;

	if( $sections_order_fifth_section ):
		illdy_sections_order( $sections_order_fifth_section );
	endif;

	if( $sections_order_sixth_section ):
		illdy_sections_order( $sections_order_sixth_section );
	endif;
	
	if( $sections_order_seventh_section ):
		illdy_sections_order( $sections_order_seventh_section );
	endif;

	if( $sections_order_eighth_section ):
		illdy_sections_order( $sections_order_eighth_section );
	endif;
endif; ?>
    <section class="bookCTA">
        <h3>The Wealth Game Book | <span>Coming in 2018</span></h3>
        <p><?php the_field('wgTagline'); ?></p>
    </section>
    <section class="bookLeadin">
        <div class="row">
            <div class="col-xs-12 col-sm-5">
                <div class="verticalAlign">
                    <?php the_field('wgExplanation'); ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 image">
                <img src="http://wealthgame.ca/wp-content/uploads/2016/12/book-image-1.jpg" />
            </div>
        </div>
    </section>
    <section class="wealthSteps">
        <?php the_field('frontSteps'); ?>
    </section>

<?php get_footer(); ?>