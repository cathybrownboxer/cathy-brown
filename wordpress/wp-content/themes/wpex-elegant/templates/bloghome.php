<?php
/**
 * Template Name: Bloghome
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

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="homepage-wrap clr">
					<div class="page-content">
						<div class="left-container">


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
						<?php
						/**
							Blog
						**/
						$display_count = get_theme_mod('wpex_home_blog_count', '5');
						$wpex_query = new WP_Query(
							array(
								'post_type'			=> 'post',
								'posts_per_page'	=> $display_count,
								'no_found_rows'		=> true,
							)
						);
						if ( $wpex_query->posts ) { ?>
							<div class="blog-posts">
								<?php $wpex_count=0; ?>
								<?php foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
									<?php $wpex_count++; ?>
										<article class="post">
											<header>
												<h3><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h3>
												
												<?php
												// Display post meta details
												/**
												wpex_post_meta();
												**/
												?>
												<span class="date">
													<?php echo get_the_date(); ?>
												</span>
											</header>
											<?php
											// Display post thumbnail
											if ( has_post_thumbnail() ) { ?>
												<div class="image-wrap">
													<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>">
														<img src="<?php echo wpex_get_featured_img_url(); ?>" alt="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" />
													</a>
												</div><!-- .recent-blog-entry-thumbnail -->
											<?php } ?>
											<div class="post-content-text">
												<?php wpex_excerpt( 50, false ); ?>
											</div><!-- .recent-blog-entry-content -->

											<a class="btn btn-green" href="<?php the_permalink(); ?>">Read more</a>
										</article><!-- .recent-blog -->
									<?php if ( $wpex_count == '3' ) { ?>
										<?php $wpex_count=0; ?>
									<?php } ?>
								<?php endforeach; ?>
							</div><!-- #homepage-portfolio -->
						<?php } ?>
						<?php wp_reset_postdata(); ?>
						</div>
						<div class="right-container">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</article><!-- #post -->
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>