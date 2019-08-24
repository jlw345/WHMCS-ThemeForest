
        </div><!-- /.main-content -->
        {if !$inShoppingCart && $secondarySidebar->hasChildren()}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
            </div>
        {/if}
    </div>
    <div class="clearfix"></div>
</section>

        <footer class="footer" id="footer">
            <!-- Contact -->
            <div class="contact">
                <!-- Map -->
                <div class="map">
                    <span class="fa fa-map-marker cont"></span>
                    <span>One Brookings Drive St. Louis, Missouri 63130-4899</span>
                </div>
                <!-- Phone -->
                <div class="phone">
                    <span class="fa fa-phone cont"></span>
                    <span>+20 111 235 7755</span>
                </div>
                <!-- Mail -->
                <div class="mail">
                    <span class="fa fa-envelope cont"></span>
                    <a href="mailto:info@whmcsdes.com" target="_top">Info@whmcsdes.com</a>
                </div>
                <!-- Live Chat -->
                <div class="l-chat">
                    <span class="fa fa-headphones cont"></span>
                    <a href="#">Live Chat</a>
                </div>
            </div>
            <!-- Footer Lv2 -->
            <div class="f-lv2">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-lg-3 col-sm-3">
                            <div class="about">
                                <!-- Brand -->
                                <img src="{$WEB_ROOT}/templates/{$template}/img/logo-b.png" alt="X-Data">
                                <!-- iNFO -->
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s .
                                </p>
                                <!-- Links -->
                                <a href="terms.html">Terms |</a>
                                <a href="terms.html">Policy |</a>
                                <a href="contact.html">Careers</a>
                                <!-- CopyRights -->
                                <h4>Copyright &copy; {$date_year} {$companyname}. All Rights Reserved.</h4>
                            </div>
                        </div>
                        <!-- Products -->
                        <div class="col-lg-2 col-sm-3">
                            <div class="links-foot">
                                <h2>Products</h2>
                                <ul>
                                    <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                    <li><a href="vps-hosting.html">Vps Hosting</a></li>
                                    <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                    <li><a href="cloud-hosting.html">Cloud Hosting</a></li>
                                    <li><a href="wordpress-hosting.html">Wordpress Hosting</a></li>
                                    <li><a href="ecommerce-hosting.html">E-commerce Hosting</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Help -->
                        <div class="col-lg-2 col-sm-3">
                            <div class="links-foot">
                                <h2>Help</h2>
                                <ul>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">Tickets</a></li>
                                    <li><a href="comingsoon.html">Coming Soon</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- NewsLetter -->
                        <div class="col-lg-4 col-sm-3">
                            <div class="links-foot">
                                <h2>NewsLetter</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <input class="email-news" type="email" placeholder="email">
                                <input class="sub-news" type="submit" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


<script src="{$BASE_PATH_JS}/bootstrap.min.js"></script>
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
