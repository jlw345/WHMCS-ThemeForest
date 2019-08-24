
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








<!--
*******************
FOOTER
*******************
-->
<footer id="footer" class="footer">
  <img class="logo-bg logo-footer" src="{$WEB_ROOT}/templates/{$template}/assets/img/symbol.svg" alt="symbol">
  <div class="container">
    <div class="footer-top">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
          <div class="heading">Hosting</div>
          <ul class="footer-menu classic">
            <li class="menu-item"><a href="http://inebur.com/antler/template/hosting">Shared Hosting</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/dedicated">Dedicated Server</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/vps">Cloud Virtual (VPS)</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/domains">Domain Names</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <div class="heading">Support</div>
          <ul class="footer-menu classic">
            <li class="menu-item"><a href="http://inebur.com/antler/template/login">myAntler</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/knowledgebase-list">Knowledge Base</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/contact">Contact Us</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/faq">FAQ</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <div class="heading">Company</div>
          <ul class="footer-menu classic">
            <li class="menu-item"><a href="http://inebur.com/antler/template/about">About Us</a> </li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/elements">Features</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/blog">Blog</a></li>
            <li class="menu-item"><a href="http://inebur.com/antler/template/legal">Legal</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <a><img class="svg logo-footer" src="{$WEB_ROOT}/templates/{$template}/assets/img/logo.svg" alt="logo"></a>
          <div class="copyrigh">©2019 Antler - All rights reserved</div>
          <div class="soc-icons">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="subcribe news">
    <div class="container">
      <div class="row">
        <form action="#" class="w-100">
          <div class="col-md-6 col-md-offset-3">
            <div class="general-input">
              <input type="email" name="email" placeholder="Enter your email address" class="fill-input">
              <input type="submit" value="SUBSCRIBE" class="btn-subscribe btn-default-yellow-fill">
            </div>
          </div>
          <div class="col-md-6 col-md-offset-3 text-center pt-4">
            <p>Subscribe to our newsletter to receive news and updates</p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <ul class="footer-menu">
            <li class="menu-item by c-grey ml-0">Hybrid Design With ♥ by
              <a href="http://inebur.com/" target="_blank">inebur</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-6">
          <ul class="payment-list">
            <li><p>Payments We Accept</p></li>
            <li><i class="fab fa-cc-paypal"></i></li>
            <li><i class="fab fa-cc-visa"></i></li>
            <li><i class="fab fa-cc-mastercard"></i></li>
            <li><i class="fab fa-cc-apple-pay"></i></li>
            <li><i class="fab fa-cc-discover"></i></li>
            <li><i class="fab fa-cc-amazon-pay"></i></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>


















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

{$footeroutput}

</body>
</html>
