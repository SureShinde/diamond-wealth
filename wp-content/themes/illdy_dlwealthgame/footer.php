<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<footer id="footer">
	<div class="container">
		<div class="row" style="max-width: 1170px; margin: 0 auto;">
            <?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h3>',
				'after_title'   => '</h3></div>',
			);
			?>
            <div class="col-xs-12 col-sm-6">
                <div class="col-xs-6 socialMedia">
                    <h4>Follow Me</h4>
                    <ul>
                        <li><a href="https://twitter.com/LarryBatesWG"><i class="fa fa-twitter"></i> @LarryBatesWG</a></li>
                        <li><a href="https://www.linkedin.com/in/LarryBatesWG"><i class="fa fa-linkedin-square"></i> Larry Bates</a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100014692831838"><i class="fa fa-facebook-square"></i> Larry Bates</a></li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <?php
                    if ( is_active_sidebar( 'footer-sidebar-1' ) ):
                        dynamic_sidebar( 'footer-sidebar-1' );
                    endif;
                    ?>
                </div>
                <div class="col-xs-12 copyright">
                    <!--<img src="http://wealthgame.ca/wp-content/themes/illdy/layout/images/dl.svg" />-->
                    <p>&copy; Copyright Larry Bates | The Wealth Game 2017</p>
                </div>
            </div>
			<div class="col-xs-12 col-sm-6 mcForm">
                <?php
                    if ( is_active_sidebar( 'footer-sidebar-2' ) ):
                        dynamic_sidebar( 'footer-sidebar-2' );
                    endif;
                    ?>
			</div><!--/.col-sm-6-->
		</div><!--/.row-->
	</div><!--/.container-->
</footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>