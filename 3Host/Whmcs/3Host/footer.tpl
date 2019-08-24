
        </div><!-- /.main-content -->
        {if !$inShoppingCart && $secondarySidebar->hasChildren()}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
            </div>
        {/if}
    </div>
    <div class="clearfix"></div>
</section>

<section id="footer">
    
    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4>More About Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our History</a></li>
                        <li><a href="#">Media/Press Kit</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Awards</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4>Facilities</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our History</a></li>
                        <li><a href="#">Media/Press Kit</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Awards</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4>Related Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="#services">Services</a></li>
                        <li><a href="#company">Company</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#promo">Promotion Plus</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <h4>3Host Is Global</h4>
                </div>
            </div>
        </div>
        <!--Image Map-->
        <div class="image-map">
            <img src="{$WEB_ROOT}/templates/{$template}/img/content-general/map.png" alt="map">
        </div>
        <!--Image Map-->
    </footer>

    <div class="copy center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><a href="#">&#169; {$date_year} Copyright &copy; by {$companyname}</a></div>
            </div>
        </div>
    </div>
    <!--/Footer-->
</section>

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
