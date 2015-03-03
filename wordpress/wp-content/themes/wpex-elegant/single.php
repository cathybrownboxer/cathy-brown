<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */

get_header(); ?>

<div class="social-icons">
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
</div>

<?php while ( have_posts() ) : the_post(); ?>
	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
			<article>
				<div class="page-content" class="entry clr">
					<div class="left-container">
						<h1 class="page-header-title"><?php the_title(); ?></h1>
						<?php
						// Display post meta
						// See functions/commons.php
						wpex_post_meta(); ?>


						<?php
						if ( !post_password_required() ) {
							get_template_part( 'content', get_post_format() );
						} ?>

						<?php the_content(); ?>

						<!--
						<footer class="entry-footer">
							<?php edit_post_link( __( 'Edit Post', 'wpex' ), '<span class="edit-link clr">', '</span>' ); ?>
						</footer>
						-->
						<?php
							// Display author bio
							// See functions/commons.php
							wpex_post_author(); ?>


						<div class="social-share">
						  <div class="facebook">
						  <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcathybrown.co.uk%2Fpage%2FBlog%2FJuly%2B2012%2FJuly%2B2012%2B-%2BWomen%2527s%2BBoxing%2Bin%2Bthe%2B2012%2BOlympics&amp;send=false&amp;layout=standard&amp;width=49&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:49px; height:35px;" allowTransparency="true"></iframe>
						  </div>
						  <div class="twitter">
							  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://cathybrown.co.uk" data-text="Cathy Brown - British Boxer, Sporting Performance Coach & Therapist, Broadcaster: " data-via="cathybrownboxer" data-related="cathybrownboxer" data-hashtags="CathyBrown">Tweet</a>
							  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						  </div>
						</div>

							<?php comments_template(); ?>

					</div>

					<div class="right-container">
						<?php get_sidebar(); ?>
					</div>

				</div>
			</article>
			<?php wp_link_pages( array( 'before' => '<div class="page-links clr">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php endwhile; ?>
<?php get_footer(); ?>