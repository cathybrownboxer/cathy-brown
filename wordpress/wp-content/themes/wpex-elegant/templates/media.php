<?php
/**
 * Template Name: Media
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */

get_header(); ?>

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
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>