<div class="blog-side-item">
    <!-- <div class="search-row">
        <input type="text" class="form-control" placeholder="Search here">
    </div> -->
    <div class="category">
        <h3>Categories</h3>
        <ul class="list-unstyled">
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </div>

    <div class="blog-post">
        <h3>Latest Blog Post</h3>
        <div class="media">
            <a class="pull-left" href="javascript:;">
                <img class=" " src="img/blog/blog-thumb-1.jpg" alt="">
            </a>
            <div class="media-body">
                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                <p>
                    Donec id elit non mi porta gravida at eget metus amet int
                </p>
            </div>
        </div>
        <div class="media">
            <a class="pull-left" href="javascript:;">
                <img class=" " src="img/blog/blog-thumb-2.jpg" alt="">
            </a>
            <div class="media-body">
                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                <p>
                    Donec id elit non mi porta gravida at eget metus amet int
                </p>
            </div>
        </div>
        <div class="media">
            <a class="pull-left" href="javascript:;">
                <img class=" " src="img/blog/blog-thumb-3.jpg" alt="">
            </a>
            <div class="media-body">
                <h5 class="media-heading"><a href="javascript:;">02 May 2013 </a></h5>
                <p>
                    Donec id elit non mi porta gravida at eget metus amet int
                </p>
            </div>
        </div>
    </div>

    <!-- <div class="tags">
        <h3>Tags</h3>
        <ul class="list-unstyled tag">
            <li><a href="#">flat</a></li>
            <li><a href="#"> clean</a></li>
            <li><a href="#"> admin</a></li>
            <li><a href="#"> UI</a></li>
            <li><a href="#"> responsive</a></li>
            <li><a href="#"> Web Design</a></li>
            <li><a href="#"> UIX</a></li>
            <li><a href="#"> Blog</a></li>
            <li><a href="#">flat Admin</a></li>
            <li><a href="#"> Dashboard</a></li>
        </ul>
    </div> -->


    <div class="archive">
        <h3>Archive</h3>
        <ul class="list-unstyled">
            <?php wp_get_archives(); ?>
        </ul>
    </div>


</div>