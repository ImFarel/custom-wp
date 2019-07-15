<?php 
/**
 * Template Name: Latest News
 * 
 */




get_header(); ?>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Blog</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
        <div class="row">
            <!--blog start-->
            <div class="col-lg-9 ">
            
            <?php query_posts('category_name=news'); ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="blog-item">
                    <div class="row">
                        <div class="col-lg-2 col-sm-2">
                            <div class="date-wrap">
                                <span class="date"><?php echo get_the_date('j'); ?></span>
                                <span class="month"><?php echo get_the_date('F, Y'); ?></span>
                            </div>
                            <div class="comnt-wrap">
                                <span class="comnt-ico">
                                    <i class="fa fa-comments"></i>
                                </span>
                                <span class="value">15</span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-10">
                            <div class="blog-img">
                                <img src="img/blog/img1.jpg" alt=""/>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 text-right">
                            <div class="author">
                                By <a href="#"><?php the_author(); ?></a>
                            </div>
                            <ul class="list-unstyled">
                                <?php the_tags('<li><em>','<br />','</em></li>'); ?>
                            </ul>
                            <div class="shate-view">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;">209 View</a></li>
                                    <li><a href="javascript:;">23 Share</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-10">
                            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-danger">Continue Reading</a>
                        </div>
                    </div>
                </div>

                <?php endwhile; else : ?>

                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                
                <?php endif; ?>
                
                <div class="text-center">
                    <ul class="pagination">
                        <li><?php next_posts_link('Older Posts'); ?></li>
                        <li><?php previous_posts_link('Newer Posts'); ?></li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>
            
            <!--blog end-->
        </div>

    </div>
    <!--container end-->
    
<?php get_footer(); ?>