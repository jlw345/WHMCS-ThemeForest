
                </div><!-- /.main-content -->
                {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                    <div class="col-md-3 pull-md-left sidebar sidebar-secondary">
                        {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                    </div>
                {/if}
            <div class="clearfix"></div>
        </div>
    </div>
</section>

<!-- Start Subscribe Area -->
<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="subscribe-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <!-- Start Sucscribe Heading -->
                            <div class="subscribe-text" data-animate="fadeInUp" data-delay=".3">
                                <h4>Subscribe</h4>
                                <p>To Our Newsletter For Daily Update</p>   
                            </div>
                            <!-- End Subscribe Heading -->
                        </div>
                        <div class="col-md-6">
                            <!-- Start Subscribe Form -->
                            <div class="subscribe-from" data-animate="fadeInUp" data-delay=".3">
                                <form class="parsley-validate" action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                    <div class="input-wrap">
                                        <input class="form-control" type="email" name="EMAIL" id="#" placeholder="Type your email here" required>
                                        <span class="highlight"></span>
                                    </div>
                                    <button class="subscribe-btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Area -->

<!-- Start Footer -->
<footer class="footer">
    <!-- Start Footer Top -->
    <div class="footer-top pt-130 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <!-- Start Footer Widget -->
                    <div class="footer-widget mb-30">
                        <a href="index.html" class="footer-logo"  data-animate="fadeInUp" data-delay="0">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/logo.png" alt="">
                        </a>
                        <div class="footer-about" data-animate="fadeInUp" data-delay=".05">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected</p>
                            <p class="mt-30">it is pleasure, but because those who do not know how to pursue pleasure form.</p>
                            <a href="#" class="footer-about-btn" data-animate="fadeInUp" data-delay=".1">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Footer Widget -->
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <!-- Start Footer Widget -->
                    <div class="footer-widget widget mb-30">
                        <h4 class="widget-title" data-animate="fadeInUp" data-delay=".15">Recent News</h4>
                        <!-- Start Footer Blog -->
                        <div class="footer-blog">
                            <div class="single-footer-blog media mb-30" data-animate="fadeInUp" data-delay=".2">
                                <img src="{$WEB_ROOT}/templates/{$template}/img/footer-blog-1.jpg" alt="Footer Blog">
                                <div class="media-body">
                                    <h5><a href="#">We build positive brand’s img visually.</a></h5>
                                    <a href="#"><span class="date"><i class="fa fa-clock-o"></i>20 June 2018</span></a>
                                </div>
                            </div>
                            <div class="single-footer-blog media mb-30" data-animate="fadeInUp" data-delay=".25">
                                <img src="{$WEB_ROOT}/templates/{$template}/img/footer-blog-2.jpg" alt="Footer Blog">
                                <div class="media-body">
                                    <h5><a href="#">Everything you need to know to cut.</a></h5>
                                    <a href="#"><span class="date"><i class="fa fa-clock-o"></i>20 June 2018</span></a>
                                </div>
                            </div>
                            <div class="single-footer-blog media mb-30" data-animate="fadeInUp" data-delay=".3">
                                <img src="{$WEB_ROOT}/templates/{$template}/img/footer-blog-3.jpg" alt="Footer Blog">
                                <div class="media-body">
                                    <h5><a href="#">The cord and ditch cable to order now.</a></h5>
                                    <a href="#"><span class="date"><i class="fa fa-clock-o"></i>20 June 2018</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer Blog -->
                    </div>
                    <!-- End Footer Widget -->
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <!-- Start Footer Widget -->
                    <div class="footer-widget widget mb-30">
                        <h4 class="widget-title" data-animate="fadeInUp" data-delay=".3">Find Us Everywhere</h4>
                        <!-- Start Footer Info -->
                        <div class="footer-info">
                            <div class="single-footer-info " data-animate="fadeInUp" data-delay=".35">
                                <strong><i class="fa fa-mobile-alt"></i></strong>
                                <h5>(888) 888-7894</h5>
                                <h5>support@example.com</h5>
                            </div>
                            <div class="single-footer-info" data-animate="fadeInUp" data-delay=".40">
                                <i class="fa fa-map-marker-alt"></i>
                                <p>CA 96022 Riverwood Drive Street
                                Suite 3845 Cottonwood</p>
                            </div>
                            <div class="single-footer-info" data-animate="fadeInUp" data-delay=".45">
                                <i class="fa fa-globe"></i>
                                <p>yourdomainname.com</p>
                            </div>
                        </div>
                        <!-- End Footer Info -->

                        <!-- Start Social Icons -->
                        <div class="footer-social-icon" data-animate="fadeInUp" data-delay=".5">
                            <ul class="social-icon">    
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li> 
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Social Icons -->
                    </div>
                    <!-- End Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->

    <!-- Start Copyright-->
    <div class="footer-bottom text-center">
        <small>Copyright 2018 by <a class="text-white" href="https://themelooks.com/" target="_blank"><strong>ThemeLooks</strong></a>. All Rights Reserved.</small>
    </div>
    <!-- End Copyright -->
</footer>
<!-- End Footer -->

<!-- Start Back to Top Button -->
<a href="#" class="back-top">
    <i class="fa fa-caret-up"></i>TOP
</a>
<!-- End Back to Top Button -->

<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fas fa-circle-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

{$footeroutput}

<script src="{$WEB_ROOT}/templates/{$template}/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/plugins/color-switcher/color-switcher.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/plugins/parsley/parsley.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/theme/menu.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/theme/scripts.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/theme/custom.js"></script>

</body>
</html>
