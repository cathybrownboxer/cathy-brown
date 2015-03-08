<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
?>

</div><!-- #main-content -->



	<div id="footer-wrap" class="footer-wrap clr">
		<div id="footer" class="clr footer-container">
			<div id="footer-widgets" class="clr">
				<div class="footer-box span_1_of_3 col col-5">
					<!--<?php dynamic_sidebar( 'footer-one' ); ?>-->
					<?php
						// Display main menu
						wp_nav_menu( array(
							'theme_location'	=> 'main_menu',
							'sort_column'		=> 'menu_order',
							'fallback_cb'		=> false
						) ); ?>
				</div><!-- .footer-box -->
				<div class="footer-box span_1_of_3 col col-2">
					<?php dynamic_sidebar( 'footer-two' ); ?>
				</div><!-- .footer-box -->
				<div class="footer-box span_1_of_3 col col-3 social-icons">
					<!--<?php dynamic_sidebar( 'footer-three' ); ?>-->
					<ul>
						<li class="facebook"><a href="https://www.facebook.com/cathybrownboxer" target="_blank">
							<i class="fa fa-facebook-square fa-lg"></i>
						</a></li>
						<li class="twitter"><a href="https://twitter.com/cathybrownboxer" target="_blank">
							<i class="fa fa-twitter-square fa-lg"></i>
						</a></li>
						<li class="linkedin"><a href="https://uk.linkedin.com/pub/cathy-brown/41/793/798" target="_blank">
							<i class="fa fa-linkedin-square fa-lg"></i>
						</a></li>
						<li class="youtube"><a href="https://www.youtube.com/user/thecathybrown" target="_blank">
							<i class="fa fa-youtube-square fa-lg"></i>
						</a></li>
					</ul>
				</div><!-- .footer-box -->
			</div><!-- #footer-widgets -->

			<div class="row footer-copyright">
				<p><?php wpex_copyright(); ?></p>
			</div>
		</div><!-- #footer -->
	</div><!-- #footer-wrap -->

	<!--<footer id="copyright-wrap" class="clear">
		<div id="copyright" role="contentinfo" class="clr">
			<?php
			// Displays copyright info
			// See functions/copyright.php
			wpex_copyright(); ?>
		</div>
	</footer>
-->
</div><!-- #wrap -->

<?php wp_footer(); ?>
</body>
</html>