<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="media">

	<?php if ( have_comments() ) : ?>

	<h3 class="comments-title">
		<?php
			$comments_number = get_comments_number();
		if ( '1' === $comments_number ) {
			/* translators: %s: post title */
			printf( _x( 'One comment on &ldquo;%s&rdquo;', 'comments title', 'twentyfourteen' ), get_the_title() );
		} else {
			printf(
				/* translators: 1: number of comments, 2: post title */
				_nx(
					'%1$s comment on &ldquo;%2$s&rdquo;',
					'%1$s comments on &ldquo;%2$s&rdquo;',
					$comments_number,
					'comments title',
					'twentyfourteen'
				),
				number_format_i18n( $comments_number ),
				get_the_title()
			);
		}
		?>
	</h3>
        <hr>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ul class="comment-list">
    <?php
        // Register Custom Comment Walker
        require_once('wp-bootstrap-comment-walker.php');

        wp_list_comments( array(
            'style'         => 'ul',
            'short_ping'    => true,
            'avatar_size'   => '64',
            'walker'        => new Bootstrap_Comment_Walker(),
        ) );
    ?>
</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>
    <div class="post-comment">
		<?php 
			$fields = array(
				'author' => '<div class="form-group"> <div class="col-lg-4"> <input name="author" class="col-lg-12 form-control" type="text" placeholder="' . __( 'Name', 'domainreference' ) . ( $req ? '*' : ' ' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '> </div>',
				'email' => '<div class="col-lg-4"> <input name="email" class="col-lg-12 form-control" type="text" placeholder="'.__( 'Email', 'domainreference' ) . ( $req ? '*' : ' ' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . '> </div>',
				'url' => '<div class="col-lg-4"> <input name="url" class="col-lg-12 form-control" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" type="text" placeholder="'.__( 'Website', 'domainreference' ).'"> </div> </div> ',
			);
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
			$fields['cookies'] =  '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.' ) . '</label></p>';

			comment_form(array(
				'class_form' => 'form-horizontal',
				'comment_field' => '<div class="form-group"> <div class="col-lg-12"> <textarea class=" form-control" placeholder="'._x( 'Comment', 'noun' ).'" rows="8"></textarea> </div> </div>',
				'class_submit' => 'btn btn-danger pull-right',
				'fields' => $fields
			)); 
		?>
    </div>

</div><!-- #comments -->
