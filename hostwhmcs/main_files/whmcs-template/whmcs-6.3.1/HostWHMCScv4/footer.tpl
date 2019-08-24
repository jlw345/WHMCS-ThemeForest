
        </div><!-- /.main-content -->
        {if !$inShoppingCart && $secondarySidebar->hasChildren()}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
            </div>
        {/if}
    </div>
    <div class="clearfix"></div>
</section>

<!-- Subscribe Area Start -->
<div id="subscribe">
    <div class="subscribe--sticky">
        <div class="container">
            <!-- Subscribe Content Start -->
            <div class="subscribe--content" data-bg-img="{$WEB_ROOT}/templates/{$template}/img/subscribe-img/bg.png">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Section Title Start -->
                        <div class="section--title block">
                            <h2>Subscribe To Our<span>Newsletter</span></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <div class="col-md-8">
                        <!-- Subscribe Form Start -->
                        <div class="subscribe--form">
                            <form action="http://themelooks.us12.list-manage.com/subscribe/post?u=50e1e21235cbd751ab4c1ebaa&amp;id=ac81d988e4" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate">
                                <div class="input--text">
                                    <input type="text" value="" name="EMAIL" placeholder="Enter your email address">
                                    <span class="highlight"></span>
                                </div>
                                <button type="submit" class="btn--primary btn--ripple">Subscribe</button>
                            </form>
                        </div>
                        <!-- Subscribe Form End -->
                    </div>
                </div>
            </div>
            <!-- Subscribe Content End -->
        </div>
    </div>
</div>
<!-- Subscribe Area End -->

<!-- Footer Area Start -->
<footer id="footer">
    <div class="container">
        <!-- Footer Background Image Start -->
        <div class="footer--bg" data-bg-img="{$WEB_ROOT}/templates/{$template}/img/footer-img/bg.png"></div>
        <!-- Footer Background Image End -->
        <div class="row">
            <!-- Footer Widget Start -->
            <div class="col-md-4 col-md-offset-2 footer--widget">
                <!-- Footer About Widget Start -->
                <div class="footer--about">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In odio pariatur nobis blanditiis, non labore quidem sapiente provident dolorem et atque distinctio deleniti mollitia nostrum velit iste, aperiam eaque! Soluta! Impedit harum quis maxime ducimus  laborum nesciunt soluta tempore aperiam ex quasi minus.</p>
                    <a href="#"><i class="fa fm fa-angle-double-right"></i>Read More</a>
                </div>
                <!-- Footer About Widget End -->
            </div>
            <!-- Footer Widget End -->
            <!-- Footer Widget Start -->
            <div class="col-md-3 footer--widget">
                <!-- Footer Links Widget Start -->
                <div class="footer--links">
                    <h2>Useful Links</h2>
                    <ul>
                        <li><a href="#"><i class="fa fm fa-angle-double-right"></i>About Us</a></li>
                        <li><a href="#"><i class="fa fm fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="#"><i class="fa fm fa-angle-double-right"></i>Terms of Service</a></li>
                        <li><a href="#"><i class="fa fm fa-angle-double-right"></i>Privacy</a></li>
                        <li><a href="#"><i class="fa fm fa-angle-double-right"></i>Contact Us</a></li>
                    </ul>
                </div>
                <!-- Footer Links Widget End -->
            </div>
            <!-- Footer Widget End -->
            <!-- Footer Widget Start -->
            <div class="col-md-3 footer--widget">
                <!-- Footer Contact Widget Start -->
                <div class="footer--contact">
                    <h2>Contact</h2>
                    <a href="#" class="btn-block btn--primary btn--ripple"><i class="fa fm fa-comment"></i>LIVE CHAT</a>
                    <a href="tel:+444000000" class="btn-block btn--primary btn--ripple"><i class="fa fm fa-phone"></i>+444 000 000</a>
                    <a href="mailto:example@example.com" class="btn-block btn--primary btn--ripple"><i class="fa fm fa-envelope"></i>example@example.com</a>

                    <div class="footer--contact-social">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Contact Widget End -->
            </div>
            <!-- Footer Widget End -->
        </div>
    </div>
    <!-- Footer Copyright Start -->
    <div class="footer--copyright text-center">
        <div class="container">
            <p>Copyright {$date_year} <a href="{$WEB_ROOT}/index.php">{$companyname}</a>. All Rights Reserved.</p>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
<!-- Footer Area End -->

<script src="{$BASE_PATH_JS}/bootstrap.min.js"></script>
<script src="{$BASE_PATH_JS}/jquery-ui.min.js"></script>
<script type="text/javascript">
    var csrfToken = '{$token}',
        markdownGuide = '{lang key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{lang key="locale"}{else}en_GB{/if}',
        saved = '{lang key="markdown.saved"}',
        saving = '{lang key="markdown.saving"}';
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/whmcs.js"></script>
<script src="{$BASE_PATH_JS}/AjaxModal.js"></script>
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
