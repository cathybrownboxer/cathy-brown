 <?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments and the comment
 * form. The actual display of comments is handled by a callback to
 * wpex_comment() which is located at functions/comments-callback.php
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */


// Bail if password protected and user hasn't entered password
if ( post_password_required() ) return;

// Comments are closed and empty, do nothing
if ( !comments_open() && get_comment_pages_count() == 0 ) return; ?>

<?php comment_form( 
	array(
	'title_reply'	=> '<div class="heading"><span>'. __('Leave a comment','wpex') .'</span></div>',
	'fields' => apply_filters(
		'comment_form_default_fields', array(
			'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Name" name="author" type="text" value="' .
				esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
				'<label for="author">' . __( 'Name' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' )  .
				'</p>'
				,
			'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="30"' . $aria_req . ' />'  .
				'<label for="email">' . __( 'Email' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' )
		)
	),
	'comment_field' => '<p class="comment-form-comment">' .
		'<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
		'<textarea id="comment" name="comment" rows="5" aria-required="true"></textarea>' .
		'</p>',
    'comment_notes_after' => '',
    'title_reply' => 'Leave a comment',
  'label_submit' => __('Post comment')


)); ?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) { ?>
		<h3>
				<?php
					printf( _nx( 'Comments', 'Comments', '', 'comments title', 'wpex' ),
						number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
		</h2>
		<ol class="comment-list">
			<?php wp_list_comments( array(
				'callback'		=> 'wpex_comment',
			) ); ?>
		</ol><!-- .commentlist -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<nav class="navigation comment-navigation row clr" role="navigation">
				<h4 class="assistive-text section-heading heading"><span><?php _e( 'Comment navigation', 'wpex' ); ?></span></h4>
				<div class="nav-previous span_12 col clr-margin"><?php previous_comments_link( __( '&larr; Older Comments', 'wpex' ) ); ?></div>
				<div class="nav-next span_12 col"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wpex' ) ); ?></div>
			</nav>
		<?php } ?>
	<?php } // have_comments() ?>
</div><!-- #comments -->