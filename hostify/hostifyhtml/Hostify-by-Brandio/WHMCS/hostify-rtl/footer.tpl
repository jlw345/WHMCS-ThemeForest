{if $loginpage eq 0 and $templatefile ne "clientregister"}
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
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-5">
                <div class="footer-menu-holder">
                    <h4>About</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="address-holder">
                    <div class="phone"><i class="fas fa-phone"></i> 00 285 900 38502</div>
                    <div class="email"><i class="fas fa-envelope"></i> hello@hostify.com</div>
                    <div class="address">
                        <i class="fas fa-map-marker"></i> 
                        <div>City Avenue, Office 64,<br>
                            Floor 6,  Milbourne,<br>
                            Australia.</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    {if !$loggedin }
                    <h4>Links</h4>
                    {else}
                    <h4>Client details</h4>
                    {/if}
                    <ul class="footer-menu">
                        {if !$loggedin }
                            {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                        {else}
                            {include file="$template/includes/customnavbar.tpl" navbar=$secondaryNavbar}
                        {/if}
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
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
{if $templatefile eq "clientregister"}{/if}
<script src="{$WEB_ROOT}/templates/{$template}/js/bootstrap-slider.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/slick.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>

{$footeroutput}

</body>
</html>
