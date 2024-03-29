<?php
 /*
 * Plugin Name: WP Bootstrap Comment Walker
 * Plugin URI:  https://github.com/wp-bootstrap/wp-bootstrap-comment-walker
 * Version: 2.0.5
 * Description: A WordPress class to format WordPress Comments to Twitter Bootstrap.
 * Author: WP-Bootstrap
 * Author URI: https://github.com/wp-bootstrap
 * GitHub Plugin URI: https://github.com/wp-bootstrap/wp-bootstrap-comment-walker
 * GitHub Branch: master
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
*/

class Bootstrap_Comment_Walker extends Walker_Comment {
	/**
	 * Output a comment in the HTML5 format.
	 *
	 * @access protected
	 * @since 1.0.0
	 *
	 * @see wp_list_comments()
	 *
	 * @param object $comment Comment to display.
	 * @param int    $depth   Depth of comment.
	 * @param array  $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
?>
		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent media' : 'media' ); ?>>

			<?php if ( 0 != $args['avatar_size'] ): ?>
			<div class="media-left">
				<a href="<?php echo get_comment_author_url(); ?>" class="pull-left">
					<?php echo get_avatar( $comment, $args['avatar_size'], '', '', array('class' => 'media-object') ); ?>
				</a>
			</div>
			<?php endif; ?>

			<div class="media-body">

				<?php printf( '<h4 class="media-heading">%s</h4>', get_comment_author_link().' <span>| '.get_comment_date('j F Y').'</span>, '.get_comment_time() ); ?>

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation label label-info"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
				<?php endif; ?>

				<?php comment_text(); ?><!-- .comment-content -->
				
				<ul class="list-inline">
					<?php edit_comment_link( __( 'Edit' ), '<li class="edit-link">', '</li>' ); ?>

					<?php
						comment_reply_link( array_merge( $args, array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<li class="reply-link">',
							'after'     => '</li>'
						) ) );
					?>

				</ul>

			</div>
<?php
	}
}
