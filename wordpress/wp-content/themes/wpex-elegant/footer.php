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
					<?php dynamic_sidebar( 'footer-one' ); ?>
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30755675-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>