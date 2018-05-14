<?php
/**
 *	The template for dispalying the archive.
 *  Template Name: T-Rex Template
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php get_header(); ?>
	<div class="row" id="tRex">
        <h1>What Does My T-Rex Score Mean?</h1>
		<section class="sectionOne"><?php the_field('firstBlock'); ?></section>
        <section class="featuredSecond">
            <div class="row">
                <div class="col-xs-12 col-sm-5 text"><?php the_field('featured'); ?></div>
                <div class="col-xs-12 col-sm-7 image"><img src="<?php the_field('featuredImage'); ?>" /></div>
            </div>
        </section>
<div><hr width="900" align="center"></div>
<section class="featuredSecond">
            <div class="row">
<div class="col-xs-12 col-sm-7 image"><a href="http://wealthgame.ca/t-rex-math/"/><img src="http://wealthgame.ca/wp-content/uploads/2016/12/Problems.jpg"></a></div>
                <div class="col-xs-12 col-sm-5 text"><h2>T-Rex Math</h2><p>How can such small fees take such a huge chunk of my investment return? Why does my T-Rex Score decline over time? Are these numbers for real?</p><p>Click on the <a href="http://wealthgame.ca/t-rex-math/">link</a> to see the simple math behind your T-Rex Score.</p><button type="button" style=" -webkit-border-radius: 3;
  -moz-border-radius: 3;
  border-radius: 3px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #276187;
  padding: 10px 20px 10px 20px;
  text-decoration: none;" onclick="location.href='http://wealthgame.ca/t-rex-math/'">Learn More</button></div>
            </div>
        </section>
<section class="sectionOne"><?php the_field('secondBlock'); ?></section>
	</div><!--/.row-->
<section class="bottomQuote"><p><?php the_field('quote'); ?></p></section>
<?php get_footer(); ?>