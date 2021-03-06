<?php
/**
 * Template Name: Homepage
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


	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="homepage-wrap clr">
					<?php
					/**
						Post Content
					**/ ?>
					<?php if ( get_the_content() !== '' ) { ?>
						<div id="homepage-content" class="entry clr">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					<?php } ?>
					<?php
					/**
						Features
					**/
					$wpex_query = new WP_Query(
						array(
							'order'				=> 'ASC',
							'orderby'			=> 'menu_order',
							'post_type'			=> 'features',
							'posts_per_page'	=> '-1',
							'no_found_rows'		=> true,
						)
					);
					if ( $wpex_query->posts ) { ?>
						<div id="homepage-features" class="clr">
							<?php $wpex_count=0; ?>
							<?php foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
								<?php $wpex_count++; ?>
									<?php get_template_part( 'content-features', get_post_format() ); ?>
								<?php if ( $wpex_count == '4' ) { ?>
									<?php $wpex_count=0; ?>
								<?php } ?>
							<?php endforeach; ?>
						</div><!-- #homepage-features -->
					<?php } ?>
					<?php wp_reset_postdata(); ?>
					<?php
					/**
						Portfolio
					**/
					$display_count = get_theme_mod('wpex_home_portfolio_count', '8');
					$wpex_query = new WP_Query(
						array(
							'post_type'			=> 'portfolio',
							'posts_per_page'	=> $display_count,
							'no_found_rows'		=> true,
						)
					);
					if ( $wpex_query->posts ) { ?>
						<div id="homepage-portfolio" class="clr">
							<h2 class="heading"><span><?php _e( 'Recent Work', 'wpex' ); ?></span></h2>
							<?php $wpex_count=0; ?>
							<?php foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
								<?php $wpex_count++; ?>
									<?php get_template_part( 'content-portfolio', get_post_format() ); ?>
								<?php if ( $wpex_count == '4' ) { ?>
									<?php $wpex_count=0; ?>
								<?php } ?>
							<?php endforeach; ?>
						</div><!-- #homepage-portfolio -->
					<?php } ?>
					<?php wp_reset_postdata(); ?>
				</article><!-- #post -->
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>