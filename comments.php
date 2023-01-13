<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage accounting
 * @since accounting 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area pt-5 mt-5">

	<?php if ( have_comments() ) : ?>
        <h3 class="comments-title mb-5">
			<?php
			printf(
				_nx(
					'One comment on "%2$s"',
					'%1$s comments on "%2$s"',
					get_comments_number(),
					'comments title',
					'accounting'
				),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
        </h3>

        <ul class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ul',
				'short_ping'  => true,
				'avatar_size' => 74,
			) );
			?>
        </ul><!-- .comment-list -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav class="navigation comment-navigation" role="navigation">

                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'accounting' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'accounting' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'accounting' ) ); ?></div>
            </nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'accounting' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php // Code for custom comments form

	$commenter = wp_get_current_commenter();
	if ( isset( $args['format'] ) ) {
		$html5 = 'html5' === $args['format'];
	}
	$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
	$req            = get_option( 'require_name_email' );
	$aria_req       = ( $req ? "aria-required = 'true' " : '' );
	$html_req       = ( $req ? "required = 'required' " : '' );


	$comments_args = array(
		// change the title of send button
		'label_submit'         => __( 'Post Comment', 'accounting' ),
		'class_submit'         => 'btn py-3 px-4 btn-primary',
		'id_form'              => '',
		'id_submit'            => '',
		'class_container'      => 'discussion-form-area comments',
		'class_form'           => 'contact-form',
		// change the title of the reply section
		'title_reply'          => __( 'Leave a Reply', 'accounting' ),
		'title_reply_to'       => __( 'Leave a Reply to %s', 'accounting' ),
		'title_reply_before'   => '<h4 class="dis-form-title">',
		'title_reply_after'    => '</h4>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel reply', 'accounting' ),
		'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
		'submit_field'         => '<div class="col-md-12">%1$s %2$s</div></div>',
		'format'               => 'xhtml',
		// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_form_top'     => 'ds',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		// redefine your own textarea (the comment body)
		'comment_field'        => '<div class="row"><div class="col-md-12"><div class="form-group"><textarea id="comment" class="form-control" name="comment" placeholder="Your Reply *" aria-required="true" rows="4" data-error="Leave a message for me"></textarea><div class="help-block with-errors"></div></div></div>',
		'fields'               => apply_filters( 'comment_form_default_fields', array(

				'author' =>
					'<div class="row"><div class="col-md-12"><div class="form-group">' .
					'<input id="author" name="author" class="form-control" placeholder="Name *" type="text" data-error="Fullname is required." value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30"' . $aria_req . ' /><div class="help-block with-errors"></div></div></div>',

				'email' =>
					'<div class="col-md-12"><div class="form-group">' .
					'<input id="email" name="email" class="form-control" placeholder="Email *" type="email" data-error="Valid email is required." value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></div></div>',
				'url'   =>
					'<div class="col-md-12"><div class="form-group">' .
					'<input id="url" class="form-control" placeholder="Your Website" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'" size="30" /></div></div></div>',


			)
		),
	);

	comment_form( $comments_args );
	?>

</div><!-- #comments -->