<?php 

if ( !isset($content_width) ) {
    $content_width = 660;
}


function csswp_setup()
{
    add_theme_support('automatic-fee-links');
    add_theme_support('title-tag');
    add_theme_support( 'html5', array( 'comment-list' ) );

    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'csswp' ),
    ) );
}

add_action('after_setup_theme', 'csswp_setup');

function csswp_scripts()
{
    // add style
    wp_enqueue_style('theme-core', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style('theme', get_template_directory_uri().'/css/theme.css' );
    wp_enqueue_style('bootstrap-reset', get_template_directory_uri().'/css/bootstrap-reset.css' );
    wp_enqueue_style('assets-font', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.css' );
    wp_enqueue_style('slider', get_template_directory_uri().'/css/flexslider.css' );
    wp_enqueue_style('jsquery-slider', get_template_directory_uri().'/assets/bxslider/jquery.bxslider.css' );
    wp_enqueue_style('fancy-box', get_template_directory_uri().'/assets/fancybox/source/jquery.fancybox.css' );
    wp_enqueue_style('rev-slider', get_template_directory_uri().'/assets/revolution_slider/css/rs-style.css' );
    wp_enqueue_style('rev-slider-setting', get_template_directory_uri().'/assets/revolution_slider/rs-plugin/css/settings.css' );
    wp_enqueue_style('custom', get_template_directory_uri().'/style.css' );
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/style-responsive.css' );

}
add_action('wp_enqueue_scripts', 'csswp_scripts');
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/**
 * Returns information about the current post's discussion, with cache support.
 */
function twentynineteen_get_discussion_data() {
	static $discussion, $post_id;

	$current_post_id = get_the_ID();
	if ( $current_post_id === $post_id ) {
		return $discussion; /* If we have discussion information for post ID, return cached object */
	} else {
		$post_id = $current_post_id;
	}

	$comments = get_comments(
		array(
			'post_id' => $current_post_id,
			'orderby' => 'comment_date_gmt',
			'order'   => get_option( 'comment_order', 'asc' ), /* Respect comment order from Settings » Discussion. */
			'status'  => 'approve',
			'number'  => 20, /* Only retrieve the last 20 comments, as the end goal is just 6 unique authors */
		)
	);

	$authors = array();
	foreach ( $comments as $comment ) {
		$authors[] = ( (int) $comment->user_id > 0 ) ? (int) $comment->user_id : $comment->comment_author_email;
	}

	$authors    = array_unique( $authors );
	$discussion = (object) array(
		'authors'   => array_slice( $authors, 0, 6 ),           /* Six unique authors commenting on the post. */
		'responses' => get_comments_number( $current_post_id ), /* Number of responses. */
	);

	return $discussion;
}





?>