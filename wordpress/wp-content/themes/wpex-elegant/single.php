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
		<li class="facebook"><a href="#" target="_blank">
			<i class="fa fa-facebook-square fa-lg"></i>
		</a></li>
		<li class="twitter"><a href="#" target="_blank">
			<i class="fa fa-twitter-square fa-lg"></i>
		</a></li>
		<li class="linkedin"><a href="#" target="_blank">
			<i class="fa fa-linkedin-square fa-lg"></i>
		</a></li>
		<li class="youtube"><a href="#" target="_blank">
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
						if ( !post_password_required() ) {
							get_template_part( 'content', get_post_format() );
						} ?>

						<?php the_content(); ?>

						<footer class="entry-footer">
							<?php edit_post_link( __( 'Edit Post', 'wpex' ), '<span class="edit-link clr">', '</span>' ); ?>
						</footer><!-- .entry-footer -->
						<?php
							// Display author bio
							// See functions/commons.php
							wpex_post_author(); ?>
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