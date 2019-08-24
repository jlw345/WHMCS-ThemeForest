
        </div><!-- /.main-content -->
        {if !$inShoppingCart && $secondarySidebar->hasChildren()}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
            </div>
        {/if}
    </div>
    <div class="clearfix"></div>
</section>
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-2 col-md-1">
                <img class="logo-mini" src="{$WEB_ROOT}/templates/{$template}/images/logo-mini.png" alt="Hostio" />
            </div>
            <div class="col-xs-12 col-sm-7 col-md-4">
                <h4>About</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2">
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
            <div class="col-xs-12 col-sm-12 col-md-2">
                <div class="phone"><i class="fa fa-phone"></i> 00 285 900 38502</div>
                <div class="email"><i class="fa fa-envelope"></i> hello@hostio.io</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="address">
                    <i class="fa fa-map-marker"></i> 
                    <div>Brizbin, Australia<br>
                        Road 398, Center<br>
                        Office 38, floor 3</div>
                </div>
                <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
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

<script src="{$WEB_ROOT}/templates/{$template}/js/bootstrap.min.js"></script>
{if $templatefile == 'homepage'}
<script type="text/javascript" src="{$WEB_ROOT}/templates/{$template}/js/createjs.min.js"></script>
<script type="text/javascript" src="{$WEB_ROOT}/templates/{$template}/js/handanimation.js"></script>
<script type="text/javascript" src="{$WEB_ROOT}/templates/{$template}/js/animation-start.js"></script>
{/if}
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>

{$footeroutput}

</body>
</html>
