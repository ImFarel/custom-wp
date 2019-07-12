<?php 

if ( !isset($content_width) ) {
    $content_width = 660;
}


function csswp_setup()
{
    add_theme_support('automatic-fee-links');
    add_theme_support('title-tag');

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






?>