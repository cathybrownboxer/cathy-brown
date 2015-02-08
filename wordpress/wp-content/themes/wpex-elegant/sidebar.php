<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */

if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<aside id="secondary" class="menu" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</div>
		</div>
	</aside><!-- #secondary -->
<?php endif; ?>