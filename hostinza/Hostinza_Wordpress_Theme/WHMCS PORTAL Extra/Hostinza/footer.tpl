
</div><!-- /.main-content -->
{if !$inShoppingCart && $secondarySidebar->hasChildren()}
    <div class="col-md-3 pull-md-left sidebar  sidebar-secondary">
        {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
    </div>
{/if}
<div class="clearfix"></div>
</div>
</div>
</section>


<!-- footer section start -->
<footer class="xs-footer-section">
    <div class="footer-group" style="background-image: url({$WEB_ROOT}/templates/{$template}/img/xs-footer-bg.png);">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp">
                            <h3 class="widget-title">Services</h3>
                            <ul class="xs-list">
                                <li><a href="#">Shared Hosting</a></li>
                                <li><a href="#">Reseller Hosting</a></li>
                                <li><a href="#">VPS Hosting</a></li>
                                <li><a href="#">Cloud Hosting</a></li>
                                <li><a href="#">Dedicated Hosting</a></li>
                                <li><a href="#">Domain Name</a></li>
                            </ul><!-- .xs-list END -->
                        </div><!-- .footer-widget END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-duration="1s">
                            <h3 class="widget-title">Company</h3>
                            <ul class="xs-list">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Latest Blog</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Partners</a></li>
                            </ul><!-- .xs-list END -->
                        </div><!-- .footer-widget END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-duration="1.3s">
                            <h3 class="widget-title">Solutions</h3>
                            <ul class="xs-list">
                                <li><a href="#">Legal</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Acceptable Policy</a></li>
                                <li><a href="#">Documentation</a></li>
                            </ul><!-- .xs-list END -->
                        </div><!-- .footer-widget END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget wow fadeInUp" data-wow-duration="1.5s">
                            <h3 class="widget-title">Contact Info</h3>
                            <ul class="contact-info-widget">
                                <li class="media">
                                    <img src="{$WEB_ROOT}/templates/{$template}/img/xs-address-pin.png" class="d-flex" alt="contact icon">
                                    <span class="media-body">9/4c, 1010 Avenue, NY, USA</span>
                                </li><!-- .media END -->
                                <li class="media">
                                    <img src="{$WEB_ROOT}/templates/{$template}/img/xs-phone-pin.png" class="d-flex" alt="contact icon">
                                    <span class="media-body">009-215-5596 (toll free) 009-215-5596</span>
                                </li><!-- .media END -->
                                <li class="media">
                                    <img src="{$WEB_ROOT}/templates/{$template}/img/xs-email-icon.png" class="d-flex" alt="contact icon">
                                    <span class="media-body">9/4c, 1010 Avenue, NY, USA</span>
                                </li><!-- .media END -->
                            </ul><!-- .contact-info-widget -->
                        </div><!-- .footer-widget END -->
                    </div>
                </div><!-- .row END -->
            </div><!-- .container END -->
        </div><!-- .footer-main END -->
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-bottom-info wow fadeInUp">
                            <p>Offers valid for a limited time onlyand  reflect multi  annual discounts. Other terms and conditions may apply.  <a href="#">Click Here</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="xs-list list-inline wow fadeInUp" data-wow-duration="1s">
                            <li><img src="{$WEB_ROOT}/templates/{$template}/img/security/security-company-images-1.png" alt="security company images"></li>
                            <li><img src="{$WEB_ROOT}/templates/{$template}/img/security/security-company-images-2.png" alt="security company images"></li>
                            <li><img src="{$WEB_ROOT}/templates/{$template}/img/security/security-company-images-3.png" alt="security company images"></li>
                            <li><img src="{$WEB_ROOT}/templates/{$template}/img/security/security-company-images-4.png" alt="security company images"></li>
                        </ul>
                    </div>
                </div><!-- .row END -->
            </div><!-- .footer-bottom end -->
        </div><!-- .container end -->
    </div><!-- .footer-group END -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copyright-text wow fadeInUp">
                        <p>Copyright &copy; {$date_year} {$companyname}. All Rights Reserved. </p>
                    </div><!-- .copyright-text END -->
                </div>
                <div class="col-md-4">
                    <div class="footer-logo-wraper wow fadeInUp" data-wow-duration="1s">
                        <a href="{$WEB_ROOT}/index.php" class="footer-logo"><img src="{$assetLogoPath}" alt="{$companyname}"></a>
{*                        <a href="index.html" class="footer-logo"><img src="{$WEB_ROOT}/templates/{$template}/img/xs-footer-logo.png" alt="footer logo"></a>*}
                    </div><!-- .footer-logo-wraper END -->
                </div>
                <div class="col-md-4">
                    <div class="social-list-wraper wow fadeInUp" data-wow-duration="1.3s">
                        <ul class="social-list">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="googlePlus"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div><!-- .social-list-wraper END -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </div><!-- .footer-copyright END -->
</footer>
<!-- footer section end -->

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
                    <i class="fab fa-circle-o-notch fa-spin"></i> Loading...
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
