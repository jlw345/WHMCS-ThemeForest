<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hostiko
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'hostiko' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'hostiko' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h4><!-- .comments-title -->
		<?php the_comments_navigation(); ?>
        <ul class="list-unstyled comment-list">
			<?php
			// Register Custom Comment Walker
			wp_list_comments( array(
				'style'         => 'ul',
				'short_ping'    => true,
				'avatar_size'   => '64',
				'walker'        => new Bootstrap_Comment_Walker(),
			) );
			?>
        </ul><!-- .comment-list -->
		<?php the_comments_navigation();
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hostiko' ); ?></p>
		<?php
		endif;
	endif; // Check for have_comments().
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$fields =  array(
	'author' =>
		'<p class="comment-form-author"><input placeholder=" '. __( 'Name *', 'hostiko' ).' " id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' /></p>',
	'email' =>
		'<p class="comment-form-email"><input placeholder="' . __( 'Email *', 'hostiko' ) . '" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' /></p>',
	'url' =>
		'<p class="comment-form-url"><input placeholder="' . __( 'Website *', 'hostiko' ) . '" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" /></p>',
);
$args = array(
	'id_form'           => 'commentform',
	'class_form'      => 'comment-form',
	'id_submit'         => 'submit',
	'class_submit'      => 'submit bbtn btn-default',
	'name_submit'       => 'submit',
	'title_reply'       => __( 'Leave a Reply','hostiko' ),
	'title_reply_to'    => __( 'Leave a Reply to %s' ,'hostiko'),
	'cancel_reply_link' => __( 'Cancel Reply' ,'hostiko'),
	'label_submit'      => __( 'Post Comment' ,'hostiko'),
	'format'            => 'xhtml',
	'comment_field' =>  '<p class="comment-form-comment"><label for="commentaaaa"></label><textarea placeholder="' . _x( 'Comment', 'noun' ,'hostiko') .
		'" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
		'</textarea></p>',
	'must_log_in' => '<p class="must-log-in">' .
		sprintf(
			__( 'You must be <a href="%s">logged in</a> to post a comment.','hostiko' ),
			wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
		) . '</p>',
	'logged_in_as' => '<p class="logged-in-as">' .
		sprintf(
			__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>','hostiko' ),
			admin_url( 'profile.php' ),
			$user_identity,
			wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
		) . '</p>',
	'comment_notes_before' => '<p class="comment-notes">' .
		__( 'Your email address will not be published.', 'hostiko' ).'</p>',
	'comment_notes_after' => '',
	'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);
comment_form($args);
?>
</div><!-- #comments -->
