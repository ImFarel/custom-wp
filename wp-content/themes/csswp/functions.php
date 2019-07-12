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
    wp_enqueue_style('theme-reset', get_template_directory_uri().'/css/bootstrap-reset.css' );
    wp_enqueue_style('asset-font', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.css' );
    wp_enqueue_style('slider', get_template_directory_uri().'/css/flexslider.css' );
    wp_enqueue_style('jsquery-slider', get_template_directory_uri().'/assets/bxslider/jquery.bxslider.css' );
    wp_enqueue_style('fancy-box', get_template_directory_uri().'/assets/fancybox/source/jquery.fancybox.css' );
    wp_enqueue_style('rev-slider', get_template_directory_uri().'/assets/revolution_slider/css/rs-style.css' );
    wp_enqueue_style('rev-slider-setting', get_template_directory_uri().'/assets/revolution_slider/rs-plugin/css/settings.css' );
    wp_enqueue_style('custom', get_template_directory_uri().'/style.css' );
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/style-responsive.css' );

    //add script
    wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js' );
    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/js/jquery-migrate-1.2.1.min.js' );
    wp_enqueue_script('jquery-flexslider', get_template_directory_uri().'/js/jquery.flexslider.js' );
    wp_enqueue_script('jquery-bxslider', get_template_directory_uri().'/assets/bxslider/jquery.bxslider.js' );
    wp_enqueue_script('jquery-parallax', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js' );
    wp_enqueue_script('jquery-easing', get_template_directory_uri().'/js/jquery.easing.min.js' );
    wp_enqueue_script('jquery-fancybox-pack', get_template_directory_uri().'/assets/fancybox/source/jquery.fancybox.pack.js' );
    wp_enqueue_script('jquery-themepunch-revolution', get_template_directory_uri().'/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js' );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js' );
    wp_enqueue_script('hover-dropdown', get_template_directory_uri().'/js/hover-dropdown.js' );
    wp_enqueue_script('link-hover', get_template_directory_uri().'/js/link-hover.js' );
    wp_enqueue_script('revolution_slider', get_template_directory_uri().'/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js' );
    wp_enqueue_script('common-scripts', get_template_directory_uri().'/js/common-scripts.js' );
    wp_enqueue_script('revulation-slide', get_template_directory_uri().'/js/revulation-slide.js' );

}
add_action('wp_enqueue_scripts', 'csswp_scripts');







?>