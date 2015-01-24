<?php
/**
 * Template Name: Media
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */

get_header(); ?>


<h2 class="page-title"><?php wp_title(''); ?></h2>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<?php
					/**
						Post Content
					**/ ?>
					<?php if ( get_the_content() !== '' ) { ?>
						<div class="page-content" class="entry clr">
							<div class="left-container">
								<?php the_content(); ?>
							</div>
							<div class="right-container">
								<div class="menu">
									<?php global $post; $thispage = $post->ID; // grabs the current post id from global and then assigns it to thispage ?>
									<?php $pagekids = get_pages("child_of=".$thispage."&sort_column=menu_order"); // gets a list of page that are sub pages of the current page and assigns then to pagekids ?>
									<?php if ($pagekids) { // if there are any values stored in pagekids and therefore the current page has subpages ?>
										<ul>
											<?php wp_list_pages("depth=1&title_li=&sort_column=menu_order&child_of=".$thispage); // display the sub pages of the current page only ?>
									    </ul>
									<?php } else { // if there are no sub pages for the current page ?>
										<ul>
											<?php echo wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); ?>
									    </ul>

									<?php } ?>
								</div>
							</div>
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