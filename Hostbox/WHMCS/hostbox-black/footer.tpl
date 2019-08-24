
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

<div id="contact" class="container-fluid accent-color-bg">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 row-title"> {if !$templatefile eq "contact"}Contact Us{/if} </div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div class="sub-title">Location information</div>
        <p> John doe<br>
          Street 38, Blcok 1205<br>
          Road 544<br>
          United Kingdom. </p>
        <p> +123 58230189<br>
          contact@hotstbox.com </p>
          <p>Copyright &copy; {$date_year} {$companyname}. All Rights Reserved.</p>
      </div>
      <div class="col-sm-7">
        {if $templatefile eq "contact"}
          <div class="sub-title">Related links</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <ul class="links">
              <li><a href="#">Terms and conditions</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">About us</a></li>
          </ul>
        {else}
        <form id="contactform" method="post" action="{$WEB_ROOT}/templates/{$template}/mailer.php">
            <div class="form-items-holder">
                <div><input type="text" id="name" name="name" placeholder="Name" required></div>
                <div><input type="email" id="email" name="email" placeholder="Email" required></div>
                <div class="form-label">Message</div>
                <div><textarea id="message" name="message" required></textarea></div>
                <div class="ajax-button">
                   <div class="fa fa-check done"></div>
            	   <div class="fa fa-close failed"></div>
                   <input id="submit" type="submit" value="Send It">
                </div>
                <div id="form-messages"></div>
            </div>
        </form>
        {/if}
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

<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.validate.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/modernizr-custom.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/slick.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/createjs.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/logo.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>

{$footeroutput}

</body>
</html>
