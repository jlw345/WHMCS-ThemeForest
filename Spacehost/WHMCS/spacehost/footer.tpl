
                </div><!-- /.main-content -->
                {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                    <div class="col-md-3 pull-md-left sidebar">
                        {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                    </div>
                {/if}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
</div>
<div id="contact" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Get in touch</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-holder">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-box">
                                <h4>Get the right support</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus<br>
error sit voluptatem accusantium<br>
Lorem ipsusm set amir</p>
                                <a href="#">Visit our support portal</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-box">
                                <h4>Talk to customer service</h4>
                                <p>Olim ut perspiciatis unde omnis iste natus<br>
error sit voluptatem accusantium<br>
Lorem ipsusm set amir</p>
                                <a href="#">Call us on 38-244-64-23</a>
                            </div>
                        </div>
                    </div>
                    {if $templatefile eq "contact"}
                    {else}
                    <div class="row">
                        <form id="contactform" method="post" action="{$WEB_ROOT}/templates/{$template}/mailer.php">
                            <div class="form-items-holder">
                                <div class="col-sm-12 col-md-6"><input type="text" id="name" name="name" placeholder="Your name" required></div>
                                <div class="col-sm-12 col-md-6"><input type="email" id="email" name="email" placeholder="Email Address" required></div>
                                <div class="col-md-12"><textarea id="message" name="message" placeholder="Write a message" required></textarea></div>
                                <div class="ajax-button col-md-12">
                                   <input id="submit" type="submit" value="Send message">
                                </div>
                                <div class="col-md-12" id="form-messages"></div>
                            </div>
                        </form>
                    </div>
                    {/if}
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

<script src="{$WEB_ROOT}/templates/{$template}/js/slick.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>
{$footeroutput}

</body>
</html>
