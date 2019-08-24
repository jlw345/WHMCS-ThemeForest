{if !$loginpage and $templatefile ne "clientregister"}
{if $templatefile != 'homepage'}
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
{/if}
<div class="support-links container-fluid">
    <div class="row">
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="{$WEB_ROOT}/templates/{$template}/images/info.svg" alt=""></div>
                <a href="{$WEB_ROOT}/contact.php" class="link">Let’s talk</a>
                <div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ccusantium.</div>
            </div>
        </div>
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="{$WEB_ROOT}/templates/{$template}/images/chat.svg" alt=""></div>
                <a href="{$WEB_ROOT}/clientarea.php" class="link">Go to support center</a>
                <div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ccusantium.</div>
            </div>
        </div>
    </div>
</div>
<div class="footer container-fluid">
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="{$WEB_ROOT}/index.php?rp=/announcements">Press & Media</a></li>
                        <li><a href="{$WEB_ROOT}/index.php?rp=/announcements">News & Blog</a></li>
                        <li><a href="{$WEB_ROOT}/contact.php">Contact Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Hosting</h4>
                    <ul>
                        <li><a href="#">Web Hosting</a></li>
                        <li><a href="#">Wordpress Hosting</a></li>
                        <li><a href="#">Cloud Hosting</a></li>
                        <li><a href="#">VPS Hosting</a></li>
                        <li><a href="#">Dedicated Hosting</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
                <div class="footer-menu">
                    <h4>Domains</h4>
                    <ul>
                        <li><a href="#">Register Domains</a></li>
                        <li><a href="#">Transfer Domains</a></li>
                        <li><a href="#">Manage Domains</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="{$WEB_ROOT}/clientarea.php">Client area</a></li>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>  
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="footer-menu custom-footer-menu">
                    <h4>Contact us</h4>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <ul>
                        <li>Tel: +(973) 17 880038</li>
                        <li><a href="#">Chatting service</a></li>
                        <li><a href="#">Submit a ticket</a></li>
                        <li><a href="#">Our location</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-footer-menu">
                        <ul>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">© Copyright 2018 HostBee Hosting LLC, All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
</div>

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
{/if}
<script src="{$WEB_ROOT}/templates/{$template}/js/slick.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>
{$footeroutput}

</body>
</html>
