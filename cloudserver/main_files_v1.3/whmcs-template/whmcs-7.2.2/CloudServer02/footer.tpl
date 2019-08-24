            </div><!-- /.main-content -->
            {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                <div class="col-md-3 pull-md-left sidebar">
                    {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                </div>
            {/if}
        </div>
        <div class="clearfix"></div>
    </div>
</section>
    
<!-- Contact Info Area Start -->
<div id="contactInfo">
    <div class="container">
        <div class="row reset-gutter">
            <!-- Contact Info Item Start -->
            <div class="contact-info--item col-md-3 col-xs-6">
                <a href="#"><i class="fa fa-headphones"></i>24/7 Customer Support</a>
            </div>
            <!-- Contact Info Item End -->
            
            <!-- Contact Info Item Start -->
            <div class="contact-info--item col-md-3 col-xs-6">
                <a href="#"><i class="fa fa-envelope-o"></i>support@example.com</a>
            </div>
            <!-- Contact Info Item End -->
            
            <!-- Contact Info Item Start -->
            <div class="contact-info--item col-md-3 col-xs-6">
                <a href="#"><i class="fa fa-comments-o"></i>Click Here To Live Chat</a>
            </div>
            <!-- Contact Info Item End -->
            
            <!-- Contact Info Item Start -->
            <div class="contact-info--item col-md-3 col-xs-6">
                <a href="#"><i class="fa fa-phone"></i>+44 000 000 000</a>
            </div>
            <!-- Contact Info Item End -->
        </div>
    </div>
</div>
<!-- Contact Info Area End -->

<!-- Footer Area Start -->
<div id="footer">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Start -->
            <div class="col-md-3 col-sm-6 footer-widget">
                <!-- Footer Title Start -->
                <h4>Pages</h4>
                <!-- Footer Title End -->
                
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shared</a></li>
                    <li><a href="#">VPS</a></li>
                    <li><a href="#">Dedicated</a></li>
                    <li><a href="#">Domain</a></li>
                </ul>
            </div>
            <!-- Footer Widget End -->
            
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
            
            <!-- Footer Widget Start -->
            <div class="col-md-3 col-sm-6 footer-widget">
                <!-- Footer Title Start -->
                <h4>Add-on Services</h4>
                <!-- Footer Title End -->
                
                <ul>
                    <li><a href="#">SSL Certificates</a></li>
                    <li><a href="#">Dedicated IPs</a></li>
                    <li><a href="#">Control Panel Licenses</a></li>
                    <li><a href="#">WHMCS License</a></li>
                    <li><a href="#">Migrations / Transfers</a></li>
                </ul>
            </div>
            <!-- Footer Widget End -->
            
            <!-- Footer Widget Start -->
            <div class="col-md-3 col-sm-6 footer-widget">
                <!-- Footer Title Start -->
                <h4>Subscribe</h4>
                <!-- Footer Title End -->
                
                <!-- Footer Subscribe Widget Start -->
                <div class="footer--subscribe-widget" data-form-validation="true">
                    <form action="http://themelooks.us12.list-manage.com/subscribe/post?u=50e1e21235cbd751ab4c1ebaa&amp;id=ac81d988e4" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate">
                        <input type="email" value="" name="EMAIL" placeholder="Enter your email address" class="form-control" required>
                        <input type="submit" value="SUBSCRIBE" class="btn btn-custom-reverse">
                    </form>
                </div>
                <!-- Footer Subscribe Widget End -->
                
                <!-- Footer Social Widget Start -->
                <div class="footer--social-widget">
                    <p>FOLLOW US ON:</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <!-- Footer Social Widget End -->
            </div>
            <!-- Footer Widget End -->
        </div>
    </div>
</div>
<!-- Footer Area End -->
    
<!-- Copyright Area Start -->
<div id="copyright">
    <div class="container">
        <!-- Copyright Text Start -->
        <p class="left">Copyright &copy; {$date_year} <a href="#">CloudServer</a>. All Rights Reserved.</p>
        <!-- Copyright Text End -->
        <p class="right">We Accept: <img src="{$WEB_ROOT}/templates/{$template}/img/payment-methods.png" alt=""></p>
    </div>
</div>
<!-- Copyright Area End -->

<!-- Theme Scripts -->
<script src="{$WEB_ROOT}/templates/{$template}/js/fakeLoader.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.countdown.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.sticky.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.validate.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>

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
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
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
