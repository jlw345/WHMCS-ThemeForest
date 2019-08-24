
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

<!-- Footer Area Start -->
<div id="footer">
    <div class="container">
        <div class="row">
            <!-- Footer About Widget Start -->
            <div class="col-md-6 footer-widget">
                <div class="footer-about">
                    <!-- Footer Title Start -->
                    <h4>About Us</h4>
                    <!-- Footer Title End -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quod mollitia quisquam. Architecto quam in atque sint voluptatem, consequatur consectetur ab ipsum maxime quod consequuntur excepturi illum dolorem ex modi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi id ex perspiciatis distinctio sequi minima. Velit inventore fugit, quisquam molestias nesciunt dolorem reprehenderit temporibus unde, cupiditate pariatur libero dolorum!</p>
                    <a href="about.html" class="btn btn-custom-reverse">Read More</a>
                </div>
            </div>
            <!-- Footer About Widget End -->
            <!-- Footer Subscribe Widget Start -->
            <div class="col-md-3 col-sm-6 footer-widget">
                <!-- Footer Title Start -->
                <h4>Subscribe</h4>
                <!-- Footer Title End -->
                <!-- Subscribe Form Start -->
                <form action="http://themelooks.us12.list-manage.com/subscribe/post?u=50e1e21235cbd751ab4c1ebaa&amp;id=ac81d988e4" method="post" name="mc-embedded-subscribe-form" target="_blank" id="subscribeForm" novalidate="novalidate">
                    <input type="text" name="MERGE1" placeholder="Enter your full name" class="input-box mb">
                    <input type="text" name="EMAIL" placeholder="Enter your email address" class="input-box">
                    <input type="submit" value="Subscribe" class="submit-button">
                </form>
                <!-- Subscribe Form End -->
            </div>
            <!-- Footer Subscribe Widget End -->
            <!-- Footer Widget Start -->
            <div class="col-md-3 col-sm-6 footer-widget">
                <!-- Footer Title Start -->
                <h4>Company</h4>
                <!-- Footer Title End -->
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Acceptable Usage Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">DMCA Policy</a></li>
                </ul>
            </div>
            <!-- Footer Widget End -->
        </div>
    </div>
    <div class="contact-info">
        <div class="container">
            <div class="row">
                <!-- Contact Info Item Start -->
                <div class="col-md-3 col-xs-6">
                    <i class="fa fa-headphones"></i>
                    <a href="#">24/7 Customer Support</a>
                </div>
                <!-- Contact Info Item End -->
                <!-- Contact Info Item Start -->
                <div class="col-md-3 col-xs-6">
                    <i class="fa fa-envelope"></i>
                    <a href="#">support@example.com</a>
                </div>
                <!-- Contact Info Item End -->
                <!-- Contact Info Item Start -->
                <div class="col-md-3 col-xs-6">
                    <i class="fa fa-comments"></i>                    
                    <a href="#">Click Here To Live Chat</a>
                </div>
                <!-- Contact Info Item End -->
                <!-- Contact Info Item Start -->
                <div class="col-md-3 col-xs-6">
                    <i class="fa fa-phone"></i>
                    <a href="#">+44 000 000 000</a>
                </div>
                <!-- Contact Info Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->

<!-- Copyright Area Start -->
<div id="copyright">
    <div class="container">
        <!-- Copyright Text Start -->
        <p class="left">Copyright &copy; {$date_year} <a href="{$WEB_ROOT}/index.php">EcoHosting</a>. All Rights Reserved.</p>
        <!-- Copyright Text End -->
        <p class="right">We Accept: <img src="{$WEB_ROOT}/templates/{$template}/img/payment-methods.png" alt=""></p>
    </div>
</div>
<!-- Copyright Area End -->
    
<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Back To Top Button Start -->

<!-- EcoHosting Scripts -->
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.validate.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/color.switcher.js"></script>

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

</body>
</html>
