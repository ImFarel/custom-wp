<!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <h1>contact info</h1>
                    <address>
                        <p>Email : <a href="javascript:;">eunice@uxindo.com</a></p>
                        <p>Australian Business Number: 634039759 </p>
                        <p>Indonesian NPWP: 76.431.729.3-018.000</p>
                        <p>Copyright © 2019 UX Indonesia </p>
                        <p> PT UXINDO DIGITAL INDONESIA</p>
                        <p>All Rights Reserved</p>
                    </address>
                </div>
                <!-- <div class="col-lg-5 col-sm-5">
                    <h1>latest tweet</h1>
                    <div class="tweet-box">
                        <i class="fa fa-twitter"></i>
                        <em>Please follow <a href="javascript:;">@nettus</a> for all future updates of us! <a href="javascript:;">twitter.com/vectorlab</a></em>
                    </div>
                </div> -->
                <div class="col-lg-6 col-sm-6 ">
                    <h1>stay connected</h1>
                    <ul class="social-link-footer list-unstyled">
                        <li><a href="https://facebook.com/uxindo"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/uxindo/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://uxindo.com/?feed=rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/ux-indonesia"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/indonesia_ux"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://youtube.com/c/uxindonesia"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/hover-dropdown.js"></script>
    <script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.parallax-1.1.3.js"></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/link-hover.js"></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fancybox/source/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common-scripts.js"></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/revulation-slide.js"></script>
    <?php //wp_footer(); ?>


  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });

      //    fancybox
      jQuery(".fancybox").fancybox();



  </script>
  </body>

</html>
